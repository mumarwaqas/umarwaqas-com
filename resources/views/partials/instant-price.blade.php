<div class="instant-price-card">
    <div class="title">
        <h5>Get Instant Price</h5>
    </div>
    <div class="instant-price-form">
        <form method="get" action="{{ route('order-now') }}" name="quick-form" id="quick-form" class="quick-form" enctype="multipart/form-data">
            <div class="form-group">
                <select aria-label="Academic Level" name="academic_level" id="academic_level" oninvalid="setCustomValidity('Please select academic level.')" oninput="setCustomValidity('')" required="required">
                    <option value="">Select Academic Level</option>
                    <option value="A Level / O Level">A Level / O Level</option>
                    <option value="Undergraduate">Undergraduate</option>
                    <option value="Graduate / Master's">Graduate / Master's</option>
                    <option value="PhD">PhD</option>
                    <option value="Other">Other</option>
                </select>
            </div>
            <div class="form-group">
                <select aria-label="Type of paper" name="type_of_paper" id="type_of_paper" oninvalid="setCustomValidity('Please select type of paper.')" oninput="setCustomValidity('')" required="required">
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
            </div>
            <div class="form-group">
                <select aria-label="Type of subject" name="subject" id="subject" oninvalid="setCustomValidity('Please select subject.')" oninput="setCustomValidity('')" required="">
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
                <select name="citation_style" id="citation_style" oninvalid="setCustomValidity('Please select reference.')" oninput="setCustomValidity('')" required="">
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
            </div>
            <div class="form-group">
                <div class="increment-decrement">
                    <button type="button" class="sub-page" id="sub-page" data-quantity="minus" data-field="number_of_pages" aria-label="Decrease Page Quantity"><img src="{{ asset('assets/images/minus.svg') }}" height="13px" width="13px" loading="lazy" alt="minus icon"></button>
                    <div class="feilds-container">
                        <div class="pages-con">
                            <input aria-label="Number of Pages" type="number" name="number_of_pages" id="number_of_pages" class="page-count counter-number" min="1" max="1000" value="1" required="">
                            <div class="page" id="page"> Page </div>                                                 
                        </div>
                        <div class="salash"> | </div> 
                        <div class="words-con">
                            <input type="text" aria-label="Words Count" name="number_of_words" readonly="" id="number_of_words" class="number_of_words">
                            <div class="word" id="word"> Word </div>     
                        </div>
                    </div>
                    <button type="button" class="button add-page" id="add-page" data-quantity="plus" data-field="number_of_pages" aria-label="Increase Page Quantity"><img src="{{ asset('assets/images/plus.svg') }}" height="13px" width="13px" loading="lazy" alt="plus icon"></button>
                </div>
            </div>
            <div class="form-group">
                <select aria-label="Delivery Time" name="delivery_time" id="delivery_time" oninvalid="setCustomValidity('Please select deadline.')" oninput="setCustomValidity('')" required="required">
                    <option value="">Select Deadline</option>
                    <option value="1">1 Day</option>
                    <option value="2">2 Days</option>
                    <option value="3">3 Days</option>
                    <option value="5">4 - 5 Days</option>
                    <option value="10">6 - 10 Days</option>
                    <option value="15">15 Days</option>
                    <option value="15+">15+ Days</option>
                </select>
            </div>
            <div class="top-nav-menu-side-btns btns-flex d-none d-md-flex">
                <div class="primary-btn yellow-bg-btn">
                    <button type="submit"><img src="{{ asset('assets/images/order-now-icon.webp') }}" loading="lazy" class="img-fluid" height="25.3px" width="26.325px" alt="Live Chat"> Click Here to Order</button>
                </div>
            </div>
        </form>
    </div>
</div>
