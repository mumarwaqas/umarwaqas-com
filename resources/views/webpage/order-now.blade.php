@extends('layouts.web')

@section('title')
Order Now Page
@endsection

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

    <section id="order-now">
        <div class="container mt-4">
            <!-- Display Success Message -->
            @if(session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif
        </div>
        <div class="container">
            <div class="row">
                <div class="col-xl-8">
                    <div class="order-now-from-container">
                        <div class="order-now-topbar">
                            <div class="bg-black-content bg-order-content">
                                <img src="{{ asset('assets/images/fill-out-order-form.webp') }}" loading="lazy" width="29px" height="32px" class="img-fluid" alt="fill-out-order-form">
                                <h4>Fill out the order form</h4>
                            </div>
                            <div class="bg-yellow-content bg-order-content">
                                <img src="{{ asset('assets/images/contact-information-icon.webp') }}" loading="lazy" width="37px" height="38px" class="img-fluid" alt="contact-information-icon">
                                <h4>Contact Information</h4>
                            </div>
                        </div>
                        <div class="order-form-start">
                            <form action="{{ route('store') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <label for="Academic Level">Academic Level<span>*</span></label>
                                    <select aria-label="Academic Level" name="academic_level" class="select-bg" id="academic_level" oninvalid="setCustomValidity('Please select academic level.')" oninput="setCustomValidity('')" required="required">
                                        <option value="">Select Academic Level</option>
                                        <option value="A Level / O Level">A Level / O Level</option>
                                        <option value="Undergraduate">Undergraduate</option>
                                        <option value="Graduate / Master's">Graduate / Master's</option>
                                        <option value="PhD">PhD</option>
                                        <option value="Other">Other</option>
                                    </select>
                                    {{-- <div class="select-bg">
                                        <img src="{{ asset('assets/images/angle-down-icon.webp') }}" alt="down arrow" width="16.717px" height="10.145px" class="img-fluid" loading="lazy">
                                    </div> --}}
                                </div>
                                <div class="form-group">
                                    <label for="Type of paper">Paper Type<span>*</span></label>
                                    <select aria-label="Type of paper" name="type_of_paper" class="select-bg" id="type_of_paper" required="required">
                                        <option value="">Select type of paper</option>
                                        <option value="Admission Essay">Admission Essay</option>
                                        <option value="Annotated Bibliography">Annotated Bibliography</option>
                                        <option value="Article critique">Article critique</option>
                                        <option value="Article">Article</option>
                                        <option value="Assignment">Assignment</option>
                                        <option value="Book report">Book report</option>
                                        <option value="Book review">Book review</option>
                                        <option value="Capstone Project">Capstone Project</option>
                                        <option value="Case Analysis">Case Analysis</option>
                                        <option value="Case Study">Case Study</option>
                                        <option value="Copywriting">Copywriting</option>
                                        <option value="Course Work">Course Work</option>
                                        <option value="Coursework">Coursework</option>
                                        <option value="Cover letter">Cover letter</option>
                                        <option value="Critical essay">Critical essay</option>
                                        <option value="CV/Resume writing">CV/Resume writing</option>
                                        <option value="Debate">Debate</option>
                                        <option value="Discussion board post">Discussion board post</option>
                                        <option value="Dissertation - Analysis Chapter">Dissertation - Analysis Chapter</option>
                                        <option value="Dissertation - Conclusion Chapter">Dissertation - Conclusion Chapter</option>
                                        <option value="Dissertation Editing and Proof Reading">Dissertation Editing and Proof Reading</option>
                                        <option value="Dissertation - Introduction Chapter">Dissertation - Introduction Chapter</option>
                                        <option value="Dissertation - Literature Review Chapter">Dissertation - Literature Review Chapter</option>
                                        <option value="Dissertation - Methodology Chapter">Dissertation - Methodology Chapter</option>
                                        <option value="Dissertation Proposal">Dissertation Proposal</option>
                                        <option value="Dissertation Topics">Dissertation Topics</option>
                                        <option value="Dissertation">Dissertation</option>
                                        <option value="Dissertation - Abstract">Dissertation-Abstract</option>
                                        <option value="Essay">Essay</option>
                                        <option value="Information and Communication/ Computer Technology">Information and Communication/ Computer Technology</option>
                                        <option value="Lab report">Lab report</option>
                                        <option value="Laboratory Report">Laboratory Report</option>
                                        <option value="Movie Review">Movie Review</option>
                                        <option value="Multiple Choice Questions">Multiple Choice Questions</option>
                                        <option value="Online Exam">Online Exam</option>
                                        <option value="Other">Other</option>
                                        <option value="Outline">Outline</option>
                                        <option value="Personal statement">Personal statement</option>
                                        <option value="Power Point Presentation">Power Point Presentation</option>
                                        <option value="Project">Project</option>
                                        <option value="Proposal">Proposal</option>
                                        <option value="Reaction Paper">Reaction Paper</option>
                                        <option value="Reflective writing">Reflective writing</option>
                                        <option value="Report">Report</option>
                                        <option value="Research Paper">Research Paper</option>
                                        <option value="Research Proposal">Research Proposal</option>
                                        <option value="Research summary">Research summary</option>
                                        <option value="Scholarship Essay">Scholarship Essay</option>
                                        <option value="Speech">Speech</option>
                                        <option value="Statistics Project">Statistics Project</option>
                                        <option value="Summary">Summary</option>
                                        <option value="Term Paper">Term Paper</option>
                                        <option value="Thesis Proposal">Thesis Proposal</option>
                                        <option value="Thesis">Thesis</option>
                                        <option value="Other">Other</option>
                                    </select>
                                    {{-- <div class="select-bg">
                                        <img src="{{ asset('assets/images/angle-down-icon.webp') }}" alt="down arrow" width="16.717px" height="10.145px" class="img-fluid" loading="lazy">
                                    </div> --}}
                                </div>
                                <div class="form-group">
                                    <label for="Select Pages Words">Select Pages Words<span>*</span></label>
                                    <div class="increment-decrement">
                                        <div class="word-and-pages">
                                            <div class="word" id="word"> Word </div>     
                                            <div class="salash"> | </div> 
                                            <div class="page" id="page"> Page </div>                                                 
                                        </div>
                                        <div class="pages-con">
                                            <input aria-label="Number of Pages" type="number" name="number_of_pages" id="number_of_pages" class="page-count counter-number" min="1" max="1000" value="1" required="">
                                        </div>
                                        <button type="button" class="sub-page" id="sub-page" data-quantity="minus" data-field="number_of_pages" aria-label="Decrease Page Quantity">
                                            <img src="{{ asset('assets/images/minus.svg') }}" height="13px" width="13px" loading="lazy" alt="minus icon">
                                        </button>
                                        <div class="words-con">
                                            <input type="text" aria-label="Words Count" name="number_of_words" readonly="" id="number_of_words" class="number_of_words">
                                        </div>
                                        <button type="button" class="button add-page" id="add-page" data-quantity="plus" data-field="number_of_pages" aria-label="Increase Page Quantity">
                                            <img src="{{ asset('assets/images/plus.svg') }}" height="13px" width="13px" loading="lazy" alt="plus icon">
                                        </button>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="Delivery Time">Delivery Time<span>*</span></label>
                                    <select aria-label="Delivery Time" name="delivery_time" class="select-bg" id="delivery_time" oninvalid="setCustomValidity('Please select deadline.')" oninput="setCustomValidity('')" required="required">
                                        <option value="">Select Deadline</option>        
                                        <option value="1">1 Day</option>
                                        <option value="2">2 Days</option>
                                        <option value="3">3 Days</option>
                                        <option value="5">4 - 5 Days</option>
                                        <option value="10">6 - 10 Days</option>
                                        <option value="15">15 Days</option>
                                        <option value="15+">15+ Days</option>
                                    </select>
                                    {{-- <div class="select-bg">
                                        <img src="{{ asset('assets/images/angle-down-icon.webp') }}" alt="down arrow" width="16.717px" height="10.145px" class="img-fluid" loading="lazy">
                                    </div> --}}
                                </div>
                                <div class="form-group">
                                    <label for="Paper Quality">Paper Quality<span>*</span></label>
                                    <select aria-label="Paper Quality" name="paper_quality" class="select-bg" id="paper_quality" oninvalid="setCustomValidity('Please select paper quality.')" oninput="setCustomValidity('')" required="required">
                                        <option value="">Select paper quality</option>
                                        <option value="first-class">First Class</option>
                                        <option value="2:1">2:1</option>
                                        <option value="2:2">2:2</option>
                                    </select>
                                    {{-- <div class="select-bg">
                                        <img src="{{ asset('assets/images/angle-down-icon.webp') }}" alt="down arrow" width="16.717px" height="10.145px" class="img-fluid" loading="lazy">
                                    </div> --}}
                                </div>
                                <div class="form-group">
                                    <label for="Citation Style">Citation Style<span>*</span></label>
                                    <select name="citation_style" class="select-bg" id="citation_style" oninvalid="setCustomValidity('Please select reference.')" oninput="setCustomValidity('')" required="">
                                        <option value="">Select Reference Style</option>        
                                        <option value="MLA">MLA</option>
                                        <option value="APA">APA</option>
                                        <option value="Chicago">Chicago</option>
                                        <option value="Harvard">Harvard</option>
                                        <option value="Oxford">Oxford</option>
                                        <option value="IEE">IEE</option>
                                        <option value="MHRA">MHRA</option>
                                        <option value="OSCOLA">OSCOLA</option>
                                        <option value="Vancouver">Vancouver</option>
                                        <option value="Chicago / Turabian">Chicago / Turabian</option>
                                        <option value="Other">Other</option>
                                    </select>
                                    {{-- <div class="select-bg">
                                        <img src="{{ asset('assets/images/angle-down-icon.webp') }}" alt="down arrow" width="16.717px" height="10.145px" class="img-fluid" loading="lazy">
                                    </div> --}}
                                </div>
                                <div class="form-group">
                                    <label for="Subject Area">Subject Area<span>*</span></label>
                                    <select aria-label="Type of subject" name="subject" class="select-bg" id="subject" oninvalid="setCustomValidity('Please select subject.')" oninput="setCustomValidity('')" required="">
                                        <option value="">Select Subject</option>
                                        <option>Accounting</option>
                                        <option>Accounts Law</option>
                                        <option>Advertising</option>
                                        <option>Aeronautical Engineering</option>
                                        <option>Agency Law</option>
                                        <option>Agriculture</option>
                                        <option>Animal Management</option>
                                        <option>Anthropology</option>
                                        <option>Architecture</option>
                                        <option>Art</option>
                                        <option>Astrophysics</option>
                                        <option>Biochemistry</option>
                                        <option>Biology</option>
                                        <option>Biotechnology</option>
                                        <option>Business</option>
                                        <option>Chemical Engineering</option>
                                        <option>Chemistry</option>
                                        <option>Child Care</option>
                                        <option>Civil Engineering</option>
                                        <option>Civil Litigation Law</option>
                                        <option>Classics</option>
                                        <option>Commercial Law</option>
                                        <option>Commercial Property Law</option>
                                        <option>Communication Strategies</option>
                                        <option>Communications &amp; Media</option>
                                        <option>Communications</option>
                                        <option>Company Law / Business Law</option>
                                        <option>Comparative Law</option>
                                        <option>Computer Engineering</option>
                                        <option>Computing</option>
                                        <option>Constitutional / Administrative Law</option>
                                        <option>Consumer Law</option>
                                        <option>Contract Law</option>
                                        <option>Criminal Law</option>
                                        <option>E-commerce</option>
                                        <option>Economics</option>
                                        <option>Education</option>
                                        <option>Engineering</option>
                                        <option>English</option>
                                        <option>Finance</option>
                                        <option>Healthcare &amp; Medicine</option>
                                        <option>History</option>
                                        <option>Human Resource</option>
                                        <option>Investment</option>
                                        <option>IT &amp; Technology</option>
                                        <option>Journalism</option>
                                        <option>Law</option>
                                        <option>Literature</option>
                                        <option>Logistics</option>
                                        <option>Marketing</option>
                                        <option>Medicine &amp; Dentistry</option>
                                        <option>Movies</option>
                                        <option>Nursing</option>
                                        <option>Paintings</option>
                                        <option>Pathogenesis of disease</option>
                                        <option>Physical Studies</option>
                                        <option>Political Science</option>
                                        <option>Psychology</option>
                                        <option>Public relations</option>
                                        <option>Social Work</option>
                                        <option>Sociology</option>
                                        <option>Theatre</option>
                                        <option>Trade</option>
                                        <option>Other</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="Enter Topic">Enter Topic<span>*</span></label>
                                    <input type="text" class="topic" name="topic" id="topic" placeholder="Enter the Topic of your paper" required="">
                                </div>
                                <div class="form-group textarea-group">
                                    <label for="Paper Details">Paper Details<span>*</span></label>
                                    <textarea class="paper_description" name="paper_description" id="paper_description" rows="5" cols="5" id="" placeholder="Describe your assignment in details"></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="number-of-sources">Number of Sources<span>*</span></label>
						            <div class="number-fo-sources-container">
							            <button type="button" class="number-of-sources-sub sub-page" id="sub-page" data-quantity="minus" data-field="number_of_sources" aria-label="Decrease Page Quantity">
                                            <img src="{{ asset('assets/images/minus.svg') }}" height="13px" width="13px" loading="lazy" alt="minus icon">
                                        </button>
                                        <div class="number-of-input">
                                            <input aria-label="Number of Pages" type="number" name="number_of_sources" id="number_of_sources" class="page-count counter-number" min="1" max="1000" value="1" required="">
                                        </div>
							            <button type="button" class="number-of-sources-add add-page" id="add-page" data-quantity="plus" data-field="number_of_sources" aria-label="Increase Page Quantity">
                                            <img src="{{ asset('assets/images/plus.svg') }}" height="13px" width="13px" loading="lazy" alt="plus icon">
                                        </button>
						            </div>
                                </div>
                                <div class="form-group add-file-order">
                                    <label for="Additional Material">Additional Material:</label>
                                    <div class="order-now-file-input">
                                        <div id="multiple_file_uploader">Add Attachment</div>
										<input type="hidden" name="attachment" class="upload_file_field" />
										<ul id="uploaded_files" style="display: none;"></ul>
                                    </div>
                                </div>
                                {{-- <div class="file-inner-content">
                                    <img src="{{ asset('assets/images/upload-icon.webp') }}" width="31.792px" height="26px" loading="lazy" alt="upload file">
                                    <p>Upload your files Here or</p>
                                    <div class="add-file-btn">+ Add Files</div>
                                </div> --}}

                                <div class="information-title">
                                    <div class="bg-yellow-content bg-order-content">
                                        <img src="{{ asset('assets/images/contact-information-icon.webp') }}" loading="lazy" width="37px" height="38px" class="img-fluid" alt="contact-information-icon">
                                        <h4>Contact Information</h4>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="Full Name">Full Name<span>*</span></label>
                                    <input type="text" class="name" name="name" id="name" placeholder="Enter your full name here" required="">
                                </div>
                                <div class="form-group">
                                    <label for="Your Email">Your Email<span>*</span></label>
                                    <input type="text" class="email" name="email" id="email" placeholder="Enter your Email ID" required="">
                                </div>
                                <div class="form-group">
                                    <label for="Phone Number">Phone Number<span>*</span></label>
                                    <input type="tel" class="phones" name="phone" id="phone" placeholder="Enter your Phone Number" required="">
                                </div>
                                <div class="order-now-btn-container">
                                    <div class="btn-content">Total price:<span>£<span id="final_price_tbl_2">0.00</span></span></div>
                                    <button type="submit">
                                        <img src="{{ asset('assets/images/lock-icon.webp') }}" width="18px" height="23px" loading="lazy" class="img-fluid" alt="Lock">
                                        Proceed To Checkout
                                        <img src="{{ asset('assets/images/angle-right-icon.webp') }}" width="18px" height="12.6px" class="img-fluid" loading="lazy" alt="angle right">
                                    </button>
                                </div>
                                <div class="policy-check">
                                    <label>
                                        <input type="checkbox" placeholder="" value="check" required>
                                        By checking this box and proceeding with this order i agree with <a href="#">privacy policy</a>, <a href="#">Terms Of Use,</a> Cookie Policy And Money Back Guarantee Of The Website. I Realise That All My Personal Data Being Used For Better Services Has Remained Safe.
                                    </label>
                                </div>
                                <div class="d-none">
                                    <input type="text" name="price_per_page" id="price_per_page_val" class="price_per_page_val" value="">
                                    <input type="text" name="discount_per" id="discount_per_val" class="discount_per_val" value="">
                                    <input type="text" name="discounted_price" id="discount_price_val" class="discount_price_val" value="">
                                    <input type="text" name="actual_price" id="price_val" class="price_val" value="">
                                    <input type="text" name="final_price" id="final_price_val" class="final_price_val" value="">
                                    <input type="text" name="final_price" id="final_price_val_2" class="final_price_val_2" value="">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4">
                    <div class="order-now-right">
                        <div class="summary-card">
                            <div class="summary-card-header">
                                <img src="{{ asset('assets/images/yellow-headphone-icon.webp') }}" width="41px" height="41.027px" loading="lazy" class="img-fluid" alt="Headphone">
                                <div class="heading">
                                    <div class="yellow-content">Need Help?</div>
                                    <p>We're always here for you</p>
                                </div>
                            </div>
                            <div class="summary-card-body">
                                <div class="heading">
                                    <h4>Your Order Summary</h4>
                                </div>
                                <div class="summary-lsit">
                                    <div class="field-heading">Education Level:</div>
                                    <div class="field-content sum_academic_level">Select education level</div>
                                </div>
                                <div class="summary-lsit">
                                    <div class="field-heading">Type Of Paper :</div>
                                    <div class="field-content sum_type_of_paper">Dissertation</div>
                                </div>
                                <div class="summary-lsit">
                                    <div class="field-heading">Number of Pages:</div>
                                    <div class="field-content sum_number_of_pages">1</div>
                                </div>
                                <div class="summary-lsit">
                                    <div class="field-heading">Delivery Time:</div>
                                    <div class="field-content sum_delivery_time">Select Deadline</div>
                                </div>
                                <div class="summary-lsit">
                                    <div class="field-heading">Paper Quality:</div>
                                    <div class="field-content sum_paper_quality">Select paper quality</div>
                                </div>
                                <div class="summary-lsit">
                                    <div class="field-heading">Citation Style:</div>
                                    <div class="field-content sum_citation_style">Select citation style</div>
                                </div>
                                <div class="summary-lsit">
                                    <div class="field-heading">Actual Price:</div>
                                    <div class="field-content">£<span id="price_tbl">0.00</span></div>
                                </div>
                                <div class="summary-lsit">
                                    <div class="field-heading">Discount:</div>
                                    <div class="field-content">£<span id="discount_price_tbl">0.00</span></div>
                                </div>
                                <div class="total-price-container">
                                    <div class="price-heading">Total Price:</div>
                                    <div class="total-price">£<span id="final_price_tbl">0.00</span></div>
                                </div>
                                <div class="checkout-btn">
                                    <button type="button">
                                        <img src="{{ asset('assets/images/lock-icon.webp') }}" width="18px" height="23px" loading="lazy" class="img-fluid" alt="Lock">
                                        Proceed To Checkout
                                    </button>
                                </div>
                            </div>
                        </div>
                        @include('partials.payment-and-security')
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
