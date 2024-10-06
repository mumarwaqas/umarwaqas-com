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
    public function index()
    {
        $writers = Writer::orderBy('id', 'desc')->paginate(10);
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
            // Add validation rules here
            'slug'          => 'required|string|unique:writers',
            'writer_no'     => 'required|string|unique:writers',
            'image'         => 'required|image|mimes:jpeg,png,jpg,webp,gif|max:2048',
            'name'          => 'required|string|max:50',
            'about'         => 'nullable|string|max:500',
            'education'     => 'required|string|max:50',
            'experience'    => 'nullable|string',
            'rating'        => 'nullable|numeric|min:0|max:5',
            'reviews'       => 'nullable|numeric|min:0',
            'orders'        => 'nullable|numeric|min:0',
            'success_rate'  => 'nullable|numeric|between:0,100',
            'competences'   => 'nullable|string',
            'online'        => 'nullable|boolean',
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
            'slug'          => 'required|string|unique:writers,slug,' . $writer->id,
            'writer_no'     => 'required|string|unique:writers,writer_no,' . $writer->id,
            'image'         => 'image|mimes:jpeg,png,jpg,webp,gif|max:2048',
            'about'         => 'nullable|string|max:500',
            'education'     => 'required|string|max:50',
            'experience'    => 'nullable|string',
            'rating'        => 'nullable|numeric|min:0|max:5',
            'reviews'       => 'nullable|numeric|min:0',
            'orders'        => 'nullable|numeric|min:0',
            'success_rate'  => 'nullable|numeric|between:0,100',
            'competences'   => 'nullable|string',
            'online'        => 'nullable|boolean',
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
