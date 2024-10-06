<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Sample;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class SamplesController extends Controller
{
    // Display a list of sample
    public function index()
    {
        $samples = Sample::orderBy('id', 'desc')->paginate(10);
        return view('samples.index')->with(['samples' => $samples]);
    }

    // Show the form for creating a new sample
    public function create()
    {
        return view('samples.add');
    }

    // Store a newly created sample in storage
    public function store(Request $request)
    {
        $request->validate([
            'slug'              => 'required|string|unique:samples',
            'title'             => 'required|string|min:3|max:255',
            'content'           => 'required|string|min:3',
            'academic_level'    => 'required|string|in:A Level,O Level,Undergraduate,Graduate,Master,M.Phil,PhD',
            'type_of_paper'     => 'required|string|min:3|max:255',
            'citation_style'    => 'required|string|min:3|max:255',
            'number_of_words'   => 'required|integer|min:1',
            'number_of_pages'   => 'required|integer|min:1',
            'image'             => 'nullable|image|mimes:jpeg,png,jpg,webp,gif|max:2048',
            'meta_title'        => 'nullable|string|min:3|max:255',
            'meta_description'  => 'nullable|string|min:3|max:500',
            'meta_keywords'     => 'nullable|string|min:3|max:255',
            'canonical_url'     => 'nullable|url',
            'meta_robots'     => [
                'nullable',
                'string',
                'regex:/^(index|noindex)(,(follow|nofollow))*$/',
            ],
            'user_id'           => 'required|exists:users,id',
        ]);

        $sample = new Sample($request->all());

        // Handle image upload
        if ($request->hasFile('image')) {

            // Assuming you're in a controller method and $request is the incoming request
            $image = $request->file('image');

            // Ensure the 'uploads' directory exists
            $uploadPath = 'sample-files';
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

            $sample->image  = $imagePath;
    
        } else {
            // Default image if none uploaded
        }
        $sample->save();

        // Sample::create($request->all());
        // Flash message and redirect
        session()->flash('success', 'Sample added successfully.');
        return redirect()->route('samples.index');

    }
    // Display the specified sample
    public function show(Request $request, $id)
    {
        $sample = Sample::findOrFail($id);
        return view('samples.show')->with(['sample' => $sample]);
    }
    // Show the form for editing the specified sample
    public function edit($id)
    {
        $sample = Sample::findOrFail($id);
        return view('samples.edit')->with(['sample' => $sample]);
    }

    // Update the specified sample in storage
    public function update(Request $request, $id)
    {
        $sample = Sample::findOrFail($id);
    
        // Validate the request data
        $request->validate([
            'slug'              => 'required|string|unique:samples,slug,' . $sample->id,
            'title'             => 'required|string|min:3|max:255',
            'content'           => 'required|string|min:3',
            'academic_level'    => 'required|string|in:A Level,O Level,Undergraduate,Graduate,Master,M.Phil,PhD',
            'type_of_paper'     => 'required|string|min:3|max:255',
            'citation_style'    => 'required|string|min:3|max:255',
            'number_of_words'   => 'required|integer|min:1',
            'number_of_pages'   => 'required|integer|min:1',
            'image'             => 'nullable|image|mimes:jpeg,png,jpg,webp,gif|max:2048',
            'meta_title'        => 'nullable|string|min:3|max:255',
            'meta_description'  => 'nullable|string|min:3|max:500',
            'meta_keywords'     => 'nullable|string|min:3|max:255',
            'canonical_url'     => 'nullable|url',
            'meta_robots'     => [
                'nullable',
                'string',
                'regex:/^(index|noindex)(,(follow|nofollow))*$/',
            ],
            'user_id'           => 'required|exists:users,id',
        ]);
    

        // Handle image upload
        if ($request->hasFile('image')) {

            // Assuming you're in a controller method and $request is the incoming request
            $image = $request->file('image');

            // Ensure the 'uploads' directory exists
            $uploadPath = 'sample-files';
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
            $imagePath = $sample->image;
        }

        // Update the sample with the validated data
        $sample->update($request->except('image') + ['image' => $imagePath]);

        session()->flash('success', 'Sample updated successfully.');
    
        return redirect()->route('samples.index')->with('success', 'Sample updated successfully.');
    }
    
    // Remove the specified sample from storage
    public function destroy(Sample $sample)
    {
        try {
            $sample->delete(); // Soft delete
    
            // Set a success flash message
            session()->flash('success', 'Sample deleted successfully.');
        } catch (\Exception $e) {
            // Set an error flash message if deletion fails
            session()->flash('error', 'Failed to delete the sample. Please try again.');
        }
        session()->flash('success', 'Sample deleteded successfully.');
        return redirect()->route('samples.index');
    }
}
