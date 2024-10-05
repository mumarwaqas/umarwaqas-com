@php
// Check if pageMeta exists and is not null
$customer_section_meta = isset($page) && $page->pageMeta  ? $page->pageMeta->where('meta_key', 'customer_section_title')->first() : null;        
$customer_section_title = $customer_section_meta ? $customer_section_meta->meta_value : '';

// Check if pageMeta exists and is not null
$customer_section_meta = isset($page) && $page->pageMeta  ? $page->pageMeta->where('meta_key', 'customer_section_content')->first() : null;        
$customer_section_content = $customer_section_meta ? $customer_section_meta->meta_value : '';

// Check if pageMeta exists and is not null
$customer_section_meta = isset($page) && $page->pageMeta ? $page->pageMeta->where('meta_key', 'customers')->first() : null;
// Convert meta_value to an array of IDs
$customerIds = $customer_section_meta ? explode(',', $customer_section_meta->meta_value) : [];

// Fetch Customer if IDs exist, otherwise fetch latest writers
$customerFromIDs = !empty($customerIds)
    ? App\Models\Customer::whereIn('id', $customerIds)->orderBy('id', 'desc')->get()
    : App\Models\Customer::orderBy('id', 'desc')->limit(5)->get();
@endphp
<section id="testimonials">
    <div class="testimonials-container-bg">
        <div class="container">
            <div class="row">
                <div class="col-xl-4">
                    <div class="testimonial-left-img-container">
                        <div class="testimonial-right-top d-block d-xl-none">
                            <div class="mini-title">
                                <div class="circle-bg circle-yellow-bg"></div>
                                <p>Testimonials</p>
                            </div>
                            <div class="title">
                                <h3>{{ $customer_section_title }}</h3>
                            </div>
                            <div class="content">
                                <p>{{ $customer_section_content }}</p>
                            </div>
                            <div class="brands-badges">
                                <div class="brand-badge-container brand-badge-container-white">
                                    <img src="{{ asset('assets/images/affordable-dissertation-icon.webp') }}" loading="lazy" class="img-fluid" width="37px" height="44px" alt="affordable dissertation">
                                    <p>affordable dissertation</p>
                                </div>
                                <div class="brand-badge-container">
                                    <img src="{{ asset('assets/images/trustpilot-icon.webp') }}" loading="lazy" width="47px" height="47px" class="img-fluid" alt="Trustpilot">
                                    <p>Trustpilot</p>
                                </div>
                                <div class="brand-badge-container">
                                    <img src="{{ asset('assets/images/google-icon.webp') }}" loading="lazy" class="img-fluid" width="31px" height="32px" alt="google">
                                    <p>google</p>
                                </div>
                            </div>
                        </div>
                        <div class="testimonials-img mt-5 mt-xl-0">
                            <img src="{{ asset('assets/images/testimonials-left-banner.webp') }}" loading="lazy" class="img-fluid" width="605px" height="673px" alt="Testimonials banner">
                        </div>
                    </div>
                </div>
                <div class="col-xl-8">
                    <div class="testimonials-container">
                        <div class="testimonial-right-top d-none d-xl-block">
                            <div class="mini-title">
                                <div class="circle-bg circle-yellow-bg"></div>
                                <p>Testimonials</p>
                            </div>
                            <div class="title">
                                <h3>Still In Two Minds? The Proof Is In Feedback!</h3>
                            </div>
                            <div class="content">
                                <p>Check out the latest feedback from learners who use our affordable-dissertation.co.uk</p>
                            </div>
                            <div class="brands-badges">
                                <div class="brand-badge-container brand-badge-container-white">
                                    <img src="{{ asset('assets/images/affordable-dissertation-icon.webp') }}" loading="lazy" class="img-fluid" width="37px" height="44px" alt="affordable dissertation">
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
                        </div>
                        <div class="testimonials-right-bottom">
                            <div class="testimonials-carousel owl-carousel owl-theme">
                                @foreach($customerFromIDs as $customer)
                                <div class="item">
                                    <div class="testimonial-slider-container">
                                        <div class="testimoial-slider-header">
                                            <div class="testimonial-header-left">
                                                <!-- Use customer rating and dynamically display the category -->
                                                <img src="{{ asset('assets/images/rating-yellow.webp') }}" loading="lazy" class="img-fluid" width="101px" height="17.701px" alt="writer rating">
                                                <h4>{{ $customer->subject ?? 'Management' }}</h4>
                                                <div class="testimonial-header-right d-block d-md-none">
                                                    <div class="date">{{ $customer->date ?? 'Date not available' }}</div>
                                                </div>
                                                <p><span>Essay: </span>1 Page, Deadline: 12 hours</p>
                                            </div>
                                            <div class="testimonial-header-right d-none d-md-block">
                                                <div class="date">{{ $customer->date ?? 'Date not available' }}</div>
                                            </div>
                                        </div>
                                        <div class="testimonial-body">
                                            <p>{{ $customer->review ?? 'No testimonial provided.' }}</p>
                                        </div>
                                        <div class="testimonial-footer">
                                            <div class="testimonial-author">
                                                <div class="testmonial-profile-img">
                                                    <img src="{{ $customer->image ? asset($customer->image) : asset('assets/images/testimonial-author.webp') }}" loading="lazy" width="99px" height="99px" class="img-fluid" alt="Testimonial author">
                                                </div>
                                                <div class="testimonial-author-title">
                                                    <h4>{{ $customer->name }}</h4>
                                                    <p>Customer ID: {{ $customer->customer_no }}</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </section>
