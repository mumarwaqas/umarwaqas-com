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
    <!-- ===================================================== -->   
    {!! $page->content !!}
    <!-- ===================================================== -->
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
    <!-- ===============  Writer Service section start ================ -->
    <section class="service-page-sec-writing-service">
        <div class="container">
            <div class="row">
                <div class="col-xl-8">
                    <div class="writing-services-left">
                        <div class="title">
                            <h3>Subjects in Which We Provide Custom Term Paper Writing Services</h3>
                        </div>
                        <div class="content">
                            <p>Most students wonder where they can get term paper writing service. Were you also thinking about how to write a term paper that will earn you an A+ grade? Congratulations on finding the best solution for your term paper writing process if you read this.</p>
                            <p>If you were searching the internet for ‘someone to do my term paper’, stop and buy term papers online from us instead! Our top term paper writing service has 1000 plus writers on board with us who provide help across 40+ subjects. Some of the subjects across which our</p>
                        </div>
                        <div class="help-subjects-container">
                            <div class="content">
                                <h5>term paper <br> writers provide <br> help are:</h5>
                            </div>
                            <div class="subjects-list-container">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="list">
                                            <img src="{{ asset('assets/images/every-list-icon-white.webp') }}" loading="lazy" class="img-fluid" width="15px" height="17px" alt="every-list-icon-white">
                                            <p>Psychology term paper</p>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="list">
                                            <img src="{{ asset('assets/images/every-list-icon-white.webp') }}" loading="lazy" class="img-fluid" width="15px" height="17px" alt="every-list-icon-white">
                                            <p>Sociology term paper</p>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="list">
                                            <img src="{{ asset('assets/images/every-list-icon-white.webp') }}" loading="lazy" class="img-fluid" width="15px" height="17px" alt="every-list-icon-white">
                                            <p>English term paper</p>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="list">
                                            <img src="{{ asset('assets/images/every-list-icon-white.webp') }}" loading="lazy" class="img-fluid" width="15px" height="17px" alt="every-list-icon-white">
                                            <p>History term paper</p>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="list">
                                            <img src="{{ asset('assets/images/every-list-icon-white.webp') }}" loading="lazy" class="img-fluid" width="15px" height="17px" alt="every-list-icon-white">
                                            <p>Economics term paper</p>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="list">
                                            <img src="{{ asset('assets/images/every-list-icon-white.webp') }}" loading="lazy" class="img-fluid" width="15px" height="17px" alt="every-list-icon-white">
                                            <p>Business term paper</p>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="list">
                                            <img src="{{ asset('assets/images/every-list-icon-white.webp') }}" loading="lazy" class="img-fluid" width="15px" height="17px" alt="every-list-icon-white">
                                            <p>Philosophy term paper</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4">
                    <div class="right-banner">
                        <img src="{{ asset('assets/images/every-update-left-mobile.webp') }}" class="img-fluid" loading="lazy" width="536px" height="618px" alt="Writing Services">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ===============  Writer Service section end ================ -->
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
