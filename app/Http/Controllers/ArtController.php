<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Artwork;
use Illuminate\Support\Facades\Log;

class ArtController extends Controller
{
    public function store(Request $request)
    {
        // Validation
        $request->validate([
            'art_image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'description' => 'required|string',
            'price' => 'required|numeric',
        ]);

        try {
            // Upload Image
            $imageName = time().'.'.$request->art_image->extension();
            $request->art_image->move(public_path('images'), $imageName);

            // Create Artwork
            Artwork::create([
                'image_path' => $imageName,
                'description' => $request->description,
                'price' => $request->price,
            ]);

            return redirect()->back()->with('success', 'Art uploaded successfully!');
        } catch (\Exception $e) {
            // Log the error
            Log::error('Art upload failed: ' . $e->getMessage());

            return redirect()->back()->with('error', 'Failed to upload art, please try again.');
        }
    }
}
