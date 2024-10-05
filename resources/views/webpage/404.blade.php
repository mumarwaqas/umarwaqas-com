@extends('layouts.web')

@section('title')
Our Reviews Page
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
@endsection

@section('inner_page_hero_section_mini_title')
@endsection

@section('inner_page_hero_section_review_rating')
Yes
@endsection

@section('content')

    <!-- ===================================================== -->
    <!-- ================ 404 section start ===================== -->
    <section class="empty-page">
        <div class="container">
            <div class="empty-container">
                <div class="empty-img">
                    <img src="{{asset('assets/images/404-vector.webp') }}" width="360px" height="221px" class="img-fluid" loading="lazy" alt="404">
                </div>
                <h3>Oops! That page can't be found.</h3>
                <p>Sorry, the world of knowledge is so big that sometimes pages get lost to the <a href="{{ route('home') }}">Homepage</a> or contact our <a href="{{ config('settings.app_chat') }}">Support Department.</a></p>
                <div class="empty-btn">
                    <div class="top-nav-menu-side-btns btns-flex">
                        <div class="primary-btn black-bg-btn">
                            <img src="{{ asset('assets/images/home-icon-yellow.webp') }}" loading="lazy" class="img-fluid" height="20px" width="23px" alt="Live Chat">
                            <a href="{{ route('home') }}">Back To Homepage</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="every-update-empty">
        <div class="container">
            <div class="row">
                <div class="col-xl-6">
                    <div class="empty-every-update-left">
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
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="empty-every-update-right">
                        <div class="every-update-list-container">
                            <div class="every-update-list">
                                <img src="{{ asset('assets/images/every-list-icon-yellow.webp') }}" loading="lazy" class="img-fluid" width="15px" height="17px" alt="every-list-icon-white">
                                <p>We are affordable – so you do not need to worry about that,</p>
                            </div>
                            <div class="every-update-list">
                                <img src="{{ asset('assets/images/every-list-icon-yellow.webp') }}" loading="lazy" class="img-fluid" width="15px" height="17px" alt="every-list-icon-white">
                                <p>Customer support is at your fingertips to assist you with the brief,</p>
                            </div>
                            <div class="every-update-list">
                                <img src="{{ asset('assets/images/every-list-icon-yellow.webp') }}" loading="lazy" class="img-fluid" width="15px" height="17px" alt="every-list-icon-white">
                                <p>Seek our assistance, things will be completed before you come back</p>
                            </div>
                        </div>
                        <div class="every-update-btns">
                            <div class="btns-flex our-samples-btns">
                                <div class="primary-btn yellow-bg-btn">
                                    <img src="{{ asset('assets/images/live-chat-icon.webp') }}" loading="lazy" class="img-fluid" height="20px" width="23px" alt="Live Chat">
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
    <!-- ================ 404 section end ======================= -->
    <!-- ===================================================== -->

@endsection
