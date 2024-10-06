<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Writer;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class WritersController extends Controller
{
    // Display a list of writers
    public function index(Request $request)
    {

        $query = Writer::query();

        if ($request->has('search')) {
            $query->where('name', 'like', '%' . $request->input('search') . '%');
        }

        $writers = $query->orderBy('id', 'desc')->paginate(10);
        return view('writers.index')->with(['writers' => $writers]);
    }

    // Show the form for creating a new writer
    public function create()
    {
        return view('writers.add');
    }

    // Store a newly created writer in storage
    public function store(Request $request)
    {
        $request->validate([
            'slug'          => 'required|string|unique:writers,slug',
            'writer_no'     => 'required|string|unique:writers,writer_no',
            'image'         => 'nullable|image|mimes:jpeg,png,jpg,webp,gif|max:2048', // Optional image field
            'name'          => 'required|string|max:50',
            'about'         => 'nullable|string|max:500',
            'education'     => 'nullable|string|max:50', // Made this nullable as per your schema
            'profession'    => 'nullable|string|max:50', // Added validation for profession
            'status'        => 'nullable|string|max:50', // Added validation for status
            'experience'    => 'nullable|string|min:0', // Validating experience as an integer
            'rating'        => 'nullable|numeric|min:0|max:5',
            'review'        => 'nullable|numeric|min:0|5000', // Adjusted to reflect the schema
            'success_rate'  => 'nullable|numeric|between:0,100',
            'on_time_rate'  => 'nullable|numeric|between:0,100', // Added validation for on_time_rate
            'orders'        => 'nullable|integer|min:0',
            'delivery'      => 'nullable|string',
            'competences'   => 'nullable|string', // Changed to json validation
            'works'         => 'nullable|string', // Changed to json validation
            'subjects'      => 'nullable|string', // Added validation for subjects
            'online'        => 'nullable|string',
            'reviews'       => 'nullable|string',
            'user_id'       => 'required|exists:users,id',
        ]);

        $writer = new Writer($request->all());

        // Handle image upload
        if ($request->hasFile('image')) {

            // Assuming you're in a controller method and $request is the incoming request
            $image = $request->file('image');

            // Ensure the 'uploads' directory exists
            $uploadPath = 'writer-files';
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

            $writer->image  = $imagePath;
    
        } else {
            // Default image if none uploaded
        }
        $writer->save();

        // Writer::create($request->all());
        // Flash message and redirect
        session()->flash('success', 'Writer added successfully.');
        return redirect()->route('writers.index');

    }
    // Display the specified writer
    public function show(Request $request, $id)
    {
        $writer = Writer::findOrFail($id);
        return view('writers.show')->with(['writer' => $writer]);
    }
    // Show the form for editing the specified writer
    public function edit($id)
    {
        $writer = Writer::findOrFail($id);
        return view('writers.edit')->with(['writer' => $writer]);
    }

    // Update the specified writer in storage
    public function update(Request $request, $id)
    {
        $writer = Writer::findOrFail($id);
    
        // Validate the request data
        $request->validate([
            'slug'          => 'required|string|unique:writers,slug,' . ($writer->id ?? 'NULL'),
            'writer_no'     => 'required|string|unique:writers,writer_no,' . ($writer->id ?? 'NULL'),
            'image'         => 'nullable|image|mimes:jpeg,png,jpg,webp,gif|max:2048', // Optional image field
            'name'          => 'required|string|max:50',
            'about'         => 'nullable|string|max:500',
            'education'     => 'nullable|string|max:50', // Made this nullable as per your schema
            'profession'    => 'nullable|string|max:50', // Added validation for profession
            'status'        => 'nullable|string|max:50', // Added validation for status
            'experience'    => 'nullable|string|min:0', // Validating experience as an integer
            'rating'        => 'nullable|numeric|min:0|max:5',
            'review'        => 'nullable|numeric|min:0|max:5000', // Adjusted to reflect the schema
            'success_rate'  => 'nullable|numeric|between:0,100',
            'on_time_rate'  => 'nullable|numeric|between:0,100', // Added validation for on_time_rate
            'orders'        => 'nullable|integer|min:0',
            'delivery'      => 'nullable|string',
            'competences'   => 'nullable|string', // Changed to json validation
            'works'         => 'nullable|string', // Changed to json validation
            'subjects'      => 'nullable|string', // Added validation for subjects
            'online'        => 'nullable|string',
            'reviews'       => 'nullable|string',
            'user_id'       => 'required|exists:users,id',
        ]);
            

        // Handle image upload
        if ($request->hasFile('image')) {

            // Assuming you're in a controller method and $request is the incoming request
            $image = $request->file('image');

            // Ensure the 'uploads' directory exists
            $uploadPath = 'writer-files';
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
            $imagePath = $writer->image;
        }

        // Update the writer with the validated data
        $writer->update($request->except('image') + ['image' => $imagePath]);

        session()->flash('success', 'Writer updated successfully.');
    
        return redirect()->route('writers.index')->with('success', 'Writer updated successfully.');
    }
    
    // Remove the specified writer from storage
    public function destroy(Writer $writer)
    {
        try {
            $writer->delete(); // Soft delete
    
            // Set a success flash message
            session()->flash('success', 'Writer deleted successfully.');
        } catch (\Exception $e) {
            // Set an error flash message if deletion fails
            session()->flash('error', 'Failed to delete the writer. Please try again.');
        }
        session()->flash('success', 'Writer deleteded successfully.');
        return redirect()->route('writers.index');
    }
}
