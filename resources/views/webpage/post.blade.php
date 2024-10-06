<<<<<<< HEAD
@extends('layouts.web')
<<<<<<< HEAD

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
=======
 
@section('title', $meta['title'])

@section('meta')
    <meta name="description" content="{{ $meta['description'] }}">
    <meta name="keywords" content="{{ $meta['keywords'] }}">
    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="{{ $meta['og']['type'] }}">
    <meta property="og:locale" content="{{ $meta['og']['locale'] }}">
    <meta property="og:site_name" content="{{ $meta['og']['site_name'] }}">
    <meta property="og:url" content="{{ $meta['og']['url'] }}">
    <meta property="og:image" content="{{ $meta['og']['image'] }}">
    <meta property="og:image:type" content="{{ $meta['og']['image_type'] }}">
    <meta property="og:description" content="{{ $meta['og']['description'] }}">
    <!-- Twitter -->
    <meta name="twitter:title" content="{{ $meta['twitter']['title'] }}">
    <meta name="twitter:card" content="{{ $meta['twitter']['card'] }}">
    <meta name="twitter:description" content="{{ $meta['twitter']['description'] }}">
    <meta name="twitter:image" content="{{ $meta['twitter']['image'] }}">
@endsection

@section('head')
@endsection

@section('footer_scripts')
@endsection

