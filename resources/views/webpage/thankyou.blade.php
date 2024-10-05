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
    {{-- contact us thank-you-page-container start --}}
    <section class="thank-you-page contact-us-order-now">
        <div class="container">
            <div class="row">
                <div class="col-xl-5 d-none d-xl-block">
                    <div class="thank-you-img">
                        <img src="{{ asset('assets/images/contact-thank-you.webp') }}" loading="lazy" class="img-fluid" width="637px" height="701px" alt="Thank You">
                    </div>
                </div>
                <div class="col-xl-7">
                    <div class="thank-you-right">
                        <div class="title">
                            <img src="{{ asset('assets/images/check-thank-you.webp') }}" width="127px" height="112px" loading="lazy" alt="like">
                            <div class="title-div">
                                <h2>Thank You</h2>
                                <p>for reaching out to us!</p>
                            </div>
                        </div>
                        <div class="thank-you-content">
                            <div class="content-header">
                                <div class="content-title">
                                    <h5>we truly appreciate your interest in our services</h5>
                                </div>
                            </div>
                            <div class="content-body">
                                <div class="content">
                                    <p>Our team will be in touch with you shortly to address your inquiries and assist you further. We value your trust in us and look forward to speaking with you soon. If you have any immediate concerns, feel free to contact us directly. Thank you again for choosing us!</p>
                                    <div class="thank-you-btn">
                                        <div class="top-nav-menu-side-btns btns-flex">
                                            <div class="primary-btn black-bg-btn">
                                                <img src="{{ asset('assets/images/home-icon-yellow.webp')}}" loading="lazy" class="img-fluid" height="20px" width="23px" alt="Live Chat">
                                                <a href="{{ route('home') }}">Back To Homepage</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- contact us thank-you-page-container start --}}


@endsection
