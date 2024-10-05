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
    {{-- thank-you-page-container start --}}
    <section class="thank-you-page contact-us-order-now">
        <div class="container">
            <div class="row">
                <div class="col-xl-5 d-none d-xl-block">
                    <div class="thank-you-img">
                        <img src="{{ asset('/assets/images/order-thank-you.webp') }}" loading="lazy" class="img-fluid" width="637px" height="701px" alt="Thank You">
                    </div>
                </div>
                <div class="col-xl-7">
                    <div class="thank-you-right">
                        <div class="title">
                            <img src="{{ asset('/assets/images/like-icon-black.webp') }}" width="64px" height="64px" loading="lazy" alt="like">
                            <h2>Congratulations!</h2>
                        </div>
                        <div class="thank-you-content">
                            <div class="content-header">
                                <div class="content-title">
                                    <h5>Dear Johan Carry,</h5>
                                    <h5>Thank you for your order ID <span>(#725650208)</span></h5>
                                </div>
                            </div>
                            <div class="content-body">
                                <div class="content">
                                    <p>A confirmation email has been sent to <strong>Johancarry@gmail.com,</strong> You can also view a copy of your email here.</p>
                                    <p><strong>Please note:</strong> that this transaction will appear on your credit card statement as: All Freelancers Ltd.</p>
                                    <p><span>*</span>If you do not receive this email in the new few minutes, please check your  <strong>'Junk'</strong> or <strong>'Spam' </strong>folders.</p>
                                    <div class="thank-you-btn">
                                        <div class="top-nav-menu-side-btns btns-flex">
                                            <div class="primary-btn black-bg-btn">
                                                <img src="{{ asset('/assets/images/home-icon-yellow.webp')}}" loading="lazy" class="img-fluid" height="20px" width="23px" alt="Live Chat">
                                                <a href="#">Back To Homepage</a>
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
    {{-- thank-you-page-container end --}}



@endsection
