@extends('layouts.web')

@section('title')
About Us Page
@endsection

@section('head')
<!-- General Meta Tags -->
        <meta name="description" content="This is the About Us page of our website.">
        <meta name="keywords" content="About Us, welcome, main page">

        <!-- Open Graph Meta Tags -->
        <meta property="og:title" content="About Us Page">
        <meta property="og:description" content="This is the About Us page of our website.">
        <meta property="og:type" content="website">
        <meta property="og:url" content="{{ url()->current() }}">
        <meta property="og:image" content="{{ asset('images/about-us-page.png') }}">

        <!-- Twitter Meta Tags -->
        <meta name="twitter:card" content="summary_large_image">
        <meta name="twitter:title" content="About Us Page">
        <meta name="twitter:description" content="This is the about us page of our website.">
        <meta name="twitter:image" content="{{ asset('images/about-us-page.png') }}">
        <meta name="twitter:site" content="@YourTwitterHandle">
@endsection

@section('footer_scripts')

@endsection

@section('inner_page_hero_section_title')
Get A+ Worthy Assignments Here
@endsection

@section('inner_page_hero_section_mini_title')
About Us
@endsection

@section('inner_page_hero_section_phone')
Yes
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
    <!-- ===============  faqs section start ================ -->
    @include('partials.faqs-section')
    <!-- ===============  faqs section end ================ -->
    <!-- ===================================================== -->

    <!-- ===================================================== -->
    <!-- ===============  Every Update section start ================ -->
     <section id="every-update">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 mt-4 mt-xl-0">
                    <div class="every-update-left-img text-center">
                        <img src="{{ asset('assets/images/every-update-left.webp') }}" loading="lazy" class="img-fluid d-none d-xl-block" width="536px" height="618px" alt="graduate student">
                        <img src="{{ asset('assets/images/every-update-left-mobile.webp') }}" loading="lazy" class="img-fluid d-block d-xl-none" width="536px" height="618px" alt="graduate student">
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="every-update-right">
                        <div class="mini-title">
                            <div class="circle-bg circle-black-bg"></div>
                            <p>Get every update</p>
                        </div>
                        <div class="title">
                            <h3>Best Dissertations Help online in UK is A Click Away!</h3>
                        </div>
                        <div class="content">
                            <p>Our writers have multiple years of academic writing experience and have worked with the best universities in the UK. They know how to produce flawless assignments efficiently. This is why dissertation help online has been the best in this business. Here are some of our highly-rated writers who can deliver high-</p>
                        </div>
                        <div class="every-update-list-container">
                            <div class="every-update-list">
                                <img src="{{ asset('assets/images/every-list-icon-white.webp') }}" loading="lazy" class="img-fluid" width="15px" height="17px" alt="every-list-icon-white">
                                <p>We are affordable – so you do not need to worry about that,</p>
                            </div>
                            <div class="every-update-list">
                                <img src="{{ asset('assets/images/every-list-icon-white.webp') }}" loading="lazy" class="img-fluid" width="15px" height="17px" alt="every-list-icon-white">
                                <p>Customer support is at your fingertips to assist you with the brief,</p>
                            </div>
                            <div class="every-update-list">
                                <img src="{{ asset('assets/images/every-list-icon-white.webp') }}" loading="lazy" class="img-fluid" width="15px" height="17px" alt="every-list-icon-white">
                                <p>Seek our assistance, things will be completed before you come back</p>
                            </div>
                        </div>
                        <div class="every-update-btns">
                            <div class="btns-flex our-samples-btns">
                                <div class="primary-btn black-bg-btn">
                                    <img src="{{ asset('assets/images/live-chat-icon-yellow.webp') }}" loading="lazy" class="img-fluid" height="20px" width="23px" alt="Live Chat">
                                    <a href="{{ config('settings.app_chat') }}">Live Chat</a>
                                </div>
                                <div class="primary-btn white-bg-btn">
                                    <img src="{{ asset('assets/images/order-now-icon-black.webp') }}" loading="lazy" class="img-fluid" height="25.3px" width="26.325px" alt="Live Chat">
                                    <a href="{{ route('order-now') }}">Order Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
     </section>
    <!-- ===============  Every Update section end ================ -->
    <!-- ===================================================== -->

@endsection
