<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function pay(Order $order)
    {
        $order->update(['status' => 'paid']);
        return static::pay($order);
    }
    // Example in OrderController.php
public function viewOrders()
{
    $orders = Order::all(); // Fetch orders as needed

    return view('orders.index', compact('orders'));
}
public function edit(Order $order)
{
    return view('orders.edit', compact('order'));
}
public function update(Request $request, Order $order)
{
    $validatedData = $request->validate([
        // Define validation rules for updating order data
    ]);

    $order->update($validatedData);

    return redirect()->route('orders.index')->with('success', 'Order updated successfully!');
}
}
