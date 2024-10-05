@extends('layouts.web')

@section('title')
Home Page
@endsection

@section('head')
<!-- General Meta Tags -->
        <meta name="description" content="This is the home page of our website.">
        <meta name="keywords" content="home, welcome, main page">

        <!-- Open Graph Meta Tags -->
        <meta property="og:title" content="Home Page">
        <meta property="og:description" content="This is the home page of our website.">
        <meta property="og:type" content="website">
        <meta property="og:url" content="{{ url()->current() }}">
        <meta property="og:image" content="{{ asset('images/home-page.png') }}">

        <!-- Twitter Meta Tags -->
        <meta name="twitter:card" content="summary_large_image">
        <meta name="twitter:title" content="Home Page">
        <meta name="twitter:description" content="This is the home page of our website.">
        <meta name="twitter:image" content="{{ asset('images/home-page.png') }}">
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
    <!-- ===============  Blog section start ================ -->
    <section class="inner-blogs-main-container">
        <div class="container">
            <div class="row">
                <div class="col-xl-8">
                    <div class="inner-blog-container">
                        <div class="inner-post-banner">
                            <img src="{{ asset($post->image) }}" class="img-fluid" loading="lazy" width="1067px" height="481px" alt="{{ $post->title }}">
                        </div>
                        <div class="post-title-container">
                            <div class="title">
                                <h1>{{ $post->title }}</h1>
                            </div>
                            <div class="social-share">
                                <span>Share:</span>
                                <span>Share:</span>
                                <a href="#">
                                    <img src="{{ asset('assets/images/facebook-social.webp') }}" class="img-fluid" loading="lazy" height="26px" width="26px" alt="Facebook">
                                </a>
                                <a href="#">
                                    <img src="{{ asset('assets/images/linkedin-social.webp') }}" class="img-fluid" loading="lazy" height="24.9px" width="23.27px" alt="Linkedin">
                                </a>
                                <a href="#">
                                    <img src="{{ asset('assets/images/instagram-social.webp') }}" class="img-fluid" loading="lazy" height="27.19px" width="27.2px"alt="Instagram">
                                </a>
                            </div>
                        </div>
                        {{ $post->title }}
                        <p>Hey, final-year students! The academic pressure on you must be at its peak this year, right? You must have a stack of final-year projects and a research thesis. The pressure of getting a good GPA must be at its peak. The thesis must be becoming a pain in the neck because a slight mistake can make you go down in flames. It can be imagined how stressful this academic year must be for you. Plus, you are about to start your career and your practical life. Your academic performance can affect your career.</p>
                        <p>Wondering about the practical phase of life is common, but for now, come back to reality. It’s not 2 AM, don’t think about the future. For now, you have to be worried about your dissertation. Suppose you are finding ways to write the abstract for your dissertation. Don’t worry; we are here to help you.</p>
                        <h4>Best Practices for Dissertation Abstract Writing</h4>
                        <p>A dissertation abstract is written at the end of the thesis work as it is the summary of what you did. If you didn’t know that, you must be a class bunker or a daydreamer. Yeah, we know that there is always a friend who convinces us to bunk the class. But don’t become the one who is always ready to bunk. Well, now that you’re here, you don’t need to worry. You have enjoyed your time, and now it’s time for you to study. If you don’t know what is an abstract in a dissertation and how to write one, you’ve knocked on the right door. Here are 10 Best Practices to Write the Perfect Dissertation Abstract.</p>
                        <h4>Short</h4>
                        <p>A dissertation abstract is written at the end of the thesis work as it is the summary of what you did. If you didn’t know that, you must be a class bunker or a daydreamer. Yeah, we know that there is always a friend who convinces us to bunk the class. But don’t become the one who is always ready to bunk. Well, now that you’re here, you don’t need to worry. You have enjoyed your time, and now it’s time for you to study. If you don’t know what is an abstract in a dissertation and how to write one, you’ve knocked on the right door. Here are 10 Best Practices to Write the Perfect Dissertation Abstract.</p>
                        <div class="inner-post-banner">
                            <img src="{{ asset('assets/images/single-post-2.webp') }}" class="img-fluid" loading="lazy" width="1067px" height="481px" alt="Single post">
                        </div>
                        <h4>Short</h4>
                        <p>A dissertation abstract is written at the end of the thesis work as it is the summary of what you did. If you didn’t know that, you must be a class bunker or a daydreamer. Yeah, we know that there is always a friend who convinces us to bunk the class. But don’t become the one who is always ready to bunk. Well, now that you’re here, you don’t need to worry. You have enjoyed your time, and now it’s time for you to study. If you don’t know what is an abstract in a dissertation and how to write one, you’ve knocked on the right door. Here are 10 Best Practices to Write the Perfect Dissertation Abstract.</p>
                        <h4>Format</h4>
                        <p>The format of your abstract depends on your research. While formatting, you have to keep 5 things in mind.</p>
                        <div class="single-post-list-container">
                            <div class="single-post-list">
                                <img src="{{ asset('assets/images/every-list-icon-yellow.webp') }}" width="15px" height="17px" class="img-fluid" loading="lazy" alt="list">
                                <p>Research purpose</p>
                            </div>
                            <div class="single-post-list">
                                <img src="{{ asset('assets/images/every-list-icon-yellow.webp') }}" width="15px" height="17px" class="img-fluid" loading="lazy" alt="list">
                                <p>Research problem</p>
                            </div>
                            <div class="single-post-list">
                                <img src="{{ asset('assets/images/every-list-icon-yellow.webp') }}" width="15px" height="17px" class="img-fluid" loading="lazy" alt="list">
                                <p>Methods to conduct the research</p>
                            </div>
                            <div class="single-post-list">
                                <img src="{{ asset('assets/images/every-list-icon-yellow.webp') }}" width="15px" height="17px" class="img-fluid" loading="lazy" alt="list">
                                <p>The outcomes</p>
                            </div>
                            <div class="single-post-list">
                                <img src="{{ asset('assets/images/every-list-icon-yellow.webp') }}" width="15px" height="17px" class="img-fluid" loading="lazy" alt="list">
                                <p>Implementations</p>
                            </div>
                        </div>
                        <p>Remember, that the formatting depends on your topic and the type of research paper. A simple copy-paste cannot be applied here. If you don’t know how to format the article, it’s better to seek help from a dissertation writing help; we are present 24/7 for you.</p>
                        <h4>Avoid mistakes</h4>
                        <p>How do you behave when you meet someone for the first time? You have to present your abstract the same way. Since it is the first paragraph the reader comes across, you must write it perfectly. Avoid grammatical errors and place the punctuations in the right place so that it doesn’t leave a bad impression on your reader.</p>
                        <h4>Active voice</h4>
                        <p>Sticking to a 120-150 word limit to describe everything can be arduous. Even though dissertation help can be taken from many writing service providers but why don’t we try on our own? To keep the synopsis precise and short, use an active voice. It requires fewer words to complete the sentence and is easy to read.</p>
                        <div class="inner-post-banner">
                            <img src="{{ asset('assets/images/single-post-2.webp') }}" class="img-fluid" loading="lazy" width="1067px" height="481px" alt="Single post">
                        </div>
                        <h4>Avoid citation</h4>
                        <p>Imagine you’re already finding it difficult to stick to the 150-word limit, and your professor asks you to add the citation. You must be wondering how you will follow the guidelines, right? Dear students, if you don’t know how to write a dissertation or a dissertation abstract, you can take online help. But if your main concern is how to keep the abstract short, here is a tip. To keep the para short, avoid sentencing the points that require citation. Put down all the points that can successfully grab your reader’s attention but avoid citations.</p>
                        <h4>Research problem</h4>
                        <p>Even if you read someone’s dissertation, the first thing that you will look for will be the problem. Why the research was conducted will be the main curiosity. Give a two lines background and state the problem to let your reader know your purpose. Remember, what is an abstract in a dissertation? It is a synopsis of your main points, so discussing the research problem is a must.</p>
                        <h4>Avoid paragraphs</h4>
                        <p>As we have discussed above, the abstract should comprise one single paragraph. Separating abstracts into 2-3 paragraphs was practiced earlier, but when authorities began storing the synopsis in the online database, this is not something that we practice now. Even if you’re still confused, you can approach us anytime for the dissertation abstract help.</p>
                        <h4>Avoid introducing</h4>
                        <p>Though it is necessary to introduce the topic but wasting half of your summary introducing your topic is wrong. Not only will it cover your word count, but it will also drag your professor’s attention away. How would you feel if someone found you boring on the 1st meeting, Even though you are an interesting person? Pretty disappointing, right? Write your abstract, keeping that in mind.</p>
                        <h4>Conclusion</h4>
                        <p>Dear students! Remember that copying someone else content may be easy, but if you’re preparing yourself for the future, avoid it. Continuing the same practice will lead you nowhere; better seek the help of a writing assistant or be your boss. Avoid making mistakes and errors. We all know that 1st impression is the last impression, and it lasts forever. It is better to impose our best impression on the very first paragraph. Write a creative, catchy, and attention-grabbing paragraph. Put all the points that can get your professor involved. Follow the useful tips mentioned above. Practice these tips while writing your dissertation and score good marks.</p>
                    </div>
                </div>
                <div class="col-xl-4">
                    <div class="inner-blogs-right">
                        @include('partials.blog-search')
                        @include('partials.blog-table-of-content')
                        @include('partials.free-features')
                        @include('partials.latest-posts-slider')
                        @include('partials.expert-card')
                        @include('partials.payment-and-security')
                    </div>
                </div>
            </div>
        </div>
     </section>

     <!-- ===============  Blog section end ================ -->
    <!-- ===================================================== -->
{{-- 
    <!-- ===================================================== -->
    <!-- ===============  Writer section start ================ -->
    @include('partials.writers-section')
    <!-- ===============  Writer section end ================ -->
    <!-- ===================================================== -->

    <!-- ===================================================== -->
    <!-- ===============  Testimonials section start ================ -->
    @include('partials.testimonials-section')
    <!-- ===============  Testimonials section end ================ -->
    <!-- ===================================================== -->
 --}}
    <!-- ===================================================== -->
    <!-- ===============  Every Update section start ================ -->
    @include('partials.every-update-section')
    <!-- ===============  Every Update section end ================ -->
    <!-- ===================================================== -->

@endsection
