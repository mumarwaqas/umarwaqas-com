<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\User;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    // Display a list of orders
    public function index()
    {
        $orders = Order::orderBy('id', 'desc')->with(['user', 'profile'])->paginate(10);
        return view('orders.index')->with(['orders' => $orders]);
    }

    // Show the form for creating a new order
    public function create()
    {
        return view('orders.create');
    }

    // Store a newly created order in storage
    public function store(Request $request)
    {
        $request->validate([
            // Add validation rules here
        ]);

        Order::create($request->all());
        return redirect()->route('orders.index');
    }

    // Display the specified order
    public function show(Request $request, $id)
    {
        $order = Order::findOrFail($id);
        return view('orders.show')->with(['order' => $order]);
    }

    // Show the form for editing the specified order
    public function edit(Order $order)
    {
        $orders = Order::orderBy('id', 'asc')->with(['user', 'profile'])->paginate(10);
        return view('orders.edit', compact('orders'));
    }

    // Update the specified order in storage
    public function update(Request $request, Order $order)
    {
        $request->validate([
            // Add validation rules here
        ]);

        $order->update($request->all());
        return redirect()->route('orders.index');
    }

    // Remove the specified order from storage
    public function destroy(Order $order)
    {
        $order->delete();
        return redirect()->route('orders.index');
    }
}
