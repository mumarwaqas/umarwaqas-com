@extends('layouts.web')

@section('title')
Contact Us
@endsection

@section('head')
<!-- General Meta Tags -->
        <meta name="description" content="This is the Our Reviews page of our website.">
        <meta name="keywords" content="Our Reviews, welcome, main page">

        <!-- Open Graph Meta Tags -->
        <meta property="og:title" content="Our Reviews Page">
        <meta property="og:description" content="This is the Our Reviews page of our website.">
        <meta property="og:type" content="website">
        <meta property="og:url" content="{{ url()->current() }}">
        <meta property="og:image" content="{{ asset('images/discount-page.png') }}">

        <!-- Twitter Meta Tags -->
        <meta name="twitter:card" content="summary_large_image">
        <meta name="twitter:title" content="Our Reviews Page">
        <meta name="twitter:description" content="This is the Our Reviews page of our website.">
        <meta name="twitter:image" content="{{ asset('images/discount-page.png') }}">
        <meta name="twitter:site" content="@YourTwitterHandle">
@endsection

@section('footer_scripts')

@endsection

@section('inner_page_hero_section_title')
Contact Us
@endsection

@section('inner_page_hero_section_mini_title')
Contact Us
@endsection

@section('content')

    <!-- ===================================================== -->
    <!-- ================ hero section start ===================== -->
    @include('partials.inner-pages-hero-section')
    <!-- ================ hero section end ======================= -->
    <!-- ===================================================== -->

    <!-- ===================================================== -->
    <!-- ================ Contact section start ======================= -->
    <section id="contact-us-page-section">
        <div class="container">
            <div class="title">
                <h3>We are eager to help you</h3>
            </div>
            <div class="content">
                <p>dissertation help online always available round the clock. No matter at what time you need assignment help from us, you just have to ask us and you would be getting an instant response. Our dissertation writing service has got everything to cover what you need from us!</p>
            </div>
            <div class="contant-call-btn">
                <div class="hero-btn">
                    <a class="tranperant-bg-btn" href="tel:{{ config('settings.app_phone') }}">
                        <div class="img-container">
                            <img src="{{ asset('assets/images/call-bg-black-white.webp') }}" loading="lazy" class="img-fluid" height="26.53px" width="26.353px" alt="Call Now">
                        </div>
                        {{ config('settings.app_phone') }}
                    </a>
                    <a href="tel:{{ config('settings.app_phone') }}" class="bg-black-btn">call me your query</a>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-4">
                    <div class="contact-page-left">
                        <div class="contact-page-card">
                            <div class="img-title">
                                <div class="img-container bg-white">
                                    <img src="{{ asset('assets/images/call-bg-black-pink.webp') }}" height="32px" width="32px" loading="lazy" class="img-fluid" alt="Call Now">
                                </div>
                                <h5>Phone</h5>
                            </div>
                            <div class="content">
                                <p>Our customer care is open 24/7 Online Support</p>
                                <a href="tel:{{ config('settings.app_phone') }}">{{ config('settings.app_phone') }}</a>
                            </div>
                        </div>
                        <div class="contact-page-card">
                            <div class="img-title">
                                <div class="img-container bg-white">
                                    <img src="{{ asset('assets/images/mail-bg-white-orange.webp') }}" height="24px" width="34px" loading="lazy" class="img-fluid" alt="Mail">
                                </div>
                                <h5>Mail Address</h5>
                            </div>
                            <div class="content">
                                <p>Our support team will get back to in 24-hr during standard business hours.</p>
                                <a href="mailto:{{ config('settings.app_email') }}">{{ config('settings.app_email') }}</a>
                            </div>
                        </div>
                        <div class="contact-page-card">
                            <div class="img-title">
                                <div class="img-container bg-white">
                                    <img src="{{ asset('assets/images/location-bg-white-purple.webp') }}" alt="Location" height="33px" width="25px" loading="lazy" class="img-fluid">
                                </div>
                                <h5>Location</h5>
                            </div>
                            <div class="content">
                                <p class="contant-card-mini">{{ config('settings.app_address') }}</p>
                            </div>
                        </div>
                        <div class="contact-page-card">
                            <div class="img-title">
                                <div class="img-container bg-white">
                                    <img src="{{ asset('assets/images/working-hour-icon.webp') }}" alt="Working Hour" height="35px" width="35px" loading="lazy" class="img-fluid">
                                </div>
                                <h5>Working hours</h5>
                            </div>
                            <div class="content">
                                <p class="contant-card-mini">Mon 00:00 to Sun 23:59</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-8">
                    <div class="contact-us-form-container">
                        @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                        @endif
                        @if(session('success'))
                        <div class="status alert alert alert-success">
                            {{ session('success') }}
                        </div>
                        @endif
                        <form method="POST" action="{{ route('contact.save') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <input type="text" name="name" placeholder="Enter your full name" value="{{ old('name') }}">
                            </div>
                            <div class="form-group">
                                <input type="email" name="email" placeholder="Enter your email" value="{{ old('email') }}">
                            </div>
                            <div class="form-group">
                                <input type="text" name="subject" placeholder="Enter your subject" value="{{ old('subject') }}">
                            </div>
                            <div class="form-group">
                                <input type="file" name="file" placeholder="Choose File...">
                            </div>
                            <div class="form-group">
                                <textarea name="message" id="" rows="4" cols="5 " placeholder="Message">{{ old('message') }}</textarea>
                            </div>
                            <div class="form-group checkbox-container">
                                <label><input type="checkbox" name="Privacy" class="contant-form-checkbox"> I Agree to Terms of Use and the Privacy Policy.</label>
                            </div>
                            <div class="form-group">
                                <div class="primary-btn yellow-bg-btn">
                                    <button type="submit">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="contact-bottom-content">
                <p>Our writing service has saved over 50,000 awesome students from <br> looming deadlines – Let Us Do The Same For You !</p>
                <div class="order-btn">
                    <div class="top-nav-menu-side-btns btns-flex">
                        <div class="primary-btn yellow-bg-btn">
                            <img src="{{ asset('assets/images/order-now-icon-black.webp') }}" loading="lazy" class="img-fluid" height="25.3px" width="26.325px" alt="Live Chat">
                            <a href="{{ route('order-now') }}">Click Here to Order</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
     </section>
    <!-- ================ Contact Features section end ======================= -->
    <!-- ===================================================== -->


    <!-- ===================================================== -->
    <!-- ===============  Testimonials section start ================ -->
    @include('partials.testimonials-section')
    <!-- ===============  Testimonials section end ================ -->
    <!-- ===================================================== -->

    <!-- ===================================================== -->
    <!-- ===============  Faqs section start ================ -->
    @include('partials.faqs-section')
    <!-- ===============  Faqs section end ================ -->
    <!-- ===================================================== -->

@endsection
