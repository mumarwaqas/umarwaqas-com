@extends('layouts.web')

@section('title')
Our Services
@endsection

@section('head')
<!-- General Meta Tags -->
        <meta name="description" content="This is the home page of our website.">
        <meta name="keywords" content="home, welcome, main page">

        <!-- Open Graph Meta Tags -->
        <meta property="og:title" content="Home Page">
        <meta property="og:description" content="This is the home page of our website.">
        <meta property="og:type" content="website">
        <meta property="og:url" content="{{ url()->current() }}">
        <meta property="og:image" content="{{ asset('images/home-page.png') }}">

        <!-- Twitter Meta Tags -->
        <meta name="twitter:card" content="summary_large_image">
        <meta name="twitter:title" content="Home Page">
        <meta name="twitter:description" content="This is the home page of our website.">
        <meta name="twitter:image" content="{{ asset('images/home-page.png') }}">
        <meta name="twitter:site" content="@YourTwitterHandle">
@endsection

@section('footer_scripts')

@endsection

@section('inner_page_hero_section_title')
@endsection

@section('inner_page_hero_section_mini_title')
@endsection

@section('content')

    <!-- ===================================================== -->
    <!-- ================ hero section start ===================== -->
    @include('partials.inner-pages-hero-section')
    <!-- ================ hero section end ======================= -->
    <!-- ===================================================== -->

    <!-- ===================================================== -->
    <!-- =============== Professional Dissertation Help section start ================ -->
    <section id="professional-dissertation-help">
        <div class="container">
            <div class="mini-title">
                <div class="circle-bg circle-yellow-bg"></div>
                <p>Our Services</p>
            </div>
            <div class="title">
                <h3>Professional Dissertation Help In UK To All Academic Levels!</h3>
            </div>
            <div class="content">
                <p>Our dissertation help online can be your ultimate way towards academic success! Have a look at the salient features <br> that comes along we have successfully helped thousands of students from different disciplines write our cheap <br> assignment services:</p>
            </div>
            <div class="row">
                <div class="col-md-6 col-xl-3">
                    <div class="help-card card-sky-blue">
                        <div class="help-card-img">
                            <img src="{{ asset('assets/images/writting-book-sky-blue-icon.webp') }}" loading="lazy" alt="Essay writing service" width="44px" height="46px" class="img-fluid">
                        </div>
                        <div class="help-card-title">
                            <h4>Essay writing service</h4>
                        </div>
                        <div class="help-card-content">
                            <p>We write all types of essays in any referencing style. All essays are written to your required.</p>
                        </div>
                        <div class="help-card-btn">
                            <a href="#">Read More &#187;</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-3">
                    <div class="help-card dissertation-writing-service">
                        <div class="help-card-img">
                            <img src="{{ asset('assets/images/writting-hand-pink-icon.webp') }}" loading="lazy" height="52px" width="43px" alt="Dissertation writing service" class="img-fluid">
                        </div>
                        <div class="help-card-title">
                            <h4>Dissertation writing service</h4>
                        </div>
                        <div class="help-card-content">
                            <p>Full dissertations, chapters, plans and topics – any dissertation help you may need.</p>
                        </div>
                        <div class="help-card-btn">
                            <a href="#">Read More &#187;</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-3">
                    <div class="help-card card-writting-book-yellow">
                        <div class="help-card-img">
                            <img src="{{ asset('assets/images/writting-book-yellow-icon.webp') }}" loading="lazy" width="45px" height="44px" alt="Personal Statement Writing" class="img-fluid">
                        </div>
                        <div class="help-card-title">
                            <h4>Personal Statement Writing</h4>
                        </div>
                        <div class="help-card-content">
                            <p>Get a professionally written description your personal statement and interests.</p>
                        </div>
                        <div class="help-card-btn">
                            <a href="#">Read More &#187;</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-3">
                    <div class="help-card card-writting-book-orange">
                        <div class="help-card-img">
                            <img src="{{ asset('assets/images/writting-book-orange-icon.webp') }}" loading="lazy" width="44px" height="47px" alt="Assignment writing service" class="img-fluid">
                        </div>
                        <div class="help-card-title">
                            <h4>Assignment writing service</h4>
                        </div>
                        <div class="help-card-content">
                            <p>We can help with all of your academic needs, no matter what level or discipline.</p>
                        </div>
                        <div class="help-card-btn">
                            <a href="#">Read More &#187;</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-3">
                    <div class="help-card card-writting-book-edit-purple">
                        <div class="help-card-img">
                            <img src="{{ asset('assets/images/writting-book-edit-purple-icon.webp') }}" loading="lazy" width="52px" height="41px" alt="Proofreading & Editing service" class="img-fluid">
                        </div>
                        <div class="help-card-title">
                            <h4>Proofreading & Editing service</h4>
                        </div>
                        <div class="help-card-content">
                            <p>We will correct and improve your own work, making sure you can submit it with editing services confidence.</p>
                        </div>
                        <div class="help-card-btn">
                            <a href="#">Read More &#187;</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-3">
                    <div class="help-card card-cv-writting">
                        <div class="help-card-img">
                            <img src="{{ asset('assets/images/cv-writting-icon.webp') }}" loading="lazy" width="43px" height="44px" alt="CV writing service" class="img-fluid">
                        </div>
                        <div class="help-card-title">
                            <h4>CV writing service</h4>
                        </div>
                        <div class="help-card-content">
                            <p>Full dissertations, chapters, plans and topics – any dissertation help you may need.</p>
                        </div>
                        <div class="help-card-btn">
                            <a href="#">Read More &#187;</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-3">
                    <div class="help-card card-course-work-writting">
                        <div class="help-card-img">
                            <img src="{{ asset('assets/images/course-work-writting-icon.webp') }}" loading="lazy" width="46px" height="52px" alt="Coursework writing service" class="img-fluid">
                        </div>
                        <div class="help-card-title">
                            <h4>Coursework writing service</h4>
                        </div>
                        <div class="help-card-content">
                            <p>Get a work tailored to your assessment requirements, helping you to achieve grade.</p>
                        </div>
                        <div class="help-card-btn">
                            <a href="#">Read More &#187;</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-3">
                    <div class="help-card marking-writing-service">
                        <div class="help-card-img">
                            <img src="{{ asset('assets/images/hand-up-check-icon.webp') }}" loading="lazy" width="53px" height="46px" alt="Marking Writing service" class="img-fluid">
                        </div>
                        <div class="help-card-title">
                            <h4>Marking Writing service</h4>
                        </div>
                        <div class="help-card-content">
                            <p>We will grade your work against a set marking criteria, helping you to understand what to improve.</p>
                        </div>
                        <div class="help-card-btn">
                            <a href="#">Read More &#187;</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ===============  Professional Dissertation Help section end ================ -->
    <!-- ===================================================== -->
    
    <!-- ===================================================== -->
    <!-- ===============  help students section start ================ -->
    @include('partials.subjects-section')
    <!-- ===============  help students section end ================ -->
    <!-- ===================================================== -->

    <!-- ===================================================== -->
    <!-- ===============  How it Works section start ================ -->
    @include('partials.how-it-works-section')
    <!-- ===============  How it Works section end ================ -->
    <!-- ===================================================== -->

    <!-- ===================================================== -->
    <!-- ===============  Call To Action 1 section start ================ -->
    @include('partials.call-to-action-1')
    <!-- ===============  Call To Action 1 section end ================ -->
    <!-- ===================================================== -->

    <!-- ===================================================== -->
    <!-- ===============  Writer section start ================ -->
    @include('partials.writers-section')
    <!-- ===============  Writer section end ================ -->
    <!-- ===================================================== -->

    <!-- ===================================================== -->
    <!-- ===============  Testimonials section start ================ -->
    @include('partials.testimonials-section')
    <!-- ===============  Testimonials section end ================ -->
    <!-- ===================================================== -->

    <!-- ===================================================== -->
    <!-- ===============  Every Update section start ================ -->
    @include('partials.every-update-section')
    <!-- ===============  Every Update section end ================ -->
    <!-- ===================================================== -->

@endsection
