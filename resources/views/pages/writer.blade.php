@extends('layouts.web')

@section('title')
{{ $writer['name'] }}
@endsection

<!-- Set the meta title -->
@section('head')
<!-- General Meta Tags -->
        <meta name="description" content="This is the Our Writers page of our website.">
        <meta name="keywords" content="Our Writers, welcome, main page">

        <!-- Open Graph Meta Tags -->
        <meta property="og:title" content="{{ $writer['name'] }}">
        <meta property="og:description" content="This is the Our Writers page of our website.">
        <meta property="og:type" content="website">
        <meta property="og:url" content="{{ url()->current() }}">
        <meta property="og:image" content="{{ asset('images/discount-page.png') }}">

        <!-- Twitter Meta Tags -->
        <meta name="twitter:card" content="summary_large_image">
        <meta name="twitter:title" content="Our Writers Page">
        <meta name="twitter:description" content="This is the Our Writers page of our website.">
        <meta name="twitter:image" content="{{ asset('images/discount-page.png') }}">
        <meta name="twitter:site" content="@YourTwitterHandle">
@endsection

@section('footer_scripts')

@endsection

@section('inner_page_hero_section_title')
Our writer Profile
@endsection

@section('inner_page_hero_section_mini_title')
{{ $writer['name'] }}
@endsection

