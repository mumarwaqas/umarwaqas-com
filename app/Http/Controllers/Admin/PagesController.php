<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Writer;
use App\Models\Page;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class PagesController extends Controller
{
    // Display a list of pages
    public function index()
    {
        $pages = Page::orderBy('id', 'desc')->paginate(10);
        return view('pages.index')->with(['pages' => $pages]);
    }

    // Show the form for creating a new page
    public function create()
    {
        return view('pages.add');
    }

    // Store a newly created page in storage
    public function store(Request $request)
    {
        $request->validate([
            // Page Fields
            'title'          => 'required|string|max:255',                // Page title, max length of 255 characters
            'slug'           => 'required|string|unique:pages,slug',     // URL slug, unique in the 'pages' table
            'image'          => 'nullable|image|mimes:jpeg,png,jpg,webp,gif|max:2048', // Image file, optional
            'content'        => 'nullable|string',                         // Page content, optional
        
            // SEO Fields
            'meta_title'     => 'nullable|string|max:255',                // Meta title for SEO, optional, max length of 255 characters
            'meta_description'=> 'nullable|string|max:500',               // Meta description for SEO, optional, max length of 500 characters
            'meta_keywords'  => 'nullable|string|max:255',                // Meta keywords for SEO, optional, max length of 255 characters
            'canonical_url'  => 'nullable|url',                           // Canonical URL for SEO, optional, must be a valid URL
            'meta_robots'    => 'nullable|string|in:index,follow,noindex,nofollow', // Meta robots tag, optional, must be one of the specified values
        ]);        

        $page = new Page($request->all());

        // Handle image upload
        if ($request->hasFile('image')) {

            // Assuming you're in a controller method and $request is the incoming request
            $image = $request->file('image');

            // Ensure the 'uploads' directory exists
            $uploadPath = 'page-files';
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

            $page->image  = $imagePath;
    
        } else {
            // Default image if none uploaded
        }
        $page->save();

        // Page::create($request->all());
        // Flash message and redirect
        session()->flash('success', 'Page added successfully.');
        return redirect()->route('pages.index');

    }
    // Display the specified page
    public function show(Request $request, $id)
    {
        $page = Page::findOrFail($id);
        return view('pages.show')->with(['page' => $page]);
    }
    // Show the form for editing the specified page
    public function edit($id)
    {
        $page = Page::findOrFail($id);
        return view('pages.edit')->with(['page' => $page]);
    }

    // Update the specified page in storage
    public function update(Request $request, $id)
    {
        $page = Page::findOrFail($id);
    
        // Validate the request data
        $request->validate([
            // Page Fields
            'title'          => 'required|string|max:255',                // Page title, max length of 255 characters
            'slug'           => 'required|string|unique:pages,slug,' . $page->id,     // URL slug, unique in the 'pages' table
            'image'          => 'nullable|image|mimes:jpeg,png,jpg,webp,gif|max:2048', // Image file, optional
            'content'        => 'nullable|string',                         // Page content, optional
        
            // SEO Fields
            'meta_title'     => 'nullable|string|max:255',                // Meta title for SEO, optional, max length of 255 characters
            'meta_description'=> 'nullable|string|max:500',               // Meta description for SEO, optional, max length of 500 characters
            'meta_keywords'  => 'nullable|string|max:255',                // Meta keywords for SEO, optional, max length of 255 characters
            'canonical_url'  => 'nullable|url',                           // Canonical URL for SEO, optional, must be a valid URL
            'meta_robots'    => 'nullable|string|in:index,follow,noindex,nofollow', // Meta robots tag, optional, must be one of the specified values
        ]);
    

        // Handle image upload
        if ($request->hasFile('image')) {

            // Assuming you're in a controller method and $request is the incoming request
            $image = $request->file('image');

            // Ensure the 'uploads' directory exists
            $uploadPath = 'page-files';
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
            $imagePath = $page->image;
        }

        // Update the page with the validated data
        $page->update($request->except('image') + ['image' => $imagePath]);

        session()->flash('success', 'Page updated successfully.');
    
        return redirect()->route('pages.index')->with('success', 'Page updated successfully.');
    }
    
    // Remove the specified page from storage
    public function destroy(Page $page)
    {
        try {
            $page->delete(); // Soft delete
    
            // Set a success flash message
            session()->flash('success', 'Page deleted successfully.');
        } catch (\Exception $e) {
            // Set an error flash message if deletion fails
            session()->flash('error', 'Failed to delete the page. Please try again.');
        }
        session()->flash('success', 'Page deleteded successfully.');
        return redirect()->route('pages.index');
    }
}
