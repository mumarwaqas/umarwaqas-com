<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Faq;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class FaqsController extends Controller
{
    // Display a list of Faq
    public function index(Request $request)
    {

        $query = Faq::query();

        if ($request->has('search')) {
            $query->where('question', 'like', '%' . $request->input('search') . '%');
        }

        $questions = $query->orderBy('id', 'desc')->paginate(10);
        return view('faqs.index')->with(['faqs' => $questions]);
    }

    // Show the form for creating a new faq
    public function create()
    {
        return view('faqs.add');
    }

    // Store a newly created Faqs in storage
    public function store(Request $request)
    {
        $request->validate([
            'question' => 'required|string|max:1000',
            'answer'   => 'required|string|max:1000',
            'user_id'  => 'required|exists:users,id',
        ]);
        
        Faq::create($request->all());
        // Flash message and redirect
        session()->flash('success', 'Faq added successfully.');
        return redirect()->route('faqs.index');
    }
    // Display the specified faq
    public function show(Request $request, $id)
    {
        $faq = Faq::findOrFail($id);
        return view('faqs.show')->with(['faq' => $faq]);
    }
    // Show the form for editing the specified faq
    public function edit($id)
    {
        $faq = Faq::findOrFail($id);
        return view('faqs.edit')->with(['faq' => $faq]);
    }

    // Update the specified faq in storage
    public function update(Request $request, $id)
    {    
        // Validate the request data
        $request->validate([
            'question' => 'required|string|max:1000',
            'answer'   => 'required|string|max:1000',
            'user_id'  => 'required|exists:users,id',
        ]);

        $faq = Faq::findOrFail($id);
        $faq->update($request->all());

        session()->flash('success', 'Faq updated successfully.');
    
        return redirect()->route('faqs.index')->with('success', 'Faq updated successfully.');
    }
    
    // Remove the specified faq from storage
    public function destroy(Faq $faq)
    {
        try {
            $faq->delete(); // Soft delete
    
            // Set a success flash message
            session()->flash('success', 'Faq deleted successfully.');
        } catch (\Exception $e) {
            // Set an error flash message if deletion fails
            session()->flash('error', 'Failed to delete the Faq. Please try again.');
        }
        session()->flash('success', 'Faq deleteded successfully.');
        return redirect()->route('faqs.index');
    }
}
