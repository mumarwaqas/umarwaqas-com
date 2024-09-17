<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\ThemeOption;

class ThemeOptionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $basics = [
            "logo"=> "logo.jpg",
            "title" => "Umar <span class='text-primary'>Waqas</span>",        
            'name' => 'Umar Waqas',
            'fullname' => 'Umar Waqas',
            'image' => 'Web-Developer-in-Lahore.jpg',
            'label' => 'WordPress Developer | Senior PHP Developer | CodeIgniter Developer | Laravel Developer',
            'experience' => '10',
            'project' => '200',
            'client' => '50',
            'email' => 'info@umarwaqas.com',
            'phone' => '+92 323 4462168',
            'website' => 'www.umarwaqas.com',
            'summary' => 'I develop and maintain web applications using WordPress, CodeIgniter, Laravel, and other technologies. I have 10 years of experience in web development and a Master\'s degree in Computer Science. I am passionate about creating engaging and interactive websites that meet the needs and expectations of the clients and the users.',
            'location' => json_encode([
                'address' => 'Bund Road',
                'postalCode' => '54000',
                'city' => 'Lahore',
                'countryCode' => '+92',
                'region' => 'Pakistan',
                'map' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d217759.99380853778!2d74.3343893!3d31.482940349999996!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39190483e58107d9%3A0xc23abe6ccc7e2462!2sLahore%2C%20Punjab!5e0!3m2!1sen!2s!4v1721213745516!5m2!1sen!2s'
            ]),
            'socials' => json_encode([
                [
                    'name' => 'LinkedIn',
                    'icon' => 'linkedIn',
                    'image' => 'https://img.icons8.com/?size=100&id=13930&format=png&color=000000',
                    'link' => 'https://www.linkedin.com/in/umar-waqas/',
                    'color' => '#553b08'
                ],
                [
                    'name' => 'Facebook',
                    'icon' => 'facebook',
                    'image' => 'https://img.icons8.com/?size=100&id=13912&format=png&color=000000',
                    'link' => 'https://www.facebook.com/umarwaqas88/',
                    'color' => '#0077B5'
                ]
            ]),
            'roles' => json_encode([
                'Software Engineer',
                'Bug Producer',
                'Open source contributor',
                'Coffee lover'
            ]),
            'works' => json_encode([
                [
                    "company" => "OutsourceNZ",
                    "position" => "Senior PHP Developer | WordPress Developer",
                    "logo" => "outsourcenz.jpeg",
                    "website" => "",
                    "startDate" => "2022-04-01",
                    "summary" => "Responsibilities: •\tDeveloping themes and plugins for WordPress requires a good understanding of the WordPress coding standards, as well as how to use the WordPress API to interact with the core functionality of the CMS. •\tA step form is a type of form that guides the user through a series of steps or pages, typically to gather information or input from the user. Step forms can be useful in a variety of contexts, such as e-commerce checkout processes, account creation forms, or survey forms. •\tIntegrating a third-party API into a WordPress theme typically involves using the API's documentation to learn how to send and receive data to and from the API, and then writing custom code in PHP or JavaScript to interact with the API from within the WordPress site. Radio and product APIs can be used to provide streaming audio or video content, or to integrate product catalogs or inventory information into an e-commerce site. •\tImporting products from a third-party API into WooCommerce typically involves using the API's documentation to learn how to access and retrieve the necessary product data, and then writing custom code in PHP to create and update the products in the WooCommerce database. •\tA Loan Calculator plugin in WordPress would typically be used to help users calculate a loan, such as the interest rate, repayment schedule, and total amount owed. Developing a loan plugin in WordPress would require a strong understanding of PHP and mathematics. •\tModifying WooCommerce to fulfill the client's requirements typically involves writing custom code in PHP to add or modify existing functionality, as well as working with the site's design and layout to ensure that the changes are visually appealing and effective.",
                    "highlights" => [],
                    "endDate" => "2023-12-01"
                ],
                [
                    "company" => "Inovedia Technologies",
                    "position" => "Senior PHP Developer | WordPress Developer",
                    "logo" => "inovedia.jpeg",
                    "website" => "",
                    "startDate" => "2021-03-01",
                    "summary" => "",
                    "highlights" => [],
                    "endDate" => "2022-04-01"
                ],
                [
                    "company" => "Rays Globals",
                    "position" => "Senior PHP Developer | WordPress Developer",
                    "logo" => "raysglobals.jpeg",
                    "website" => "",
                    "startDate" => "2018-05-01",
                    "summary" => "Responsibilities: •\tThis involves planning and designing the overall structure and layout of a website, including the pages, menus, content, and user experience. •\tThis involves building a website that allows users to search for and book hotels, flights, tours, and activities, using both WordPress and CodeIgniter to create the front-end and back-end functionality. •\tThis involves building a news website that provides timely and relevant news and information to its audience, using CodeIgniter to manage the content, user accounts, and administrative functions. •\tThis involves using WordPress to create an online store, including features such as product listings, shopping carts, payment processing, and order management. •\tThis involves customizing a WordPress theme to meet the client's branding, design, and functionality requirements, using HTML, CSS, and PHP code. •\tThis involves using CodeIgniter and Laravel, two popular PHP frameworks, to build websites and web applications, including features such as databases, user authentication, and dynamic content. •\tThis involves designing and coding custom HTML email templates for newsletters and other email communications, using tools such as Adobe Photoshop and Dreamweaver.",
                    "highlights" => [],
                    "endDate" => "2022-05-01"
                ],
                [
                    "company" => "Fast Link Solution",
                    "position" => "Senior Web Developer | CodeIgniter Developer",
                    "logo" => "FLS.jpeg",
                    "website" => "",
                    "startDate" => "2014-08-01",
                    "summary" => "Responsibilities: •\tMaintained the current website and added more features •\tUpdated website content on a daily basis •\tRedesigned sections of the website to ensure a more attractive and user friendly experience •\tDesigned and developed Restful style web services •\tCreated a Content Management System (CMS) •\tCreated custom HTML emails template for clients newsletters •\tDesigned custom graphics",
                    "highlights" => [],
                    "endDate" => "2018-04-01"
                ]
            ]),
            'educations' => json_encode([
                [
                    "institution" => "Virtual University of Pakistan",
                    "area" => "",
                    "studyType" => "Master’s Degree",
                    "startDate" => "2014-01-01",
                    "gpa" => "",
                    "courses" => [],
                    "endDate" => "2017-01-01"
                ],
                [
                    "institution" => "University of the Punjab, Lahore",
                    "area" => "",
                    "studyType" => "Bachelor’s Degree",
                    "startDate" => "2012-01-01",
                    "gpa" => "",
                    "courses" => [],
                    "endDate" => "2014-01-01"
                ]
            ]),
            'skills' => json_encode([
                [
                    "name" => "HTML",
                    "logo" => "HTML.png",
                    "level" => "",
                    "keywords" => []
                ],
                [
                    "name" => "CSS",
                    "logo" => "CSS.png",
                    "level" => "",
                    "keywords" => []
                ],
                [
                    "name" => "JavaScript",
                    "logo" => "JavaScript.png",
                    "level" => "",
                    "keywords" => []
                ],
                [
                    "name" => "jQuery",
                    "logo" => "jQuery.png",
                    "level" => "",
                    "keywords" => []
                ],
                [
                    "name" => "MySQL",
                    "logo" => "MySQL.png",
                    "level" => "",
                    "keywords" => []
                ],
                [
                    "name" => "PHP",
                    "logo" => "PHP.png",
                    "level" => "",
                    "keywords" => []
                ],
                [
                    "name" => "Bootstrap",
                    "logo" => "Bootstrap.png",
                    "level" => "",
                    "keywords" => []
                ],
                [
                    "name" => "Vue.js",
                    "logo" => "Vue.js.png",
                    "level" => "",
                    "keywords" => []
                ],
                [
                    "name" => "Node.js",
                    "logo" => "Node.js.png",
                    "level" => "",
                    "keywords" => []
                ],
                [
                    "name" => "CodeIgniter",
                    "logo" => "CodeIgniter.png",
                    "level" => "",
                    "keywords" => []
                ],
                [
                    "name" => "Laravel",
                    "logo" => "Laravel.png",
                    "level" => "",
                    "keywords" => []
                ],
                [
                    "name" => "WordPress",
                    "logo" => "WordPress.png",
                    "level" => "",
                    "keywords" => []
                ]
            ]),
            'services' => json_encode([
                [
                    "name" => "UI UX Design",
                    "image" => "ui-ux-design.svg"
                ],
                [
                    "name" => "Mobile App",
                    "image" => "mobile-app.svg"
                ],
                [
                    "name" => "Product Design",
                    "image" => "product-design.svg"
                ],
                [
                    "name" => "Branding",
                    "image" => "branding.svg"
                ],
                [
                    "name" => "Photography",
                    "image" => "photography.svg"
                ],
                [
                    "name" => "Motion Design",
                    "image" => "motion-design.svg"
                ],
                [
                    "name" => "Web Development",
                    "image" => "web-development.svg"
                ],
                [
                    "name" => "Visualization",
                    "image" => "visualization.svg"
                ]
            ]),
            'languages' => json_encode([
                ['language' => 'Urdu', 'fluency' => 'Full professional proficiency'],
                ['language' => 'Punjabi', 'fluency' => 'Full professional proficiency'],
                ['language' => 'English', 'fluency' => 'Limited working proficiency'],
            ]),
            'projects' => json_encode([
                [
                    "id" => 1,
                    "name" => "The Academic Papers UK",
                    "startDate" => "2019-06-01",
                    "summary" => "",
                    "image_thumbnail" => "theacademicpapers-thumbnail.jpg",
                    "image_full" => "theacademicpapers-full.jpg",
                    "url" => "https://www.theacademicpapers.co.uk/",
                    "endDate" => "2019-08-01"
                ],
                [
                    "id" => 2,
                    "name" => "Care Drop",
                    "startDate" => "2019-06-01",
                    "summary" => "",
                    "image_thumbnail" => "caredrop-thumbnail.jpg",
                    "image_full" => "caredrop-full.jpg",
                    "url" => "https://caredropdev.wpengine.com/",
                    "endDate" => "2019-08-01"
                ],
                [
                    "id" => 3,
                    "name" => "Oaks Property Management",
                    "startDate" => "2019-06-01",
                    "summary" => "",
                    "image_thumbnail" => "oaksproperty-thumbnail.jpg",
                    "image_full" => "oaksproperty-full.jpg",
                    "url" => "https://oaksproperty.co.nz/",
                    "endDate" => "2019-08-01"
                ],
                [
                    "id" => 4,
                    "name" => "Pixpine",
                    "startDate" => "2019-06-01",
                    "summary" => "",
                    "image_thumbnail" => "pixpine-thumbnail.jpg",
                    "image_full" => "pixpine-full.jpg",
                    "url" => "https://www.pixpine.com",
                    "endDate" => "2019-08-01"
                ]
            ]),
        ];

        foreach ($basics as $key => $value) {
            ThemeOption::create([
                'option_key' => $key,
                'option_value' => $value
            ]);
        }
    }
}

