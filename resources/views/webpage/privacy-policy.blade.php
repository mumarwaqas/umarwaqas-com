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
                    <div class="refund-policy-inner-container">
                        <div class="ploicy-title-container">
                            <div class="title">
                                <h1>refund policy- dissertation help online</h1>
                            </div>
                        </div>
                        <p>dissertation help is known for the provision of outstanding assignments in affordable and cheap prices. We care about our customers and we ensure to deliver them with the quality writing services. However, if there is any major disappointment or issue then we encourage our customers to ask for the refund of the money under following terms and conditions.</p>
                        <p>We highly recommend our visitors and customers to go through the money refund policy. Assignment Ace will promptly resolve all refund requests as per the given terms and conditions.</p>
                        <p>Kindly read the following terms and conditions before making a refund claim at dissertation help online.</p>
                        <h4>Late orders- The order was given past the deadline:</h4>
                        <p>At dissertation help online, we make sure to deliver the assignments to the customers right on time. Providing the assignments right on time is our top priority and we make sure to submit the work to the customers on given deadline. However, once in a blue moon there could be some sort of glitch and there can be a delay in delivery. If you are facing late delivery issue, reach out to our customer support team and discuss the issue. There is always a genuine issue in the delay of order submission, but when the reason is not genuine, we don’t step back from making a refund.</p>
                        <div class="policy-list-container">
                            <div class="policy-list">
                                <img src="{{ asset('assets/images/every-list-icon-yellow.webp') }}" width="15px" height="17px" class="img-fluid" loading="lazy" alt="list">
                                <p>If the deadline has already passed and the assignment is of no use then we will check the task and we will make a full refund or will provide you with the store credits if content proved to be original and not submitted. Please note, this should be related to your selected deadline while placing the order.</p>
                            </div>
                            <div class="policy-list">
                                <img src="{{ asset('assets/images/every-list-icon-yellow.webp') }}" width="15px" height="17px" class="img-fluid" loading="lazy" alt="list">
                                <p>Kindly note, if you are using the custom essay even after deadline is passed and the teacher has deducted only a few marks then only a certain percentage of the total amount would be returned. While making the claim, you will have to show the proof of marks deduction due to late submission.</p>
                            </div>
                            <div class="policy-list">
                                <img src="{{ asset('assets/images/every-list-icon-yellow.webp') }}" width="15px" height="17px" class="img-fluid" loading="lazy" alt="list">
                                <p>Since the refund claim is a collaborative process and an investigation is being carried out to resolve the case so you must ensure your presence. In case you are not able to respond timely to our expert queries (with-in 12 hours of being posted on student portal interface) or if the lack of information given by you has led to a missed deadline, we will not entertain any full or partial refund requests.</p>
                            </div>
                            <div class="policy-list">
                                <img src="{{ asset('assets/images/every-list-icon-yellow.webp') }}" width="15px" height="17px" class="img-fluid" loading="lazy" alt="list">
                                <p>If the delay is caused due to an inability of our writing expert, you can avail a 20% - 50% refund of your order and the approved refund amount. The deductions (if any) are levied as the expert who is working on your assignment has been paid fully in advance.</p>
                            </div>
                            <div class="policy-list">
                                <img src="{{ asset('assets/images/every-list-icon-yellow.webp') }}" width="15px" height="17px" class="img-fluid" loading="lazy" alt="list">
                                <p>We offer a refund only if the original deadline of the assignment is missed by us. In case of revision, a new deadline has to be mutually decided. No refund claims can be made if a revision deadline was not decided.</p>
                            </div>
                        </div>
                        <h4>Low quality of paper- Paper is not meeting the standard requirements:</h4>
                        <p>The quality of our papers is always commendable, but when it is not, we provide a revision option. You will have to get the paper revised and if we properly fix all the errors, the refund cannot be made. Otherwise, the claim will be approved provided that any of the following condition is being satisfied.</p>
                        <div class="policy-list-container">
                            <div class="policy-list">
                                <img src="{{ asset('assets/images/every-list-icon-yellow.webp') }}" width="15px" height="17px" class="img-fluid" loading="lazy" alt="list">
                                <p>If the deadline has already passed and the assignment is of no use then we will check the task and we will make a full refund or will provide you with the store credits if content proved to be original and not submitted. Please note, this should be related to your selected deadline while placing the order.</p>
                            </div>
                            <div class="policy-list">
                                <img src="{{ asset('assets/images/every-list-icon-yellow.webp') }}" width="15px" height="17px" class="img-fluid" loading="lazy" alt="list">
                                <p>Kindly note, if you are using the custom essay even after deadline is passed and the teacher has deducted only a few marks then only a certain percentage of the total amount would be returned. While making the claim, you will have to show the proof of marks deduction due to late submission.</p>
                            </div>
                            <div class="policy-list">
                                <img src="{{ asset('assets/images/every-list-icon-yellow.webp') }}" width="15px" height="17px" class="img-fluid" loading="lazy" alt="list">
                                <p>Since the refund claim is a collaborative process and an investigation is being carried out to resolve the case so you must ensure your presence. In case you are not able to respond timely to our expert queries (with-in 12 hours of being posted on student portal interface) or if the lack of information given by you has led to a missed deadline, we will not entertain any full or partial refund requests.</p>
                            </div>
                            <div class="policy-list">
                                <img src="{{ asset('assets/images/every-list-icon-yellow.webp') }}" width="15px" height="17px" class="img-fluid" loading="lazy" alt="list">
                                <p>If the delay is caused due to an inability of our writing expert, you can avail a 20% - 50% refund of your order and the approved refund amount. The deductions (if any) are levied as the expert who is working on your assignment has been paid fully in advance.</p>
                            </div>
                            <div class="policy-list">
                                <img src="{{ asset('assets/images/every-list-icon-yellow.webp') }}" width="15px" height="17px" class="img-fluid" loading="lazy" alt="list">
                                <p>We offer a refund only if the original deadline of the assignment is missed by us. In case of revision, a new deadline has to be mutually decided. No refund claims can be made if a revision deadline was not decided.</p>
                            </div>
                        </div>
                        <h4>Technical issues at the time of payment leading to additional charged amount</h4>
                        <div class="policy-list-container">
                            <div class="policy-list">
                                <img src="{{ asset('assets/images/every-list-icon-yellow.webp') }}" width="15px" height="17px" class="img-fluid" loading="lazy" alt="list">
                                <p>In case there has been a double or unnecessary additional charge made, the client is advised to instantly inform the customer support team with a proof of two receipts so we can make a full refund of the additional amount.</p>
                            </div>
                            <div class="policy-list">
                                <img src="{{ asset('assets/images/every-list-icon-yellow.webp') }}" width="15px" height="17px" class="img-fluid" loading="lazy" alt="list">
                                <p>In most cases the problem is with the payment company and the customer will be advised to resolve the matter with the company to avoid double deduction in the future.</p>
                            </div>
                        </div>
                        <h4>Unavailability of Expert:</h4>
                        <p>This type of scenario is highly unlikely. Even if such a case occurs where the expert is not available to help you and you have paid for the assignment in full; you are highly encouraged to order any other assignment order of equivalent cost.</p>
                        <h4>Cancellation from the customer’s side- Orders can only cancelled within the 24 hours only:</h4>
                        <p>If you have placed your order earlier and have changed your mind later, the order can be cancelled only within the next 24 hours of order placement. If the writer has started working on it, you will have to continue with it. In the cases of order cancellation within the mentioned time, you can request a full refund or store credits. You can also order any other type of assignment of the same worth, right away.</p>
                        <h4>Not getting a desired grade- We guarantee quality, not a specific grade:</h4>
                        <p>If you are aiming to get an A plus in your paper and expect us to guarantee that then it is not possible. At Assignment Ace, we guarantee to provide you with a high-quality paper with perfect formatting, grammar, and structure, but we certainly cannot guarantee a specific grade as it totally depends on the student’s overall performance throughout the semester/term.</p>
                    </div>
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