@section('content')
    <div>
        <div class="rounded-2xl bg-white p-6 shadow dark:bg-black dark:shadow-dark lg:sticky lg:top-24">
            <x-intro />
        </div>    
    </div>
    <!-- Article -->
    <div class="rounded-2xl bg-white p-6 shadow dark:bg-black dark:shadow-dark lg:col-span-2 lg:p-10">
        <figure class="aspect-video overflow-hidden rounded-lg">
            <img src="{{ asset($post->image) }}" alt="{{ $post->title }}" class="h-full w-full object-cover" />
        </figure>

        <ul class="mt-4 flex flex-wrap items-center gap-4 md:gap-6">
            <li class="relative text-sm text-muted/50 before:mr-1 before:content-['\2022'] dark:text-muted">
                {{ $post->read_time }} min read
            </li>
            <li class="relative text-sm text-muted/50 before:mr-1 before:content-['\2022'] dark:text-muted">
                {{ \Carbon\Carbon::parse($post->created_at)->format('M j, Y') }}
            </li>
            <li class="relative text-sm text-muted/50 before:mr-1 before:content-['\2022'] dark:text-muted">
                {{ $post->views }} Views
            </li>
        </ul>

        <article class="prose mt-6 dark:prose-invert xl:prose-lg prose-headings:font-medium prose-blockquote:border-primary lg:mt-10">
            <h2>{{ $post->title }}</h2>
            {!! $post->content !!}
        </article>

        <div class="mt-10 flex flex-wrap justify-between gap-4">
            <div class="flex flex-wrap items-center gap-5">
                <h6 class="text-lg font-medium text-dark dark:text-light">Tags:</h6>

                <div class="flex flex-wrap gap-2">
                    {{-- @foreach($post->tags as $tag) --}}
                    <a href="#" class="inline-flex items-center justify-center gap-2 rounded border border-light bg-white px-2 py-1 text-center text-xs font-medium leading-none text-dark transition hover:bg-primary hover:text-white dark:border-dark dark:bg-dark-2 dark:text-light/70 dark:hover:bg-primary dark:hover:text-white">
                        {{-- {{ $tag }} --}}
                    </a>
                    {{-- @endforeach --}}
                </div>
            </div>
            <div class="flex flex-wrap items-center gap-5">
                <h6 class="text-lg font-medium text-dark dark:text-light">Share:</h6>

                <div class="flex flex-wrap items-center gap-2">
                    <a href="#" class="flex h-10 w-10 items-center justify-center rounded-lg border border-slate-200 bg-transparent text-center text-slate-600 transition hover:text-primary focus:outline-none focus:ring disabled:pointer-events-none disabled:opacity-50 dark:border-transparent dark:bg-dark-2 dark:text-slate-500 dark:hover:text-primary">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="h-6 w-6">
                            <path d="M12 2C6.477 2 2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.879V14.89h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.989C18.343 21.129 22 16.99 22 12c0-5.523-4.477-10-10-10Z" />
                        </svg>
                    </a>
                    <a href="#" class="flex h-10 w-10 items-center justify-center rounded-lg border border-slate-200 bg-transparent text-center text-slate-600 transition hover:text-primary focus:outline-none focus:ring disabled:pointer-events-none disabled:opacity-50 dark:border-transparent dark:bg-dark-2 dark:text-slate-500 dark:hover:text-primary">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="h-6 w-6">
                            <path d="M13.37 2.094A10.003 10.003 0 0 0 8.002 21.17a7.757 7.757 0 0 1 .163-2.293c.185-.839 1.296-5.463 1.296-5.463a3.74 3.74 0 0 1-.324-1.577c0-1.485.857-2.593 1.923-2.593a1.334 1.334 0 0 1 1.342 1.508c0 .9-.578 2.262-.88 3.54a1.544 1.544 0 0 0 1.575 1.923c1.898 0 3.17-2.431 3.17-5.301 0-2.2-1.457-3.848-4.143-3.848a4.746 4.746 0 0 0-4.93 4.794 2.96 2.96 0 0 0 .648 1.97.48.48 0 0 1 .162.554c-.046.184-.162.623-.208.784a.354.354 0 0 1-.51.254c-1.384-.554-2.036-2.077-2.036-3.816 0-2.847 2.384-6.255 7.154-6.255 3.796 0 6.32 2.777 6.32 5.747 0 3.909-2.177 6.848-5.394 6.848a2.862 2.862 0 0 1-2.454-1.246s-.578 2.316-.692 2.754a8.026 8.026 0 0 1-1.019 2.131c.923.28 1.882.42 2.846.416a9.99 9.99 0 0 0 9.996-10.003 10.002 10.002 0 0 0-8.635-9.903l-.002-.001Z" />
                        </svg>
                    </a>
                    <a href="#" class="flex h-10 w-10 items-center justify-center rounded-lg border border-slate-200 bg-transparent text-center text-slate-600 transition hover:text-primary focus:outline-none focus:ring disabled:pointer-events-none disabled:opacity-50 dark:border-transparent dark:bg-dark-2 dark:text-slate-500 dark:hover:text-primary">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="h-6 w-6">
                            <path d="M12 2C6.475 2 2 6.475 2 12a9.994 9.994 0 0 0 6.838 9.488c.5.087.687-.213.687-.476 0-.237-.013-1.024-.013-1.862-2.512.463-3.162-.612-3.362-1.175-.113-.288-.6-1.175-1.025-1.413-.35-.187-.85-.65-.013-.662.788-.013 1.35.725 1.538 1.025.9 1.512 2.338 1.087 2.912.825.088-.65.35-1.087.638-1.337-2.225-.25-4.55-1.113-4.55-4.938 0-1.088.387-1.987 1.025-2.688-.1-.25-.45-1.275.1-2.65 0 0 .837-.262 2.75 1.026a9.28 9.28 0 0 1 2.5-.338c.85 0 1.7.112 2.5.337 1.912-1.3 2.75-1.024 2.75-1.024.55 1.375.2 2.4.1 2.65.637.7 1.025 1.587 1.025 2.687 0 3.838-2.337 4.688-4.562 4.938.362.312.675.912.675 1.85 0 1.337-.013 2.412-.013 2.75 0 .262.188.574.688.474A10.016 10.016 0 0 0 22 12c0-5.525-4.475-10-10-10Z" />
                        </svg>
                    </a>
                    <a href="#" class="flex h-10 w-10 items-center justify-center rounded-lg border border-slate-200 bg-transparent text-center text-slate-600 transition hover:text-primary focus:outline-none focus:ring disabled:pointer-events-none disabled:opacity-50 dark:border-transparent dark:bg-dark-2 dark:text-slate-500 dark:hover:text-primary">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="h-6 w-6">
                            <path d="M21.543 6.498C22 8.28 22 12 22 12s0 3.72-.457 5.502c-.254.985-.997 1.76-1.938 2.022C17.896 20 12 20 12 20s-5.893 0-7.605-.476c-.945-.266-1.687-1.04-1.938-2.022C2 15.72 2 12 2 12s0-3.72.457-5.502c.254-.985.997-1.76 1.938-2.022C6.107 4 12 4 12 4s5.896 0 7.605.476c.945.266 1.687 1.04 1.938 2.022ZM10 15.5l6-3.5-6-3.5v7Z" />
                        </svg>
                    </a>
                </div>
            </div>
        </div>

        <div class="mt-10 lg:mt-14">
            <h3 class="text-2xl font-semibold leading-tight text-dark dark:text-light lg:text-3xl lg:leading-tight">
                Related Post
            </h3>
            <div class="mt-6 grid grid-cols-1 gap-x-6 gap-y-10 md:grid-cols-2 lg:mt-8">
                @foreach($relatedPosts as $relatedPost)
                    <div class="">
                        <div class="relative">
                            <a href="{{ route('post.show', $relatedPost->slug) }}" class="group block aspect-6/4 overflow-hidden rounded-lg">
                                <img src="{{ asset($relatedPost->image) }}" alt="" class="h-full w-full rounded-lg object-cover transition duration-700 group-hover:scale-105">
                            </a>
                            <!-- Tags -->
                            <div class="absolute bottom-4 left-4 flex flex-wrap gap-2">
                                {{-- @foreach($relatedPost->tags as $tag) --}}
                                    <a href="#" class="inline-flex items-center justify-center gap-2 rounded bg-white px-2 py-1 text-center text-xs leading-none text-primary shadow transition hover:bg-primary hover:text-white">
                                        {{-- {{ $tag }} --}}
                                    </a>
                                {{-- @endforeach --}}
                            </div>
                        </div>
                        <div class="mt-6">
                            <h2 class="text-xl font-medium xl:text-2xl">
                                <a href="{{ route('post.show', $relatedPost->slug) }}" class="inline-block text-dark transition hover:text-primary dark:text-light/70 dark:hover:text-primary">
                                    {{ $relatedPost->title }}
                                </a>
                            </h2>
                            <ul class="mt-4 flex flex-wrap items-center gap-2">
                                <li class="relative text-sm text-muted/50 before:mr-1 before:content-['\2022'] dark:text-muted">
                                    {{ $relatedPost->read_time }} min read
                                </li>
                                <li class="relative text-sm text-muted/50 before:mr-1 before:content-['\2022'] dark:text-muted">
                                    {{ \Carbon\Carbon::parse($relatedPost->created_at)->format('M j, Y') }}
                                </li>
                            </ul>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
        
        <div class="mt-10 lg:mt-14">
            <h3 class="text-2xl font-semibold leading-tight text-dark dark:text-light lg:text-3xl lg:leading-tight">
                Leave a Comment
            </h3>

            <form action="#" class="mt-6 space-y-6 rounded-lg bg-light p-6 dark:bg-dark-2 lg:mt-8 xl:p-12">
                <div class="grid grid-cols-1 gap-4 md:grid-cols-2">
                    <div class="">
                        <label for="name" class="mb-2 block text-sm font-medium text-dark dark:text-light">
                            Name
                        </label>
                        <input type="text" id="name" name="Name" placeholder="Enter your name" class="block w-full rounded-lg border border-gray-200 bg-white px-6 py-4 text-base outline-none transition focus:border-dark focus:ring focus:ring-dark/20 disabled:pointer-events-none disabled:opacity-50 dark:border-dark dark:bg-black dark:text-white dark:focus:border-muted dark:focus:ring-white/20" />
                    </div>
                    <div class="">
                        <label for="email" class="mb-2 block text-sm font-medium text-dark dark:text-light">
                            Email
                        </label>
                        <input type="email" id="email" name="Email" placeholder="Enter your email" class="block w-full rounded-lg border border-gray-200 bg-white px-6 py-4 text-base outline-none transition focus:border-dark focus:ring focus:ring-dark/20 disabled:pointer-events-none disabled:opacity-50 dark:border-dark dark:bg-black dark:text-white dark:focus:border-muted dark:focus:ring-white/20" />
                    </div>
                </div>

                <div class="">
                    <label for="comment" class="mb-2 block text-sm font-medium text-dark dark:text-light">
                        Comment
                    </label>

                    <textarea name="Comment" id="comment" placeholder="Type details about your inquiry" rows="4" class="block w-full rounded-lg border border-gray-200 bg-white px-6 py-4 text-base outline-none transition focus:border-dark focus:ring focus:ring-dark/20 disabled:pointer-events-none disabled:opacity-50 dark:border-dark dark:bg-black dark:text-white dark:focus:border-muted dark:focus:ring-white/20"></textarea>
                </div>

                <button type="submit" class="inline-flex w-full items-center justify-center gap-x-2 rounded-lg border border-transparent bg-primary px-6 py-4 text-center font-medium text-white transition hover:bg-blue-600 focus:outline-none focus:ring disabled:pointer-events-none disabled:opacity-50">
                    <span>Post Comment</span>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" class="h-5 w-5">
                        <path d="M17.5 11.667v-5h-5" />
                        <path d="m17.5 6.667-7.5 7.5-7.5-7.5" />
                    </svg>
                </button>
            </form>
        </div>
    </div>

