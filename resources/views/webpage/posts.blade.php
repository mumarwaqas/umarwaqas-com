@extends('layouts.web')

@section('title')
Home Page
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
Our Blogs
@endsection

@section('inner_page_hero_section_mini_title')
Our Blogs
@endsection

@section('content')

    <!-- ===================================================== -->
    <!-- ================ hero section start ===================== -->
    @include('partials.inner-pages-hero-section')
    <!-- ================ hero section end ======================= -->
    <!-- ===================================================== -->



    <!-- ===================================================== -->
    <!-- ===============  Blog section start ================ -->
    <section class="blogs-main-container">
        <div class="container">
            <div class="title">
                <h3>Search Your Blog Query What You Need:</h3>
            </div>
            <div class="content">
                <p>You might be thinking about what’s so special about our Law essay help UK? We provide excellent, original legal writing while keeping <br> our law essay help affordable.</p>
            </div>
            <div class="row">
                <div class="col-xl-8">
                    <div class="blog-container">
                        <div class="posts-start">

                            @include('partials.post')

                        </div>
                    </div>
                </div>
                <div class="col-xl-4">
                    <div class="blogs-right">
                        @include('partials.blog-search')
                        @include('partials.instant-price')
                        @include('partials.free-features')
                        @include('partials.payment-and-security')
                    </div>
                </div>
            </div>
        </div>
     </section>
    <!-- ===============  Blog section end ================ -->
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
