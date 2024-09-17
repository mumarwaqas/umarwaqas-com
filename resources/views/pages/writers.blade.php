@extends('layouts.web')

@section('title')
Our Writers Page
@endsection

<!-- Set the meta title -->
@section('head')
<!-- General Meta Tags -->
        <meta name="description" content="This is the Our Writers page of our website.">
        <meta name="keywords" content="Our Writers, welcome, main page">

        <!-- Open Graph Meta Tags -->
        <meta property="og:title" content="Our Writers Page">
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
Our Writers
@endsection

@section('inner_page_hero_section_mini_title')
Our Writers
@endsection

@section('content')

    <!-- ===================================================== -->
    <!-- ================ hero section start ===================== -->
    @include('partials.inner-pages-hero-section')
    <!-- ================ hero section end ======================= -->
    <!-- ===================================================== -->

    <!-- ===================================================== -->
    <!-- ================ Our Writers section start ======================= -->
    <section id="our-writers-page-section">
        <div class="container">
            <div class="title">
                <h3>Struggling to choose the Qualified writer?</h3>
            </div>
            <div class="content">
                <p>Each and every essays writers on our team is a qualified expert in the area they are writing on. What this means is that you can rest assured knowing that your essay writer <br> knows the subject matter and the language that should be used. So, whether you're in need of a well researched extended essay or an English narrative.</p>
            </div>
            <div class="row">
                <div class="col-xl-8">
                    <div class="writers-carousel-container">
                        <div class="writers-carousel">
                            <div class="writers-carousel-2 owl-carousel owl-theme">
                                {{-- {{ $writers }} --}}
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
                                                    <p>{{ $writer->education }}</p>
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
                                                        <a href="{{ route('writer', $writer->slug) }}">About Writer</a>
                                                    </div>
                                                    <div class="primary-btn yellow-bg-btn">
                                                        <a href="{{ route('order-now') }}">Hire Writer</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                            <div class="btns-flex  writer-show-more-btn">
                                <div class="primary-btn black-bg-btn">
                                    <a href="#">Show more</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4">
                    <div class="writers-right-container">
                        @include('partials.free-features')
                        @include('partials.payment-and-security')
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ================ Our Writers section end ======================= -->
    <!-- ===================================================== -->

    <!-- ===================================================== -->
    <!-- ================ Our Writers section end ======================= -->
    <section class="content-sec-with-shadow">
        <div class="container">
            <div class="content-container">
                <h4>How our experts can write essay papers for you</h4>
                <p>When the burdens of school start to become too overwhelming, many students are turning to academic essay writers UK for assistance. Through an essay writing service, you're able to hire an essay writer who is well versed in the topic you need to cover, helping you to get the work done, relieve some stress and ensure that your grade is not put in jeopardy. Online essay writers UK that staff the team at Ox Essays are high level professionals, who have the necessary experience to write essay papers on their subject of expertise.</p>
                <h4>Students who have used our dissertation writers love the work they receive</h4>
                <p>"I am never disappointed when I get my essays written by Ox Essays' professional writing service. My grades are top notch, and because the work is always completely original, I never have to worry about being accused of plagiarism."</p>
                <p>"When I was assigned an argumentative essay I was stumped because I had never written one before. I looked for help online and found Ox Essays. What a relief it was to get a professional to write my argumentative essay for me, so I didn't have to stress out about it anymore."</p>
                <p>"I started using this essay writing service when I was attending The University of Nottingham and needed a descriptive essay done. Now that I'm continuing my education at the University of Glasgow, I still rely on this service when I have too much work to get done and not enough time to do it all."</p>
                <h4>Writing dissertation for students in need across the UK</h4>
                <p>Getting a narrative essay written for you is as simple as detailing the specifics of it, and letting one of our professional essay writers do the rest. It really does provide much needed relief for overburdened students throughout the UK, no matter what level of education they're completing. School can be terribly stressful, and when you start to fall behind, are overwhelmed with work, and are stressing out about keeping your grades up, it can be a lot for many to handle. Online essay writers can give you the help you need, when you need it, no matter where you're located. And, even if your request has a tight deadline, they can work within your limits to get it done. Don't put your grades at risk or put undue stress on yourself .</p>
                <p>Getting a narrative essay written for you is as simple as detailing the specifics of it, and letting one of our professional essay writers do the rest. It really does provide much needed relief for overburdened students throughout the UK, no matter what level of education they're completing. School can be terribly stressful, and when you start to fall behind, are overwhelmed with work, and are stressing out about keeping your grades up, it can be a lot for many to handle. Online essay writers can give you the help you need, when you need it, no matter where you're located. And, even if your request has a tight deadline, they can work within your limits to get it done.</p>
            </div>
        </div>
    </section>
    <!-- ================ Our Writers section end ======================= -->
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
