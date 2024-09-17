@extends('layouts.web')

@section('title')
Our Reviews Page
@endsection

<!-- Set the meta title -->
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
Our Reviews
@endsection

@section('inner_page_hero_section_mini_title')
Our Reviews
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
                                    <a href="#">View All writer's</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-8">
                    <div class="reviews-carousel-container">
                        <div class="reviews-carousel-1 owl-carousel owl-theme">
                            <div class="item">
                                <div class="review-card">
                                    <div class="review-card-header">
                                        <div class="review-title">
                                            <img src="{{ asset('assets/images/rating-yellow.webp') }}" loading="lazy" class="img-fluid" width="147px" height="25px" alt="Review rating">
                                            <h5>Healthcare</h5>
                                        </div>
                                        <div class="review-details">
                                            <div class="review-date">31 Jan 2023</div>
                                            <div class="review-category review-content">Essay: 1 Page</div>
                                            <div class="review-deadline review-content">Deadline: 12 hour</div>
                                        </div>
                                    </div>
                                    <div class="review-card-body">
                                        <div class="content">
                                            <p>I have worked with this company two times now and I can say only positive things about them. You can actually talk to your writer and ask questions as the writing takes place. I did not have to pay any extra and knew how much it will be. My research paper on special education.</p>
                                        </div>
                                    </div>
                                    <div class="review-card-footer">
                                        <div class="review-author">
                                            <div class="author-profile">
                                                <img src="{{ asset('assets/images/review-author.webp') }}" width="70px" height="70px" class="img-fluid" loading="lazy" alt="Review author">
                                            </div>
                                            <div class="author-details">
                                                <div class="title">Nicosia, Cyprus</div>
                                                <div class="user-id">User ID: 5987568</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="review-card">
                                    <div class="review-card-header">
                                        <div class="review-title">
                                            <img src="{{ asset('assets/images/rating-yellow.webp') }}" loading="lazy" class="img-fluid" width="147px" height="25px" alt="Review rating">
                                            <h5>Healthcare</h5>
                                        </div>
                                        <div class="review-details">
                                            <div class="review-date">31 Jan 2023</div>
                                            <div class="review-category review-content">Essay: 1 Page</div>
                                            <div class="review-deadline review-content">Deadline: 12 hour</div>
                                        </div>
                                    </div>
                                    <div class="review-card-body">
                                        <div class="content">
                                            <p>I have worked with this company two times now and I can say only positive things about them. You can actually talk to your writer and ask questions as the writing takes place. I did not have to pay any extra and knew how much it will be. My research paper on special education.</p>
                                        </div>
                                    </div>
                                    <div class="review-card-footer">
                                        <div class="review-author">
                                            <div class="author-profile">
                                                <img src="{{ asset('assets/images/review-author.webp') }}" width="70px" height="70px" class="img-fluid" loading="lazy" alt="Review author">
                                            </div>
                                            <div class="author-details">
                                                <div class="title">Nicosia, Cyprus</div>
                                                <div class="user-id">User ID: 5987568</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="review-card">
                                    <div class="review-card-header">
                                        <div class="review-title">
                                            <img src="{{ asset('assets/images/rating-yellow.webp') }}" loading="lazy" class="img-fluid" width="147px" height="25px" alt="Review rating">
                                            <h5>Healthcare</h5>
                                        </div>
                                        <div class="review-details">
                                            <div class="review-date">31 Jan 2023</div>
                                            <div class="review-category review-content">Essay: 1 Page</div>
                                            <div class="review-deadline review-content">Deadline: 12 hour</div>
                                        </div>
                                    </div>
                                    <div class="review-card-body">
                                        <div class="content">
                                            <p>I have worked with this company two times now and I can say only positive things about them. You can actually talk to your writer and ask questions as the writing takes place. I did not have to pay any extra and knew how much it will be. My research paper on special education.</p>
                                        </div>
                                    </div>
                                    <div class="review-card-footer">
                                        <div class="review-author">
                                            <div class="author-profile">
                                                <img src="{{ asset('assets/images/review-author.webp') }}" width="70px" height="70px" class="img-fluid" loading="lazy" alt="Review author">
                                            </div>
                                            <div class="author-details">
                                                <div class="title">Nicosia, Cyprus</div>
                                                <div class="user-id">User ID: 5987568</div>
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
    <!-- ================ Reviews section end ======================= -->
    <!-- ===================================================== -->



    <!-- ===================================================== -->
    <!-- ===============  Every Update section start ================ -->
    @include('partials.every-update-section')
    <!-- ===============  Every Update section end ================ -->
    <!-- ===================================================== -->


@endsection
