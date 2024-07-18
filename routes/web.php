<?php

use App\Http\Controllers\ProfileController;
use App\Livewire\Actions\Logout;
use App\Http\Controllers\ArtController;
use App\Http\Controllers\AccountController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\OrderController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/homepage', function (){
    return view('homepage');
})->name('homepage');

Route::get('/orders/{order}/edit', [OrderController::class, 'edit'])->name('orders.edit');
Route::put('/orders/{order}', [OrderController::class, 'update'])->name('orders.update');

Route::get('/story', function(){
    return view('story');
})->name('story');

Route::get('/artworks', function(){
    return view('artworks');
})->name('artworks');

Route::get('/faqs', function(){
    return view('faqs');
})->name('faqs');

Route::get('/contact', function(){
    return view('contact');
})->name('contact');

Route::get('/account', function(){
    return view('account');
});

Route::post('/orders/{order}/pay', [OrderController::class,
 'pay'])->name('orders.pay');


Route::get('/product-detail', function(){
    return view('product-detail');
})->name('product-detail');

Route::post('/logout', Logout::class)->name('logout');
Route::post('/upload-art', [ArtController::class, 'store'])->name('artworks.store');
Route::get('/checkout', [CheckoutController::class, 'show'])->name('checkout');
Route::post('/confirm-payment', [CheckoutController::class, 'confirmPayment'])->name('confirm-payment');



Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
