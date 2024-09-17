@extends('layouts.web')

@section('title')
How its Work Page
@endsection


<!-- Set the meta title -->
@section('head')
<!-- General Meta Tags -->
        <meta name="description" content="This is the How its Work page of our website.">
        <meta name="keywords" content="Discount, welcome, main page">

        <!-- Open Graph Meta Tags -->
        <meta property="og:title" content="How its Work Page">
        <meta property="og:description" content="This is the Discount page of our website.">
        <meta property="og:type" content="website">
        <meta property="og:url" content="{{ url()->current() }}">
        <meta property="og:image" content="{{ asset('images/discount-page.png') }}">

        <!-- Twitter Meta Tags -->
        <meta name="twitter:card" content="summary_large_image">
        <meta name="twitter:title" content="How its Work Page">
        <meta name="twitter:description" content="This is the how its work page of our website.">
        <meta name="twitter:image" content="{{ asset('images/discount-page.png') }}">
        <meta name="twitter:site" content="@YourTwitterHandle">
@endsection

@section('footer_scripts')

@endsection

@section('inner_page_hero_section_title')
How does it work?
@endsection

@section('inner_page_hero_section_mini_title')
how it works
@endsection

@section('content')

    <!-- ===================================================== -->
    <!-- ================ hero section start ===================== -->
    @include('partials.inner-pages-hero-section')
    <!-- ================ hero section end ======================= -->
    <!-- ===================================================== -->
    
    <!-- ===================================================== -->
    <!-- ================ How Its Works Section start ======================= -->
    <section id="how-its-works">
        <div class="container">
            <div class="row">
                <div class="col-xl-4">
                    <div class="works-section-left">
                        <img src="{{ asset('assets/images/give-us-the-details.webp') }}" width="536px" height="284.003px" class="img-fluid" loading="lazy" alt="Give Us The Details">
                    </div>
                </div>
                <div class="col-xl-8">
                    <div class="how-works-right">
                        <div class="circle-number">
                            <div class="prog-num prog-num-1"></div> 
                            <div class="prog-num-border-help"></div>
                        </div>
                        <div class="content-side">
                            <div class="title">
                                <h4>Give us the details</h4>
                            </div>
                            <div class="content">
                                <p>Fill out the order form with essay instructions your teacher has provided. We'll quickly match you with the right writers. All you need to do to register is give us an email address and we’ll generate an account for you.</p>
                            </div>
                            <div class="every-update-list-container">
                                <div class="list-container-title">
                                    <img src="{{ asset('assets/images/sky-blue-bulb-icon.webp') }}" class="img-fluid" loading="lazy" height="63px" width="63px" alt="Tips And Tricks">
                                    <h5>Tips and Tricks</h5>
                                </div>
                                <div class="every-update-list">
                                    <img src="{{ asset('assets/images/every-list-icon-yellow.webp') }}" loading="lazy" class="img-fluid" width="15px" height="17px" alt="every-list-icon-white">
                                    <p>The more detailed your instructions are, the more accurate the final paper will be.</p>
                                </div>
                                <div class="every-update-list">
                                    <img src="{{ asset('assets/images/every-list-icon-yellow.webp') }}" loading="lazy" class="img-fluid" width="15px" height="17px" alt="every-list-icon-white">
                                    <p>If needed, include relevant resources, links and academic level of English (ESL/ENL) in the Paper Instructions field.</p>
                                </div>
                                <div class="every-update-list">
                                    <img src="{{ asset('assets/images/every-list-icon-yellow.webp') }}" loading="lazy" class="img-fluid" width="15px" height="17px" alt="every-list-icon-white">
                                    <p>A further deadline may result in a lower price.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row flex-wrap-reverse pt-5 pt-xl-0">
                <div class="col-xl-8 help-row-2">
                    <div class="how-works-right how-works-right-2">
                        <div class="content-side">
                            <div class="title">
                                <h4>Choose your writer</h4>
                            </div>
                            <div class="content">
                                <p>Browse writers’ proposals, profiles, reviews, and rates. Chat with those you like the most and hire your favorite one. Our smart bidding system will recommend you a writer that suits your requirements the most.</p>
                            </div>
                            <div class="every-update-list-container">
                                <div class="list-container-title">
                                    <img src="{{ asset('assets/images/pink-bulb-icon.webp') }}" class="img-fluid" loading="lazy" height="63px" width="63px" alt="Tips And Tricks">
                                    <h5>Tips and Tricks</h5>
                                </div>
                                <div class="every-update-list">
                                    <img src="{{ asset('assets/images/every-list-icon-yellow.webp') }}" loading="lazy" class="img-fluid" width="15px" height="17px" alt="every-list-icon-white">
                                    <p>All writers’ reviews are genuine as they can only be provided by customers that have hired a writer before.</p>
                                </div>
                                <div class="every-update-list">
                                    <img src="{{ asset('assets/images/every-list-icon-yellow.webp') }}" loading="lazy" class="img-fluid" width="15px" height="17px" alt="every-list-icon-white">
                                    <p>Each writer specializes in a certain field and has already attained a high level of experience, you can easily check this information in the writer’s profile.</p>
                                </div>
                                <div class="every-update-list">
                                    <img src="{{ asset('assets/images/every-list-icon-yellow.webp') }}" loading="lazy" class="img-fluid" width="15px" height="17px" alt="every-list-icon-white">
                                    <p>The higher the level of the writer is, the better the quality of your work will be.</p>
                                </div>
                            </div>
                        </div>
                        <div class="circle-number circle-number-2">
                            <div class="prog-num prog-num-2"></div> 
                            <div class="prog-num-border-help prog-num-border-help-2"></div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4">
                    <div class="works-section-left">
                        <img src="{{ asset('assets/images/choose-your-writer.webp') }}" width="536px" height="284.003px" class="img-fluid" loading="lazy" alt="Give Us The Details">
                    </div>
                </div>
            </div>
            <div class="row pt-5 pt-xl-0">
                <div class="col-xl-4">
                    <div class="works-section-left">
                        <img src="{{ asset('assets/images/track-your-project.webp') }}" width="536px" height="291px" class="img-fluid" loading="lazy" alt="Give Us The Details">
                    </div>
                </div>
                <div class="col-xl-8  help-row-2">
                    <div class="how-works-right how-works-right-3">
                        <div class="circle-number circle-number-3">
                            <div class="prog-num prog-num-3"></div> 
                            <div class="prog-num-border-help prog-num-border-help-3"></div>
                        </div>
                        <div class="content-side">
                            <div class="title">
                                <h4>Track your projects with ease</h4>
                            </div>
                            <div class="content">
                                <p>Manage your orders easily: сheck status, see progress history, collaborate with your writer from your desktop or on the go, add funds to your balance and use it to pay for orders after you are 100% satisfied.</p>
                            </div>
                            <div class="every-update-list-container">
                                <div class="list-container-title">
                                    <img src="{{ asset('assets/images/purple-bulb-icon.webp') }}" class="img-fluid" loading="lazy" height="63px" width="63px" alt="Tips And Tricks">
                                    <h5>Tips and Tricks</h5>
                                </div>
                                <div class="every-update-list">
                                    <img src="{{ asset('assets/images/every-list-icon-yellow.webp') }}" loading="lazy" class="img-fluid" width="15px" height="17px" alt="every-list-icon-white">
                                    <p>You will always receive notifications. They will inform when a draft is ready, when you receive a chat message from your writer, or when the final paper is uploaded.</p>
                                </div>
                                <div class="every-update-list">
                                    <img src="{{ asset('assets/images/every-list-icon-yellow.webp') }}" loading="lazy" class="img-fluid" width="15px" height="17px" alt="every-list-icon-white">
                                    <p>By using the account dashboard you can check your available funds, view order history, or check current order progress.</p>
                                </div>
                                <div class="every-update-list">
                                    <img src="{{ asset('assets/images/every-list-icon-yellow.webp') }}" loading="lazy" class="img-fluid" width="15px" height="17px" alt="every-list-icon-white">
                                    <p>Maintain continuous communication with your writer via chat. This allows you to discuss any difficult points or important sections of the essay.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row flex-wrap-reverse pt-5 pt-xl-0">
                <div class="col-xl-8 help-row-2">
                    <div class="how-works-right how-works-right-4">
                        <div class="content-side">
                            <div class="title">
                                <h4>Choose your writer</h4>
                            </div>
                            <div class="content">
                                <p>Browse writers’ proposals, profiles, reviews, and rates. Chat with those you like the most and hire your favorite one. Our smart bidding system will recommend you a writer that suits your requirements the most.</p>
                            </div>
                            <div class="every-update-list-container">
                                <div class="list-container-title">
                                    <img src="{{ asset('assets/images/pink-bulb-icon.webp') }}" class="img-fluid" loading="lazy" height="63px" width="63px" alt="Tips And Tricks">
                                    <h5>Tips and Tricks</h5>
                                </div>
                                <div class="every-update-list">
                                    <img src="{{ asset('assets/images/every-list-icon-yellow.webp') }}" loading="lazy" class="img-fluid" width="15px" height="17px" alt="every-list-icon-white">
                                    <p>All writers’ reviews are genuine as they can only be provided by customers that have hired a writer before.</p>
                                </div>
                                <div class="every-update-list">
                                    <img src="{{ asset('assets/images/every-list-icon-yellow.webp') }}" loading="lazy" class="img-fluid" width="15px" height="17px" alt="every-list-icon-white">
                                    <p>Each writer specializes in a certain field and has already attained a high level of experience, you can easily check this information in the writer’s profile.</p>
                                </div>
                                <div class="every-update-list">
                                    <img src="{{ asset('assets/images/every-list-icon-yellow.webp') }}" loading="lazy" class="img-fluid" width="15px" height="17px" alt="every-list-icon-white">
                                    <p>The higher the level of the writer is, the better the quality of your work will be.</p>
                                </div>
                            </div>
                        </div>
                        <div class="circle-number circle-number-4  circle-number-2">
                            <div class="prog-num prog-num-4"></div> 
                            <div class="prog-num-border-help prog-num-border-help-4  prog-num-border-help-2"></div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4">
                    <div class="works-section-left">
                        <img src="{{ asset('assets/images/choose-your-writer.webp') }}" width="536px" height="284.003px" class="img-fluid" loading="lazy" alt="Give Us The Details">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ================ How Its Works Section end ======================= -->
    <!-- ===================================================== -->
    
    <!-- ===================================================== -->
    <!-- ===============  help in uk yellow bg banner section start ================ -->
    <section id="help-in-uk-yellow-bg">
        <div class="container">
            <div class="help-black-bg-container">
                <div class="help-title">
                    <h3>Professional Dissertation Help In UK To <br> All Academic Levels!</h3>
                </div>
                <div class="help-btn">
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
    </section>
    <!-- ===============  help in uk black bg banner section end ================ -->
    <!-- ===================================================== -->
    
    <!-- ===================================================== -->
    <!-- ===============  Testimonials section start ================ -->
    @include('partials.testimonials-section')
    <!-- ===============  Testimonials section end ================ -->
    <!-- ===================================================== -->

    <!-- ===================================================== -->
    <!-- ===============  Every Update section start ================ -->
    @include('partials.every-update-section')
    <!-- ===============  Every Update section end ================ -->
    <!-- ===================================================== -->

@endsection