@section('content')

    <!-- ===================================================== -->
    <!-- ================ hero section start ===================== -->
    @include('partials.inner-pages-hero-section')
    <!-- ================ hero section end ======================= -->
    <!-- ===================================================== -->

    <!-- ===================================================== -->
    <!-- ================ Our Writer section start ======================= -->
    <section id="our-writer-profile-page-section">
        <div class="container">
            <div class="title">
                <h3>Check Our Real Time Experts Writers</h3>
            </div>
            <div class="content">
                <p>Each and every essays writers on our team is a qualified expert in the area they are writing on. What this means is that you can rest assured knowing that your essay writer <br> knows the subject matter and the language that should be used. So, whether you're in need of a well researched extended essay or an English narrative.</p>
            </div>
            <div class="row">
                <div class="col-xl-4">

                    <div class="writer-profile-left">
                        <div class="writer-profile-card">
                            <div class="writer-card-header">
                                <div class="writer-img">
                                    <img src="{{ asset('assets/images/writer-tumb-1.webp') }}" loading="lazy" width="101px" height="101px" class="img-fluid" alt="writer profile">
                                </div>
                                <div class="writer-profile">
                                    <div class="writer-card-title">
                                        <h4>Prof. {{ $writer['name'] }}</h4>
                                        <img src="{{ asset('assets/images/verified-icon.webp') }}" loading="lazy" alt="verified writer" width="19px" height="19px" class="img-fluid">
                                    </div>
                                    <div class="writer-rating">
                                        <img src="{{ asset('assets/images/rating-yellow.webp') }}" loading="lazy" class="img-fluid" width="101px" height="17.701px" alt="writer rating">
                                        <p>{{ $writer['rating'] }}</p>
                                        <span>({{ number_format($writer['reviews']) }} reviews)</span>
                                    </div>
                                    <div class="writer-degree">
                                        <img src="{{ asset('assets/images/degree-icon.webp') }}" loading="lazy" class="img-fluid" width="23px" height="16.031px" alt="writer degree">
                                        <p>{{ $writer['education'] }}</p>
                                    </div>
                                </div>
                            </div>
                            <div class="writer-card-body">
                                <div class="writer-stats-container">
                                    <div class="writer-stats">
                                        <p class="content">Completed Orders:</p>
                                        <div class="yellow-content">{{ $writer['orders'] }}+</div>
                                    </div>
                                    <div class="writer-stats">
                                        <p class="content">Satisfaction Rate:</p>
                                        <div class="yellow-content">{{ $writer['success_rate'] }}%</div>
                                    </div>
                                </div>
                                <div class="writer-card-badges">
                                    <div class="badge-title">
                                        <h4>Competences</h4>
                                    </div>
                                    <div class="badge-lists">
                                        <!-- Assuming competences are a comma-separated string -->
                                        @if(!empty($writer['competences']))
                                        @foreach(explode(',', $writer['competences']) as $competence)
                                            @if(trim($competence) != '')
                                            <div class="badges-label">{{ trim($competence) }}</div>
                                            @endif
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
                                        <div class="primary-btn yellow-bg-btn">
                                            <!-- <img src="{{ asset('assets/images/order-now-icon-black.webp') }}" class="img-fluid" height="25.3px" width="26.325px" alt="Live Chat"> -->
                                            <a href="{{ url('order-now/') }}">hire writer</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="writer-about">
                            <div class="title">
                                <h4>About Writer:</h4>
                            </div>
                            <div class="content">
                                <p>{{ $writer['about'] }}</p>
                            </div>
                        </div>
                    </div>
                    
                </div>
                <div class="col-xl-8">
                    <div class="writer-profile-right">
                        <div class="writer-user-reviews">
                            <div class="writer-review-header">
                                <div class="writer-review-total-rating">
                                    <span class="writer-totla-rating">4.9</span>
                                    <img src="{{ asset('assets/images/rating-yellow.webp') }}" loading="lazy" class="img-fluid" width="101px" height="17.701px" alt="writer rating">
                                    <span class="total-reviews">1594 Reviews</span>
                                </div>
                                <div class="writer-review-content">
                                    <p class="content-bold">Overall Rating 4548 </p>
                                    <p class="content-light">Review Our Customers Feedback</p>
                                </div>
                            </div>
                            <div class="writer-review-body">
                                <div class="writer-review-card">
                                    <div class="writer-review-card-header">
                                        <div class="user-details">
                                            <span>User ID:</span>
                                            <span>TAP-138484</span>
                                            <img src="{{ asset('assets/images/rating-yellow.webp') }}" loading="lazy" class="img-fluid" width="101px" height="17.701px" alt="writer rating">
                                        </div>
                                        <div class="review-details d-none d-md-flex">
                                            <div class="review-date">Dec 29,2023</div>
                                            <div class="review-category">Assignment Helps</div>
                                        </div>
                                    </div>
                                    <div class="writer-review-card-body">
                                        <div class="content">
                                            <h4>Very good</h4>
                                            <p>I felt the writer really grasped what I was looking for. Without overly changing the text he proof read and edited it in such a way that the whole piece read more academically.</p>
                                        </div>
                                        <div class="review-details d-flex d-md-none">
                                            <div class="review-date">Dec 29,2023</div>
                                            <div class="review-category">Assignment Helps</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="writer-review-card">
                                    <div class="writer-review-card-header">
                                        <div class="user-details">
                                            <span>User ID:</span>
                                            <span>TAP-138484</span>
                                            <img src="{{ asset('assets/images/rating-yellow.webp') }}" loading="lazy" class="img-fluid" width="101px" height="17.701px" alt="writer rating">
                                        </div>
                                        <div class="review-details d-none d-md-flex">
                                            <div class="review-date">Dec 29,2023</div>
                                            <div class="review-category">Assignment Helps</div>
                                        </div>
                                    </div>
                                    <div class="writer-review-card-body">
                                        <div class="content">
                                            <h4>Very good</h4>
                                            <p>I felt the writer really grasped what I was looking for. Without overly changing the text he proof read and edited it in such a way that the whole piece read more academically.</p>
                                        </div>
                                        <div class="review-details d-flex d-md-none">
                                            <div class="review-date">Dec 29,2023</div>
                                            <div class="review-category">Assignment Helps</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="writer-review-card">
                                    <div class="writer-review-card-header">
                                        <div class="user-details">
                                            <span>User ID:</span>
                                            <span>TAP-138484</span>
                                            <img src="{{ asset('assets/images/rating-yellow.webp') }}" loading="lazy" class="img-fluid" width="101px" height="17.701px" alt="writer rating">
                                        </div>
                                        <div class="review-details d-none d-md-flex">
                                            <div class="review-date">Dec 29,2023</div>
                                            <div class="review-category">Assignment Helps</div>
                                        </div>
                                    </div>
                                    <div class="writer-review-card-body">
                                        <div class="content">
                                            <h4>Very good</h4>
                                            <p>I felt the writer really grasped what I was looking for. Without overly changing the text he proof read and edited it in such a way that the whole piece read more academically.</p>
                                        </div>
                                        <div class="review-details d-flex d-md-none">
                                            <div class="review-date">Dec 29,2023</div>
                                            <div class="review-category">Assignment Helps</div>
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
    <!-- ================ Our Writer section end ======================= -->
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
