@extends('layouts.web')

@section('title')
Our Guarantees Page
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
Our Guarantees
@endsection

@section('inner_page_hero_section_mini_title')
Our Guarantees
@endsection

@section('content')

    <!-- ===================================================== -->
    <!-- ================ hero section start ===================== -->
    @include('partials.inner-pages-hero-section')
    <!-- ================ hero section end ======================= -->
    <!-- ===================================================== -->

    <!-- ===================================================== -->
    <!-- ================ Guarantee Features section start ======================= -->
    <section class="guarantee-features-section">
        <div class="container">
            <div class="row">
                <div class="col-xl-4">
                    <div class="guarantee-feature-card">
                        <div class="guarantee-feature-card-image">
                            <div class="guarantee-card-bg guarantee-card-bg-1">
                                <img src="{{ asset('assets/images/expert-writer-yellow-icon.webp') }}" width="76px" height="62px" loading="lazy" class="img-fluid" alt="Expert Writers">
                            </div>
                        </div>
                        <div class="guarantee-feature-title">
                            <h4>Super Expert Writers</h4>
                        </div>
                        <div class="guarantee-feature-content">
                            <p>Selecting the best experts is crucial for delivering quality services. That’s why we handpick a suitable essay writer for each order.</p>
                        </div>
                        <div class="guarantee-feature-btn">
                            <div class="top-nav-menu-side-btns btns-flex d-none d-md-flex">
                                <div class="primary-btn black-bg-btn">
                                    <a href="{{ route('order-now') }}"><img src="{{ asset('assets/images/order-now-icon.webp') }}" loading="lazy" class="img-fluid" height="25.3px" width="26.325px" alt="Live Chat">Order Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4">
                    <div class="guarantee-feature-card">
                        <div class="guarantee-feature-card-image">
                            <div class="guarantee-card-bg guarantee-card-bg-2">
                                <img src="{{ asset('assets/images/plagiarism-free-pink-icon.webp') }}" width="56.33px" height="73.6px" loading="lazy" class="img-fluid" alt="Expert Writers">
                            </div>
                        </div>
                        <div class="guarantee-feature-title">
                            <h4>Plagiarism-Free Papers</h4>
                        </div>
                        <div class="guarantee-feature-content">
                            <p>We check each custom paper for plagiarism to make sure it’s original and has references that are properly cited.</p>
                        </div>
                        <div class="guarantee-feature-btn">
                            <div class="top-nav-menu-side-btns btns-flex d-none d-md-flex">
                                <div class="primary-btn black-bg-btn">
                                    <a href="{{ route('order-now') }}"><img src="{{ asset('assets/images/order-now-icon.webp') }}" loading="lazy" class="img-fluid" height="25.3px" width="26.325px" alt="Live Chat">Order Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4">
                    <div class="guarantee-feature-card">
                        <div class="guarantee-feature-card-image">
                            <div class="guarantee-card-bg guarantee-card-bg-3">
                                <img src="{{ asset('assets/images/free-revisions-icon.webp') }}" width="72.43px" height="78.58px" loading="lazy" class="img-fluid" alt="Expert Writers">
                            </div>
                        </div>
                        <div class="guarantee-feature-title">
                            <h4>Free Revisions</h4>
                        </div>
                        <div class="guarantee-feature-content">
                            <p>Some part of your assignment differs from your instructions? Your writer will edit it for free unless it matches your initial request.</p>
                        </div>
                        <div class="guarantee-feature-btn">
                            <div class="top-nav-menu-side-btns btns-flex d-none d-md-flex">
                                <div class="primary-btn black-bg-btn">
                                    <a href="{{ route('order-now') }}"><img src="{{ asset('assets/images/order-now-icon.webp') }}" loading="lazy" class="img-fluid" height="25.3px" width="26.325px" alt="Live Chat">Order Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
     </section>
    <!-- ================ Guarantee Features section end ======================= -->
    <!-- ===================================================== -->

    <!-- ===================================================== -->
    <!-- ===============  Guarantees dissertation help online section start ================ -->
    <section class="guarantee-dissertation-help">
        <div class="container">
            <div class="title">
                <h3>Guarantees dissertation help online</h3>
            </div>
            <div class="content">
                <p>dissertation help online is established with the purpose of resolving dissertation writing worries of the students which they generally face during their academic tenure. With our authentic and genuine writing service that includes essay writing, assignment writing, coursework writing, and more, our clients receive the best results.</p>
            </div>
            <div class="row">
                <div class="col-xl-6">
                    <div class="guarantee-help-card">
                        <div class="guarantee-help-img-container">
                            <div class="guarantee-help-img guarantee-help-img-1">
                                <img src="{{ asset('assets/images/full-time-experts-icon.webp') }}" width="79px" height="48px" class="img-fluid" loading="lazy" alt="Full Time Experts">
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
                <div class="col-xl-6">
                    <div class="guarantee-help-card">
                        <div class="guarantee-help-img-container">
                            <div class="guarantee-help-img guarantee-help-img-5">
                                <img src="{{ asset('assets/images/money-back-guarantee-icon.webp') }}" width="63px" height="68.35px" class="img-fluid" loading="lazy" alt="Money Back Guarantee">
                            </div>
                        </div>
                        <div class="guarantee-help-content">
                            <h5>Money Back Guarantee</h5>
                            <p>When you work with best assignment help service you get ensured that you are working with your own people. From start to finish our subject experts stick with you, to bring.</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="guarantee-help-card">
                        <div class="guarantee-help-img-container">
                            <div class="guarantee-help-img guarantee-help-img-6">
                                <img src="{{ asset('assets/images/support-icon.webp') }}" width="58.73px" height="68.08px" class="img-fluid" loading="lazy" alt="24/7 Support">
                            </div>
                        </div>
                        <div class="guarantee-help-content">
                            <h5>24/7 Support</h5>
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
    <!-- ===============  Call to Action section start ================ -->
    @include('partials.call-to-action-section')
    <!-- ===============  Call to Action section end ================ -->
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
