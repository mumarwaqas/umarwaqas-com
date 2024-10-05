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
                <h3>Why Should You Hire Our Affordable Essay Writing Services?</h3>
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
                                <h3>We Always Deliver A-Grade Essay Papers</h3>
                            </div>
                            <div class="featured-content">
                                <ol>
                                    <li>We craft the highest quality, fully referenced papers to get you an A+ Grade.</li>
                                    <li>Our Quality Assurance Staff checks each essay for grammar, language, plagiarism, fluency, structure & layout, and relevancy.</li>
                                    <li>We submit a paper only after our QA department approves it and ensures it meets the standards of your desired grades set by your institution.</li>
                                </ol>
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
                                <h3>One-Stop Solution for Your All Essay Writing Needs</h3>
                            </div>
                            <div class="featured-content">
                                <ol>
                                    <li>With 1000+ expert UK writers in our team, we are capable of offering;</li>
                                    <li>University essay writing service</li>
                                    <li>Undergraduate essay writing services</li>
                                    <li>Academic essay writing help</li>
                                    <li>Law Essay Writing Service UK</li>
                                    <li>Admission Essay Writing Service</li>
                                    <li>Master’s Essay Writing Service</li>
                                </ol>
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
                                <h3>A Legit UK-Based Essay Help Firm</h3>
                                <h3><br></h3>
                            </div>
                            <div class="featured-content">
                                <ol>
                                    <li>Cheap Essay Writing UK is a genuine and authentic writing company trusted since 2003 by students studying in the UK, Europe, and around the globe.</li>
                                    <li>1 Million+ satisfied customers</li> 
                                    <li>99% of customers’ return rate</li> 
                                    <li>1.6 million+ Projects Completed</li>
                                </ol>
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
                            <h3>Your Search For the UK’s Best Essay Writing Service Ends Here!</h3>
                        </div>
                        <div class="content">
                            <p>Cheap Essay Writing UK aims to provide the best essay writing services for students who need professional assistance to improve their grades without breaking the bank. We are an experienced company to help with writing essays for worldwide students.</p>
                        </div>
                        <div class="list-container row">
                            <div class="col-md-6">
                                <div class="list-content">
                                    <img src="{{ asset('assets/images/yellow-check-icon.webp') }}" loading="lazy" width="30.843px" height="23px" class="img-fluid" alt="Check yellow">
                                    <p>Flawless Essay Format</p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="list-content">
                                    <img src="{{ asset('assets/images/yellow-check-icon.webp') }}" loading="lazy" width="30.843px" height="23px" class="img-fluid" alt="Check yellow">
                                    <p>Limitless Revisions</p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="list-content">
                                    <img src="{{ asset('assets/images/yellow-check-icon.webp') }}" loading="lazy" width="30.843px" height="23px" class="img-fluid" alt="Check yellow">
                                    <p>All Subjects Covered</p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="list-content">
                                    <img src="{{ asset('assets/images/yellow-check-icon.webp') }}" loading="lazy" width="30.843px" height="23px" class="img-fluid" alt="Check yellow">
                                    <p>Guarantee to the Top Grades</p>
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
                            <img src="{{ asset('assets/images/writting-book-sky-blue-icon.webp') }}" loading="lazy" alt="Essay writing service" width="44px" height="46px" class="img-fluid">
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
                            <img src="{{ asset('assets/images/writting-hand-pink-icon.webp') }}" loading="lazy" height="52px" width="43px" alt="Dissertation writing service" class="img-fluid">
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
                            <img src="{{ asset('assets/images/writting-book-yellow-icon.webp') }}" loading="lazy" width="45px" height="44px" alt="Personal Statement Writing" class="img-fluid">
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
                            <img src="{{ asset('assets/images/writting-book-orange-icon.webp') }}" loading="lazy" width="44px" height="47px" alt="Assignment writing service" class="img-fluid">
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
                            <img src="{{ asset('assets/images/writting-book-edit-purple-icon.webp') }}" loading="lazy" width="52px" height="41px" alt="Proofreading & Editing service" class="img-fluid">
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
                            <img src="{{ asset('assets/images/cv-writting-icon.webp') }}" loading="lazy" width="43px" height="44px" alt="CV writing service" class="img-fluid">
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
                            <img src="{{ asset('assets/images/course-work-writting-icon.webp') }}" loading="lazy" width="46px" height="52px" alt="Coursework writing service" class="img-fluid">
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
                            <img src="{{ asset('assets/images/hand-up-check-icon.webp') }}" loading="lazy" width="53px" height="46px" alt="Marking Writing service" class="img-fluid">
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
    @include('partials.how-it-works-section')
    <!-- ===============  how it works section end ================ -->
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
                                                            <a href="{{ route('sample', $sample['slug']) }}"><span class="sample-btn-dark">Order Paper </span>like this for only <span class="sample-btn-dark">£377</span></a>
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
                                        <div class="choose-us-card-img choose-us-card-img-1">
                                            <img src="{{ asset('assets/images/first-class-work-icon.webp') }}" loading="lazy" class="img-fluid" width="40px" height="52.82px" alt="First- Class work">
                                        </div>
                                        <div class="choose-us-card-title">
                                            <h4>First- Class work</h4>
                                        </div>
                                        <div class="choose-us-card-content">
                                            <p>The quality of the delivered blog content is our top priority not depending on the complexity.</p>
                                        </div>
                                    </div>
                                    <div class="choose-us-card">
                                        <div class="choose-us-card-img choose-us-card-img-2">
                                            <img src="{{ asset('assets/images/protection-of-personal-icon.webp') }}" loading="lazy" class="img-fluid"  width="41px" height="45px" alt="Protection of personal data">
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
                                        <div class="choose-us-card-img choose-us-card-img-3">
                                            <img src="{{ asset('assets/images/start-from-scratch-icon.webp') }}" loading="lazy" class="img-fluid"  width="41px" height="45px" alt="Start from scratch">
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
