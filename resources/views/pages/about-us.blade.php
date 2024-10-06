@extends('layouts.web')

@section('title')
About Us Page
@endsection

<!-- Set the meta title -->
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
    <!-- =============== reason-why-choose section start =============== -->
     <section id="reason-why-choose">
        <div class="container">
            <div class="row">
                <div class="col-xl-6">
                    <div class="reason-choose-left-img text-center">
                        <img src="{{ asset('assets/images/reason-why-choose-left.webp') }}" loading="lazy" width="733px" height="733px" class="img-fluid" alt="Reason why to choose affordable">
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="reason-why-choose-right mt-5 mt-xl-0">
                        <div class="title">
                            <h4>Reason why To Choose best affordable dissertation Writing service</h4>
                        </div>
                        <div class="content">
                            <p>Helping students around the world since 2005, open 365 days a year, 24/7.</p>
                            <p>Established in 2005, dissertationhelponline.co.uk is one of the leading academic research companies, providing high-quality custom written essays, assignments and dissertations to students in the UK and around the world. Operated by Core values LTD, located at Kemp House 152-160 City Road, London, England, United Kingdom, we are one of the best providers of student writing services, and over 60% of our business is from returning customers.</p>
                            <p>We employ only the best writers in the industry. Our large team of expert writers all have degrees from UK universities (minimum 2:1, through to master’s and PhD) and includes specialists in all academic disciplines. You can be certain that the writer we assign to your custom paper will have the relevant experience and academic qualifications for your subject and that the work they produce for you will be of the highest academic standard.</p>
                            <p>Since 2005, we have built an excellent reputation in the academic research industry by delivering a genuine high-quality custom written essay, assignment, and dissertation service to clients who trust us. In an attempt to take advantage of this success, a number of online copycat companies have recently appropriated our registered company name and begun trading as ‘dissertation help online’. Beware of imitations trading under similar domain extensions, They are completely unrelated to our company and we cannot vouch for their credibility.</p>
                        </div>
                        <div class="btns-flex reason-why-choose-btns">
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
            <div class="row reason-why-choose-cards-container">
                <div class="col-md-6 col-xl-3">
                    <div class="help-card card-sky-blue">
                        <div class="help-card-img">
                            <img src="{{ asset('assets/images/round-clock-icon.webp') }}" loading="lazy" alt="Round the Clock Availability" width="81px" height="80px" class="img-fluid">
                        </div>
                        <div class="help-card-title">
                            <h4>Round the Clock Availability</h4>
                        </div>
                        <div class="help-card-content">
                            <p>The customer-support team associated with the Assignment Desk is available 24/7 to help you with any queries or doubts regarding our online assignment writing help service.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-3">
                    <div class="help-card dissertation-writing-service">
                        <div class="help-card-img">
                            <img src="{{ asset('assets/images/fast-assignment-icon.webp') }}" loading="lazy" height="80px" width="81px" alt="Fast Assignment Delivery" class="img-fluid">
                        </div>
                        <div class="help-card-title">
                            <h4>Fast Assignment Delivery</h4>
                        </div>
                        <div class="help-card-content">
                            <p>We understand how important it is for you to deliver your assignments on time. When you buy online assignment help from us, the team makes sure it is dropped to your inbox before.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-3">
                    <div class="help-card card-writting-book-yellow">
                        <div class="help-card-img">
                            <img src="{{ asset('assets/images/pound-coin-icon.webp') }}" loading="lazy" width="81px" height="80px" alt="Best Cheap Prices" class="img-fluid">
                        </div>
                        <div class="help-card-title">
                            <h4>Best Cheap Prices</h4>
                        </div>
                        <div class="help-card-content">
                            <p>The writers associated with us are ex-professionals from different walks of life. With years of experience professionally and flair for writing, they deliver A+ worthy assignments.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-3">
                    <div class="help-card card-writting-book-orange">
                        <div class="help-card-img">
                            <img src="{{ asset('assets/images/top-rated-review-icon.webp') }}" loading="lazy" width="81px" height="80px" alt="Top Rated Review" class="img-fluid">
                        </div>
                        <div class="help-card-title">
                            <h4>Top Rated Review 4.9/5</h4>
                        </div>
                        <div class="help-card-content">
                            <p>We have never disappointed our customers in terms of quality and information. Also, our customers do not leave any chance of appreciating us through positive reviews.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
     </section>
    <!-- =============== reason-why-choose section end ================ -->
    <!-- ===================================================== -->
    <!-- ===================================================== -->
    <!-- =============== achieved-milestoness section start ================ -->
     <section id="achieved-milestones">
        <div class="container">
            <div class="row">
                <div class="col-xl-6">
                    <div class="achieved-milestone-left">
                        <div class="title">
                            <h4>Achieved milestones</h4>
                        </div>
                        <div class="content">
                            <p>dissertation help online was always an idea that came to life in 2010. We have been into this field for more than10 years and now have established a trusted name among our audience. Our satisfied clients recommend us to their friends and others</p>
                            <p>You must have other essays and homework already piled up. Maybe you have a job to look after. You might be missing out on your social life as well. And what about your sleep? It’s time you say goodbye to all the hassle and leave your essay on professionals, so you can deal with other liabilities. With our essay writing service, you can get the best grades in class without even giving up on sleep. And that too in the most affordable prices. So what are you waiting for? Essay Mills UK is the writing company you need to trust.</p>
                        </div>
                        <div class="title">
                            <h4>2010 and beyond</h4>
                            <h6>Authentic & high-quality services</h6>
                        </div>
                        <div class="content">
                            <p>dissertation help online motive of dissertation help online is to facilitate the students with quality and authentic essays right in their budget. We are keen about the provision of outstanding quality of essays with affordable rates that must help our client to stand out bright in a crowd.</p>
                            <ul>
                                <li>2010 - dissertation help online  took initiative of helping people in writing essays</li>
                                <li>2015 - Got incredible writers for every niche</li>
                                <li>2020 - Started establishing the most trusted name among the audience</li>
                                <li>2024 - Thousands of satisfied clients around the globe</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="achieved-milestone-right">
                        <img src="{{ asset('assets/images/achieved-milestone.webp') }}" loading="lazy" class="img-fluid" width="673px" height="671.071px" alt="achieved milestone">
                    </div>
                </div>
            </div>
        </div>
     </section>
    <!-- =============== achieved-milestones section end ================ -->
    <!-- ===================================================== -->
    <!-- ===================================================== -->
    <!-- =============== Professional Dissertation Help section start ================ -->
     <section id="our-mission">
        <div class="container">
            <div class="row">
                <div class="col-xl-6">
                    <div class="our-mission-left-img">
                        <img src="{{ asset('assets/images/our-mission-left.webp') }}" loading="lazy" width="729px" height="779px" class="img-fluid" alt="Our Mission">
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="our-mission-right">
                        <ul class="nav nav-pills mb-3 d-none d-md-flex" id="pills-tab-1" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="our-missiontab-tab" data-bs-toggle="pill" data-bs-target="#our-missiontab" type="button" role="tab" aria-controls="our-missiontab" aria-selected="true">MBA Dissertation</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="our-vision-tab" data-bs-toggle="pill" data-bs-target="#our-vision" type="button" role="tab" aria-controls="our-vision" aria-selected="false">LAW Dissertation</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="our-value-tab" data-bs-toggle="pill" data-bs-target="#our-value" type="button" role="tab" aria-controls="our-value" aria-selected="false">Assignment writing</button>
                            </li>
                        </ul>
                        <div class="tab-content" id="pills-tabContent-1">
                            <div class="tab-pane fade show active" id="our-missiontab" role="tabpanel" aria-labelledby="our-missiontab-tab" tabindex="0">
                                <div class="tab-inner-container">
                                    <div class="title">
                                        <h4>Our vision is to provide better service - in over the world</h4>
                                    </div>
                                    <div class="content">
                                        <p>The Academic Papers UK aims to provide Premium Academic Writing Services at Affordable Prices And a Platform for academics and authors Where they May Get Handsome Remuneration for their.</p>
                                        <p>Academic writing agencies are innumerable, and all claim to be the best. However, premium quality and trustworthy online academic writing services are few that may offer students the professional assistance they need to improve their writing at low prices. The Academic Papers UK helps students write their essays, term papers, coursework, presentations, speeches, research proposals, dissertations, theses, research papers, and other academic projects at affordable rates with a money-back guarantee without compromising quality. </p>
                                        <p>Besides offering our services at affordable rates to students and researchers, we also offer handsome remuneration to our writers because we know that top writers do not work at low rates. Every customer benefit from our expertise is important and receives special individual attention. When you buy a model academic paper from us or order your paper at  we assign it to a competent and dedicated writer to ensure your success.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="our-vision" role="tabpanel" aria-labelledby="our-vision-tab" tabindex="0">
                                <div class="tab-inner-container">
                                    <div class="title">
                                        <h4>Our vision is to provide better service - in over the world</h4>
                                    </div>
                                    <div class="content">
                                        <p>The Academic Papers UK aims to provide Premium Academic Writing Services at Affordable Prices And a Platform for academics and authors Where they May Get Handsome Remuneration for their.</p>
                                        <p>Academic writing agencies are innumerable, and all claim to be the best. However, premium quality and trustworthy online academic writing services are few that may offer students the professional assistance they need to improve their writing at low prices. The Academic Papers UK helps students write their essays, term papers, coursework, presentations, speeches, research proposals, dissertations, theses, research papers, and other academic projects at affordable rates with a money-back guarantee without compromising quality. </p>
                                        <p>Besides offering our services at affordable rates to students and researchers, we also offer handsome remuneration to our writers because we know that top writers do not work at low rates. Every customer benefit from our expertise is important and receives special individual attention. When you buy a model academic paper from us or order your paper at  we assign it to a competent and dedicated writer to ensure your success.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="our-value" role="tabpanel" aria-labelledby="our-value-tab" tabindex="0">
                                <div class="tab-inner-container">
                                    <div class="title">
                                        <h4>Our vision is to provide better service - in over the world</h4>
                                    </div>
                                    <div class="content">
                                        <p>The Academic Papers UK aims to provide Premium Academic Writing Services at Affordable Prices And a Platform for academics and authors Where they May Get Handsome Remuneration for their.</p>
                                        <p>Academic writing agencies are innumerable, and all claim to be the best. However, premium quality and trustworthy online academic writing services are few that may offer students the professional assistance they need to improve their writing at low prices. The Academic Papers UK helps students write their essays, term papers, coursework, presentations, speeches, research proposals, dissertations, theses, research papers, and other academic projects at affordable rates with a money-back guarantee without compromising quality. </p>
                                        <p>Besides offering our services at affordable rates to students and researchers, we also offer handsome remuneration to our writers because we know that top writers do not work at low rates. Every customer benefit from our expertise is important and receives special individual attention. When you buy a model academic paper from us or order your paper at  we assign it to a competent and dedicated writer to ensure your success.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="btns-flex our-mission-btns">
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
    <!-- ===============  Professional Dissertation Help section end ================ -->
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
                            <img src="{{ asset('assets/images/expert-writers-black.webp') }}" loading="lazy" width="71.38px" height="70.276px" alt="Expert Writers" class="img-fluid">
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
    <!-- ===============  faqs section start ================ -->
    <section id="faqs">
        <div class="container">
            <div class="tabse-img d-block d-xl-none">
                <img src="{{ asset('assets/images/tabs-right-img.webp') }}" loading="lazy" width="812px" height="866px" class="img-fluid" alt="Tab tumb">
            </div>
            <div class="mini-title mt-5 m-xl-0">
                <div class="circle-bg circle-yellow-bg"></div>
                <p>Frequently Asked Questions</p>
            </div>
            <div class="title">
                <h3>Get Answers to the Most Asked Queries</h3>
            </div>
            <div class="content">
                <p>Help with writing a thesis is right here – merely hold out your hand! Professional dissertation writers formulate supreme capstones swiftly</p>
            </div>
            <div class="faqs-tabs-container">
                <ul class="nav nav-pills mb-3 d-none d-md-flex" id="pills-tab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="mba-dissertation-tab" data-bs-toggle="pill" data-bs-target="#mba-dissertation" type="button" role="tab" aria-controls="mba-dissertation" aria-selected="true">MBA Dissertation</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="law-dissertation-tab" data-bs-toggle="pill" data-bs-target="#mba-dissertation" type="button" role="tab" aria-controls="law-dissertation" aria-selected="false">LAW Dissertation</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#mba-dissertation" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">Assignment writing</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="assignment-writing-tab" data-bs-toggle="pill" data-bs-target="#mba-dissertation" type="button" role="tab" aria-controls="assignment-writing" aria-selected="false">Assignment writing</button>
                    </li>
                </ul>
                <div class="tab-content" id="pills-tabContent">
                    <div class="tab-pane fade show active" id="mba-dissertation" role="tabpanel" aria-labelledby="mba-dissertation-tab" tabindex="0">
                        <div class="row">
                            <div class="col-xl-6">
                                <div class="tabs-accordians-container">
                                    <div class="accordion accordion-flush" id="accordionFlushExample">
                                        <div class="accordion-item">
                                            <h2 class="accordion-header">
                                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="true" aria-controls="flush-collapseOne">Why Should I Choose Dissertation</button>
                                            </h2>
                                            <div id="flush-collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionFlushExample">
                                                <div class="accordion-body">Global Assignment Help is one such website that has 4500+ experts having in-depth knowledge and years of experience. We guarantee every student to provide with high-quality assignments. We provide a number of exclusive features that allow a student to have complete solution to all their writing issues. We have been trusted by millions.</div>
                                            </div>
                                        </div>
                                        <div class="accordion-item">
                                            <h2 class="accordion-header">
                                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">Why Should I Choose Global Assignment Help?</button>
                                            </h2>
                                            <div id="flush-collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                                                <div class="accordion-body">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quasi, praesentium!</div>
                                            </div>
                                        </div>
                                        <div class="accordion-item">
                                            <h2 class="accordion-header">
                                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">Why Should I Choose Global Assignment Help?</button>
                                            </h2>
                                            <div id="flush-collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                                                <div class="accordion-body">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis eos modi omnis minus, quasi quas.</div>
                                            </div>
                                        </div>
                                        <div class="accordion-item">
                                            <h2 class="accordion-header">
                                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFour" aria-expanded="false" aria-controls="flush-collapseFour">Why Should I Choose Global Assignment Help?</button>
                                            </h2>
                                            <div id="flush-collapseFour" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                                                <div class="accordion-body">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis eos modi omnis minus, quasi quas.</div>
                                            </div>
                                        </div>
                                        <div class="accordion-item">
                                            <h2 class="accordion-header">
                                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFive" aria-expanded="false" aria-controls="flush-collapseFive">Why Should I Choose Global Assignment Help?</button>
                                            </h2>
                                            <div id="flush-collapseFive" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                                                <div class="accordion-body">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis eos modi omnis minus, quasi quas.</div>
                                            </div>
                                        </div>
                                        <div class="accordion-item">
                                            <h2 class="accordion-header">
                                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseSix" aria-expanded="false" aria-controls="flush-collapseSix">Why Should I Choose Global Assignment Help?</button>
                                            </h2>
                                            <div id="flush-collapseSix" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                                                <div class="accordion-body">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis eos modi omnis minus, quasi quas.</div>
                                            </div>
                                        </div>
                                        <div class="accordion-item">
                                            <h2 class="accordion-header">
                                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseSeven" aria-expanded="false" aria-controls="flush-collapseSeven">Why Should I Choose Global Assignment Help?</button>
                                            </h2>
                                            <div id="flush-collapseSeven" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                                                <div class="accordion-body">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis eos modi omnis minus, quasi quas.</div>
                                            </div>
                                        </div>
                                        <div class="accordion-item">
                                            <h2 class="accordion-header">
                                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseEight" aria-expanded="false" aria-controls="flush-collapseEight">Why Should I Choose Global Assignment Help?</button>
                                            </h2>
                                            <div id="flush-collapseEight" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                                                <div class="accordion-body">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis eos modi omnis minus, quasi quas.</div>
                                            </div>
                                        </div>
                                        <div class="accordion-item">
                                            <h2 class="accordion-header">
                                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseNine" aria-expanded="false" aria-controls="flush-collapseNine">Why Should I Choose Global Assignment Help?</button>
                                            </h2>
                                            <div id="flush-collapseNine" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                                                <div class="accordion-body">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis eos modi omnis minus, quasi quas.</div>
                                            </div>
                                        </div>
                                        <div class="accordion-item">
                                            <h2 class="accordion-header">
                                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTen" aria-expanded="false" aria-controls="flush-collapseTen">Why Should I Choose Global Assignment Help?</button>
                                            </h2>
                                            <div id="flush-collapseTen" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                                                <div class="accordion-body">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis eos modi omnis minus, quasi quas.</div>
                                            </div>
                                        </div>
                                        <div class="accordion-item">
                                            <h2 class="accordion-header">
                                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseEleven" aria-expanded="false" aria-controls="flush-collapseEleven">Why Should I Choose Global Assignment Help?</button>
                                            </h2>
                                            <div id="flush-collapseEleven" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                                                <div class="accordion-body">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis eos modi omnis minus, quasi quas.</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="tabse-img d-none d-xl-block">
                                    <img src="{{ asset('assets/images/tabs-right-img.webp') }}"  loading="lazy" width="812px" height="866px" class="img-fluid" alt="Tab tumb">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="law-dissertation" role="tabpanel" aria-labelledby="law-dissertation-tab" tabindex="0">...</div>
                    <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab" tabindex="0">...</div>
                    <div class="tab-pane fade" id="assignment-writing" role="tabpanel" aria-labelledby="assignment-writing-tab" tabindex="0">...</div>
                </div>
            </div>
        </div>
    </section>
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
