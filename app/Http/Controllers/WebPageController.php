<?php

namespace App\Http\Controllers;

<<<<<<< HEAD
use App\Http\Controllers\Controller;

use App\Models\User;
use App\Models\Post;
use App\Models\Category;
use App\Models\Contact;
use App\Models\Customer;
=======
use App\Models\Contact;
use App\Models\Customer;
use App\Models\Faq;
use App\Models\Post;
>>>>>>> parent of 53ecb51 (Latest)
use App\Models\Page;
use App\Models\Sample;
use App\Models\Writer;
use App\Models\Faq;
use Illuminate\Http\Request;

use App\Mail\ContactMail;
use Illuminate\Support\Facades\Mail;

use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class WebPageController extends Controller
{
    public function home()
    {
<<<<<<< HEAD
        // Find the writer by writer_no
        $writers = Writer::orderBy('id', 'desc')->limit(5)->get();
        $samples = Sample::orderBy('id', 'desc')->limit(10)->get();
        $customers = Customer::orderBy('id', 'desc')->limit(5)->get();
        $faqs = Faq::orderBy('id', 'desc')->limit(10)->get();
        $page = Page::where('page_type', 'page')->where('slug', 'home')->with(['pageMeta'])->firstOrFail();

        $meta = [
                'page_title' => $page->page_title,
=======
        // $json = File::get(storage_path('app/public/db.json'));
        // $data = json_decode($json, true);

        $page = Page::where('slug', 'home')->firstOrFail();
        $meta = [
<<<<<<< HEAD
>>>>>>> parent of ee563be (Latest)
=======
>>>>>>> parent of ee563be (Latest)
                'title' => $page->meta_title,
                'description' => $page->meta_description,
                'keywords' => $page->meta_keywords,
                'canonical_url' => url()->current(),
                'robots' => $page->meta_robots,
                'og' => [
                    'type' => 'website',
                    'locale' => 'en_GB',
                    'site_name' => config('app.name'),
                    'url' => url()->current(),
                    'image' => $page->image ? asset($page->image) : asset('assets/images/logo.webp'),
                    'image_type' => 'image/jpg',
                    'description' => $page->meta_description,
                ],
                'twitter' => [
                    'title' => $page->meta_title,
                    'card' => 'summary_large_image',
                    'description' => $page->meta_description,
<<<<<<< HEAD
<<<<<<< HEAD
                    'image' => $page->image ? asset($page->image) : asset('assets/images/logo.webp'),
=======
=======
>>>>>>> parent of ee563be (Latest)
                    'image' => asset('assets/images/Web-Developer-in-Lahore.jpg'),
>>>>>>> parent of ee563be (Latest)
                ]
            ];
        // Pass the writer to the view
        return view('webpage.home')->with(['meta' => $meta])->with( ['page' => $page])->with(['writers' => $writers])->with(['samples' => $samples])->with(['customers' => $customers])->with(['faqs' => $faqs]);
    }
    public function about()
    {

<<<<<<< HEAD
        $writers = Writer::orderBy('id', 'desc')->limit(5)->get();
        $samples = Sample::orderBy('id', 'desc')->limit(10)->get();
        $customers = Customer::orderBy('id', 'desc')->limit(5)->get();
        $faqs = Faq::orderBy('id', 'desc')->limit(10)->get();
        $page = Page::where('page_type', 'page')->where('slug', 'about-us')->with(['pageMeta'])->firstOrFail();
=======
        $data['name']       = ThemeOption::getOptionByKey('name');
        $data['summary']    = ThemeOption::getOptionByKey('summary');
        $data['experience'] = ThemeOption::getOptionByKey('experience');
        $data['project']    = ThemeOption::getOptionByKey('project');
        $data['client']     = ThemeOption::getOptionByKey('client');

        $data['customers']  = Customer::orderBy('id', 'desc')->limit(10)->get();
        // $data['faqs']       = Faq::orderBy('id', 'desc')->limit(10)->get();
<<<<<<< HEAD
>>>>>>> parent of ee563be (Latest)

        $page = Page::where('slug', 'about')->firstOrFail();
        $meta = [
<<<<<<< HEAD
            'page_title' => $page->page_title,
            'title' => $page->meta_title,
            'description' => $page->meta_description,
            'keywords' => $page->meta_keywords,
            'canonical_url' => url()->current(),
            'robots' => $page->meta_robots,
            'og' => [
                'type' => 'website',
                'locale' => 'en_GB',
                'site_name' => config('app.name'),
                'url' => url()->current(),
                'image' => $page->image ? asset($page->image) : asset('assets/images/logo.webp'),
                'image_type' => 'image/jpg',
                'description' => $page->meta_description,
            ],
            'twitter' => [
                'title' => $page->meta_title,
                'card' => 'summary_large_image',
                'description' => $page->meta_description,
                'image' => $page->image ? asset($page->image) : asset('assets/images/logo.webp'),
            ]
        ];
        // Pass the writer to the view
        return view('webpage.about-us')->with(['meta' => $meta])->with( ['page' => $page])->with(['writers' => $writers])->with(['samples' => $samples])->with(['customers' => $customers])->with(['faqs' => $faqs]);

    }
    public function discount()
    {
        $page = Page::where('slug', 'discount')->firstOrFail();
=======
>>>>>>> parent of ee563be (Latest)

        $page = Page::where('slug', 'about')->firstOrFail();
        $meta = [
<<<<<<< HEAD
                'page_title' => $page->page_title,
=======
>>>>>>> parent of ee563be (Latest)
=======
>>>>>>> parent of ee563be (Latest)
                'title' => $page->meta_title,
                'description' => $page->meta_description,
                'keywords' => $page->meta_keywords,
                'canonical_url' => url()->current(),
                'robots' => $page->meta_robots,
                'og' => [
                    'type' => 'website',
                    'locale' => 'en_GB',
                    'site_name' => config('app.name'),
                    'url' => url()->current(),
                    'image' => $page->image ? asset($page->image) : asset('assets/images/logo.webp'),
                    'image_type' => 'image/jpg',
                    'description' => $page->meta_description,
                ],
                'twitter' => [
                    'title' => $page->meta_title,
                    'card' => 'summary_large_image',
                    'description' => $page->meta_description,
<<<<<<< HEAD
<<<<<<< HEAD
                    'image' => $page->image ? asset($page->image) : asset('assets/images/logo.webp'),
                ]
            ];
        // Pass the writer to the view
        return view('webpage.discounts')->with(['meta' => $meta])->with(['page' => $page]);
    }
    public function how_its_works()
    {
        // Find the writer by writer_no
        $writers = Writer::orderBy('id', 'desc')->limit(5)->get();
        $samples = Sample::orderBy('id', 'desc')->limit(10)->get();
        $customers = Customer::orderBy('id', 'desc')->limit(5)->get();

        $page = Page::where('slug', 'how-its-works')->firstOrFail();

        $meta = [
                'page_title' => $page->page_title,
                'title' => $page->meta_title,
                'description' => $page->meta_description,
                'keywords' => $page->meta_keywords,
                'canonical_url' => url()->current(),
                'robots' => $page->meta_robots,
                'og' => [
                    'type' => 'website',
                    'locale' => 'en_GB',
                    'site_name' => config('app.name'),
                    'url' => url()->current(),
                    'image' => $page->image ? asset($page->image) : asset('assets/images/logo.webp'),
                    'image_type' => 'image/jpg',
                    'description' => $page->meta_description,
                ],
                'twitter' => [
                    'title' => $page->meta_title,
                    'card' => 'summary_large_image',
                    'description' => $page->meta_description,
                    'image' => $page->image ? asset($page->image) : asset('assets/images/logo.webp'),
                ]
            ];
        // Pass the writer to the view
        return view('webpage.how-its-works')->with(['meta' => $meta])->with(['page' => $page])->with(['writers' => $writers])->with(['samples' => $samples])->with(['customers' => $customers]);
    }
    public function guarantees()
    {
        $customers = Customer::orderBy('id', 'desc')->limit(5)->get();
        $faqs = Faq::orderBy('id', 'desc')->limit(10)->get();
        $page = Page::where('slug', 'guarantees')->firstOrFail();

        $meta = [
                'page_title' => $page->page_title,
                'title' => $page->meta_title,
                'description' => $page->meta_description,
                'keywords' => $page->meta_keywords,
                'canonical_url' => url()->current(),
                'robots' => $page->meta_robots,
                'og' => [
                    'type' => 'website',
                    'locale' => 'en_GB',
                    'site_name' => config('app.name'),
                    'url' => url()->current(),
                    'image' => $page->image ? asset($page->image) : asset('assets/images/logo.webp'),
                    'image_type' => 'image/jpg',
                    'description' => $page->meta_description,
                ],
                'twitter' => [
                    'title' => $page->meta_title,
                    'card' => 'summary_large_image',
                    'description' => $page->meta_description,
                    'image' => $page->image ? asset($page->image) : asset('assets/images/logo.webp'),
                ]
            ];

        return view('webpage.guarantees')->with(['meta' => $meta])->with(['page' => $page])->with(['customers' => $customers])->with(['faqs' => $faqs]);
    }
    public function faqs()
    {
        // Find the writer by writer_no
        $faqs = Faq::orderBy('id', 'desc')->limit(25)->get();

        $page = Page::where('slug', 'faqs')->firstOrFail();

        $meta = [
                'page_title' => $page->page_title,
                'title' => $page->meta_title,
                'description' => $page->meta_description,
                'keywords' => $page->meta_keywords,
                'canonical_url' => url()->current(),
                'robots' => $page->meta_robots,
                'og' => [
                    'type' => 'website',
                    'locale' => 'en_GB',
                    'site_name' => config('app.name'),
                    'url' => url()->current(),
                    'image' => $page->image ? asset($page->image) : asset('assets/images/logo.webp'),
                    'image_type' => 'image/jpg',
                    'description' => $page->meta_description,
                ],
                'twitter' => [
                    'title' => $page->meta_title,
                    'card' => 'summary_large_image',
                    'description' => $page->meta_description,
=======
>>>>>>> parent of ee563be (Latest)
=======
>>>>>>> parent of ee563be (Latest)
                    'image' => asset('assets/images/Web-Developer-in-Lahore.jpg'),
                ]
            ];
        // Pass the writer to the view
        return view('webpage.faqs')->with(['meta' => $meta])->with(['page' => $page])->with(['faqs' => $faqs]);
    }
    public function writers()
    {
        $writers = Writer::orderBy('id', 'desc')->paginate(6);
        $faqs = Faq::orderBy('id', 'desc')->limit(10)->get();
        $page = Page::where('page_type', 'page')->where('slug', 'writers')->with(['pageMeta'])->firstOrFail();

        $meta = [
                'page_title' => $page->page_title,
                'title' => $page->meta_title,
                'description' => $page->meta_description,
                'keywords' => $page->meta_keywords,
                'canonical_url' => url()->current(),
                'robots' => $page->meta_robots,
                'og' => [
                    'type' => 'website',
                    'locale' => 'en_GB',
                    'site_name' => config('app.name'),
                    'url' => url()->current(),
                    'image' => $page->image ? asset($page->image) : asset('assets/images/logo.webp'),
                    'image_type' => 'image/jpg',
                    'description' => $page->meta_description,
                ],
                'twitter' => [
                    'title' => $page->meta_title,
                    'card' => 'summary_large_image',
                    'description' => $page->meta_description,
                    'image' => $page->image ? asset($page->image) : asset('assets/images/logo.webp'),
                ]
            ];
        return view('webpage.writers')->with(['meta' => $meta])->with(['page' => $page])->with('writers', $writers)->with(['faqs' => $faqs]);
    }
    public function writer($slug)
    {
        // Find the writer by slug
        $writer = Writer::where('slug', $slug)->first();

        $meta = [
                'page_title' => $writer->name,
                'title' => $writer->name,
                'description' => $writer->about,
                'keywords' => $writer->name,
                'canonical_url' => url()->current(),
                'robots' => $writer->name,
                'og' => [
                    'type' => 'website',
                    'locale' => 'en_GB',
                    'site_name' => config('app.name'),
                    'url' => url()->current(),
                    'image' => $writer->image ? asset($writer->image) : asset('assets/images/writer-tumb-1.webp'),
                    'image_type' => 'image/jpg',
                    'description' => $writer->about,
                ],
                'twitter' => [
                    'title' => $writer->name,
                    'card' => 'summary_large_image',
                    'description' => $writer->about,
                    'image' => $writer->image ? asset($writer->image) : asset('assets/images/writer-tumb-1.webp'),
                ]
            ];

        // Check if writer is found, otherwise handle not found scenario
        if (!$writer) {
            return abort(404, 'Writer not found');
        }
    
        // Pass the writer to the view
        return view('webpage.writer')->with(['meta' => $meta])->with(['writer' => $writer]);
    }
    public function reviews()
    {
        $customers = Customer::orderBy('id', 'desc')->limit(10)->get(); // Fetch all reviews from the database
        $page = Page::where('page_type', 'page')->where('slug', 'reviews')->with(['pageMeta'])->firstOrFail();
        $meta = [
                'page_title' => $page->page_title,
                'title' => $page->meta_title,
                'description' => $page->meta_description,
                'keywords' => $page->meta_keywords,
                'canonical_url' => url()->current(),
                'robots' => $page->meta_robots,
                'og' => [
                    'type' => 'website',
                    'locale' => 'en_GB',
                    'site_name' => config('app.name'),
                    'url' => url()->current(),
                    'image' => $page->image ? asset($page->image) : asset('assets/images/logo.webp'),
                    'image_type' => 'image/jpg',
                    'description' => $page->meta_description,
                ],
                'twitter' => [
                    'title' => $page->meta_title,
                    'card' => 'summary_large_image',
                    'description' => $page->meta_description,
                    'image' => $page->image ? asset($page->image) : asset('assets/images/logo.webp'),
                ]
            ];
        return view('webpage.reviews')->with(['meta' => $meta])->with(['page' => $page])->with('customers', $customers); // Pass reviews data to the view
    }
    public function samples()
    {
        // Find the writer by writer_no
        $samples = Sample::orderBy('id', 'desc')->paginate(6);

        $writers = Writer::orderBy('id', 'desc')->limit(6)->get();
        $faqs = Faq::orderBy('id', 'desc')->limit(10)->get();
        $customers = Customer::orderBy('id', 'desc')->limit(5)->get();

        $page = Page::where('page_type', 'page')->where('slug', 'samples')->with(['pageMeta'])->firstOrFail();

        $meta = [
                'page_title' => $page->page_title,
                'title' => $page->meta_title,
                'description' => $page->meta_description,
                'keywords' => $page->meta_keywords,
                'canonical_url' => url()->current(),
                'robots' => $page->meta_robots,
                'og' => [
                    'type' => 'website',
                    'locale' => 'en_GB',
                    'site_name' => config('app.name'),
                    'url' => url()->current(),
                    'image' => $page->image ? asset($page->image) : asset('assets/images/logo.webp'),
                    'image_type' => 'image/jpg',
                    'description' => $page->meta_description,
                ],
                'twitter' => [
                    'title' => $page->meta_title,
                    'card' => 'summary_large_image',
                    'description' => $page->meta_description,
                    'image' => $page->image ? asset($page->image) : asset('assets/images/logo.webp'),
                ]
            ];

        // Pass the writer to the view
        return view('webpage.samples')->with(['meta' => $meta])->with(['page' => $page])->with(['writers' => $writers])->with(['samples' => $samples])->with(['customers' => $customers])->with(['faqs' => $faqs]);
    }
    public function sample($slug)
    {
        // Find the sample by slug
        $sample = Sample::where('slug', $slug)->first();

        $writers = Writer::orderBy('id', 'desc')->limit(5)->get();
        $customers = Customer::orderBy('id', 'desc')->limit(5)->get();
        $faqs = Faq::orderBy('id', 'desc')->limit(10)->get();

        // $page = Page::where('slug', 'samples')->firstOrFail();

        $meta = [
                'page_title' => $sample->title,
                'title' => $sample->title,
                'description' => $sample->description,
                'keywords' => $sample->title,
                'canonical_url' => url()->current(),
                'robots' => $sample->title,
                'og' => [
                    'type' => 'website',
                    'locale' => 'en_GB',
                    'site_name' => config('app.name'),
                    'url' => url()->current(),
                    'image' => $sample->image ? asset($sample->image) : asset('assets/images/sample-img-yellow.webp'),
                    'image_type' => 'image/jpg',
                    'description' => $sample->description,
                ],
                'twitter' => [
                    'title' => $sample->title,
                    'card' => 'summary_large_image',
                    'description' => $sample->description,
                    'image' => $sample->image ? asset($sample->image) : asset('assets/images/sample-img-yellow.webp'),
                ]
            ];

        // Check if writer is found, otherwise handle not found scenario
        if (!$sample) {
            return abort(404, 'Sample not found');
        }
    
        // Pass the writer to the view
        return view('webpage.sample')->with(['meta' => $meta])->with(['sample' => $sample])->with(['customers' => $customers])->with(['faqs' => $faqs]);
    
    }
    public function services()
    {
<<<<<<< HEAD
<<<<<<< HEAD
        $writers = Writer::orderBy('id', 'desc')->limit(5)->get();
        $samples = Sample::orderBy('id', 'desc')->limit(10)->get();
        $customers = Customer::orderBy('id', 'desc')->limit(5)->get();
        $faqs = Faq::orderBy('id', 'desc')->limit(10)->get();
        $page = Page::where('slug', 'services')->firstOrFail();
=======
=======
>>>>>>> parent of ee563be (Latest)
        $page = Page::where('slug', 'services')->firstOrFail();
        $meta = [
                'title' => $page->meta_title,
                'description' => $page->meta_description,
                'keywords' => $page->meta_keywords,
                'canonical_url' => url()->current(),
                'robots' => $page->meta_robots,
                'og' => [
                    'type' => 'website',
                    'locale' => 'en_PK',
                    'site_name' => config('app.name'),
                    'url' => url()->current(),
                    'image' => asset('assets/images/Web-Developer-in-Lahore.jpg'),
                    'image_type' => 'image/jpg',
                    'description' => $page->meta_description,
                ],
                'twitter' => [
                    'title' => $page->meta_title,
                    'card' => 'summary_large_image',
                    'description' => $page->meta_description,
                    'image' => asset('assets/images/Web-Developer-in-Lahore.jpg'),
                ]
            ];
        return view('webpage.services')->with(['meta' => $meta]);
    }
    public function work()
    {
        $page = Page::where('slug', 'work')->firstOrFail();
        $meta = [
                'title' => $page->meta_title,
                'description' => $page->meta_description,
                'keywords' => $page->meta_keywords,
                'canonical_url' => url()->current(),
                'robots' => $page->meta_robots,
                'og' => [
                    'type' => 'website',
                    'locale' => 'en_PK',
                    'site_name' => config('app.name'),
                    'url' => url()->current(),
                    'image' => asset('assets/images/Web-Developer-in-Lahore.jpg'),
                    'image_type' => 'image/jpg',
                    'description' => $page->meta_description,
                ],
                'twitter' => [
                    'title' => $page->meta_title,
                    'card' => 'summary_large_image',
                    'description' => $page->meta_description,
                    'image' => asset('assets/images/Web-Developer-in-Lahore.jpg'),
                ]
            ];
        return view('webpage.work')->with(['meta' => $meta]);
    }
>>>>>>> parent of ee563be (Latest)

        $meta = [
                'page_title' => $page->page_title,
                'title' => $page->meta_title,
                'description' => $page->meta_description,
                'keywords' => $page->meta_keywords,
                'canonical_url' => url()->current(),
                'robots' => $page->meta_robots,
                'og' => [
                    'type' => 'website',
                    'locale' => 'en_GB',
                    'site_name' => config('app.name'),
                    'url' => url()->current(),
                    'image' => $page->image ? asset($page->image) : asset('assets/images/logo.webp'),
                    'image_type' => 'image/jpg',
                    'description' => $page->meta_description,
                ],
                'twitter' => [
                    'title' => $page->meta_title,
                    'card' => 'summary_large_image',
                    'description' => $page->meta_description,
                    'image' => $page->image ? asset($page->image) : asset('assets/images/logo.webp'),
                ]
            ];
        return view('webpage.services')->with(['meta' => $meta])->with(['writers' => $writers])->with(['samples' => $samples])->with(['customers' => $customers])->with(['faqs' => $faqs]);    
    }
    public function service($slug)
    {
        $writers = Writer::orderBy('id', 'desc')->limit(5)->get();
        $samples = Sample::orderBy('id', 'desc')->limit(10)->get();
        $customers = Customer::orderBy('id', 'desc')->limit(5)->get();
        $faqs = Faq::orderBy('id', 'desc')->limit(10)->get();

        $page = Page::where('page_type', 'service')->where('slug', $slug)->with(['pageMeta'])->firstOrFail();

        $meta = [
                'page_title' => $page->page_title,
                'title' => $page->meta_title,
                'description' => $page->meta_description,
                'keywords' => $page->meta_keywords,
                'canonical_url' => url()->current(),
                'robots' => $page->meta_robots,
                'og' => [
                    'type' => 'website',
                    'locale' => 'en_GB',
                    'site_name' => config('app.name'),
                    'url' => url()->current(),
                    'image' => $page->image ? asset($page->image) : asset('assets/images/logo.webp'),
                    'image_type' => 'image/jpg',
                    'description' => $page->meta_description,
                ],
                'twitter' => [
                    'title' => $page->meta_title,
                    'card' => 'summary_large_image',
                    'description' => $page->meta_description,
                    'image' => $page->image ? asset($page->image) : asset('assets/images/logo.webp'),
                ]
            ];
        return view('webpage.service')->with(['meta' => $meta])->with(['page' => $page])->with(['writers' => $writers])->with(['samples' => $samples])->with(['customers' => $customers])->with(['faqs' => $faqs]);
    }
    public function prices()
    {
        $writers = Writer::orderBy('id', 'desc')->limit(5)->get();
        $samples = Sample::orderBy('id', 'desc')->limit(10)->get();
        $customers = Customer::orderBy('id', 'desc')->limit(5)->get();
        $faqs = Faq::orderBy('id', 'desc')->limit(10)->get();
        $page = Page::where('slug', 'prices')->firstOrFail();
        // Path to the CSV file
        $csvPath = public_path('storage/pricing.csv');

        // Read CSV file
        $csvData = array_map('str_getcsv', file($csvPath));

        // Extract header and data
        $headers = array_shift($csvData);
        $data = $csvData;

        $meta = [
                'page_title' => $page->page_title,
                'title' => $page->meta_title,
                'description' => $page->meta_description,
                'keywords' => $page->meta_keywords,
                'canonical_url' => url()->current(),
                'robots' => $page->meta_robots,
                'og' => [
                    'type' => 'website',
                    'locale' => 'en_GB',
                    'site_name' => config('app.name'),
                    'url' => url()->current(),
                    'image' => $page->image ? asset($page->image) : asset('assets/images/logo.webp'),
                    'image_type' => 'image/jpg',
                    'description' => $page->meta_description,
                ],
                'twitter' => [
                    'title' => $page->meta_title,
                    'card' => 'summary_large_image',
                    'description' => $page->meta_description,
                    'image' => $page->image ? asset($page->image) : asset('assets/images/logo.webp'),
                ]
            ];

        // Pass the writer to the view
        return view('webpage.prices')->with(['meta' => $meta])->with(['headers' => $headers])->with(['data' => $data])->with(['writers' => $writers])->with(['samples' => $samples])->with(['customers' => $customers])->with(['faqs' => $faqs]);
    }
    public function refundpolicy()
    {
        $customers = Customer::orderBy('id', 'desc')->limit(5)->get();
        $faqs = Faq::orderBy('id', 'desc')->limit(10)->get();
        $page = Page::where('slug', 'refund-policy')->firstOrFail();
        $meta = [
                'page_title' => $page->page_title,
                'title' => $page->meta_title,
                'description' => $page->meta_description,
                'keywords' => $page->meta_keywords,
                'canonical_url' => url()->current(),
                'robots' => $page->meta_robots,
                'og' => [
                    'type' => 'website',
                    'locale' => 'en_GB',
                    'site_name' => config('app.name'),
                    'url' => url()->current(),
                    'image' => $page->image ? asset($page->image) : asset('assets/images/logo.webp'),
                    'image_type' => 'image/jpg',
                    'description' => $page->meta_description,
                ],
                'twitter' => [
                    'title' => $page->meta_title,
                    'card' => 'summary_large_image',
                    'description' => $page->meta_description,
                    'image' => $page->image ? asset($page->image) : asset('assets/images/logo.webp'),
                ]
            ];

        // Pass the writer to the view
        return view('webpage.refund-policy')->with(['meta' => $meta])->with(['page' => $page]);
    }
    public function termsandconditions()
    {
        $customers = Customer::orderBy('id', 'desc')->limit(5)->get();
        $faqs = Faq::orderBy('id', 'desc')->limit(10)->get();
        $page = Page::where('slug', 'terms-and-conditions')->firstOrFail();
        $meta = [
                'page_title' => $page->page_title,
                'title' => $page->meta_title,
                'description' => $page->meta_description,
                'keywords' => $page->meta_keywords,
                'canonical_url' => url()->current(),
                'robots' => $page->meta_robots,
                'og' => [
                    'type' => 'website',
                    'locale' => 'en_GB',
                    'site_name' => config('app.name'),
                    'url' => url()->current(),
                    'image' => $page->image ? asset($page->image) : asset('assets/images/logo.webp'),
                    'image_type' => 'image/jpg',
                    'description' => $page->meta_description,
                ],
                'twitter' => [
                    'title' => $page->meta_title,
                    'card' => 'summary_large_image',
                    'description' => $page->meta_description,
                    'image' => $page->image ? asset($page->image) : asset('assets/images/logo.webp'),
                ]
            ];

        // Pass the writer to the view
        return view('webpage.terms-and-conditions')->with(['meta' => $meta])->with(['page' => $page]);
    }
    public function fairusepolicy()
    {
        $customers = Customer::orderBy('id', 'desc')->limit(5)->get();
        $faqs = Faq::orderBy('id', 'desc')->limit(10)->get();
        $page = Page::where('slug', 'fair-use-policy')->firstOrFail();
        $meta = [
                'page_title' => $page->page_title,
                'title' => $page->meta_title,
                'description' => $page->meta_description,
                'keywords' => $page->meta_keywords,
                'canonical_url' => url()->current(),
                'robots' => $page->meta_robots,
                'og' => [
                    'type' => 'website',
                    'locale' => 'en_GB',
                    'site_name' => config('app.name'),
                    'url' => url()->current(),
                    'image' => $page->image ? asset($page->image) : asset('assets/images/logo.webp'),
                    'image_type' => 'image/jpg',
                    'description' => $page->meta_description,
                ],
                'twitter' => [
                    'title' => $page->meta_title,
                    'card' => 'summary_large_image',
                    'description' => $page->meta_description,
                    'image' => $page->image ? asset($page->image) : asset('assets/images/logo.webp'),
                ]
            ];

        // Pass the writer to the view
        return view('webpage.fair-use-policy')->with(['meta' => $meta])->with(['page' => $page]);
    }
    public function moneybackguarantee()
    {
        $customers = Customer::orderBy('id', 'desc')->limit(5)->get();
        $faqs = Faq::orderBy('id', 'desc')->limit(10)->get();
        $page = Page::where('slug', 'money-back-guarantee')->firstOrFail();
        $meta = [
                'page_title' => $page->page_title,
                'title' => $page->meta_title,
                'description' => $page->meta_description,
                'keywords' => $page->meta_keywords,
                'canonical_url' => url()->current(),
                'robots' => $page->meta_robots,
                'og' => [
                    'type' => 'website',
                    'locale' => 'en_GB',
                    'site_name' => config('app.name'),
                    'url' => url()->current(),
                    'image' => $page->image ? asset($page->image) : asset('assets/images/logo.webp'),
                    'image_type' => 'image/jpg',
                    'description' => $page->meta_description,
                ],
                'twitter' => [
                    'title' => $page->meta_title,
                    'card' => 'summary_large_image',
                    'description' => $page->meta_description,
                    'image' => $page->image ? asset($page->image) : asset('assets/images/logo.webp'),
                ]
            ];

        // Pass the writer to the view
        return view('webpage.money-back-guarantee')->with(['meta' => $meta])->with(['page' => $page]);
    }
    public function privacypolicy()
    {
        $customers = Customer::orderBy('id', 'desc')->limit(5)->get();
        $faqs = Faq::orderBy('id', 'desc')->limit(10)->get();
        $page = Page::where('slug', 'privacy-policy')->firstOrFail();
        $meta = [
                'page_title' => $page->page_title,
                'title' => $page->meta_title,
                'description' => $page->meta_description,
                'keywords' => $page->meta_keywords,
                'canonical_url' => url()->current(),
                'robots' => $page->meta_robots,
                'og' => [
                    'type' => 'website',
                    'locale' => 'en_GB',
                    'site_name' => config('app.name'),
                    'url' => url()->current(),
                    'image' => $page->image ? asset($page->image) : asset('assets/images/logo.webp'),
                    'image_type' => 'image/jpg',
                    'description' => $page->meta_description,
                ],
                'twitter' => [
                    'title' => $page->meta_title,
                    'card' => 'summary_large_image',
                    'description' => $page->meta_description,
                    'image' => $page->image ? asset($page->image) : asset('assets/images/logo.webp'),
                ]
            ];

        // Pass the writer to the view
        return view('webpage.privacy-policy')->with(['meta' => $meta])->with(['page' => $page]);
    }
    public function cookiepolicy()
    {
        $customers = Customer::orderBy('id', 'desc')->limit(5)->get();
        $faqs = Faq::orderBy('id', 'desc')->limit(10)->get();
        $page = Page::where('slug', 'cookie-policy')->firstOrFail();
        $meta = [
                'page_title' => $page->page_title,
                'title' => $page->meta_title,
                'description' => $page->meta_description,
                'keywords' => $page->meta_keywords,
                'canonical_url' => url()->current(),
                'robots' => $page->meta_robots,
                'og' => [
                    'type' => 'website',
                    'locale' => 'en_GB',
                    'site_name' => config('app.name'),
                    'url' => url()->current(),
                    'image' => $page->image ? asset($page->image) : asset('assets/images/logo.webp'),
                    'image_type' => 'image/jpg',
                    'description' => $page->meta_description,
                ],
                'twitter' => [
                    'title' => $page->meta_title,
                    'card' => 'summary_large_image',
                    'description' => $page->meta_description,
                    'image' => $page->image ? asset($page->image) : asset('assets/images/logo.webp'),
                ]
            ];

        // Pass the writer to the view
        return view('webpage.cookie-policy')->with(['meta' => $meta])->with(['page' => $page])->with(['faqs' => $faqs]);
    }
    public function contact()
    {
        $customers = Customer::orderBy('id', 'desc')->limit(5)->get();
        $faqs = Faq::orderBy('id', 'desc')->limit(10)->get();
        $page = Page::where('slug', 'contact-us')->firstOrFail();

        $meta = [
                'page_title' => $page->page_title,
                'title' => $page->meta_title,
                'description' => $page->meta_description,
                'keywords' => $page->meta_keywords,
                'canonical_url' => url()->current(),
                'robots' => $page->meta_robots,
                'og' => [
                    'type' => 'website',
                    'locale' => 'en_GB',
                    'site_name' => config('app.name'),
                    'url' => url()->current(),
                    'image' => $page->image ? asset($page->image) : asset('assets/images/logo.webp'),
                    'image_type' => 'image/jpg',
                    'description' => $page->meta_description,
                ],
                'twitter' => [
                    'title' => $page->meta_title,
                    'card' => 'summary_large_image',
                    'description' => $page->meta_description,
                    'image' => $page->image ? asset($page->image) : asset('assets/images/logo.webp'),
                ]
            ];
        return view('webpage.contact')->with(['meta' => $meta])->with(['faqs' => $faqs])->with(['customers' => $customers]);
    }
    public function save(Request $request)
    {
        // Validate incoming data
        $validatedData = $request->validate([
            'name'    => 'required|string|max:255',
            'email'   => 'required|email|max:255',
            'subject' => 'required|string|max:500', 
            'file'    => 'required|file|mimes:doc,docx,pdf,jpg,jpeg,png,gif,webp,xls,xlsx,css|max:2048',
            'message' => 'required|string',
        ]);

        // Handle image upload
        if ($request->hasFile('file')) {

            // Assuming you're in a controller method and $request is the incoming request
            $file = $request->file('file');

            // Ensure the 'uploads' directory exists
            $uploadPath = 'contact-files';
            if (!Storage::exists($uploadPath)) {
                Storage::makeDirectory($uploadPath);
            }

            // Get the original filename and extension
            $originalName = $file->getClientOriginalName();
            $extension = $file->getClientOriginalExtension();

            // Create a clean, unique filename
            $cleanFileName = Str::slug(pathinfo($originalName, PATHINFO_FILENAME)) . '-' . time() . '.' . $extension;

            // Define the destination path
            $destinationPath = public_path($uploadPath);

            // Move the file to the destination path with the clean filename
            $filePaths = $file->move($destinationPath, $cleanFileName);

            // $fullPath = $filePaths->getRealPath();
            $fileName = $filePaths->getFilename();

            // Get the relative path to the file
            $filePath = $uploadPath . '/' . $fileName;
        
        }

        // Update the writer with the validated data
        Contact::create($request->except('file') + ['file' => $filePath]);

        // Send the email
        Mail::to('umarwaqas2007@gmail.com')->send(new ContactMail($validatedData, $filePath));

        session()->flash('success', 'Message sent and email delivered successfully!');

        // Redirect back with a success message
        return redirect()->route('thank-you')->with('success', 'Message sent and email delivered successfully!');
    }
    public function showThankYou()
    {

        $meta = [
                'page_title' => 'Thank You',
                'title' => 'Thank You',
                'description' => 'Thank You',
                'keywords' => 'Thank You',
                'canonical_url' => url()->current(),
                'robots' => 'Thank You',
                'og' => [
                    'type' => 'website',
                    'locale' => 'en_GB',
                    'site_name' => config('app.name'),
                    'url' => url()->current(),
                    'image' => 'image',
                    'image_type' => 'image/jpg',
                    'description' => 'image',
                ],
                'twitter' => [
                    'title' => 'Thank You',
                    'card' => 'summary_large_image',
                    'description' => 'Thank You',
                    'image' => 'image'
                ]
            ];
        return view('webpage.thankyou')->with(['meta' => $meta]);
    }
    public function show404()
    {

        $meta = [
                'page_title' => 'Page Not found',
                'title' => 'Page Not found',
                'description' => 'Page Not found',
                'keywords' => 'Page Not found',
                'canonical_url' => url()->current(),
                'robots' => 'Page Not found',
                'og' => [
                    'type' => 'website',
                    'locale' => 'en_GB',
                    'site_name' => config('app.name'),
                    'url' => url()->current(),
                    'image' => 'image',
                    'image_type' => 'image/jpg',
                    'description' => 'image',
                ],
                'twitter' => [
                    'title' => 'Page Not found',
                    'card' => 'summary_large_image',
                    'description' => 'Page Not found',
                    'image' => 'image'
                ]
            ];
        return view('webpage.404')->with(['meta' => $meta]);
    }
    public function showThankYouPurchase()
    {

        $meta = [
                'page_title' => 'showThankYouPurchase',
                'title' => 'showThankYouPurchase',
                'description' => 'showThankYouPurchase',
                'keywords' => 'showThankYouPurchase',
                'canonical_url' => url()->current(),
                'robots' => 'showThankYouPurchase',
                'og' => [
                    'type' => 'website',
                    'locale' => 'en_GB',
                    'site_name' => config('app.name'),
                    'url' => url()->current(),
                    'image' => 'image',
                    'image_type' => 'image/jpg',
                    'description' => 'image',
                ],
                'twitter' => [
                    'title' => 'showThankYouPurchase',
                    'card' => 'summary_large_image',
                    'description' => 'showThankYouPurchase',
                    'image' => 'image',
                ]
            ];
        return view('webpage.thankyou-2')->with(['meta' => $meta]);
    }
    public function posts()
    {
        $posts = Post::latest()->with(['user', 'profile', 'category'])->paginate(6);

<<<<<<< HEAD
<<<<<<< HEAD
        // Find the writer by writer_no
        $writers = Writer::orderBy('id', 'desc')->limit(5)->get();
        // $samples = Sample::orderBy('id', 'desc')->limit(10)->get();
        $customers = Customer::orderBy('id', 'desc')->limit(5)->get();
        // $faqs = Faq::orderBy('id', 'desc')->limit(10)->get();
        $page = Page::where('slug', 'blogs')->firstOrFail();

        $meta = [
                'page_title' => $page->page_title,
=======
        $page = Page::where('slug', 'blogs')->firstOrFail();
        $meta = [
>>>>>>> parent of ee563be (Latest)
=======
        $page = Page::where('slug', 'blogs')->firstOrFail();
        $meta = [
>>>>>>> parent of ee563be (Latest)
                'title' => $page->meta_title,
                'description' => $page->meta_description,
                'keywords' => $page->meta_keywords,
                'canonical_url' => url()->current(),
                'robots' => $page->meta_robots,
                'og' => [
                    'type' => 'website',
                    'locale' => 'en_GB',
                    'site_name' => config('app.name'),
                    'url' => url()->current(),
                    'image' => $page->image ? asset($page->image) : asset('assets/images/logo.webp'),
                    'image_type' => 'image/jpg',
                    'description' => $page->meta_description,
                ],
                'twitter' => [
                    'title' => $page->meta_title,
                    'card' => 'summary_large_image',
                    'description' => $page->meta_description,
<<<<<<< HEAD
<<<<<<< HEAD
                    'image' => $page->image ? asset($page->image) : asset('assets/images/logo.webp'),
                ]
            ];
        // Pass the writer to the view
        // return view('webpage.home')->with(['meta' => $meta])->with(['writers' => $writers])->with(['samples' => $samples])->with(['customers' => $customers])->with(['faqs' => $faqs]);
        return view('webpage.posts')->with(['meta' => $meta])->with(['posts' => $posts])->with(['writers' => $writers])->with(['customers' => $customers]);
=======
=======
>>>>>>> parent of ee563be (Latest)
                    'image' => asset('assets/images/Web-Developer-in-Lahore.jpg'),
                ]
            ];
        return view('webpage.posts')->with(['meta' => $meta])->with(['posts' => $posts]);

>>>>>>> parent of ee563be (Latest)
    }
    public function post($slug)
    {
        // Find the post by slug
        $post = Post::where('slug', $slug)->with(['user', 'profile', 'category'])->first();
        $posts = Post::latest()->with(['user', 'profile', 'category'])->limit(10)->get();

        // Find the writer by writer_no
        // $writers = Writer::orderBy('id', 'desc')->limit(5)->get();
        // $samples = Sample::orderBy('id', 'desc')->limit(10)->get();
        // $customers = Customer::orderBy('id', 'desc')->limit(5)->get();
        // $faqs = Faq::orderBy('id', 'desc')->limit(10)->get();

        $meta = [
                'page_title' => $post->meta_title,
                'title' => $post->meta_title,
                'description' => $post->meta_description,
                'keywords' => $post->meta_keywords,
                'canonical_url' => url()->current(),
                'robots' => $post->meta_robots,
                'og' => [
                    'type' => 'website',
                    'locale' => 'en_GB',
                    'site_name' => config('app.name'),
                    'url' => url()->current(),
                    'image' => $post->image ? asset($post->image) : asset('assets/images/logo.webp'),
                    'image_type' => 'image/jpg',
                    'description' => $post->meta_description,
                ],
                'twitter' => [
                    'title' => $post->meta_title,
                    'card' => 'summary_large_image',
                    'description' => $post->meta_description,
                    'image' => $post->image ? asset($post->image) : asset('assets/images/logo.webp'),
                ]
            ];
        // Pass the writer to the view
        // return view('webpage.home')->with(['meta' => $meta])->with(['writers' => $writers])->with(['samples' => $samples])->with(['customers' => $customers])->with(['faqs' => $faqs]);
<<<<<<< HEAD
        return view('webpage.post')->with(['meta' => $meta])->with(['post' => $post])->with(['posts' => $posts]);
=======
        return view('webpage.post')->with(['meta' => $meta])->with(['post' => $post])->with(['relatedPosts' => $relatedPosts]);
>>>>>>> parent of 53ecb51 (Latest)
    }
    public function category($slug)
    {
        // Find the post by slug
        $category = Category::where('slug', $slug)->first();
        $posts = $category->posts()->with(['user', 'profile', 'category'])->paginate(6);
        // $post = Post::where('slug', $slug)->with(['user', 'profile', 'category'])->first();


        // Find the writer by writer_no
        // $writers = Writer::orderBy('id', 'desc')->limit(5)->get();
        // $samples = Sample::orderBy('id', 'desc')->limit(10)->get();
        // $customers = Customer::orderBy('id', 'desc')->limit(5)->get();
        // $faqs = Faq::orderBy('id', 'desc')->limit(10)->get();

        $meta = [
                'page_title' => $category->meta_title,
                'title' => $category->meta_title,
                'description' => $category->meta_description,
                'keywords' => $category->meta_keywords,
                'canonical_url' => url()->current(),
                'robots' => $category->meta_robots,
                'og' => [
                    'type' => 'website',
                    'locale' => 'en_GB',
                    'site_name' => config('app.name'),
                    'url' => url()->current(),
                    'image' => $category->image ? asset($category->image) : asset('assets/images/logo.webp'),
                    'image_type' => 'image/jpg',
                    'description' => $category->meta_description,
                ],
                'twitter' => [
                    'title' => $category->meta_title,
                    'card' => 'summary_large_image',
                    'description' => $category->meta_description,
                    'image' => $category->image ? asset($category->image) : asset('assets/images/logo.webp'),
                ]
            ];
        // Pass the writer to the view
        // return view('webpage.home')->with(['meta' => $meta])->with(['writers' => $writers])->with(['samples' => $samples])->with(['customers' => $customers])->with(['faqs' => $faqs]);
        return view('webpage.category-posts')->with(['meta' => $meta])->with(['category' => $category])->with(['posts' => $posts]);
    }
    public function author($slug)
    {
        // Find the post by slug
        $author = User::where('id', $slug)->first();
        $posts = Post::where('user_id', $slug)->with(['user', 'profile', 'category'])->paginate(6);

        // Find the writer by writer_no
        // $writers = Writer::orderBy('id', 'desc')->limit(5)->get();
        // $samples = Sample::orderBy('id', 'desc')->limit(10)->get();
        // $customers = Customer::orderBy('id', 'desc')->limit(5)->get();
        // $faqs = Faq::orderBy('id', 'desc')->limit(10)->get();

        $meta = [
                'page_title' => $author->name,
                'title' => $author->name,
                'description' => $author->name,
                'keywords' => $author->name,
                'canonical_url' => url()->current(),
                'robots' => $author->name,
                'og' => [
                    'type' => 'website',
                    'locale' => 'en_GB',
                    'site_name' => config('app.name'),
                    'url' => url()->current(),
                    'image' => $author->name ? asset($author->name) : asset('assets/images/logo.webp'),
                    'image_type' => 'image/jpg',
                    'description' => $author->name,
                ],
                'twitter' => [
                    'title' => $author->name,
                    'card' => 'summary_large_image',
                    'description' => $author->name,
                    'image' => $author->name ? asset($author->name) : asset('assets/images/logo.webp'),
                ]
            ];
        // Pass the writer to the view
        // return view('webpage.home')->with(['meta' => $meta])->with(['writers' => $writers])->with(['samples' => $samples])->with(['customers' => $customers])->with(['faqs' => $faqs]);
        return view('webpage.author-posts')->with(['meta' => $meta])->with(['author' => $author])->with(['posts' => $posts]);
    }
<<<<<<< HEAD
=======

    public function contact()
    {
        $data['email']    = ThemeOption::getOptionByKey('email');
        $data['phone']    = ThemeOption::getOptionByKey('phone');
        $data['address']  = ThemeOption::getOptionByKey('address');
        $data['location'] = ThemeOption::getOptionByKey('location');

        $page = Page::where('slug', 'contact')->firstOrFail();
        $meta = [
                'title' => $page->meta_title,
                'description' => $page->meta_description,
                'keywords' => $page->meta_robots,
                'canonical_url' => url()->current(),
                'robots' => $page->meta_robots,
                'og' => [
                    'type' => 'website',
                    'locale' => 'en_PK',
                    'site_name' => config('app.name'),
                    'url' => url()->current(),
                    'image' => asset('assets/images/Web-Developer-in-Lahore.jpg'),
                    'image_type' => 'image/jpg',
                    'description' => $page->meta_description,
                ],
                'twitter' => [
                    'title' => $page->meta_title,
                    'card' => 'summary_large_image',
                    'description' => $page->meta_description,
                    'image' => asset('assets/images/Web-Developer-in-Lahore.jpg'),
                ]
            ];
        return view('webpage.contact')->with(['meta' => $meta])->with($data);
    }
    public function store(Request $request)
    {
        // Validate incoming data
        $validatedData = $request->validate([
            'name'    => 'required|string|max:255',
            'email'   => 'required|email|max:255',
            'phone'   => 'required|string|max:255',
            'message' => 'required|string|max:1000',
        ]);

        // Store the contact message in the database
        Contact::create($validatedData);

        // Send the email
        Mail::to('info@umarwaqas.com')->send(new ContactMail($validatedData));

        // Redirect back with a success message
        return redirect()->back()->with('success', 'Message sent and email delivered successfully!');
    }
    public function exportMetaData()
    {
        // Define the pages and their meta content
        $pages = [
            [
                'title' => 'High-Quality Web Development | WordPress, Laravel, CodeIgniter',
                'slug' => 'home',
                'content' => 'Page content for home',
                'meta_title' => 'High-Quality Web Development | WordPress, Laravel, CodeIgniter',
                'meta_description' => 'Best web development and design services in Lahore with our professional team. Let us help you build a successful online platform for your business.',
                'meta_keywords' => 'Web Development, WordPress, Laravel, CodeIgniter',
                'canonical_url' => url('/'),
                'meta_robots' => 'index, follow'
            ],
            [
                'title' => 'Umar Waqas - Premier Web Development Services | Lahore, Pakistan',
                'slug' => 'about',
                'content' => 'Page content for about',
                'meta_title' => 'Umar Waqas - Premier Web Development Services | Lahore, Pakistan',
                'meta_description' => 'Elevate your online presence with Umar Waqas\'s web development expertise in WordPress, Laravel, and CodeIgniter.',
                'meta_keywords' => 'Web Development, WordPress, Laravel, CodeIgniter',
                'canonical_url' => url('/about'),
                'meta_robots' => 'index, follow'
            ],
            [
                'title' => 'Our Services - Web Development, Design, and Consulting',
                'slug' => 'services',
                'content' => 'Page content for services',
                'meta_title' => 'Our Services - Web Development, Design, and Consulting',
                'meta_description' => 'Explore our wide range of services including web development, design, and consulting. We provide top-notch solutions for your digital needs.',
                'meta_keywords' => 'Web Development, Design, Consulting',
                'canonical_url' => url('/services'),
                'meta_robots' => 'index, follow'
            ],
            [
                'title' => 'Our Work - Web Development Portfolio | Umar Waqas',
                'slug' => 'work',
                'content' => 'Page content for work',
                'meta_title' => 'Our Work - Web Development Portfolio | Umar Waqas',
                'meta_description' => 'View our portfolio showcasing web development projects completed by Umar Waqas. See our work in WordPress, Laravel, and other technologies.',
                'meta_keywords' => 'Web Development, Portfolio, WordPress, Laravel',
                'canonical_url' => url('/work'),
                'meta_robots' => 'index, follow'
            ],
            [
                'title' => 'Web Development Blog | Insights, Tips, and Trends',
                'slug' => 'blog',
                'content' => 'Page content for blog',
                'meta_title' => 'Web Development Blog | Insights, Tips, and Trends',
                'meta_description' => 'Stay informed with Umar Waqas\'s web development blog. Discover valuable articles, expert tips, and current web development trends.',
                'meta_keywords' => 'Web Development, WordPress, Laravel, CodeIgniter, Tips, Trends',
                'canonical_url' => url('/blog'),
                'meta_robots' => 'index, follow'
            ],
            [
                'title' => 'Contact Us - Get in Touch with Umar Waqas',
                'slug' => 'contact',
                'content' => 'Page content for contact',
                'meta_title' => 'Contact Us - Get in Touch with Umar Waqas',
                'meta_description' => 'Contact Umar Waqas for any web development inquiries, consultations, or collaborations. We are here to assist you with your digital needs.',
                'meta_keywords' => 'Contact, Web Development, Inquiry',
                'canonical_url' => url('/contact'),
                'meta_robots' => 'index, follow'
            ]
        ];

        // Convert data to CSV format
        $csvFileName = 'meta_data.csv';
        $headers = [
            'title', 'slug', 'content', 'meta_title', 'meta_description', 'meta_keywords', 'canonical_url', 'meta_robots'
        ];

        $handle = fopen('php://temp', 'r+');
        fputcsv($handle, $headers);

        foreach ($pages as $page) {
            fputcsv($handle, $page);
        }

        rewind($handle);
        $csvContent = stream_get_contents($handle);
        fclose($handle);

        return Response::make($csvContent, 200, [
            'Content-Type' => 'text/csv',
            'Content-Disposition' => "attachment; filename=\"$csvFileName\"",
        ]);
    }
>>>>>>> parent of ee563be (Latest)
}
