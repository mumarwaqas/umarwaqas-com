@extends('layouts.web')

@section('title')
How its Work Page
@endsection

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
@endsection

@section('inner_page_hero_section_mini_title')
@endsection

@section('content')

    <!-- ===================================================== -->
    <!-- ================ hero section start ===================== -->
    @include('partials.inner-pages-hero-section')
    <!-- ================ hero section end ======================= -->
    <!-- ===================================================== -->
    
    <!-- ===================================================== -->
    <!-- ================ Refund Policy Section start ======================= -->
    <section class="refund-policy-container">
        <div class="container">
            <div class="row">
                <div class="col-xl-8">
                    {!! $page->content !!}
                </div>
                <div class="col-xl-4">
                    <div class="policy-inner-right">
                        @include('partials.policies-pages')
                        @include('partials.free-features')
                        @include('partials.payment-and-security')
                        @include('partials.any-questions')
                    </div>
                </div> 
            </div>
        </div>
     </section>
    <!-- ================ Refund Policy Section end ======================= -->
    <!-- ===================================================== -->
    
    <!-- ===================================================== -->
    <!-- ===============  Every Update section start ================ -->
    @include('partials.every-update-section')
    <!-- ===============  Every Update section end ================ -->
    <!-- ===================================================== -->

@endsection
