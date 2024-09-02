<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Customer;
use App\Models\Sample;
use App\Models\Writer;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
    {
        // Find the writer by writer_no
        $writers = Writer::orderBy('id', 'desc')->limit(5)->get();
        $samples = Sample::orderBy('id', 'desc')->limit(10)->get();
        $customers = Customer::orderBy('id', 'desc')->limit(5)->get();

        // Pass the writer to the view
        return view('pages.home')->with(['writers' => $writers])->with(['samples' => $samples])->with(['customers' => $customers]);
    }

    public function about()
    {
        return view('pages.about-us');
    }

    public function discount()
    {
        return view('pages.discounts');
    }

    public function how_its_works()
    {
        // Find the writer by writer_no
        $writers = Writer::orderBy('id', 'desc')->limit(5)->get();
        $samples = Sample::orderBy('id', 'desc')->limit(10)->get();
        $customers = Customer::orderBy('id', 'desc')->limit(5)->get();

        return view('pages.how-its-works')->with(['writers' => $writers])->with(['samples' => $samples])->with(['customers' => $customers]);
    }

    public function guarantees()
    {
        return view('pages.guarantees');
    }

    public function contact()
    {
        return view('pages.contact');
    }

    public function writers()
    {
        $writers = Writer::all(); // Fetch all writers from the database
        return view('pages.writers')->with('writers', $writers); // Pass writers data to the view
    }
    public function writer($slug)
    {
        // Find the writer by slug
        $writer = Writer::where('slug', $slug)->first();
    
        // Check if writer is found, otherwise handle not found scenario
        if (!$writer) {
            return abort(404, 'Writer not found');
        }
    
        // Pass the writer to the view
        return view('pages.writer')->with(['writer' => $writer]);
    }
    public function reviews()
    {
        $customers = Customer::orderBy('id', 'desc')->limit(10)->get(); // Fetch all reviews from the database
        return view('pages.reviews')->with('customers', $customers); // Pass reviews data to the view
    }
    public function samples()
    {
        // Find the writer by writer_no
        $writers = Writer::orderBy('id', 'desc')->limit(5)->get();
        $samples = Sample::orderBy('id', 'desc')->paginate(10);
        $customers = Customer::orderBy('id', 'desc')->limit(5)->get();

        // Pass the writer to the view
        return view('pages.samples')->with(['writers' => $writers])->with(['samples' => $samples])->with(['customers' => $customers]);
    }
    public function sample($slug)
    {
        // Find the sample by slug
        $sample = Sample::where('slug', $slug)->first();
        $writers = Writer::orderBy('id', 'desc')->limit(5)->get();
        $customers = Customer::orderBy('id', 'desc')->limit(5)->get();
    
        // Check if writer is found, otherwise handle not found scenario
        if (!$sample) {
            return abort(404, 'Sample not found');
        }
    
        // Pass the writer to the view
        return view('pages.sample')->with(['writers' => $writers])->with(['sample' => $sample])->with(['customers' => $customers]);
    
    }
    public function services()
    {
        return view('pages.services');
    }

}
