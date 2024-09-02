<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\User;
use Illuminate\Http\Request;

class OrdersController extends Controller
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
    public function edit($id)
    {
        $order = Order::findOrFail($id);
        return view('orders.edit')->with(['order' => $order]);
    }

    // Update the specified order in storage
    public function update(Request $request, $id)
    {
        $order = Order::findOrFail($id);

        // Validate the request data
        $request->validate([
            'academic_level' => 'required|string|max:255',
            'subject' => 'required|string|max:255',
            'writer' => 'required|string|max:255',
            'topic' => 'required|string|max:1000',
            'type_of_paper' => 'required|string|max:255',
            'number_of_words' => 'required|string|max:255',
            'number_of_pages' => 'required|string|max:255',
            'citation_style' => 'required|string|max:255',
            'number_of_sources' => 'required|string|max:255',
            'delivery_time' => 'required|string|max:255',
            'paper_description' => 'required|string',
            'order_status' => 'required|string|max:255',
            'payment_status' => 'required|string|max:255',
            'actual_price' => 'required|string|max:255',
            'discounted_price' => 'required|string|max:255',
            'final_price' => 'required|string|max:255',
            // Add validation for other fields as needed
        ]);

        // Update the order with the validated data
        $order->update($request->all());
        session()->flash('success', 'Order updated successfully.');

        return redirect()->route('orders.index')->with('success', 'Order updated successfully.');
    }
    
    // Remove the specified order from storage
    public function destroy(Order $order)
    {
        try {
            $order->delete(); // Soft delete
    
            // Set a success flash message
            session()->flash('success', 'Order deleted successfully.');
        } catch (\Exception $e) {
            // Set an error flash message if deletion fails
            session()->flash('error', 'Failed to delete the order. Please try again.');
        }
        session()->flash('success', 'Order deleteded successfully.');
        return redirect()->route('orders.index');
    }
}
