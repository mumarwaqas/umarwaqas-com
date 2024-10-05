    <!-- ===================================================== -->
    <!-- ===============  Footer start ================ -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-7 col-xl-9 order-1 order-md-2 order-xl-0">
                    <div class="footer-services">
                        <div class="title">
                            <h4>Popular Services</h4>
                        </div>
                        @php
                        // Fetch pages where page_type is 'services'
                        $services =  App\Models\Page::where('page_type', 'service')->get();

                        // Chunk the results into groups of 5
                        $chunks = $services->chunk(8);
                        @endphp

                        <div class="services-list">
                            @foreach ($chunks as $chunk)
                                <ul>
                                    @foreach ($chunk as $service)
                                        <li>
                                            <a href="{{ route('service', $service->slug) }}">{{ $service->title }}</a>
                                        </li>
                                    @endforeach
                                </ul>
                            @endforeach
                        </div>
                        {{-- 
                        <div class="services-list">
                            <ul>
                                <li><a href="{{ route('service', 'dissertation-abstract') }}">Dissertation Abstract</a></li>
                                <li><a href="{{ route('service', 'dissertation-editing') }}">Dissertation Editing</a></li>
                                <li><a href="{{ route('service', 'dissertation-proofreading') }}">Dissertation Proofreading</a></li>
                                <li><a href="{{ route('service', 'dissertation-proposal-writing') }}">Dissertation Proposal Writing</a></li>
                                <li><a href="{{ route('service', 'doctoral-dissertation') }}">Doctoral Dissertation</a></li>
                                <li><a href="{{ route('service', 'law-dissertation') }}">LAW Dissertation</a></li>
                                <li><a href="{{ route('service', 'literature-review') }}">Literature Review</a></li>
                                <li><a href="{{ route('service', 'write-my-dissertation') }}">write my Dissertation</a></li>
                            </ul>
                            <ul>
                                <li><a href="{{ route('service', 'accounting-assignment') }}">Accounting Assignment</a></li>
                                <li><a href="{{ route('service', 'business-assignment') }}">Business Assignment</a></li>
                                <li><a href="{{ route('service', 'programming-assignment') }}">Programming Assignment</a></li>
                                <li><a href="{{ route('service', 'computer-science') }}">Computer Science</a></li>
                                <li><a href="{{ route('service', 'economics-assignment') }}">Economics Assignment</a></li>
                                <li><a href="{{ route('service', 'education-assignment') }}">Education Assignment</a></li>
                                <li><a href="{{ route('service', 'media-communication') }}">Media &amp; Communication</a></li>
                                <li><a href="{{ route('service', 'write-my-dissertation') }}">write my Dissertation</a></li>
                            </ul>
                            <ul>
                                <li><a href="{{ route('service', 'english-literature') }}">English Literature</a></li>
                                <li><a href="{{ route('service', 'finance-assignment') }}">Finance Assignment</a></li>
                                <li><a href="{{ route('service', 'geography-assignment') }}">Geography Assignment</a></li>
                                <li><a href="{{ route('service', 'history-assignment') }}">History Assignment</a></li>
                                <li><a href="{{ route('service', 'nursing-assignment') }}">Nursing Assignment</a></li>
                                <li><a href="{{ route('service', 'psychology-assignment') }}">Psychology Assignment</a></li>
                                <li><a href="{{ route('service', 'it-assignment') }}">IT Assignment</a></li>
                                <li><a href="{{ route('service', 'make-my-assignment') }}">Make My Assignment</a></li>
                            </ul>
                            <ul>
                                <li><a href="{{ route('service', 'management-assignment') }}">Management Assignment</a></li>
                                <li><a href="{{ route('service', 'master-dissertation') }}">Master Dissertation</a></li>
                                <li><a href="{{ route('service', 'mba-dissertation') }}">MBA Dissertation</a></li>
                                <li><a href="{{ route('service', 'msc-dissertation') }}">MSC Dissertation</a></li>
                                <li><a href="{{ route('service', 'nursing-dissertation') }}">Nursing Dissertation</a></li>
                                <li><a href="{{ route('service', 'phd-dissertations') }}">PhD Dissertations</a></li>
                                <li><a href="{{ route('service', 'phd-thesis') }}">PhD Thesis</a></li>
                                <li><a href="{{ route('service', 'psychology-dissertation') }}">Psychology Dissertation</a></li>
                            </ul>
                        </div> 
                        --}}
                    </div>
                </div>
                <div class="d-none d-xl-block col-xl-3 pe-md-0 order-xl-1">
                    <div class="services-right">
                        <div class="order-now-banner">
                            <div class="top-content">
                                <p>Upload your requirements and <br> see your grades improving.</p>
                            </div>
                            <div class="center-content">
                                <span class="color-yellow">1,000,000+ Satisfied </span>
                                <div>
                                    <span class="color-white">Students. Rated</span>
                                    <span class="color-yellow-mini"> 4.9/5</span>
                                </div>
                            </div>
                            <div class="bottom-content">
                                <span class="color-white">Based On Overall </span>
                                <div>
                                    <span class="color-yellow">38,983</span>
                                    <span class="color-white"> Reviews.</span>
                                </div>
                            </div>
                            <div class="btns-flex our-goals-btns">
                                <div class="primary-btn yellow-bg-btn">
                                    <img src="{{ asset('assets/images/order-now-icon-black.webp') }}" loading="lazy" class="img-fluid" height="25.3px" width="26.325px" alt="Live Chat">
                                    <a href="{{ route('order-now') }}">Order Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row row-1-border">
                
                <div class="col-md-5 col-xl-7 order-0 order-md-1 order-xl-2">
                    <div class="footer-bottom-left-flex">
                        <div class="row">
                            <div class="col-xl-5">
                                <div class="footer-left-content">
                                    {{-- <div class="footer-logo">
                                        <img src="{{ asset('assets/images/footer-logo.webp') }}" loading="lazy" class="img-fluid" alt="affordable-dissertation">
                                    </div> --}}
                                    <div class="table-of-contents" id="table-of-contents">
                                        <div class="table-header">
                                            <div class="table-title">
                                                <img decoding="async" class="lazy img-fluid" width="36px" height="36px" alt="Green Check" src="{{asset('/assets/images/uk-flag.webp')}}">
                                                <span>United kingdom</span>
                                            </div>
                                            <span id="table-of-contents-plus">
                                                <img decoding="async" class="lazy img-fluid" width="14px" height="17px" alt="Plus Green" src="{{asset('/assets/images/angle-down-content.webp')}}">
                                            </span>
                                        </div>
                                        <ul style="">
                                            <li>
                                                United kingdom
                                                {{-- <a href="#"></a> --}}
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="title-yellow">
                                        <h4>Disclaimer!</h4>
                                    </div>
                                    <div class="content">
                                        <p>It is illegal to use the research materials ordered on this  website for other than research purposes. You must quote the sources appropriately. The company bears no responsibility for the use of research work, not intended for education use, the work is sold as-is with the highest quality and service available and written by freelancers.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-7 p-md-0">
                                <div class="footer-bottom-center">
                                    <div class="services-list">
                                        <ul class="list-1">
                                            <li class="list-heading"><h4 class="title-yellow">Our Policies</h4></li>
                                            <li><a href="{{ route('termsandconditions') }}" class="{{ request()->routeIs('termsandconditions') ? 'active' : '' }}">Terms And Conditions</a></li>
                                            <li><a href="{{ route('moneybackguarantee') }}" class="{{ request()->routeIs('moneybackguarantee') ? 'active' : '' }}">Money Back Guarantee</a>
                                            <li><a href="{{ route('privacypolicy') }}"      class="{{ request()->routeIs('privacypolicy') ? 'active' : '' }}">Privacy Policy</a></li>
                                            <li><a href="{{ route('guarantees') }}"         class="{{ request()->routeIs('guarantees') ? 'active' : '' }}">Guarantees</a></li>                                    
                                            <li><a href="{{ route('faqs') }}"               class="{{ request()->routeIs('guarantees') ? 'active' : '' }}">Frequently Asked Questions</a></li>
                                            <li><a href="{{ route('fairusepolicy') }}"      class="{{ request()->routeIs('fairusepolicy') ? 'active' : '' }}">Fair Use Policy</a></li>
                                            <li><a href="{{ route('contact') }}"            class="{{ request()->routeIs('contact') ? 'active' : '' }}">Contact Us</a></li>
                                        </ul>
                                        <ul class="list-2">
                                            <li class="list-heading"><h4 class="title-yellow">Useful Links</h4></li>
                                            <li><a href="{{ route('home') }}">Home</a></li>
                                            <li><a href="{{ route('services') }}">Services</a></li>
                                            <li><a href="{{ route('about') }}">About Us</a></li>
                                            <li><a href="{{ route('prices') }}">Price Plan</a></li>
                                            <li><a href="{{ route('reviews') }}">Our Reviews</a></li>
                                            <li><a href="{{ route('samples') }}">Our Samples</a></li>
                                            <li><a href="https://www.cheap-essay-writing.co.uk/blog/">Blogs</a></li>
                                            {{-- {{ route('posts') }} --}}
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-5 p-md-0 order-2 order-md-0 order-xl-3">
                    <div class="footer-bottom-right">
                        <div class="row">
                            <div class="col-xl-7">
                                <div class="footer-support-column">
                                    <div class="title-yellow d-none d-xl-block">
                                        <h4>Contact Us</h4>
                                    </div>
                                    <div class="action-links-container">
                                        <div class="d-flex flex-column">
                                            <div class="d-flex align-items-md-center gap-3 align-items-xl-start flex-column flex-md-row flex-xl-column">
                                                <div class="action-links-flex">
                                                    <img src="{{ asset('assets/images/live-chat-icon-head.webp') }}" loading="lazy" alt="Call now" width="34px" height="30px" class="img-fluid">
                                                    <a href="{{ config('settings.app_chat') }}">Live Chat Support</a>
                                                </div>
                                                <div class="action-links-flex">
                                                    <img src="{{ asset('assets/images/footer-call-icon-without-bg.webp') }}" loading="lazy" alt="Call now" width="24.199px" height="24px" class="img-fluid">
                                                    <a href="tel:{{ config('settings.app_phone') }}">{{ config('settings.app_phone') }}</a>
                                                </div>
                                                <div class="action-links-flex">
                                                    {{-- <img src="{{ asset('assets/images/footer-mail-icon.webp') }}" loading="lazy" alt="mail now" width="59px" height="59px" class="img-fluid d-none d-xl-block"> --}}
                                                    <img src="{{ asset('assets/images/footer-mail-icon-without-bg.webp') }}" loading="lazy" alt="mail now" width="28px" height="19.679px" class="img-fluid">
                                                    <a href="mailto:{{ config('settings.app_email') }}">{{ config('settings.app_email') }}</a>
                                                </div>
                                            </div>
                                            <div class="action-links-flex">
                                                {{-- <img src="{{ asset('assets/images/footer-location-icon.webp') }}" loading="lazy" alt="location" width="59px" height="59px" class="img-fluid d-none d-xl-block"> --}}
                                                <img src="{{ asset('assets/images/footer-location-icon-without-bg.webp') }}" loading="lazy" alt="location" width="23.965px" height="32.078px" class="img-fluid">
                                                <a href="#">{{ config('settings.app_address') }}</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-5">
                                <div class="footer-payment-column">
                                    <div class="title-yellow d-md-none d-xl-block">
                                        <h4>Payment Methods</h4>
                                    </div>
                                    <div class="secure-payment-img d-md-none d-xl-block">
                                        <img src="{{ asset('assets/images/secure-payment-img.webp') }}" loading="lazy" alt="secure-payment" class="img-fluid">
                                    </div>
                                    <div class="title-yellow title-yellow-2 d-block d-md-none">
                                        <h4>Connect with Social</h4>
                                    </div>
                                    <div class="social-links d-flex d-md-none gap-2">
                                        <a href="https://www.instagram.com/cheapessaywriting/"><img src="{{ asset('assets/images/instagram-social.webp') }}" loading="lazy" alt="instagram" height="27.19px" width="27.19px" class="img-fluid"></a>
                                        <a href="https://www.facebook.com/CheapEssayWritingUK/"><img src="{{ asset('assets/images/facebook-social.webp') }}" loading="lazy" alt="facebook" height="27.19px" width="27.19px" class="img-fluid"></a>
                                        <a href="https://www.linkedin.com/company/cheap-essay-writing-uk/"><img src="{{ asset('assets/images/linkedin-social.webp') }}" loading="lazy" alt="linkedin" height="27.19px" width="28.15px" class="img-fluid"></a>
                                        <a href="https://twitter.com/CheapEssaysUK/"><img src="{{ asset('assets/images/twitter-social.webp') }}" loading="lazy" alt="twitter" height="28px" width="28px" class="img-fluid"></a>
                                    </div>
                                    <div class="title-yellow title-yellow-2 d-none d-md-block mt-4">
                                        <h4>Social Media</h4>
                                    </div>
                                    <div class="social-links d-none d-md-flex">
                                        <a href="https://www.instagram.com/cheapessaywriting/"><img src="{{ asset('assets/images/instagram-social.webp') }}" loading="lazy" alt="instagram" height="27.19px" width="27.19px" class="img-fluid"></a>
                                        <a href="https://www.facebook.com/CheapEssayWritingUK"><img src="{{ asset('assets/images/facebook-social.webp') }}" loading="lazy" alt="facebook" height="27.19px" width="27.19px" class="img-fluid"></a>
                                        <a href="https://www.linkedin.com/company/cheap-essay-writing-uk/"><img src="{{ asset('assets/images/linkedin-social.webp') }}" loading="lazy" alt="linkedin" height="27.19px" width="28.15px" class="img-fluid"></a>
                                        <a href="https://twitter.com/CheapEssaysUK"><img src="{{ asset('assets/images/twitter-social.webp') }}" loading="lazy" alt="twitter" height="28px" width="28px" class="img-fluid"></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="copyright-line">
            <p>Copyright © 2024 {{ config('app.name') }}, All Rights Reserved.</p>
        </div>
    </footer>
    <!-- ===============  Footer End ================ -->
    <!-- ===================================================== -->
