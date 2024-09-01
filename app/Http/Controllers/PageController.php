<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\Customer;
use App\Models\Faq;
use App\Models\Page;
use App\Models\ThemeOption;

use App\Mail\ContactMail;
use Illuminate\Support\Facades\Mail;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;
//use Illuminate\Support\Facades\Storage;

class PageController extends Controller
{
    // protected $data = [];

    public function __construct()
    {
        // Load ThemeOption data once for all controller methods
        // $this->data['name']       = ThemeOption::getOptionByKey('name');
        // $this->data['fullname']   = ThemeOption::getOptionByKey('fullname');
        // $this->data['image']      = ThemeOption::getOptionByKey('image');
        // $this->data['label']      = ThemeOption::getOptionByKey('label');
        // $this->data['experience'] = ThemeOption::getOptionByKey('experience');
        // $this->data['projects']   = ThemeOption::getOptionByKey('projects');
        // $this->data['works']      = ThemeOption::getOptionByKey('works');
        // $this->data['skills']     = ThemeOption::getOptionByKey('skills');
        // $this->data['educations'] = ThemeOption::getOptionByKey('educations');
        // $this->data['services']   = ThemeOption::getOptionByKey('services');
        // $this->data['client']     = ThemeOption::getOptionByKey('client');
        // $this->data['email']      = ThemeOption::getOptionByKey('email');
        // $this->data['phone']      = ThemeOption::getOptionByKey('phone');
        // $this->data['website']    = ThemeOption::getOptionByKey('website');
        // $this->data['summary']    = ThemeOption::getOptionByKey('summary');
        // $this->data['location']   = ThemeOption::getOptionByKey('location');
        // $this->data['socials']    = ThemeOption::getOptionByKey('socials');
        // $this->data['roles']      = ThemeOption::getOptionByKey('roles');
    }

    public function home()
    {
        // $json = File::get(storage_path('app/public/db.json'));
        // $data = json_decode($json, true);

        $page = Page::where('slug', 'home')->firstOrFail();
        $meta = [
                'title' => $page->meta_title,
                'description' => $page->meta_description,
                'keywords' => $page->meta_keywords,
                'canonical_url' => url()->current(),
                'robots' => $page->meta_robots,
                'og' => [
                    'type' => 'website',
                    'locale' => 'en_PK',
                    'site_name' => 'Umar Waqas',
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
        return view('pages.home')->with(['meta' => $meta]);
    }
    public function about()
    {

        $data['name']       = ThemeOption::getOptionByKey('name');
        $data['summary']    = ThemeOption::getOptionByKey('summary');
        $data['experience'] = ThemeOption::getOptionByKey('experience');
        $data['project']    = ThemeOption::getOptionByKey('project');
        $data['client']     = ThemeOption::getOptionByKey('client');

        $data['customers']  = Customer::orderBy('id', 'desc')->limit(10)->get();
        // $data['faqs']       = Faq::orderBy('id', 'desc')->limit(10)->get();

        $page = Page::where('slug', 'about')->firstOrFail();
        $meta = [
                'title' => $page->meta_title,
                'description' => $page->meta_description,
                'keywords' => $page->meta_keywords,
                'canonical_url' => url()->current(),
                'robots' => $page->meta_robots,
                'og' => [
                    'type' => 'website',
                    'locale' => 'en_PK',
                    'site_name' => 'Umar Waqas',
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
        return view('pages.about')->with(['meta' => $meta])->with($data);
    }
    public function services()
    {
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
                    'site_name' => 'Umar Waqas',
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
        return view('pages.services')->with(['meta' => $meta]);
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
                    'site_name' => 'Umar Waqas',
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
        return view('pages.work')->with(['meta' => $meta]);
    }
    public function blog()
    {
        $page = Page::where('slug', 'blog')->firstOrFail();
        $meta = [
                'title' => $page->meta_title,
                'description' => $page->meta_description,
                'keywords' => $page->meta_keywords,
                'canonical_url' => url()->current(),
                'robots' => $page->meta_robots,
                'og' => [
                    'type' => 'website',
                    'locale' => 'en_PK',
                    'site_name' => 'Umar Waqas',
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
        return view('pages.blog')->with(['meta' => $meta]);
    }
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
                    'site_name' => 'Umar Waqas',
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
        return view('pages.home')->with(['meta' => $meta])->with($data);
    }
    public function store(Request $request)
    {
        // Validate incoming data
        $validatedData = $request->validate([
            'name'    => 'required|string|max:255',
            'email'   => 'required|email|max:255',
            'phone'   => 'required|string|max:255',
            'message' => 'required|string',
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
}
