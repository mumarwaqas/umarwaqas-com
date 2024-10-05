@extends('layouts.web')

@section('title')
Our Guarantees Page
@endsection

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
Frequently Asked Questions
@endsection

@section('inner_page_hero_section_mini_title')
Frequently Asked Questions
@endsection

@section('inner_page_hero_section_email_phone')
Yes
@endsection

@section('content')

    <!-- ===================================================== -->
    <!-- ================ hero section start ===================== -->
    @include('partials.inner-pages-hero-section')
    <!-- ================ hero section end ======================= -->
    <!-- ===================================================== -->

    <!-- ===================================================== -->
    <!-- ================ Faqs section start ======================= -->
    <section id="faqs-page-section">
        <div class="container">
           <div class="title">
               <h3>Our FAQ should answer any queries you may have below.</h3>
           </div>
           <div class="content">
               <p>However, if you still need help and advice, please do not hesitate to contact our customer service department on +44 1212862211 <br> (if calling from outside of the UK) Toll Free 24/7 Monday-Friday and Saturday and Sunday.</p>
           </div>
           <div class="row">
               <div class="col-xl-3">
                   <div class="faqs-btns-container">
                       <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                           <li class="nav-item" role="presentation">
                               <button class="nav-link active" id="mba-dissertation-tab" data-bs-toggle="pill" data-bs-target="#mba-dissertation" type="button" role="tab" aria-controls="mba-dissertation" aria-selected="true">General Questions</button>
                           </li>
                           <li class="nav-item" role="presentation">
                               <button class="nav-link" id="law-dissertation-tab" data-bs-toggle="pill" data-bs-target="#mba-dissertation" type="button" role="tab" aria-controls="law-dissertation" aria-selected="false" tabindex="-1">Writers &amp; Language</button>
                           </li>
                           <li class="nav-item" role="presentation">
                               <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#mba-dissertation" type="button" role="tab" aria-controls="pills-contact" aria-selected="false" tabindex="-1">Quality &amp; Satisfaction</button>
                           </li>
                           <li class="nav-item" role="presentation">
                               <button class="nav-link" id="assignment-writing-tab" data-bs-toggle="pill" data-bs-target="#mba-dissertation" type="button" role="tab" aria-controls="assignment-writing" aria-selected="false" tabindex="-1">Pricing &amp; Payment</button>
                           </li>
                           <li class="nav-item" role="presentation">
                               <button class="nav-link" id="assignment-writing-tab" data-bs-toggle="pill" data-bs-target="#mba-dissertation" type="button" role="tab" aria-controls="assignment-writing" aria-selected="false" tabindex="-1">Order &amp; Delivery</button>
                           </li>
                           <li class="nav-item" role="presentation">
                               <button class="nav-link" id="assignment-writing-tab" data-bs-toggle="pill" data-bs-target="#mba-dissertation" type="button" role="tab" aria-controls="assignment-writing" aria-selected="false" tabindex="-1">Customer Care</button>
                           </li>
                           <li class="nav-item" role="presentation">
                               <button class="nav-link" id="assignment-writing-tab" data-bs-toggle="pill" data-bs-target="#mba-dissertation" type="button" role="tab" aria-controls="assignment-writing" aria-selected="false" tabindex="-1">Security &amp; Confidentiality</button>
                           </li>
                           <li class="nav-item" role="presentation">
                               <button class="nav-link" id="assignment-writing-tab" data-bs-toggle="pill" data-bs-target="#mba-dissertation" type="button" role="tab" aria-controls="assignment-writing" aria-selected="false" tabindex="-1">Money-Back guarantee</button>
                           </li>
                       </ul>
                   </div>
               </div>
               <div class="col-xl-9">
                   <div class="tabs-accordian-container">
                       <div class="title">
                           <h4>General Questions</h4>
                       </div>
                       <div class="tab-content" id="pills-tabContent">
                           <div class="tab-pane fade show active" id="mba-dissertation" role="tabpanel" aria-labelledby="mba-dissertation-tab" tabindex="0">
                               <div class="tabs-accordians-container">
                                   <div class="accordion accordion-flush" id="accordionFlushExample">
                                    @foreach($faqs as $index => $faq)
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="flush-heading{{ $faq->id }}">
                                            <button class="accordion-button @if($index > 0) collapsed @endif" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse{{ $faq->id }}" aria-expanded="true" aria-controls="flush-collapse{{ $faq->id }}">
                                                {{ $faq->question }}
                                            </button>
                                        </h2>
                                        <div id="flush-collapse{{ $faq->id }}" class="accordion-collapse collapse @if($index === 0) show @endif" aria-labelledby="flush-heading{{ $faq->id }}" data-bs-parent="#accordionFlushExample">
                                            <div class="accordion-body">
                                                {{ $faq->answer }}
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                    </div>
                               </div>
                           </div>
                           <div class="tab-pane fade" id="law-dissertation" role="tabpanel" aria-labelledby="law-dissertation-tab" tabindex="0">...</div>
                           <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab" tabindex="0">...</div>
                           <div class="tab-pane fade" id="assignment-writing" role="tabpanel" aria-labelledby="assignment-writing-tab" tabindex="0">...</div>
                       </div>
                   </div>
               </div>
           </div>
        </div>
    </section>
    <!-- ================ Faqs section end ======================= -->
    <!-- ===================================================== -->


    <!-- ===================================================== -->
    <!-- ===============  Every Update section start ================ -->
    @include('partials.every-update-section')
    <!-- ===============  Every Update section end ================ -->
    <!-- ===================================================== -->
@endsection