@endsection


>>>>>>> parent of 53ecb51 (Latest)
=======
<div class="grid grid-cols-1 gap-x-6 gap-y-10 md:grid-cols-2">
    @foreach($posts as $post)
    <div>
        <div class="relative">
            <a href="{{ route('post', $post->slug) }}" class="group block aspect-6/4 overflow-hidden rounded-lg">
                <img src="{{ asset($post->image) }}" alt="{{ $post->title }}" class="h-full w-full rounded-lg object-cover transition duration-700 group-hover:scale-105" lazy="loaded">
            </a>
            <div class="absolute bottom-4 left-4 flex flex-wrap gap-2">
                @if($post->category)
                    <a href="{{ route('category', $post->category->slug) }}" class="inline-flex items-center justify-center gap-2 rounded bg-white px-2 py-1 text-center text-xs leading-none text-primary shadow transition hover:bg-primary hover:text-white">{{ $post->category->title }}</a>
                @endif
            </div>
        </div>
        <div class="mt-6">
            <h2 class="text-xl font-medium xl:text-2xl">
                <a href="{{ route('post', $post->slug) }}" class="inline-block text-dark transition hover:text-primary dark:text-light/70 dark:hover:text-primary">{{ $post->title }}</a>
            </h2>
            <ul class="mt-4 flex flex-wrap items-center gap-2">
                <li class="relative text-sm text-muted/50 before:mr-1 before:content-['\2022'] dark:text-muted">{{ $post->created_at->diffForHumans() }}</li>
                <li class="relative text-sm text-muted/50 before:mr-1 before:content-['\2022'] dark:text-muted">{{ $post->created_at->format('Y-m-d H:i:s') }}</li>
            </ul>
        </div>
    </div>
    @endforeach
</div>
{{ $posts->links('vendor.pagination.custom') }}
>>>>>>> parent of fc9fe7c (Latest)
