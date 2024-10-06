<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::paginate(10);

        return view("admin.post.index", compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();

        return view("admin.post.add", compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function store(Request $request)
    {
        $request->validate([
            // Post Fields
            'title'           => 'required|string|min:4|max:255',               // Title must be a string, at least 4 characters, and at most 255 characters
            'slug'            => 'required|string|unique:posts,slug',     // Slug must be unique in the 'posts' table
            'image'           => 'nullable|image|mimes:jpeg,png,jpg,webp,gif|max:2048', // Image must be a valid image file and no larger than 2MB
            'content'         => 'required|string|min:4',                      // Content must be a string, at least 4 characters, and at most 500 characters
        
            // SEO Fields
            'meta_title'      => 'required|string|min:4|max:255',                // Meta title must be a string, at least 4 characters, and at most 255 characters
            'meta_description'=> 'required|string|min:4|max:500',                // Meta description must be a string, at least 4 characters, and at most 500 characters
            'meta_keywords'   => 'required|string|min:4|max:255',                // Meta keywords must be a string, at least 4 characters, and at most 255 characters
            'canonical_url'   => 'required|url',                                 // Canonical URL must be a valid URL
            'meta_robots'     => [
                'required',
                'string',
                'regex:/^(index|noindex)(,(follow|nofollow))*$/',               // Meta robots tag must be a valid combination of 'index', 'noindex', 'follow', 'nofollow'
            ],
            'user_id'         => 'required|exists:users,id',
        ]);
        $post = new Post($request->all());

        // Handle image upload
        if ($request->hasFile('image')) {

            // Assuming you're in a controller method and $request is the incoming request
            $image = $request->file('image');

            // Ensure the 'uploads' directory exists
            $uploadPath = 'post-files';
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

            $post->image  = $imagePath;

        } else {
            // Default image if none uploaded
        }
        $post->save();

        // Post::create($request->all());
        // Flash message and redirect
        session()->flash('success', 'Post created successfully.');
        return redirect()->route('post.index');
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $categories = Category::all();
        $post = Post::find($id);

        return view("admin.post.edit", compact('categories', 'post'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $post = Post::findOrFail($id);
    
        // Validate the request data
        $request->validate([
            // Post Fields
            'title'           => 'required|string|min:4|max:255',               // Title must be a string, at least 4 characters, and at most 255 characters
            'slug'            => 'required|string|unique:posts,slug,' . $post->id,     // Slug must be unique in the 'posts' table
            'image'           => 'nullable|image|mimes:jpeg,png,jpg,webp,gif|max:2048', // Image must be a valid image file and no larger than 2MB
            'content'         => 'required|string|min:4|max:500',               // Content must be a string, at least 4 characters, and at most 500 characters
            "category_id"     => "required",

            // SEO Fields
            'meta_title'      => 'required|string|min:4|max:255',                // Meta title must be a string, at least 4 characters, and at most 255 characters
            'meta_description'=> 'required|string|min:4|max:500',                // Meta description must be a string, at least 4 characters, and at most 500 characters
            'meta_keywords'   => 'required|string|min:4|max:255',                // Meta keywords must be a string, at least 4 characters, and at most 255 characters
            'canonical_url'   => 'required|url',                                 // Canonical URL must be a valid URL
            'meta_robots'     => [
                'required',
                'string',
                'regex:/^(index|noindex)(,(follow|nofollow))*$/',               // Meta robots tag must be a valid combination of 'index', 'noindex', 'follow', 'nofollow'
            ],
            'user_id'         => 'required|exists:users,id',
        ]);    

        // Handle image upload
        if ($request->hasFile('image')) {

            // Assuming you're in a controller method and $request is the incoming request
            $image = $request->file('image');

            // Ensure the 'uploads' directory exists
            $uploadPath = 'post-files';
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
            $imagePath = $post->image;
        }

        // Update the post with the validated data
        $post->update($request->except('image') + ['image' => $imagePath]);

        session()->flash('success', 'Post updated successfully.');
    
        return redirect()->route('post.index')->with('success', 'Post updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Post::find($id)->delete();

        return redirect(route('post.index'))->with("message", "Post deleted successfully");
    }
}