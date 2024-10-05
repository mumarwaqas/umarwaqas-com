@extends('layouts.web')

@section('title')
Discount Page
@endsection
<!-- Set the meta title -->
@section('head')
<!-- General Meta Tags -->
        <meta name="description" content="This is the Discount page of our website.">
        <meta name="keywords" content="Discount, welcome, main page">

        <!-- Open Graph Meta Tags -->
        <meta property="og:title" content="Discount Page">
        <meta property="og:description" content="This is the Discount page of our website.">
        <meta property="og:type" content="website">
        <meta property="og:url" content="{{ url()->current() }}">
        <meta property="og:image" content="{{ asset('images/discount-page.png') }}">

        <!-- Twitter Meta Tags -->
        <meta name="twitter:card" content="summary_large_image">
        <meta name="twitter:title" content="Discount Page">
        <meta name="twitter:description" content="This is the discount page of our website.">
        <meta name="twitter:image" content="{{ asset('images/discount-page.png') }}">
        <meta name="twitter:site" content="@YourTwitterHandle">
@endsection

@section('footer_scripts')

@endsection

@section('inner_page_hero_section_title')
Promo Code and Discounts
@endsection

@section('inner_page_hero_section_mini_title')
Discounts
@endsection

@section('content')

    <!-- ===================================================== -->
    <!-- ================ hero section start ===================== -->
    @include('partials.inner-pages-hero-section')
    <!-- ================ hero section end ======================= -->
    <!-- ===================================================== -->

    <!-- ===================================================== -->
    <!-- =============== reason-why-choose section start =============== -->
    <section id="discount-cards-section">
        <div class="container">
            <div class="row">
                <div class="col-xl-4 mb-4 mb-xl-0">
                    <div class="dicount-cards">
                        <div class="card-title">
                            <h4>Get Discount</h4>
                        </div>
                        <div class="card-sale-container">
                            <div class="card-percentage-flex">
                                <h5>5%</h5>
                                <p>OFF</p>
                            </div>
                            <div class="card-badge">15+ Pages</div>
                        </div>
                        <div class="card-content">
                            <p>You are eligible for 5% life-time discount when you <br> order 15 pages in total</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 mb-4 mb-xl-0">
                    <div class="dicount-cards">
                        <div class="card-title">
                            <h4>Amazing discount</h4>
                        </div>
                        <div class="card-sale-container">
                            <div class="card-percentage-flex">
                                <h5>10%</h5>
                                <p>OFF</p>
                            </div>
                            <div class="card-badge">50+ Pages</div>
                        </div>
                        <div class="card-content">
                            <p>You are eligible for 5% life-time discount when you <br> order 15 pages in total</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 mb-4 mb-xl-0">
                    <div class="dicount-cards">
                        <div class="card-title">
                            <h4>Life time Discount</h4>
                        </div>
                        <div class="card-sale-container">
                            <div class="card-percentage-flex">
                                <h5>15%</h5>
                                <p>OFF</p>
                            </div>
                            <div class="card-badge">100+ Pages</div>
                        </div>
                        <div class="card-content">
                            <p>You are eligible for 5% life-time discount when you <br> order 15 pages in total</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- =============== reason-why-choose section end ================ -->
    <!-- ===================================================== -->

    <!-- ===================================================== -->
    <!-- =============== attention students section start ================ -->
    <section id="attention-students">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-xl-4">
                    <div class="attention-left rounded-areas">
                        <div class="attention-left-flex">
                            <img src="{{ asset('assets/images/attention-students-icon.webp') }}" loading="lazy" class="img-fluid" width="83.688px" height="96px"  alt="Attention">
                            <h4>Attention <br> All Students!</h4>
                        </div>
                        <div class="btns-flex our-samples-btns d-block d-xl-none">
                            <div class="primary-btn yellow-bg-btn">
                                <img src="{{ asset('assets/images/order-now-icon-black.webp') }}" loading="lazy" class="img-fluid" height="25.3px" width="26.325px" alt="Live Chat">
                                <a href="{{ route('order-now') }}">Click Here to first Order</a>
                            </div>
                        </div>
                        <div class="border-right"></div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-4">
                    <div class="attention-center rounded-areas">
                        <p>Place your first order use Promo code</p>
                        <div class="attention-badge">ADWS5485483</div>
                        <p>to get<span>Extra 10% discount</span></p>
                        <div class="btns-flex our-samples-btns d-block d-xl-none">
                            <div class="primary-btn black-bg-btn">
                                <img src="{{ asset('assets/images/live-chat-icon-yellow.webp') }}" loading="lazy" class="img-fluid" height="20px" width="23px" alt="Live Chat">
                                <a href="{{ config('settings.app_chat') }}">Click Here to live chat</a>
                            </div>
                        </div>
                        <div class="border-right"></div>
                    </div>
                </div>
                <div class="col-xl-4 d-none d-xl-block">
                    <div class="attention-right-btns">
                        <div class="btns-flex our-samples-btns">
                            <div class="primary-btn black-bg-btn">
                                <img src="{{ asset('assets/images/live-chat-icon-yellow.webp') }}" loading="lazy" class="img-fluid" height="20px" width="23px" alt="Live Chat">
                                <a href="{{ config('settings.app_chat') }}">Click Here to live chat</a>
                            </div>
                            <div class="primary-btn yellow-bg-btn">
                                <img src="{{ asset('assets/images/order-now-icon-black.webp') }}" loading="lazy" class="img-fluid" height="25.3px" width="26.325px" alt="Live Chat">
                                <a href="{{ route('order-now') }}">Click Here to first Order</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- =============== attention students section end ================ -->
    <!-- ===================================================== -->

    <!-- ===================================================== -->
    <!-- =============== promo codes and disounts content section start ================ -->
     <div id="promo-code-and-discount-content"  class="content-sec-with-shadow">
        <div class="container">
            <div class="content-container">
                <h4>dissertation help online Promo Codes and Discounts</h4>
                <p>Need to get an essay written but simply don’t have the time? PapersOwl allows you to hire professional and experienced writers to do all the research and writing for you so that you can hand in a top-quality paper stress-free.</p>
                <p>The high level of professional experience held by our writers means that all your essays will be thoroughly researched and well-written, so there’s no need to sacrifice quality in exchange for saving time on your work. Using PapersOwl.com only becomes easier thanks to the number of money-saving discounts and promo codes available, making that helping hand even easier to grab. All of our services are private, reliably on-time, and subject to a plagiarism-free policy. In addition to our trustworthy paper writing services, we boast a set of discounts, promo code opportunities, a referral program, and more. Check out the following discounts to see how you can save time and money on your essays today!</p>
                <h4>referral program</h4>
                <p>We offer you the chance to have your generosity rewarded! Every time you help out a friend by referring them to, you have the opportunity to make use of the  referral program. With this program, for each friend you refer a gift of £35 will be added to your balance.</p>
                <p>All you have to do is copy the referral link in your account and send it to anyone who wants to sign up. When they register with your unique code, they’ll get a 10% discount on their first order. And once their first order has been placed, you receive £35! The best part? There’s no limit to the number of friends you can refer to, meaning that you can always get more money added to your balance and save money on your next essay. With our referral program, everybody’s a winner.</p>
                <h4>Promo codes</h4>
                <p>Papers sends regular promo codes via email that offer account holders discounts of 5-10% on academic papers they order via the site. Every season these offers change, so regular customers should routinely check their mail to see what new offers are available to help them save time and money on their essays! Papers sends regular promo codes via email that offer account holders discounts of 5-10% on academic papers they order via the site. Every season these offers change, so regular customers should routinely check their mail to see what new offers are available to help them save time and money on their essays!</p>
                <h4>Review discount</h4>
                <p>Affordable Dissertation cares about your voice and your experience. That’s why we created the review discount system. For every client review left on trustpilot.com or reviews.io, customers have the opportunity to claim a discount on their next PapersOwl.com essay order. This discount gives users 10% off the price of their next order, and is a great way to save money while sharing your user experience! Affordable Dissertation cares about your voice and your experience. That’s why we created the review discount system. For every client review left on trustpilot.com or reviews.io, customers have the opportunity to claim a discount on their next PapersOwl.com essay order. This discount gives users 10% off the price of their next order, and is a great way to save money while sharing your user experience!</p>
                <h4>Special Pricing and Discounts</h4>
                <p>From time to time, we offer special pricing or discounts. If you have subscribed with your email address, these notifications will be sent to you, so you don’t miss out. They are also advertised on our site. You don’t want to miss these.</p>
            </div>
        </div>
     </div>
    <!-- =============== promo codes and disounts content section end ================ -->
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
    <!-- ===============  Every Update section start ================ -->
    @include('partials.every-update-section')
    <!-- ===============  Every Update section end ================ -->
    <!-- ===================================================== -->
@endsection
