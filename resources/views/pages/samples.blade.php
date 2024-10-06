@extends('layouts.web')

@section('title')
Our Writers Page
@endsection

<!-- Set the meta title -->
@section('head')
<!-- General Meta Tags -->
        <meta name="description" content="This is the Our Samples page of our website.">
        <meta name="keywords" content="Our Samples, welcome, main page">

        <!-- Open Graph Meta Tags -->
        <meta property="og:title" content="Our Samples Page">
        <meta property="og:description" content="This is the Our Samples page of our website.">
        <meta property="og:type" content="website">
        <meta property="og:url" content="{{ url()->current() }}">
        <meta property="og:image" content="{{ asset('images/discount-page.png') }}">

        <!-- Twitter Meta Tags -->
        <meta name="twitter:card" content="summary_large_image">
        <meta name="twitter:title" content="Our Samples Page">
        <meta name="twitter:description" content="This is the Our Samples page of our website.">
        <meta name="twitter:image" content="{{ asset('images/discount-page.png') }}">
        <meta name="twitter:site" content="@YourTwitterHandle">
@endsection

@section('footer_scripts')

@endsection

@section('inner_page_hero_section_title')
Our Samples
@endsection

@section('inner_page_hero_section_mini_title')
Our Samples
@endsection

@section('content')

    <!-- ===================================================== -->
    <!-- ================ hero section start ===================== -->
    @include('partials.inner-pages-hero-section')
    <!-- ================ hero section end ======================= -->
    <!-- ===================================================== -->

    <!-- ===================================================== -->
    <!-- ================ Samples carousel section start ======================= -->
    <section id="our-samples-page-section">
        <div class="container">
            <div class="title">
                <h3>Sample dissertation help online</h3>
            </div>
            <div class="content">
                <p>Find below a library of free thesis samples of - all completed by our professional writers and checked by our quality assurance specialists. No matter if you are unsure about using our services or do not have time to write a thesis from scratch, the below portfolio will be of great service to you.</p>
            </div>
            <div class="row">
                <div class="col-xl-8">
                    <div class="samples-carousel-page-container">
                        @foreach ($samples as $sample)
                        <div class="samples-slider-container mb-4">
                            <div class="sample-header">
                                <div class="sample-img">
                                    <img src="{{ asset('assets/images/download-document-icon.webp') }}" loading="lazy" class="img-fluid" width="36px" height="48px" alt="download">
                                </div>
                            </div>
                            <div class="samples-body">
                                <div class="sample-img">
                                    {{-- $sample['image'] --}}
                                    <img src="{{ asset('assets/images/sample-img-yellow.webp') }}" loading="lazy" class="img-fluid" width="154px" height="237px" alt="Sample">
                                    <div class="sample-title">
                                        <h4>{{ $sample['title'] }}</h4>
                                    </div>
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
                                                <li>5 days</li> <!-- This is static; replace with dynamic data if needed -->
                                                <li>{{ $sample['citation_style'] }}</li>
                                                <li>{{ $sample['academic_level'] }}</li>
                                                <li>Business</li> <!-- Replace with dynamic data if needed -->
                                                <li>3</li> <!-- Replace with dynamic data if needed -->
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="sample-body-btn">
                                        <div class="primary-btn yellow-bg-btn">
                                            <a href="{{ route('sample', $sample->slug) }}"><span class="sample-btn-dark">Order Paper </span>like this for only <span class="sample-btn-dark">£377</span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                        <!-- Custom Pagination Links -->
                        <div class="pagination">
                            @if ($samples->onFirstPage())
                                <span class="prev"><img src="{{ asset('assets/images/angle-left-black.webp') }}" alt="angle-left-black" width="17" height="28"></span>
                            @else
                                <a href="{{ $samples->previousPageUrl() }}" class="prev" rel="prev"><img src="{{ asset('assets/images/angle-left-black.webp') }}" alt="angle-left-black" width="17" height="28"></a>
                            @endif
                            <div class="pages-number">
                            @foreach ($samples->getUrlRange(1, $samples->lastPage()) as $page => $url)
                                @if ($page == $samples->currentPage())
                                    <span class="active">{{ $page }}</span>
                                @else
                                    <a href="{{ $url }}">{{ $page }}</a>
                                @endif
                            @endforeach
                            </div>
                            @if ($samples->hasMorePages())
                                <a href="{{ $samples->nextPageUrl() }}" class="next" rel="next"><img src="{{ asset('assets/images/angle-right-black.webp') }}" alt="angle-right-black" width="17" height="28"></a>
                            @else
                                <span class="next"><img src="{{ asset('assets/images/angle-right-black.webp') }}" alt="angle-right-black" width="17" height="28"></span>
                            @endif
                        </div>
                    </div>
                </div>
                <div class="col-xl-4">
                    <div class="our-samples-page-right">
                        @include('partials.instant-price')
                        @include('partials.free-features')
                        @include('partials.payment-and-security')
                        @include('partials.any-questions') 
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ================ Samples carousel section end ======================= -->
    <!-- ===================================================== -->

    <!-- ===================================================== -->
    <!-- ===============  Testimonials section start ================ -->
    @include('partials.testimonials-section')
    <!-- ===============  Testimonials section end ================ -->
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
