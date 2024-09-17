@extends('layouts.web')

@section('title')
Home Page
@endsection


<!-- Set the meta title -->
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

@section('content')
    <!-- ===================================================== -->
    <!-- ================ hero section start ===================== -->
    @include('partials.hero-section')
    <!-- ================ hero section end ======================= -->
    <!-- ===================================================== -->

    <!-- ===================================================== -->
    <!-- =============== featured section start =============== -->
    <section id="featured-section">
         <div class="container">
            <div class="title">
                <h3>dissertation help online What Makes Our Help Online Standout</h3>
            </div>
            <div class="content">
                <p>Our dissertation help online can be your ultimate way towards academic success! Have a look at the salient features that comes along we <br> have successfully helped thousands of students from different disciplines write our cheap assignment services:</p>
            </div>
            <div class="row">
                <div class="col-xl-4">
                    <div class="freaturd-card">
                        <div class="featured-img-container">
                            <div class="featured-img">
                                <img src="{{ asset('assets/images/academic-experts-icon.webp') }}" loading="lazy" width="45px" height="56px" class="img-fluid" alt="Academic Experts">
                            </div>
                        </div>
                        <div class="featured-card-body">
                            <div class="featured-title">
                                <h3>The Best Academic Experts</h3>
                            </div>
                            <div class="featured-content">
                                <p>We hire qualified writers, researchers and editors to ensure that each paper is researchers and editors plagiarism on-time.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4">
                    <div class="freaturd-card">
                        <div class="featured-img-container">
                            <div class="featured-img">
                                <img src="{{ asset('assets/images/fair-priced-icon.webp') }}" loading="lazy" width="55px" height="66px" class="img-fluid" alt="Fair Priced">
                            </div>
                        </div>
                        <div class="featured-card-body">
                            <div class="featured-title">
                                <h3>Fair Priced Ordering System</h3>
                            </div>
                            <div class="featured-content">
                                <p>Our company is focused on keeping the prices as low as possible while maintaining the highest low as possible while maintaining quality standards.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4">
                    <div class="freaturd-card">
                        <div class="featured-img-container">
                            <div class="featured-img">
                                <img src="{{ asset('assets/images/safe-and-secure-icon.webp') }}" loading="lazy" width="50px" height="55px" class="img-fluid" alt="Safe and Secure">
                            </div>
                        </div>
                        <div class="featured-card-body">
                            <div class="featured-title">
                                <h3>Completely Safe and Secure</h3>
                            </div>
                            <div class="featured-content">
                                <p>Your personal information is safely encrypted. Purchases are made through authority payment systems information is safely encrypted.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- =============== featured section end ================ -->
    <!-- ===================================================== -->

    <!-- ===================================================== -->
    <!-- =============== our goals section start ================ -->
    <section id="our-goals">
        <div class="container">
            <div class="row">
                <div class="col-xl-6">
                    <div class="our-goals-left-banner">
                        <img src="{{ asset('assets/images/4students.webp') }}" loading="lazy" alt="Our Goals" height="755px" width="755px" class="img-fluid">
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="our-goals-content-container">
                        <div class="mini-title">
                            <div class="circle-bg circle-black-bg"></div>
                            <p>Our goals</p>
                        </div>
                        <div class="title">
                            <h3>Achieve your academic goals with our dissertation help online writing service</h3>
                        </div>
                        <div class="content">
                            <p>Our mission at dissertation help online is your success. We can help you achieve your academic, business or even personal goals. To do this, we have gathered the best academic writers in the UK, built a 24/7 support team.</p>
                            <p>Our mission at dissertation help online is your success. We can help you achieve your academic, business or even personal goals. To do this, we have gathered the best academic writers in the UK.</p>
                        </div>
                        <div class="list-container row">
                            <div class="col-md-6">
                                <div class="list-content">
                                    <img src="{{ asset('assets/images/yellow-check-icon.webp') }}" loading="lazy" width="30.843px" height="23px" class="img-fluid" alt="Check yellow">
                                    <p>Qualified UK writers</p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="list-content">
                                    <img src="{{ asset('assets/images/yellow-check-icon.webp') }}" loading="lazy" width="30.843px" height="23px" class="img-fluid" alt="Check yellow">
                                    <p>On time delivery</p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="list-content">
                                    <img src="{{ asset('assets/images/yellow-check-icon.webp') }}" loading="lazy" width="30.843px" height="23px" class="img-fluid" alt="Check yellow">
                                    <p>Written to grade standard</p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="list-content">
                                    <img src="{{ asset('assets/images/yellow-check-icon.webp') }}" loading="lazy" width="30.843px" height="23px" class="img-fluid" alt="Check yellow">
                                    <p>100% confidential Guarantee</p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="list-content">
                                    <img src="{{ asset('assets/images/yellow-check-icon.webp') }}" loading="lazy" width="30.843px" height="23px" class="img-fluid" alt="Check yellow">
                                    <p>Plagiarism free Report</p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="list-content">
                                    <img src="{{ asset('assets/images/yellow-check-icon.webp') }}" loading="lazy" width="30.843px" height="23px" class="img-fluid" alt="Check yellow">
                                    <p>Available 24/7 Support</p>
                                </div>
                            </div>
                        </div>
                        <div class="btns-flex our-goals-btns">
                            <div class="primary-btn black-bg-btn">
                                <img src="{{ asset('assets/images/live-chat-icon-yellow.webp') }}" loading="lazy" class="img-fluid" height="20px" width="23px" alt="Live Chat">
                                <a href="{{ config('settings.app_chat') }}">Live Chat</a>
                            </div>
                            <div class="primary-btn yellow-bg-btn">
                                <img src="{{ asset('assets/images/order-now-icon-black.webp') }}" loading="lazy" class="img-fluid" height="25.3px" width="26.325px" alt="Live Chat">
                                <a href="{{ route('order-now') }}">Order Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- =============== our goals section end ================ -->
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
                            <img src="{{ asset('assets/images/writting-book-sky-blue-icon.webp') }}" loading="lazy" alt="Essay writing service" width="82px" height="88px" class="img-fluid">
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
                            <img src="{{ asset('assets/images/writting-hand-pink-icon.webp') }}" loading="lazy" height="80px" width="81px" alt="Dissertation writing service" class="img-fluid">
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
                            <img src="{{ asset('assets/images/writting-book-yellow-icon.webp') }}" loading="lazy" width="82px" height="80px" alt="Personal Statement Writing" class="img-fluid">
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
                            <img src="{{ asset('assets/images/writting-book-orange-icon.webp') }}" loading="lazy" width="81px" height="80px" alt="Assignment writing service" class="img-fluid">
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
                            <img src="{{ asset('assets/images/writting-book-edit-purple-icon.webp') }}" loading="lazy" width="81px" height="80px" alt="Proofreading & Editing service" class="img-fluid">
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
                            <img src="{{ asset('assets/images/cv-writting-icon.webp') }}" loading="lazy" width="81px" height="80px" alt="CV writing service" class="img-fluid">
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
                            <img src="{{ asset('assets/images/course-work-writting-icon.webp') }}" loading="lazy" width="81px" height="80px" alt="Coursework writing service" class="img-fluid">
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
                            <img src="{{ asset('assets/images/hand-up-check-icon.webp') }}" loading="lazy" width="81px" height="80px" alt="Marking Writing service" class="img-fluid">
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
    <!-- ===============  how it works section start ================ -->
    <sectoin id="how-it-works">
        <div class="how-it-works-inner">
            <div class="container">
                <div class="mini-title">
                    <div class="circle-bg circle-black-bg"></div>
                    <p>How it Works ?</p>
                </div>
                <div class="title">
                    <h3>Simple 4 Steps To Get Top Grade Papers From affordable dissertation <br> Writing Services</h3>
                </div>
                <div class="row">
                    <div class=" col-md-6 col-xl-3">
                        <div class="works-card-container">
                            <div class="progress-numbers">
                               <div class="prog-num prog-num-1 prog-num-border"></div> 
                               <!-- <div class="progress-border"></div> -->
                            </div>
                            <div class="works-card">
                                <div class="works-card-img">
                                    <img src="{{ asset('assets/images/order-form-icon.webp') }}" loading="lazy" height="80px" width="81px" class="img-fluid" alt="Order Form Icon">
                                </div>
                                <div class="works-title">
                                    <h4>Fill Out Order Form</h4>
                                </div>
                                <div class="works-content">
                                    <p>Select the best experts is crucial for delivering quality services. Selecting the best.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=" col-md-6 col-xl-3">
                        <div class="works-card-container">
                            <div class="progress-numbers">
                               <div class="prog-num prog-num-2 prog-num-border"></div> 
                               <!-- <div class="progress-border"></div> -->
                            </div>
                            <div class="works-card">
                                <div class="works-card-img">
                                    <img src="{{ asset('assets/images/make-payment-icon.webp') }}" loading="lazy" height="80px" width="81px" class="img-fluid" alt="Make Payment Icon">
                                </div>
                                <div class="works-title">
                                    <h4>Make Payment</h4>
                                </div>
                                <div class="works-content">
                                    <p>Select the best experts is crucial for delivering quality services. Selecting the best.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=" col-md-6 col-xl-3">
                        <div class="works-card-container">
                            <div class="progress-numbers">
                               <div class="prog-num prog-num-3 prog-num-border"></div> 
                               <!-- <div class="progress-border"></div> -->
                            </div>
                            <div class="works-card">
                                <div class="works-card-img">
                                    <img src="{{ asset('assets/images/connect-with-writer-icon.webp') }}" loading="lazy" height="80px" width="81px" class="img-fluid" alt="Connect With Writer Icon">
                                </div>
                                <div class="works-title">
                                    <h4>Connect With Writer</h4>
                                </div>
                                <div class="works-content">
                                    <p>Select the best experts is crucial for delivering quality services. Selecting the best.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=" col-md-6 col-xl-3">
                        <div class="works-card-container">
                            <div class="progress-numbers">
                               <div class="prog-num prog-num-4"></div> 
                            </div>
                            <div class="works-card">
                                <div class="works-card-img">
                                    <img src="{{ asset('assets/images/download-orange-icon.webp') }}" loading="lazy" height="80px" width="81px" class="img-fluid" alt="Download Your Order Icon">
                                </div>
                                <div class="works-title">
                                    <h4>Download Your Order</h4>
                                </div>
                                <div class="works-content">
                                    <p>Select the best experts is crucial for delivering quality services. Selecting the best.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </sectoin>
    <!-- ===============  how it works section end ================ -->
    <!-- ===================================================== -->

    <!-- ===================================================== -->
    <!-- ===============  help in uk black bg banner section start ================ -->
    <section id="help-in-uk-black-bg">
        <div class="container">
            <div class="help-black-bg-container">
                <div class="help-title">
                    <h3>Professional Dissertation Help In UK To <br> All Academic Levels!</h3>
                </div>
                <div class="help-arrow-img">
                    <img src="{{ asset('assets/images/yellow-loop-arrow.webp') }}" loading="lazy" width="121.983px" height="45.389px" alt="" class="img-fluid">
                </div>
                <div class="help-btn">
                    <div class="btns-flex our-goals-btns">
                        <div class="primary-btn white-bg-btn">
                            <img src="{{ asset('assets/images/live-chat-icon.webp') }}" loading="lazy" class="img-fluid" height="20px" width="23px" alt="Live Chat">
                            <a href="{{ config('settings.app_chat') }}">Live Chat</a>
                        </div>
                        <div class="primary-btn yellow-bg-btn">
                            <img src="{{ asset('assets/images/order-now-icon-black.webp') }}" loading="lazy" class="img-fluid" height="25.3px" width="26.325px" alt="Live Chat">
                            <a href="{{ route('order-now') }}">Order Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ===============  help in uk black bg banner section end ================ -->
    <!-- ===================================================== -->

    <!-- ===================================================== -->
    <!-- ===============  our writers section start ================ -->
    <section id="our-writers">
        <div class="container">
            <div class="mini-title">
                <div class="circle-bg circle-black-bg"></div>
                <p>Our writers</p>
            </div>
            <div class="title">
                <h3>Choose Our UK Expert Writers</h3>
            </div>
            <div class="content">
                <p>Our dissertation help online can be your ultimate way towards academic success! Have a look at the salient features that comes <br> along we have successfully helped thousands of students from different disciplines writeour cheap assignment services:</p>
            </div>
            <div class="row">
                <div class="col-md-6 col-xl-8">
                    <div class="writers-carousel">
                        <div class="writers-carousel-1 owl-carousel owl-theme">
                            @foreach($writers as $writer)
                            <div class="item">
                                <div class="writer-card">
                                    <div class="writer-card-header">
                                        <div class="writer-img">
                                            {{-- $writer->image == ??  --}}
                                            <img src="{{ $writer->image ? asset($writer->image) : asset('assets/images/writer-tumb-1.webp') }}" loading="lazy" width="101px" height="101px" class="img-fluid" alt="{{ $writer->name }}">
                                        </div>
                                        <div class="writer-profile">
                                            <div class="writer-card-title">
                                                <h4>{{ $writer->name }}</h4>
                                                <img src="{{ asset('assets/images/verified-icon.webp') }}" loading="lazy" alt="verified writer" width="19px" height="19px" class="img-fluid">
                                            </div>
                                            <div class="writer-rating">
                                                <img src="{{ asset('assets/images/rating-yellow.webp') }}" loading="lazy" class="img-fluid" width="101px" height="17.701px" alt="writer rating">
                                                <p>{{ $writer->rating }}</p>
                                                <span>({{ number_format($writer->reviews) }} reviews)</span>
                                            </div>
                                            <div class="writer-degree">
                                                <img src="{{ asset('assets/images/degree-icon.webp') }}" loading="lazy" class="img-fluid" width="23px" height="16.031px" alt="writer degree">
                                                <p>{{ $writer->education  }}</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="writer-card-body">
                                        <div class="writer-stats-container">
                                            <div class="writer-stats">
                                                <p class="content">completed orders:</p>
                                                <div class="yellow-content">{{ $writer->orders }}+</div>
                                            </div>
                                            <div class="writer-stats">
                                                <p class="content">Satisfaction Rate:</p>
                                                <div class="yellow-content">{{ $writer->success_rate }}%</div>
                                            </div>
                                        </div>
                                        <div class="writer-card-badges">
                                            <div class="badge-title">
                                                <h4>Competences</h4>
                                            </div>
                                            <div class="badge-lists">
                                                @if(!empty($writer->competences))
                                                    @foreach(explode(',', $writer->competences) as $competence)
                                                        <div class="badges-label">{{ trim($competence) }}</div>
                                                    @endforeach
                                                @else
                                                    <div class="badges-label">Liberal arts and humanities</div>
                                                    <div class="badges-label">History</div>
                                                    <div class="badges-label">Business and finance</div>
                                                    {{-- <div class="badges-label">No competences listed</div> --}}
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                    <div class="writer-footer">
                                        <div class="writers-card-btns">
                                            <div class="btns-flex our-goals-btns">
                                                <div class="primary-btn black-bg-btn">
                                                    <a href="{{ url('writer/'.$writer->writer_no) }}">About Writer</a>
                                                </div>
                                                <div class="primary-btn yellow-bg-btn">
                                                    <a href="{{ url('order-now/') }}">Hire Writer</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                            {{-- 
                            <div class="item">
                                <div class="writer-card">
                                    <div class="writer-card-header">
                                        <div class="writer-img">
                                            <img src="{{ asset('assets/images/writer-tumb-1.webp') }}" loading="lazy" width="101px" height="101px" class="img-fluid" alt="writer profile">
                                        </div>
                                        <div class="writer-profile">
                                            <div class="writer-card-title">
                                                <h4>Prof. Susan O.</h4>
                                                <img src="{{ asset('assets/images/verified-icon.webp') }}" loading="lazy" alt="verified writer" width="19px" height="19px" class="img-fluid">
                                            </div>
                                            <div class="writer-rating">
                                                <img src="{{ asset('assets/images/rating-yellow.webp') }}" loading="lazy" class="img-fluid" width="101px" height="17.701px" alt="writer rating">
                                                <p>5.0</p>
                                                <span>(1.5k reviews)</span>
                                            </div>
                                            <div class="writer-degree">
                                                <img src="{{ asset('assets/images/degree-icon.webp') }}" loading="lazy" class="img-fluid" width="23px" height="16.031px" alt="writer degree">
                                                <p>Master’s</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="writer-card-body">
                                        <div class="writer-stats-container">
                                            <div class="writer-stats">
                                                <p class="content">completed orders:</p>
                                                <div class="yellow-content">1489+</div>
                                            </div>
                                            <div class="writer-stats">
                                                <p class="content">Satisfaction Rate:</p>
                                                <div class="yellow-content">99.9%</div>
                                            </div>
                                        </div>
                                        <div class="writer-card-badges">
                                            <div class="badge-title">
                                                <h4>Competences</h4>
                                            </div>
                                            <div class="badge-lists">
                                                <div class="badges-label">Liberal arts and humanities</div>
                                                <div class="badges-label">History</div>
                                                <div class="badges-label">Business and finance</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="writer-footer">
                                        <div class="writers-card-btns">
                                            <div class="btns-flex our-goals-btns">
                                                <div class="primary-btn black-bg-btn">
                                                    <!-- <img src="{{ asset('assets/images/live-chat-icon.webp') }}" class="img-fluid" height="20px" width="23px" alt="Live Chat"> -->
                                                    <a href="#">View Profile</a>
                                                </div>
                                                <div class="primary-btn yellow-bg-btn">
                                                    <!-- <img src="{{ asset('assets/images/order-now-icon-black.webp') }}" class="img-fluid" height="25.3px" width="26.325px" alt="Live Chat"> -->
                                                    <a href="#">hire writer</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                             --}}
                        </div>
                    </div>
                </div>
                <div class="d-none d-md-block col-md-6 col-xl-4">
                    <div class="writer-right-yellow-banner">
                        <div class="title">
                            <h4>Want to discuss <br> your paper? Chat <br> with our writers <br> for FREE.</h4>
                        </div>
                        <div class="content">
                            <p>Let Us Introduce You To Our <br> Professional Essay Writers!</p>
                        </div>
                        <div class="yellow-banner-btn">
                            <div class="btns-flex our-goals-btns">
                                <div class="primary-btn black-bg-btn">
                                    <!-- <img src="{{ asset('assets/images/order-now-icon-black.webp') }}" class="img-fluid" height="25.3px" width="26.325px" alt="Live Chat"> -->
                                    <a href="{{ url('writers/') }}">View All writer's</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ===============  our writers section end ================ -->
    <!-- ===================================================== -->

    <!-- ===================================================== -->
    <!-- ===============  writing services in numbers section start ================ -->
    <section id="writing-services-in-number">
        <div class="container">
            <div class="title">
                <h3>Our dissertation help online writing service in Numbers</h3>
            </div>
            <div class="content">
                <p>We fancy you to choose our custom dissertation writing service. We believe that we're the best at what we do. To help you see it <br> our way, we've prepared some figures apropos of our dissertation help online writing service. Numerals always disclose the truth.</p>
            </div>
            <div class="row">
                <div class="col-md-3">
                    <div class="service-in-number-column-container service-in-number-border-1">
                        <div class="service-number-img">
                            <img src="{{ asset('assets/images/orders-completed-black.webp') }}" loading="lazy" width="69px" height="68.608px" alt="Orders Completed" class="img-fluid">
                        </div>
                        <div class="service-number-title">
                            <h4>10 Million+</h4>
                        </div>
                        <div class="service-number-content">
                            <p>Orders Completed</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="service-in-number-column-container">
                        <div class="service-number-img">
                            <img src="{{ asset('assets/images/happy-customers-black.webp') }}" loading="lazy" width="69px" height="68.608px" alt="Happy customers" class="img-fluid">
                        </div>
                        <div class="service-number-title">
                            <h4>99.99 %</h4>
                        </div>
                        <div class="service-number-content">
                            <p>Happy customers</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="service-in-number-column-container">
                        <div class="service-number-img">
                            <img src="{{ asset('assets/images/expert-writers-black.webp') }}" width="71.38px" height="70.276px" alt="Expert Writers" class="img-fluid">
                        </div>
                        <div class="service-number-title">
                            <h4>2000+</h4>
                        </div>
                        <div class="service-number-content">
                            <p>Expert Writers</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="service-in-number-column-container  service-in-number-border-2">
                        <div class="service-number-img">
                            <img src="{{ asset('assets/images/exellent-rating-black.webp') }}" loading="lazy" width="68.236px" height="70.08px" alt="Excellent Rating" class="img-fluid">
                        </div>
                        <div class="service-number-title">
                            <h4>4.9/5</h4>
                        </div>
                        <div class="service-number-content">
                            <p>Excellent Rating</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ===============  writing services in numbers  section end ================ -->
    <!-- ===================================================== -->

    <!-- ===================================================== -->
    <!-- ===============  Our samples section start ================ -->
    <section id="our-samples">
        <div class="container">
            <div class="row">
                <div class="col-xl-6">
                    <div class="samples-left-container">
                        <div class="mini-title">
                            <div class="circle-bg circle-black-bg"></div>
                            <p>Our Samples</p>
                        </div>
                        <div class="title">
                            <h3>Samples To Support Our Dissertation Help <br> online writing services!</h3>
                        </div>
                        <div class="content">
                            <p>We have provided our dissertation assistance in London, and across UK to uncountable students. Peek through the samples so you can be assured of us. We are pretty convinced, you won’t be disappointed. We are the UK’s best and most renowned dissertation providers. We have provided our dissertation assistance in London, and across UK to uncountable students.</p>
                            <p>Peek through the samples so you can be assured of us. We are pretty convinced, you won’t be disappointed. We are the UK’s best and most renowned dissertation providers. We have provided our dissertation assistance in London, and across UK to uncountable students.</p>
                            <p>We are the UK’s best and most renowned dissertation providers. We have provided our dissertation assistance in London, and across UK to uncountable students. Peek through the samples so you can be assured of us.</p>
                        </div>
                        <div class="samples-list-container">
                            <div class="samples-list">
                                <img src="{{ asset('assets/images/samples-list-icon.webp') }}" loading="lazy" class="img-fluid" width="15px" height="17px" alt="samples-list-icon">
                                <p>The samples are subjected to copyright,</p>
                            </div>
                            <div class="samples-list">
                                <img src="{{ asset('assets/images/samples-list-icon.webp') }}" loading="lazy" class="img-fluid" width="15px" height="17px" alt="samples-list-icon">
                                <p>We use samples with the client’s consent,</p>
                            </div>
                            <div class="samples-list">
                                <img src="{{ asset('assets/images/samples-list-icon.webp') }}" loading="lazy" class="img-fluid" width="15px" height="17px" alt="samples-list-icon">
                                <p>These are the real samples, prepared by our experts.</p>
                            </div>
                        </div>
                        <div class="samples-btns">
                            <div class="btns-flex our-samples-btns">
                                <div class="primary-btn black-bg-btn">
                                    <img src="{{ asset('assets/images/live-chat-icon-yellow.webp') }}" loading="lazy" class="img-fluid" height="20px" width="23px" alt="Live Chat">
                                    <a href="{{ config('settings.app_chat') }}">Live Chat</a>
                                </div>
                                <div class="primary-btn yellow-bg-btn">
                                    <img src="{{ asset('assets/images/order-now-icon-black.webp') }}" loading="lazy" class="img-fluid" height="25.3px" width="26.325px" alt="Live Chat">
                                    <a href="{{ route('order-now') }}">Order Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="samples-carousel-container">
                        <div class="samples-carousel-1 owl-carousel owl-theme">
                            @foreach ($samples->chunk(2) as $key => $chunk)
                            <div class="item" data-dot="{{ $key + 1}}">
                                <div class="samples-slider-container-main">
                                    @foreach ($chunk as $sample)
                                        <div class="samples-slider-container">
                                            <div class="sample-header d-flex gap-2 align-items-center">
                                                <div class="sample-img d-md-none">
                                                    <img src="{{ asset('assets/images/download-document-icon.webp') }}" loading="lazy" class="img-fluid" width="36px" height="48px" alt="download">
                                                </div>
                                                <div class="sample-title">
                                                    <h4>{{ $sample['title'] }}</h4>
                                                </div>
                                            </div>
                                            <div class="samples-body">
                                                <div class="sample-img d-none d-md-block">
                                                    <img src="{{ asset('assets/images/sample-img.webp') }}" loading="lazy" class="img-fluid" width="154px" height="237px" alt="Sample">
                                                </div>
                                                <div class="sample-body-inner">
                                                    <div class="sample-body-content">
                                                        <div class="samples-content samples-content-1">
                                                            <ul>
                                                                <li>Number of pages :</li>
                                                                <li>Urgency :</li>
                                                                <li>Style:</li>
                                                                <li>Level:</li>
                                                                <li>Discipline:</li>
                                                                <li>Number of sources:</li>
                                                            </ul>
                                                        </div>
                                                        <div class="samples-content samples-content-2">
                                                            <ul>
                                                                <li>{{ $sample['number_of_pages'] }}</li>
                                                                <li>5 days</li> <!-- Static; replace with dynamic data if needed -->
                                                                <li>{{ $sample['citation_style'] }}</li>
                                                                <li>{{ $sample['academic_level'] }}</li>
                                                                <li>Business</li> <!-- Static; replace with dynamic data if needed -->
                                                                <li>3</li> <!-- Static; replace with dynamic data if needed -->
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="sample-body-btn">
                                                        <div class="primary-btn yellow-bg-btn">
                                                            <a href="#"><span class="sample-btn-dark">Order Paper </span>like this for only <span class="sample-btn-dark">£377</span></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ===============  Our samples section end ================ -->
    <!-- ===================================================== -->

    <!-- ===================================================== -->
    <!-- ===============  why choose us section start ================ -->
    <section id="why-choose-us">
        <div class="container">
            <div class="row">
                <div class="col-xl-6">
                    <div class="choose-us-left">
                        <div class="mini-title">
                            <div class="circle-bg circle-yellow-bg"></div>
                            <p>Why chouse us</p>
                        </div>
                        <div class="title">
                            <h3>One more reason to choose our <br> dissertation help online</h3>
                        </div>
                        <div class="content">
                            <p class="bold-content">We are breaking traditional norm of ‘the best is always expensive’</p>
                            <p>The best UK based academic essay writers work for us. Each of them hold a minimum of a 2:1 UK Bachelor’s degree whilst 85% also hold a masters.</p>
                            <p>Quality shouldn’t have a price tag. And we take it to heart. At dissertation help online.co.uk, our essay writing service is distinguishable from others, thanks to the brilliance that resonates in every essay we write. After all, finding a cheap essay writing firm in the UK is easy. But reaching out to a service that brings value to your investment, now that’s something different. Fortunately, our affordable pricing packages, combined with a plethora of discounts.</p>
                        </div>
                        <div class="choose-us-btns d-none d-md-block">
                            <div class="btns-flex our-samples-btns">
                                <div class="primary-btn black-bg-btn">
                                    <img src="{{ asset('assets/images/live-chat-icon-yellow.webp') }}" loading="lazy" class="img-fluid" height="20px" width="23px" alt="Live Chat">
                                    <a href="{{ config('settings.app_chat') }}">Live Chat</a>
                                </div>
                                <div class="primary-btn yellow-bg-btn">
                                    <img src="{{ asset('assets/images/order-now-icon-black.webp') }}" loading="lazy" class="img-fluid" height="25.3px" width="26.325px" alt="Live Chat">
                                    <a href="{{ route('order-now') }}">Order Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="choose-us-right">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="choose-us-cards-container">
                                    <div class="choose-us-card">
                                        <div class="choose-us-card-img">
                                            <img src="{{ asset('assets/images/first-class-work-icon.webp') }}" loading="lazy" class="img-fluid" width="81px" height="80px" alt="First- Class work">
                                        </div>
                                        <div class="choose-us-card-title">
                                            <h4>First- Class work</h4>
                                        </div>
                                        <div class="choose-us-card-content">
                                            <p>The Quality of the delivered blog content is our top priority not depending on the complexity.</p>
                                        </div>
                                    </div>
                                    <div class="choose-us-card">
                                        <div class="choose-us-card-img">
                                            <img src="{{ asset('assets/images/protection-of-personal-icon.webp') }}" loading="lazy" class="img-fluid" width="81px" height="80px" alt="Protection of personal data">
                                        </div>
                                        <div class="choose-us-card-title">
                                            <h4>Protection of personal data</h4>
                                        </div>
                                        <div class="choose-us-card-content">
                                            <p>we ensure that you will remain anonymous at all times and that no one will ever know you.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="choose-us-cards-container">
                                    <div class="choose-us-card">
                                        <div class="choose-us-card-img">
                                            <img src="{{ asset('assets/images/start-from-scratch-icon.webp') }}" loading="lazy" class="img-fluid" width="81px" height="80px" alt="Start from scratch">
                                        </div>
                                        <div class="choose-us-card-title">
                                            <h4>Start from scratch</h4>
                                        </div>
                                        <div class="choose-us-card-content">
                                            <p>Every sentence we write is original, and if necessaries provide a plagiarism report.</p>
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
    <!-- ===============  why choose us section end ================ -->
    <!-- ===================================================== -->

    <!-- ===================================================== -->
    <!-- ===============  Testimonials section start ================ -->
    @include('partials.testimonials-section')
    <!-- ===============  Testimonials section end ================ -->
    <!-- ===================================================== -->

    <!-- ===================================================== -->
    <!-- ===============  help students section start ================ -->
    @include('partials.subjects-section')
    <!-- ===============  help students section end ================ -->
    <!-- ===================================================== -->

    <!-- ===================================================== -->
    <!-- ===============  faqs section start ================ -->
    @include('partials.faqs-section')
    <!-- ===============  faqs section end ================ -->
    <!-- ===================================================== -->

    <!-- ===================================================== -->
    <!-- ===============  Every Update section start ================ -->
    @include('partials.every-update-section')
    <!-- ===============  Every Update section end ================ -->
    <!-- ===================================================== -->

@endsection
