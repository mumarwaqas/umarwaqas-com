@extends('layouts.web')

@section('title')
Order Now Page
@endsection
<!-- Set the meta title -->
@section('head')
<!-- General Meta Tags -->
        <meta name="description" content="This is the Order Now Page of our website.">
        <meta name="keywords" content="About Us, welcome, main page">

        <!-- Open Graph Meta Tags -->
        <meta property="og:title" content="Order Now Page">
        <meta property="og:description" content="This is the Order Now Page of our website.">
        <meta property="og:type" content="website">
        <meta property="og:url" content="{{ url()->current() }}">
        <meta property="og:image" content="{{ asset('images/about-us-page.png') }}">

        <!-- Twitter Meta Tags -->
        <meta name="twitter:card" content="summary_large_image">
        <meta name="twitter:title" content="Order Now Page">
        <meta name="twitter:description" content="This is the Order Now Page of our website.">
        <meta name="twitter:image" content="{{ asset('images/about-us-page.png') }}">
        <meta name="twitter:site" content="@YourTwitterHandle">
@endsection

@section('footer_scripts')

@endsection

@section('inner_page_hero_section_title')
Order Now
@endsection

@section('inner_page_hero_section_mini_title')
Order Now
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

    <section id="order-preview-page" class="order-preview-page-container">
        <div class="container mt-4">
            <!-- Display Success Message -->
            {{--
            @if(session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif
            --}}
        </div>
        <div class="container">
            <div class="row">
                <div class="col-xl-8">
                    <div class="order-preview-container">
                        <div class="order-preview-topbar">
                            <div class="bg-black-content bg-order-content">
                                <img src="{{ asset('assets/images/fill-out-order-form.webp') }}" loading="lazy" width="29px" height="32px" class="img-fluid" alt="fill-out-order-form">
                                <h4>Your Order Summary</h4>
                            </div>
                            <div class="bg-yellow-content bg-order-content">
                                <h4><span>Order ID:</span> <span>{{ $order->order_no }}</span></h4>
                                <span>Please quote your order ID in any correspondence.</span>
                            </div>
                        </div>
                        <div class="order-preview-start">
                            <div class="order-preview-list order-preview-list-bg">
                                <ul>
                                    <li>Academic Level:</li>
                                    <li>{{ $order->academic_level }}</li>
                                </ul>
                            </div>
                            <div class="order-preview-list ">
                                <ul>
                                    <li>Type of Paper:</li>
                                    <li>{{ $order->type_of_paper }}</li>
                                </ul>
                            </div>
                            <div class="order-preview-list order-preview-list-bg">
                                <ul>
                                    <li>Type of Subject:</li>
                                    <li>{{ $order->subject }}</li>
                                </ul>
                            </div>
                            <div class="order-preview-list ">
                                <ul>
                                    <li>Number of Pages:</li>
                                    <li>{{ $order->number_of_pages }}</li>
                                </ul>
                            </div>
                            <div class="order-preview-list order-preview-list-bg">
                                <ul>
                                    <li>Word Count:</li>
                                    <li>{{ $order->number_of_words }} Words</li>
                                </ul>
                            </div>
                            <div class="order-preview-list ">
                                @php
                                // Cast delivery_time to integer
                                $deliveryDays = (int) $order->delivery_time;
                                $deliveryDate = \Carbon\Carbon::parse($order->created_at)->addDays($deliveryDays)->format('d.m.Y - h:i A');
                                @endphp
                                <ul>
                                    <li>Delivery Time:</li>
                                    <li>{{ $deliveryDate }}</li>
                                </ul>
                            </div>
                            <div class="order-preview-list order-preview-list-bg">
                                <ul>
                                    <li>Preferred Writer:</li>
                                    <li>{{ $order->writer ?? 'N/A' }}</li>
                                </ul>
                            </div>
                            <div class="order-preview-list ">
                                <ul>
                                    <li>Citation Style:</li>
                                    <li>{{ $order->citation_style }}</li>
                                </ul>
                            </div>
                            <div class="order-preview-list order-preview-list-bg">
                                <ul>
                                    <li>Number of Sources:</li>
                                    <li>{{ $order->number_of_sources }}</li>
                                </ul>
                            </div>
                        </div>
                        <div class="border-container"></div>
                        <div class="preview-checkout">
                            <div class="total-price">
                                <span class="content">Total Price:</span>
                                <span class="price">£{{ $order->final_price }}</span>
                            </div>
                            <div class="preview-check-out-btns">
                                <div class="back-btn">
                                    <a href="{{ route('order-now') }}">
                                        <img src="{{ asset('/assets/images/angle-left-black.webp') }}" width="10.12" height="17.98" loading="lazy" alt="back">
                                        Back to Edit
                                    </a>
                                </div>
                                <div class="check-out-btn">
                                    <form id="formCheckout" action="https://nestorsglobal.co.uk/Payment/index.php?TOTAL_AMOUNT={{ $order->final_price }}&OrderNo={{ $order->order_no }}Name={{ $order->user->name }}" method="post">
                                        <button type="submit">
                                            <img src="{{ asset('/assets/images/lock-icon.webp') }}" width="18px" height="23px" loading="lazy" class="img-fluid" alt="Lock">
                                            Checkout Security
                                            <img src="{{ asset('/assets/images/angle-right-icon.webp')}}" width="18px" height="12.6px" class="img-fluid" loading="lazy" alt="angle right">
                                        </button>    
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4">
                    <div class="order-preview-right">
                        @include('partials.payment-and-security')
                        @include('partials.any-questions') 
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
