<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Customer;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class CustomersController extends Controller
{
    // Display a list of customer
    public function index(Request $request)
    {
        $query = Customer::query();

        if ($request->has('search')) {
            $query->where('name', 'like', '%' . $request->input('search') . '%');
        }
        
        $customers = $query->orderBy('id', 'desc')->paginate(10);
        return view('customers.index')->with(['customers' => $customers]);
    }

    // Show the form for creating a new customer
    public function create()
    {
        return view('customers.add');
    }

    // Store a newly created customer in storage
    public function store(Request $request)
    {
        $request->validate([
            'customer_no'      => [
                'required',
                'string',
                'unique:customers,customer_no',
                'regex:/^DM-\d{6}$/', // Matches 'DM-' followed by exactly 6 digits
            ],
            'image'            => 'required|image|mimes:jpeg,png,jpg,webp,gif|max:2048',
            'name'             => 'required|string|max:255',
            'review'           => 'required|string|max:500',
            'text'             => 'nullable|string|max:250',
            'about'            => 'nullable|string|max:500',
            'rating'           => 'required|integer|between:1,5',
            'no_of_review'     => 'required|integer|min:0',
            'date'             => 'required|date',
            'user_id'          => 'required|exists:users,id',
        ]);
        
        $customer = new Customer ($request->all());

        // Handle image upload
        if ($request->hasFile('image')) {

            // Assuming you're in a controller method and $request is the incoming request
            $image = $request->file('image');

            // Ensure the 'uploads' directory exists
            $uploadPath = 'customer-files';
            if (!Storage::exists($uploadPath)) {
                Storage::makeDirectory($uploadPath);
            }

            // Get the original filename and extension
            $originalName = $image->getClientOriginalName();
            $extension = $image->getClientOriginalExtension();

            // Create a clean, unique filename
            $cleanFileName = Str::slug(pathinfo($originalName, PATHINFO_FILENAME)) . '-' . time() . '.' . $extension;

            // Define the destination path
            $destinationPath = public_path($uploadPath);

            // Move the file to the destination path with the clean filename
            $filePaths = $image->move($destinationPath, $cleanFileName);

            // $fullPath = $filePaths->getRealPath();
            $fileName = $filePaths->getFilename();

            // Get the relative path to the file
            $imagePath = $uploadPath . '/' . $fileName;

            $customer->image  = $imagePath;
    
        } else {
            // Default image if none uploaded
        }
        $customer->save();

        // Customer::create($request->all());
        // Flash message and redirect
        session()->flash('success', 'Customer added successfully.');
        return redirect()->route('customers.index');

    }
    // Display the specified customer
    public function show(Request $request, $id)
    {
        $customer = Customer::findOrFail($id);
        return view('customers.show')->with(['customer' => $customer]);
    }
    // Show the form for editing the specified customer
    public function edit($id)
    {
        $customer = Customer::findOrFail($id);
        return view('customers.edit')->with(['customer' => $customer]);
    }

    // Update the specified customer in storage
    public function update(Request $request, $id)
    {
        $customer = Customer::findOrFail($id);
    
        // Validate the request data
        $request->validate([
            'customer_no'      => [
                'required',
                'string',
                'unique:customers,customer_no,' . ($customer->id ?? 'NULL'),
                'regex:/^DM-\d{6}$/', // Matches 'DM-' followed by exactly 6 digits
            ],
            'image'            => 'nullable|image|mimes:jpeg,png,jpg,webp,gif|max:2048',
            'name'             => 'required|string|max:255',
            'review'           => 'required|string|max:500',
            'text'             => 'nullable|string|max:250',
            'about'            => 'nullable|string|max:500',
            'rating'           => 'required|integer|between:1,5',
            'no_of_review'     => 'required|integer|min:0',
            'date'             => 'required|date',
            'user_id'          => 'required|exists:users,id',
        ]);

        // Handle image upload
        if ($request->hasFile('image')) {

            // Assuming you're in a controller method and $request is the incoming request
            $image = $request->file('image');

            // Ensure the 'uploads' directory exists
            $uploadPath = 'customer-files';
            if (!Storage::exists($uploadPath)) {
                Storage::makeDirectory($uploadPath);
            }

            // Get the original filename and extension
            $originalName = $image->getClientOriginalName();
            $extension = $image->getClientOriginalExtension();

            // Create a clean, unique filename
            $cleanFileName = Str::slug(pathinfo($originalName, PATHINFO_FILENAME)) . '-' . time() . '.' . $extension;

            // Define the destination path
            $destinationPath = public_path($uploadPath);

            // Move the file to the destination path with the clean filename
            $filePaths = $image->move($destinationPath, $cleanFileName);

            // $fullPath = $filePaths->getRealPath();
            $fileName = $filePaths->getFilename();

            // Get the relative path to the file
            $imagePath = $uploadPath . '/' . $fileName;
        
        } else {
            // Default image if none uploaded
            $imagePath = $customer->image;
        }

        // Update the customer with the validated data
        $customer->update($request->except('image') + ['image' => $imagePath]);

        session()->flash('success', 'Customer updated successfully.');
    
        return redirect()->route('customers.index')->with('success', 'Customer updated successfully.');
    }
    
    // Remove the specified customer from storage
    public function destroy(Customer $customer)
    {
        try {
            $customer->delete(); // Soft delete
    
            // Set a success flash message
            session()->flash('success', 'Customer deleted successfully.');
        } catch (\Exception $e) {
            // Set an error flash message if deletion fails
            session()->flash('error', 'Failed to delete the Customer. Please try again.');
        }
        session()->flash('success', 'Customer deleteded successfully.');
        return redirect()->route('customers.index');
    }
}
