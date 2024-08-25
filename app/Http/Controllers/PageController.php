<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\ThemeOption;

use App\Mail\ContactMail;
use Illuminate\Support\Facades\Mail;

use Illuminate\Http\Request;
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
    
        return view('pages.home')->with([
            'meta' => [
                'title' => 'High-Quality Web Development | WordPress, Laravel, CodeIgniter',
                'description' => 'Best web development and design services in Lahore with our professional team. Let us help you build a successful online platform for your business.',
                'keywords' => 'Web Development, WordPress, Laravel, CodeIgniter',
                'og' => [
                    'type' => 'website',
                    'locale' => 'en_PK',
                    'site_name' => 'Umar Waqas',
                    'url' => url()->current(),
                    'image' => asset('assets/images/Web-Developer-in-Lahore.jpg'),
                    'image_type' => 'image/jpg',
                    'description' => 'Best web development and design services in Lahore with our professional team. Let us help you build a successful online platform for your business.',
                ],
                'twitter' => [
                    'title' => 'High-Quality Web Development | WordPress, Laravel, CodeIgniter',
                    'card' => 'summary_large_image',
                    'description' => 'Best web development and design services in Lahore with our professional team. Let us help you build a successful online platform for your business.',
                    'image' => asset('assets/images/Web-Developer-in-Lahore.jpg'),
                ]
            ]
            ]);
            // ])->with($this->data);
    }

    public function about()
    {

        $data['name']       = ThemeOption::getOptionByKey('name');
        $data['summary']    = ThemeOption::getOptionByKey('summary');
        $data['experience'] = ThemeOption::getOptionByKey('experience');
        $data['project']    = ThemeOption::getOptionByKey('project');
        $data['client']     = ThemeOption::getOptionByKey('client');

        return view('pages.about')->with([
            'meta' => [
                'title' => 'Umar Waqas - Premier Web Development Services | Lahore, Pakistan',
                'description' => 'Elevate your online presence with Umar Waqas\'s web development expertise in WordPress, Laravel, and CodeIgniter.',
                'keywords' => 'Web Development, WordPress, Laravel, CodeIgniter',
                'og' => [
                    'type' => 'website',
                    'locale' => 'en_PK',
                    'site_name' => 'Umar Waqas',
                    'url' => url()->current(),
                    'image' => asset('assets/images/Web-Developer-in-Lahore.jpg'),
                    'image_type' => 'image/jpg',
                    'description' => 'Elevate your online presence with Umar Waqas\'s web development expertise in WordPress, Laravel, and CodeIgniter.',
                ],
                'twitter' => [
                    'title' => 'Umar Waqas - Premier Web Development Services | Lahore, Pakistan',
                    'card' => 'summary_large_image',
                    'description' => 'Elevate your online presence with Umar Waqas\'s web development expertise in WordPress, Laravel, and CodeIgniter.',
                    'image' => asset('assets/images/Web-Developer-in-Lahore.jpg'),
                ]
            ]
            ])->with($data);
    }

    public function services()
    {
        return view('pages.services')->with([
            'meta' => [
                'title' => 'Our Services - Web Development, Design, and Consulting',
                'description' => 'Explore our wide range of services including web development, design, and consulting. We provide top-notch solutions for your digital needs.',
                'keywords' => 'Web Development, Design, Consulting',
                'og' => [
                    'type' => 'website',
                    'locale' => 'en_PK',
                    'site_name' => 'Umar Waqas',
                    'url' => url()->current(),
                    'image' => asset('assets/images/Web-Developer-in-Lahore.jpg'),
                    'image_type' => 'image/jpg',
                    'description' => 'Explore our wide range of services including web development, design, and consulting. We provide top-notch solutions for your digital needs.',
                ],
                'twitter' => [
                    'title' => 'Umar Waqas - Premier Web Development Services | Lahore, Pakistan',
                    'card' => 'summary_large_image',
                    'description' => 'Explore our wide range of services including web development, design, and consulting. We provide top-notch solutions for your digital needs.',
                    'image' => asset('assets/images/Web-Developer-in-Lahore.jpg'),
                ]
            ]
        ]);
    }
    public function work()
    {
        return view('pages.work')->with([
            'meta' => [
                'title' => 'Our Work - Web Development Portfolio | Umar Waqas',
                'description' => 'View our portfolio showcasing web development projects completed by Umar Waqas. See our work in WordPress, Laravel, and other technologies.',
                'keywords' => 'Web Development, Portfolio, WordPress, Laravel',
                'og' => [
                    'type' => 'website',
                    'locale' => 'en_PK',
                    'site_name' => 'Umar Waqas',
                    'url' => url()->current(),
                    'image' => asset('assets/images/Web-Developer-in-Lahore.jpg'),
                    'image_type' => 'image/jpg',
                    'description' => 'View our portfolio showcasing web development projects completed by Umar Waqas. See our work in WordPress, Laravel, and other technologies.',
                ],
                'twitter' => [
                    'title' => 'Umar Waqas - Premier Web Development Services | Lahore, Pakistan',
                    'card' => 'summary_large_image',
                    'description' => 'View our portfolio showcasing web development projects completed by Umar Waqas. See our work in WordPress, Laravel, and other technologies.',
                    'image' => asset('assets/images/Web-Developer-in-Lahore.jpg'),
                ]
            ]
        ]);
    }

    public function blog()
    {
        return view('pages.blog')->with([
            'meta' => [
                'title' => 'Web Development Blog | Insights, Tips, and Trends',
                'description' => 'Stay informed with Umar Waqas\'s web development blog. Discover valuable articles, expert tips, and current web development trends.',
                'keywords' => 'Web Development, WordPress, Laravel, CodeIgniter, Tips, Trends',
                'og' => [
                    'type' => 'website',
                    'locale' => 'en_PK',
                    'site_name' => 'Umar Waqas',
                    'url' => url()->current(),
                    'image' => asset('assets/images/Web-Developer-in-Lahore.jpg'),
                    'image_type' => 'image/jpg',
                    'description' => 'Stay informed with Umar Waqas\'s web development blog. Discover valuable articles, expert tips, and current web development trends.',
                ],
                'twitter' => [
                    'title' => 'Web Development Blog | Insights, Tips, and Trends',
                    'card' => 'summary_large_image',
                    'description' => 'Stay informed with Umar Waqas\'s web development blog. Discover valuable articles, expert tips, and current web development trends.',
                    'image' => asset('assets/images/Web-Developer-in-Lahore.jpg'),
                ]
            ]
        ]);
    }

    public function contact()
    {
        $data['email']    = ThemeOption::getOptionByKey('email');
        $data['phone']    = ThemeOption::getOptionByKey('phone');
        $data['address']  = ThemeOption::getOptionByKey('address');
        $data['location'] = ThemeOption::getOptionByKey('location');

        return view('pages.contact')->with([
            'meta' => [
                'title' => 'Contact Us - Get in Touch with Umar Waqas',
                'description' => 'Contact Umar Waqas for any web development inquiries, consultations, or collaborations. We are here to assist you with your digital needs.',
                'keywords' => 'Contact, Web Development, Inquiry',
                'og' => [
                    'type' => 'website',
                    'locale' => 'en_PK',
                    'site_name' => 'Umar Waqas',
                    'url' => url()->current(),
                    'image' => asset('assets/images/Web-Developer-in-Lahore.jpg'),
                    'image_type' => 'image/jpg',
                    'description' => 'Contact Umar Waqas for any web development inquiries, consultations, or collaborations. We are here to assist you with your digital needs.',
                ],
                'twitter' => [
                    'title' => 'Umar Waqas - Premier Web Development Services | Lahore, Pakistan',
                    'card' => 'summary_large_image',
                    'description' => 'Contact Umar Waqas for any web development inquiries, consultations, or collaborations. We are here to assist you with your digital needs.',
                    'image' => asset('assets/images/Web-Developer-in-Lahore.jpg'),
                ]
            ]
        ])->with($data);
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

}
