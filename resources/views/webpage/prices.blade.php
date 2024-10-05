@extends('layouts.web')

@section('title')
Our Pricing
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
Our Pricing
@endsection

@section('inner_page_hero_section_mini_title')
Our Pricing
@endsection

@section('content')

    <!-- ===================================================== -->
    <!-- ================ hero section start ===================== -->
    @include('partials.inner-pages-hero-section')
    <!-- ================ hero section end ======================= -->
    <!-- ===================================================== -->

    <!-- ===================================================== -->
    <!-- ================ Price Card section start ======================= -->
    <section class="pricing-packages-container">
        <div class="container">
            <div class="title">
                <h3>Prices That You can Afford: Quality That You Desire</h3>
            </div>
            <div class="content">
                <p>We provide our services at cheaper rates because we know students like you are already dealing with tight budget & other personal expenses. Our-motto is to provide only the best quality without digging a hole into your pocket ensuring academic success for everyone.</p>
            </div>
            <div class="row">
                @foreach($headers as $index => $header)
                    @if($index > 0) <!-- Skipping the 'Time' header -->
                    <div class="col-md-6 col-xl-3">
                        <div class="pricing-card pricing-bg-{{ $index }}">
                            <div class="title">
                                <h5>{{ $header }}</h5>
                            </div>
                            @foreach($data as $row)
                                <div class="pricing-list {{ $loop->iteration % 2 == 0 ? 'bg-pricing-list' : '' }}">
                                    <div class="pkg-price">£{{ $row[$index] }}</div>
                                    <div class="pkg-detail">{{ $row[0] }}</div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                    @endif
                @endforeach
            </div>
        </div>
    </section>
    <!-- ================ Price Card section end ======================= -->
    <!-- ===================================================== -->

    <!-- ===================================================== -->
    <!-- ===============  Call To Action 2 section start ================ -->
    @include('partials.call-to-action-2')
    <!-- ===============  Call To Action 2 section end ================ -->
    <!-- ===================================================== -->

    <!-- ===================================================== -->
    <!-- ===============  Guarantees dissertation help online section start ================ -->
    <section class="guarantee-dissertation-help">
        <div class="container">
            <div class="title">
                <h3>Secret behind Cheapest Dissertation Help</h3>
            </div>
            <div class="content">
                <p>We, at dissertationhelponline.co.uk, take pride in boasting the fact that we have been able to satisfy 98 percent of our clients with our services. In fact, you can see for yourself how happy each of those customers when you browse through the dissertation help online reviews section.</p>
            </div>
            <div class="row">
                <div class="col-xl-6">
                    <div class="guarantee-help-card">
                        <div class="guarantee-help-img-container">
                            <div class="guarantee-help-img guarantee-help-img-1">
                                <img src="{{ asset('assets/images/full-time-experts-icon.webp') }}" width="79px" height="48.03px" class="img-fluid" loading="lazy" alt="Full Time Experts">
                            </div>
                        </div>
                        <div class="guarantee-help-content">
                            <h5>Full Time Experts</h5>
                            <p>When you work with best assignment help service you get ensured that you are working with your own people. From start to finish our subject experts stick with you, to bring.</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="guarantee-help-card">
                        <div class="guarantee-help-img-container">
                            <div class="guarantee-help-img guarantee-help-img-2">
                                <img src="{{ asset('assets/images/best-quality-work-icon.webp') }}" width="67" height="68px" class="img-fluid" loading="lazy" alt="Best Quality Work">
                            </div>
                        </div>
                        <div class="guarantee-help-content">
                            <h5>Best Quality Work</h5>
                            <p>Understanding the worth of your document, our writers pay individual attention to every order handed over to them and assure that the delivered document entails all the specifications made by you. By following this approach, top-notch grades are guaranteed.</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="guarantee-help-card">
                        <div class="guarantee-help-img-container">
                            <div class="guarantee-help-img guarantee-help-img-3">
                                <img src="{{ asset('assets/images/partial-payment-option-icon.webp') }}" width="67px" height="68px" class="img-fluid" loading="lazy" alt="Partial Payment Option">
                            </div>
                        </div>
                        <div class="guarantee-help-content">
                            <h5>Partial Payment Option</h5>
                            <p>When you work with best assignment help service you get ensured that you are working with your own people. From start to finish our subject experts stick with you, to bring.</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="guarantee-help-card">
                        <div class="guarantee-help-img-container">
                            <div class="guarantee-help-img guarantee-help-img-4">
                                <img src="{{ asset('assets/images/delivery-before-deadline-icon.webp') }}" width="58.73px" height="68.08px" class="img-fluid" loading="lazy" alt="Delivery Before Deadline">
                            </div>
                        </div>
                        <div class="guarantee-help-content">
                            <h5>Delivery Before Deadline</h5>
                            <p>Understanding the worth of your document, our writers pay individual attention to every order handed over to them and assure that the delivered document entails all the specifications made by you. By following this approach, top-notch grades are guaranteed.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ===================================================== -->
    <!-- ===============  Guarantees dissertation help online section start ================ -->

    <!-- ===================================================== -->
    <!-- ===============  Testimonials section start ================ -->
    @include('partials.testimonials-section')
    <!-- ===============  Testimonials section end ================ -->
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
    <!-- ===============  Faqs section start ================ -->
    @include('partials.faqs-section')
    <!-- ===============  Faqs section end ================ -->
    <!-- ===================================================== -->

    <!-- ===================================================== -->
    <!-- ===============  Every Update section start ================ -->
    @include('partials.every-update-section')
    <!-- ===============  Every Update section end ================ -->
    <!-- ===================================================== -->

@endsection
