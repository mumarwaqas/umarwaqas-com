<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Faq;
use App\Models\Writer;
use App\Models\Customer;
use App\Models\Page;
use App\Models\PageMeta;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class PagesController extends Controller
{
    // Display a list of pages
    public function index(Request $request)
    {

        $query = Page::query();

        if ($request->has('search')) {
            $query->where('title', 'like', '%' . $request->input('search') . '%');
        }

        $pages = $query->orderBy('id', 'desc')->paginate(10);
        return view('pages.index')->with(['pages' => $pages]);
    }

    // Show the form for creating a new page
    public function create()
    {
        // $writers = Writer::all(); // Fetch all writers
        $writers = Writer::orderBy('name', 'asc')->get()->all();
        $faqs = Faq::orderBy('question', 'asc')->get()->all();
        $customers = Customer::orderBy('id', 'asc')->get()->all();
        
        return view('pages.add')->with(['writers' => $writers])->with(['faqs' => $faqs])->with(['customers' => $customers]);
    }

    // Store a newly created page in storage
    public function store(Request $request)
    {
        $request->validate([
            // Page Fields
            'title'          => 'required|string|max:255',
            'slug'           => 'required|string|unique:pages,slug',
            'image'          => 'nullable|image|mimes:jpeg,png,jpg,webp,gif|max:2048',
            'page_title'     => 'required|string|max:255',
            'content'        => 'required|string',
            'page_type'      => 'required|string',

            // SEO Fields
            'meta_title'       => 'nullable|string|min:4|max:255',
            'meta_description' => 'nullable|string|min:4|max:500',
            'meta_keywords'    => 'nullable|string|min:4|max:255',
            'canonical_url'    => 'nullable|url',
            'meta_robots'      => [
                'required',
                'string',
                'regex:/^(index|noindex)(,(follow|nofollow))*$/',         // Meta robots, required, must be a string matching 'index', 'noindex', 'follow', or 'nofollow'
            ],
            'user_id'          => 'required|exists:users,id',

            // Writer Information
            'writer_section_title' => 'nullable|string|max:255',
            'writer_section_content' => 'nullable|string',
            'Writers'         => 'nullable|array',
            'Writers.*'       => 'exists:writers,id',

            // Faq Information
            'faq_section_title' => 'nullable|string|max:255',
            'faq_section_content' => 'nullable|string',
            'faqs'         => 'nullable|array',
            'faqs.*'       => 'exists:faqs,id',

            // Customer Information
            'customer_section_title' => 'nullable|string|max:255',
            'customer_section_content' => 'nullable|string',
            'customers'         => 'nullable|array',
            'customers.*'       => 'exists:customers,id'

        ]);
    
        $page = new Page($request->except('Writers'));
    
        // Handle image upload
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $uploadPath = 'page-files';
            if (!Storage::exists($uploadPath)) {
                Storage::makeDirectory($uploadPath);
            }
            $originalName = $image->getClientOriginalName();
            $extension = $image->getClientOriginalExtension();
            $cleanFileName = Str::slug(pathinfo($originalName, PATHINFO_FILENAME)) . '-' . time() . '.' . $extension;
            $destinationPath = public_path($uploadPath);
            $filePaths = $image->move($destinationPath, $cleanFileName);
            $fileName = $filePaths->getFilename();
            $imagePath = $uploadPath . '/' . $fileName;
            $page->image = $imagePath;
        }
    
        $page->save();
    
        // Store all writer information
        if ($request->has('writers')) {
            $writers = implode(',', $request->input('writers'));
            PageMeta::updateOrCreate(
                ['page_id' => $page->id, 'meta_key' => 'writers'],
                ['meta_value' => $writers]
            );
        }
        if ($request->has('writer_section_title')) {
            PageMeta::updateOrCreate(
                ['page_id' => $page->id, 'meta_key' => 'writer_section_title'],
                ['meta_value' => $request->input('writer_section_title')]
            );
        }
        if ($request->has('writer_section_content')) {
            PageMeta::updateOrCreate(
                ['page_id' => $page->id, 'meta_key' => 'writer_section_content'],
                ['meta_value' => $request->input('writer_section_content')]
            );
        }


        // Store all faqs information
        if ($request->has('faqs')) {
            $faqs = implode(',', $request->input('faqs'));
            PageMeta::updateOrCreate(
                ['page_id' => $page->id, 'meta_key' => 'faqs'],
                ['meta_value' => $faqs]
            );
        }
        if ($request->has('faq_section_title')) {
            PageMeta::updateOrCreate(
                ['page_id' => $page->id, 'meta_key' => 'faq_section_title'],
                ['meta_value' => $request->input('faq_section_title')]
            );
        }
        if ($request->has('faq_section_content')) {
            PageMeta::updateOrCreate(
                ['page_id' => $page->id, 'meta_key' => 'faq_section_content'],
                ['meta_value' => $request->input('faq_section_content')]
            );
        }

        // Store all customers information
        if ($request->has('customers')) {
            $customers = implode(',', $request->input('customers'));
            PageMeta::updateOrCreate(
                ['page_id' => $page->id, 'meta_key' => 'customers'],
                ['meta_value' => $customers]
            );
        }
        if ($request->has('customer_section_title')) {
            PageMeta::updateOrCreate(
                ['page_id' => $page->id, 'meta_key' => 'customer_section_title'],
                ['meta_value' => $request->input('customer_section_title')]
            );
        }
        if ($request->has('customer_section_content')) {
            PageMeta::updateOrCreate(
                ['page_id' => $page->id, 'meta_key' => 'customer_section_content'],
                ['meta_value' => $request->input('customer_section_content')]
            );
        }


        // Generate the URL for the edit page
        $editUrl = route('pages.edit', [$page->id]);

        // Flash the success message with a clickable link
        session()->flash('success', 'Page added successfully. Name: ' . $page->title . ' - <a href="' . $editUrl . '">Edit this page</a>');

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
        $page = Page::with(['pageMeta'])->findOrFail($id);
        $writers = Writer::orderBy('name', 'asc')->get();
        $faqs = Faq::orderBy('question', 'asc')->get();
        $customers = Customer::orderBy('id', 'asc')->get()->all();
        
        return view('pages.edit')->with(['page' => $page])->with(['writers' => $writers])->with(['faqs' => $faqs])->with(['customers' => $customers]);
    }

    // Update the specified page in storage
    public function update(Request $request, $id)
    {
        $page = Page::findOrFail($id);
        
        // Validate the request data
        $request->validate([
            // Page Fields
            'title'                  => 'required|string|max:255',
            'slug'                   => 'required|string|unique:pages,slug,' . $id,
            'image'                  => 'nullable|image|mimes:jpeg,png,jpg,webp,gif|max:2048',
            'page_title'             => 'required|string|max:255',
            'content'                => 'required|string',
            'page_type'              => 'required|string',
    
            // SEO Fields
            'meta_title'             => 'nullable|string|min:4|max:255',
            'meta_description'       => 'nullable|string|min:4|max:500',
            'meta_keywords'          => 'nullable|string|min:4|max:255',
            'canonical_url'          => 'nullable|url',
            'meta_robots'      => [
                'required',
                'string',
                'regex:/^(index|noindex)(,(follow|nofollow))*$/',         // Meta robots, required, must be a string matching 'index', 'noindex', 'follow', or 'nofollow'
            ],
            'user_id'          => 'required|exists:users,id',

            // Writer Information
            'writer_section_title' => 'nullable|string|max:255',
            'writer_section_content' => 'nullable|string',
            'Writers'         => 'nullable|array',
            'Writers.*'       => 'exists:writers,id',

            // Faq Information
            'faq_section_title' => 'nullable|string|max:255',
            'faq_section_content' => 'nullable|string',
            'faqs'         => 'nullable|array',
            'faqs.*'       => 'exists:faqs,id',

            // Customer Information
            'customer_section_title' => 'nullable|string|max:255',
            'customer_section_content' => 'nullable|string',
            'customers'         => 'nullable|array',
            'customers.*'       => 'exists:customers,id'

        ]);
    
        // Handle image upload
        $imagePath = $page->image; // Default image if none uploaded
    
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $uploadPath = 'page-files';
    
            if (!Storage::exists($uploadPath)) {
                Storage::makeDirectory($uploadPath);
            }
    
            $originalName = $image->getClientOriginalName();
            $extension = $image->getClientOriginalExtension();
            $cleanFileName = Str::slug(pathinfo($originalName, PATHINFO_FILENAME)) . '-' . time() . '.' . $extension;
            $destinationPath = public_path($uploadPath);
            $filePaths = $image->move($destinationPath, $cleanFileName);
            $fileName = $filePaths->getFilename();
            $imagePath = $uploadPath . '/' . $fileName;
        }
    
        // Update the page with the validated data
        $page->update($request->except('image') + ['image' => $imagePath]);
    
        if ($request->has('writers')) {
            $writers = implode(',', $request->input('writers'));
            PageMeta::updateOrCreate(
                ['page_id' => $page->id, 'meta_key' => 'writers'],
                ['meta_value' => $writers]
            );
        }    
        if ($request->has('writer_section_title') && !is_null($request->input('writer_section_title'))) {
            PageMeta::updateOrCreate(
                ['page_id' => $page->id, 'meta_key' => 'writer_section_title'],
                ['meta_value' => $request->input('writer_section_title') ?? 'Default Title'] // Set a default value or handle nulls
            );
        }
        if ($request->has('writer_section_content') && !is_null($request->input('writer_section_content'))) {
            PageMeta::updateOrCreate(
                ['page_id' => $page->id, 'meta_key' => 'writer_section_content'],
                ['meta_value' => $request->input('writer_section_content') ?? 'Default Content'] // Set a default value or handle nulls
            );
        }

        // Store or update faqs information
        if ($request->has('faqs')) {
            $faqs = implode(',', $request->input('faqs'));
            PageMeta::updateOrCreate(
                ['page_id' => $page->id, 'meta_key' => 'faqs'],
                ['meta_value' => $faqs]
            );
        }
        if ($request->has('faq_section_title') && !is_null($request->input('faq_section_title'))) {
            PageMeta::updateOrCreate(
                ['page_id' => $page->id, 'meta_key' => 'faq_section_title'],
                ['meta_value' => $request->input('faq_section_title') ?? 'Default Title'] // Set a default value or handle nulls
            );
        }
        if ($request->has('faq_section_content') && !is_null($request->input('faq_section_content'))) {
            PageMeta::updateOrCreate(
                ['page_id' => $page->id, 'meta_key' => 'faq_section_content'],
                ['meta_value' => $request->input('faq_section_content') ?? 'Default Content'] // Set a default value or handle nulls
            );
        }

        // Store or update customers information
        if ($request->has('customers')) {
            $customers = implode(',', $request->input('customers'));
            PageMeta::updateOrCreate(
                ['page_id' => $page->id, 'meta_key' => 'customers'],
                ['meta_value' => $customers]
            );
        }
        if ($request->has('customer_section_title') && !is_null($request->input('customer_section_title'))) {
            PageMeta::updateOrCreate(
                ['page_id' => $page->id, 'meta_key' => 'customer_section_title'],
                ['meta_value' => $request->input('customer_section_title') ?? 'Default Title'] // Set a default value or handle nulls
            );
        }
        if ($request->has('customer_section_content') && !is_null($request->input('customer_section_content'))) {
            PageMeta::updateOrCreate(
                ['page_id' => $page->id, 'meta_key' => 'customer_section_content'],
                ['meta_value' => $request->input('customer_section_content') ?? 'Default Content'] // Set a default value or handle nulls
            );
        }

        // Generate the URL for the edit page
        $editUrl = route('pages.edit', [$page->id]);

        // Flash the success message with a clickable link
        session()->flash('success', 'Page updated successfully. Name: ' . $page->title . ' - <a href="' . $editUrl . '">Edit this page</a>');

        return redirect()->route('pages.index');
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
