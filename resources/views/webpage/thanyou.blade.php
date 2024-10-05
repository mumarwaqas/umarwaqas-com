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
Satisfy Customers {{ $page->title }}
@endsection

@section('inner_page_hero_section_mini_title')
{{ $page->title }}
@endsection

@section('inner_page_hero_section_review_rating')
Yes
@endsection

@section('content')

    <!-- ===================================================== -->
    <!-- ================ hero section start ===================== -->
    @include('partials.inner-pages-hero-section')
    <!-- ================ hero section end ======================= -->
    <!-- ===================================================== -->

    <!-- ===================================================== -->
    <!-- ================ Reviews section start ======================= -->
    <section id="reviews-container-page">
        <div class="container">
            <div class="title">
                <h3>What our clients say</h3>
            </div>
            <div class="content">
                <p>Check out the latest feedback from learners who use our affordable dissertation</p>
            </div>
            <div class="brands-badges">
                <div class="brand-badge-container brand-badge-container-white">
                    <img src="{{ asset('assets/images/affordable-black-logo.webp') }}" loading="lazy" class="img-fluid" width="37px" height="44px" alt="affordable dissertation">
                    <p>affordable dissertation</p>
                </div>
                <div class="brand-badge-container">
                    <img src="{{ asset('assets/images/trustpilot-icon.webp') }}" loading="lazy" width="47px" height="47px" class="img-fluid" alt="Trustpilot">
                    <p>Trustpilot</p>
                </div>
                <div class="brand-badge-container">
                    <img src="{{ asset('assets/images/google-icon.webp') }}" loading="lazy" class="img-fluid" width="31.292px" height="32.011px" alt="google">
                    <p>google</p>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-4">
                    <div class="review-right-yellow-banner">
                        <div class="title">
                            <h4>Find the right expert<br> <span>among 500+</span> </h4>
                        </div>
                        <div class="content">
                            <p>professional writers from the affordable  <br>dissertation</p>
                        </div>
                        <div class="yellow-banner-btn">
                            <div class="btns-flex our-goals-btns">
                                <div class="primary-btn black-bg-btn">
                                    <!-- <img src="{{ asset('assets/images/order-now-icon-black.webp') }}" class="img-fluid" height="25.3px" width="26.325px" alt="Live Chat"> -->
                                    <a href="{{ route('writers') }}">View All writer's</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-8">
                    <div class="reviews-carousel-container">
                        <div class="reviews-carousel-1 owl-carousel owl-theme">
                            @foreach ($customers as $customer)
                            <div class="item">
                                <div class="review-card">
                                    <div class="review-card-header">
                                        <div class="review-title">
                                            <!-- Display the rating using a static image as placeholder -->
                                            <img src="{{ asset('assets/images/rating-yellow.webp') }}" loading="lazy" class="img-fluid" width="147px" height="25px" alt="Review rating">
                                            <!-- Use Customer Name -->
                                            <h5>{{ $customer->subject ?? 'Management' }}</h5>
                                        </div>
                                        <div class="review-details">
                                            <!-- Use Review Date -->
                                            <div class="review-date">{{ $customer->date }}</div>
                                            <!-- Use About Information as a Category -->
                                            {{-- <div class="review-category review-content">{{ Str::limit($customer->about, 50) }}</div> --}}
                                            <!-- Placeholder for Deadline -->
                                            {{-- <div class="review-deadline review-content">Deadline: 12 hours</div> --}}
                                        </div>
                                    </div>
                                    <div class="review-card-body">
                                        <div class="content">
                                            <!-- Placeholder for Review Content -->
                                            <p>{{ $customer->review }}</p>
                                        </div>
                                    </div>
                                    <div class="review-card-footer">
                                        <div class="review-author">
                                            <div class="author-profile">
                                                <!-- Use Customer Image or Placeholder if NULL -->

                                                <img src="{{ $customer->image != 'NULL' ? $customer->image : './assets/images/default-author.jpg' }}" width="70" height="70" class="" loading="lazy" alt="{{ $customer->name }}">
                                            </div>
                                            <div class="author-details">
                                                <!-- Placeholder for Location -->
                                                <div class="title">{{ $customer->name }}</div>
                                                <!-- Use Customer Number -->
                                                <div class="user-id">User ID: {{ $customer->customer_no }}</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ================ Reviews section end ======================= -->
    <!-- ===================================================== -->



    <!-- ===================================================== -->
    <!-- ===============  Every Update section start ================ -->
    @include('partials.every-update-section')
    <!-- ===============  Every Update section end ================ -->
    <!-- ===================================================== -->


@endsection
