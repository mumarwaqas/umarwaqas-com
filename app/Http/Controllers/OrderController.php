<?php

namespace App\Http\Controllers;

use App\Mail\TestEmail;
use App\Models\Page;
use App\Models\Profile;
use App\Models\User;
use App\Models\Order;

use App\Mail\OrderCreated;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // Mail::to('developerflh@gmail.com')->send(new TestEmail());
        // return 'Email sent!';
        $page = Page::where('slug', 'order-now')->firstOrFail();

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
        return view('webpage.order-now')->with(['meta' => $meta]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validate the request
        $validator = Validator::make($request->all(), [
            'name'              => 'nullable|string',
            'email'             => 'required|email',
            'phone'             => 'required',
            'academic_level'    => 'required',
            'subject'           => 'required',
            'writer'            => 'nullable',
            'topic'             => 'required',
            'type_of_paper'     => 'required',
            'number_of_words'   => 'required',
            'number_of_pages'   => 'required',
            'citation_style'    => 'required',
            'number_of_sources' => 'required',
            'delivery_time'     => 'required',
            'paper_description' => 'nullable',
            // 'order_status'      => 'required',
            // 'payment_status'    => 'required',
            'attachment'        => 'nullable',
            'actual_price'      => 'required',
            'discounted_price'  => 'required',
            'final_price'       => 'required',
        ]);
    
        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422);
        }
    
        $user = User::firstOrCreate (
            [
                'email' => $request->input('email')
            ],
            [
                'name'              => strip_tags($request->input('name')),
                'password'          => Hash::make($request->input('password')),
                'token'             => Str::random(64),
                'signup_ip_address' => $request->ip(),
                'activated'         => true,
            ]
        );
    
        // Create the profile
        $profile = Profile::firstOrCreate (
            [
                'user_id'   => $user->id,
            ],
            [
                'phone'     => $request->input('phone')
            ]
        );

    
        // Generate a custom order ID
        $lastOrder  = Order::latest('id')->first();
        $newOrderId = 'TAP-' . str_pad($lastOrder ? ($lastOrder->id + 1) : 1, 7, '0', STR_PAD_LEFT);
    
        // Create the order
        $order = new Order($request->all());
        $order->user_id     = $user->id;
        $order->order_no    = $newOrderId;
        $order->source      = url('/');
        $order->attachment  = $request->input('attachment');
        $order->user_ip     = $request->ip();
        $order->user_agent  = $request->header('User-Agent');
        $order->save();
        // Eager load the user and profile relationships
        $order->load('user', 'profile');

        // Send email
        Mail::to($user->email)->send(new OrderCreated($order));
        // Mail::to('developerflh@gmail.com')->send(new OrderCreated($order));

        return redirect()->back()->with('success', 'Thank you! Your order details have been sent. Please check your email for further information.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    /**
     * Upload file in storage.
     */
    public function upload(Request $request)
    {
        // Validate the files
        $request->validate([
            'upload_file.*' => 'required|file|mimes:jpeg,jpg,png,gif,pdf,avi,mp4,mov,doc,docx,odt,xls,xlsx,ods,ppt,pptx,txt|max:20480', // Max 20MB
        ]);

        $filePaths = [];
        if ($request->hasFile('upload_file')) {

            // Assuming you're in a controller method and $request is the incoming request
            $file = $request->file('upload_file');

            // Ensure the 'uploads' directory exists
            $uploadPath = 'order-files';
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
            $relativePath = $uploadPath . '/' . $fileName;
        
            // If you need the absolute path
            $absolutePath = public_path($relativePath);

            return $relativePath;
            // return response()->json(['success' => true, 'file_path' => $fullPath]);
        }
        else {
            return response()->json(['success' => false, 'message' => 'No files uploaded.'], 400);
        }
    }

}
