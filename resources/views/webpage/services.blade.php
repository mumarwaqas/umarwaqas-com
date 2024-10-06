@extends('layouts.web')

@section('title')
Our Services
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
<<<<<<< HEAD

    <!-- ===================================================== -->
    <!-- ================ hero section start ===================== -->
    @include('partials.inner-pages-hero-section')
    <!-- ================ hero section end ======================= -->
    <!-- ===================================================== -->

    <!-- ===================================================== -->
    <!-- =============== Professional Dissertation Help section start ================ -->
    <section id="professional-dissertation-help">
        <div class="container">
            <div class="mini-title">
                <div class="circle-bg circle-yellow-bg"></div>
                <p>Our Services</p>
=======
<div>
    <div class="rounded-2xl bg-white p-6 shadow dark:bg-black dark:shadow-dark lg:sticky lg:top-24">
        <x-intro />
    </div>    
</div>
<div class="rounded-2xl bg-white p-6 shadow dark:bg-black dark:shadow-dark lg:col-span-2 lg:p-10">
    <div class="flex flex-col-reverse items-start gap-6 lg:flex-row lg:gap-10">
        <div class>
            <h2 class="text-3xl font-semibold text-dark dark:text-light lg:text-[40px]">Services I <span class="text-primary">Offered</span></h2>
            <p class="mt-4 text-lg text-muted dark:text-light/70 lg:mt-6 lg:text-2xl">Transforming Ideas into Innovative Reality, Elevate Your Vision with Our Expert <span class="font-semibold text-dark dark:text-white">Product Design and Development </span> Services! </p>
        </div>
        <div
            class="flex items-center justify-center gap-2 whitespace-nowrap rounded-lg bg-light px-4 py-2 text-center text-base font-medium leading-none text-primary dark:bg-dark-2 lg:text-lg">
            <span class="relative flex h-2 w-2 shrink-0">
                <span class="absolute inline-flex h-full w-full animate-ping rounded-full bg-primary opacity-75 dark:bg-light"></span>
                <span class="relative inline-flex h-2 w-2 rounded-full bg-primary"></span></span><span>Available For Hire</span></div>
    </div>
    <div class="mt-10 grid grid-cols-2 gap-6 md:grid-cols-4 lg:mt-14">
        <x-services :count="8" />
    </div>
    <div class="mt-10 aspect-video overflow-hidden rounded-lg bg-light dark:bg-dark-2 lg:mt-14"><img
            src="/assets/images/blog-img-1.jpg" alt class="h-full w-full rounded-lg object-cover"></div>
    <div class="mt-10 lg:mt-14">
        <h3 class="text-2xl font-medium text-dark dark:text-light lg:text-3xl">
            Working With 50+ Brands ✨ Worldwide </h3>
        <div
            class="mt-8 grid grid-cols-[repeat(auto-fit,_minmax(60px,1fr))] gap-2 lg:grid-cols-[repeat(auto-fit,_minmax(80px,1fr))] lg:gap-4">
            <div
                class="grid h-16 place-content-center rounded-lg bg-light p-3 dark:bg-dark-2 lg:h-20 lg:rounded-2xl lg:p-4">
                <img src="/assets/images/notion.svg" alt class="h-8 w-8 lg:h-10 lg:w-10"></div>
            <div
                class="grid h-16 place-content-center rounded-lg bg-light p-3 dark:bg-dark-2 lg:h-20 lg:rounded-2xl lg:p-4">
                <img src="/assets/images/webflow.svg" alt class="h-8 w-8 lg:h-10 lg:w-10"></div>
            <div
                class="grid h-16 place-content-center rounded-lg bg-light p-3 dark:bg-dark-2 lg:h-20 lg:rounded-2xl lg:p-4">
                <img src="/assets/images/mico.svg" alt class="h-8 w-8 lg:h-10 lg:w-10"></div>
            <div
                class="grid h-16 place-content-center rounded-lg bg-light p-3 dark:bg-dark-2 lg:h-20 lg:rounded-2xl lg:p-4">
                <img src="/assets/images/framer.svg" alt class="h-8 w-8 lg:h-10 lg:w-10"></div>
            <div
                class="grid h-16 place-content-center rounded-lg bg-light p-3 dark:bg-dark-2 lg:h-20 lg:rounded-2xl lg:p-4">
                <img src="/assets/images/zeplin.svg" alt class="h-8 w-8 lg:h-10 lg:w-10"></div>
            <div
                class="grid h-16 place-content-center rounded-lg bg-light p-3 dark:bg-dark-2 lg:h-20 lg:rounded-2xl lg:p-4">
                <img src="/assets/images/figma.svg" alt class="h-8 w-8 lg:h-10 lg:w-10"></div>
            <div
                class="grid h-16 place-content-center rounded-lg bg-light p-3 dark:bg-dark-2 lg:h-20 lg:rounded-2xl lg:p-4">
                <img src="/assets/images/notion.svg" alt class="h-8 w-8 lg:h-10 lg:w-10"></div>
            <div
                class="grid h-16 place-content-center rounded-lg bg-light p-3 dark:bg-dark-2 lg:h-20 lg:rounded-2xl lg:p-4">
                <img src="/assets/images/webflow.svg" alt class="h-8 w-8 lg:h-10 lg:w-10"></div>
            <div
                class="grid h-16 place-content-center rounded-lg bg-light p-3 dark:bg-dark-2 lg:h-20 lg:rounded-2xl lg:p-4">
                <img src="/assets/images/mico.svg" alt class="h-8 w-8 lg:h-10 lg:w-10"></div>
            <div
                class="grid h-16 place-content-center rounded-lg bg-light p-3 dark:bg-dark-2 lg:h-20 lg:rounded-2xl lg:p-4">
                <img src="/assets/images/framer.svg" alt class="h-8 w-8 lg:h-10 lg:w-10"></div>
            <div
                class="grid h-16 place-content-center rounded-lg bg-light p-3 dark:bg-dark-2 lg:h-20 lg:rounded-2xl lg:p-4">
                <img src="/assets/images/zeplin.svg" alt class="h-8 w-8 lg:h-10 lg:w-10"></div>
            <div
                class="grid h-16 place-content-center rounded-lg bg-light p-3 dark:bg-dark-2 lg:h-20 lg:rounded-2xl lg:p-4">
                <img src="/assets/images/figma.svg" alt class="h-8 w-8 lg:h-10 lg:w-10"></div>
            <div
                class="grid h-16 place-content-center rounded-lg bg-light p-3 dark:bg-dark-2 lg:h-20 lg:rounded-2xl lg:p-4">
                <img src="/assets/images/notion.svg" alt class="h-8 w-8 lg:h-10 lg:w-10"></div>
            <div
                class="grid h-16 place-content-center rounded-lg bg-light p-3 dark:bg-dark-2 lg:h-20 lg:rounded-2xl lg:p-4">
                <img src="/assets/images/webflow.svg" alt class="h-8 w-8 lg:h-10 lg:w-10"></div>
            <div
                class="grid h-16 place-content-center rounded-lg bg-light p-3 dark:bg-dark-2 lg:h-20 lg:rounded-2xl lg:p-4">
                <img src="/assets/images/mico.svg" alt class="h-8 w-8 lg:h-10 lg:w-10"></div>
            <div
                class="grid h-16 place-content-center rounded-lg bg-light p-3 dark:bg-dark-2 lg:h-20 lg:rounded-2xl lg:p-4">
                <img src="/assets/images/framer.svg" alt class="h-8 w-8 lg:h-10 lg:w-10"></div>
        </div>
    </div>
    <div class="mt-10 lg:mt-14">
        <div class="flex flex-wrap items-center justify-between gap-6">
            <h3 class="text-2xl font-medium text-dark dark:text-light lg:text-3xl">
                Trusted By 1200+ Clients </h3>
            <div class="flex items-center gap-2"><button
                    class="review-carousel-button-prev grid h-9 w-9 place-content-center rounded-lg border border-muted/30 text-muted transition hover:border-primary hover:text-primary"
                    tabindex="0" aria-label="Previous slide" aria-controls="swiper-wrapper-dce7cf477da8ae9f"><svg
                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="none" stroke="currentColor"
                        stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" class="h-5 w-5 shrink-0">
                        <path d="M4.167 10h11.666M4.167 10l5 5m-5-5 5-5"></path>
                    </svg></button><button
                    class="review-carousel-button-next grid h-9 w-9 place-content-center rounded-lg border border-muted/30 text-muted transition hover:border-primary hover:text-primary"
                    tabindex="0" aria-label="Next slide" aria-controls="swiper-wrapper-dce7cf477da8ae9f"><svg
                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="none" stroke="currentColor"
                        stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" class="h-5 w-5 shrink-0">
                        <path d="M4.167 10h11.666m-5 5 5-5m-5-5 5 5"></path>
                    </svg></button></div>
        </div>
        <div class="mt-8">
            <div class="swiper review-carousel swiper-initialized swiper-horizontal swiper-backface-hidden">
                <div class="swiper-wrapper" id="swiper-wrapper-dce7cf477da8ae9f" aria-live="polite">
                    <div class="swiper-slide swiper-slide-active" role="group" aria-label="1 / 3"
                        data-swiper-slide-index="0" style="width: 368px; margin-right: 24px;">
                        <div class="flex h-full flex-col justify-between rounded-lg bg-light p-6 dark:bg-dark-2">
                            <div class="flex flex-wrap items-center justify-between gap-4">
                                <div class="flex flex-wrap items-center gap-1"><img src="/assets/images/star-full.svg"
                                        alt class="h-4 w-4 shrink-0"><img src="/assets/images/star-full.svg" alt
                                        class="h-4 w-4 shrink-0"><img src="/assets/images/star-full.svg" alt
                                        class="h-4 w-4 shrink-0"><img src="/assets/images/star-full.svg" alt
                                        class="h-4 w-4 shrink-0"><img src="/assets/images/star-full.svg" alt
                                        class="h-4 w-4 shrink-0"></div><a href="#"
                                    class="inline-flex items-center gap-2 rounded bg-white px-2 py-1 text-sm leading-none text-primary transition hover:bg-primary hover:text-white dark:bg-black"><span>framer.com</span><svg
                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 14 15" fill="none"
                                        stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        class="h-3.5 w-3.5 shrink-0">
                                        <path d="m9.917 4.583-5.834 5.834m.584-5.834h5.25v5.25"></path>
                                    </svg></a>
                            </div>
                            <blockquote class="mt-6 flex-1 text-lg"> "We've been using
                                BentoFolio for over a year now, and I must say,
                                it's been a game-changer for us. The user
                                interface is intuitive and the feature.
                            </blockquote>
                            <p class="mt-8 font-medium"> Oliver
                                Clain - <span class="font-normal text-muted">
                                    Product Designer </span></p>
                        </div>
                    </div>
                    <div class="swiper-slide swiper-slide-next" role="group" aria-label="2 / 3"
                        data-swiper-slide-index="1" style="width: 368px; margin-right: 24px;">
                        <div class="flex h-full flex-col justify-between rounded-lg bg-light p-6 dark:bg-dark-2">
                            <div class="flex flex-wrap items-center justify-between gap-4">
                                <div class="flex flex-wrap items-center gap-1"><img src="/assets/images/star-full.svg"
                                        alt class="h-4 w-4 shrink-0"><img src="/assets/images/star-full.svg" alt
                                        class="h-4 w-4 shrink-0"><img src="/assets/images/star-full.svg" alt
                                        class="h-4 w-4 shrink-0"><img src="/assets/images/star-full.svg" alt
                                        class="h-4 w-4 shrink-0"><img src="/assets/images/star-full.svg" alt
                                        class="h-4 w-4 shrink-0"></div><a href="#"
                                    class="inline-flex items-center gap-2 rounded bg-white px-2 py-1 text-sm leading-none text-primary transition hover:bg-primary hover:text-white dark:bg-black"><span>framer.com</span><svg
                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 14 15" fill="none"
                                        stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        class="h-3.5 w-3.5 shrink-0">
                                        <path d="m9.917 4.583-5.834 5.834m.584-5.834h5.25v5.25"></path>
                                    </svg></a>
                            </div>
                            <blockquote class="mt-6 flex-1 text-lg"> "We've been using
                                BentoFolio for over a year now, and I must say,
                                it's been a game-changer for us. The user
                                interface is intuitive and the feature.
                            </blockquote>
                            <p class="mt-8 font-medium"> Oliver
                                Clain - <span class="font-normal text-muted">
                                    Product Designer </span></p>
                        </div>
                    </div>
                    <div class="swiper-slide" role="group" aria-label="3 / 3" data-swiper-slide-index="2"
                        style="width: 368px; margin-right: 24px;">
                        <div class="flex h-full flex-col justify-between rounded-lg bg-light p-6 dark:bg-dark-2">
                            <div class="flex flex-wrap items-center justify-between gap-4">
                                <div class="flex flex-wrap items-center gap-1"><img src="/assets/images/star-full.svg"
                                        alt class="h-4 w-4 shrink-0"><img src="/assets/images/star-full.svg" alt
                                        class="h-4 w-4 shrink-0"><img src="/assets/images/star-full.svg" alt
                                        class="h-4 w-4 shrink-0"><img src="/assets/images/star-full.svg" alt
                                        class="h-4 w-4 shrink-0"><img src="/assets/images/star-full.svg" alt
                                        class="h-4 w-4 shrink-0"></div><a href="#"
                                    class="inline-flex items-center gap-2 rounded bg-white px-2 py-1 text-sm leading-none text-primary transition hover:bg-primary hover:text-white dark:bg-black"><span>framer.com</span><svg
                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 14 15" fill="none"
                                        stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        class="h-3.5 w-3.5 shrink-0">
                                        <path d="m9.917 4.583-5.834 5.834m.584-5.834h5.25v5.25"></path>
                                    </svg></a>
                            </div>
                            <blockquote class="mt-6 flex-1 text-lg"> "We've been using
                                BentoFolio for over a year now, and I must say,
                                it's been a game-changer for us. The user
                                interface is intuitive and the feature.
                            </blockquote>
                            <p class="mt-8 font-medium"> Oliver
                                Clain - <span class="font-normal text-muted">
                                    Product Designer
                                </span></p>
                        </div>
                    </div>
                </div><span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
            </div>
        </div>
    </div>
    <div class="mt-10 lg:mt-14">
        <h3 class="text-2xl font-medium text-dark dark:text-light lg:text-3xl">
            Awards and Recognitions </h3>
        <div class="mt-8 space-y-4">
            <div
                class="group relative grid grid-cols-1 items-center gap-4 rounded-lg border border-transparent bg-light p-6 transition hover:border-light hover:bg-white dark:bg-dark-2 dark:hover:border-primary dark:hover:bg-black md:grid-cols-4 xl:gap-10">
                <div class="flex flex-col gap-4 md:col-span-2 md:flex-row md:items-center md:gap-6">
                    <div
                        class="grid h-10 w-10 shrink-0 place-content-center rounded-lg bg-white transition group-hover:bg-light dark:bg-black dark:group-hover:bg-dark-2">
                        <img src="/assets/images/adobe.svg" alt class="h-6 w-6 shrink-0"></div>
                    <div class>
                        <h5 class="font-medium leading-tight text-dark dark:text-light xl:text-lg xl:leading-tight">
                            Adobe Design Contest </h5>
                        <p class="text-muted">2022
                            - 2023</p>
                    </div>
                </div>
                <div class="flex items-center gap-1.5"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 25"
                        fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                        stroke-width="1.5" class="h-5 w-5 shrink-0">
                        <path d="M6 9.5a6 6 0 1 0 12 0 6 6 0 0 0-12 0Z"></path>
                        <path
                            d="m12 15.5 3.4 5.89 1.598-3.233 3.598.232-3.4-5.889m-10.394 0-3.4 5.89L7 18.157l1.598 3.232 3.4-5.889">
                        </path>
                    </svg>
                    <h5 class="font-medium leading-tight text-dark dark:text-light">
                        Runner Up </h5>
                </div>
                <div class="text-right"><a href="#"
                        class="inline-flex items-center justify-center gap-2 rounded bg-white px-3 py-2 text-center text-sm leading-none text-dark transition after:absolute after:inset-0 after:h-full after:w-full after:content-[''] hover:bg-light hover:text-primary dark:bg-black dark:text-light/70 dark:hover:bg-dark-2 dark:hover:text-primary"><span>View
                            Project</span><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 14 15" fill="none"
                            stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                            class="h-3.5 w-3.5 shrink-0">
                            <path d="m9.917 4.583-5.834 5.834m.584-5.834h5.25v5.25"></path>
                        </svg></a></div>
>>>>>>> parent of ee563be (Latest)
            </div>
            <div class="title">
                <h3>Professional Dissertation Help In UK To All Academic Levels!</h3>
            </div>
            <div class="content">
                <p>Our dissertation help online can be your ultimate way towards academic success! Have a look at the salient features <br> that comes along we have successfully helped thousands of students from different disciplines write our cheap <br> assignment services:</p>
            </div>
            <div class="row">
                <div class="col-md-6 col-xl-3">
                    <div class="help-card card-sky-blue">
                        <div class="help-card-img">
                            <img src="{{ asset('assets/images/writting-book-sky-blue-icon.webp') }}" loading="lazy" alt="Essay writing service" width="44px" height="46px" class="img-fluid">
                        </div>
                        <div class="help-card-title">
                            <h4>Essay writing service</h4>
                        </div>
                        <div class="help-card-content">
                            <p>We write all types of essays in any referencing style. All essays are written to your required.</p>
                        </div>
                        <div class="help-card-btn">
                            <a href="#">Read More &#187;</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-3">
                    <div class="help-card dissertation-writing-service">
                        <div class="help-card-img">
                            <img src="{{ asset('assets/images/writting-hand-pink-icon.webp') }}" loading="lazy" height="52px" width="43px" alt="Dissertation writing service" class="img-fluid">
                        </div>
                        <div class="help-card-title">
                            <h4>Dissertation writing service</h4>
                        </div>
                        <div class="help-card-content">
                            <p>Full dissertations, chapters, plans and topics – any dissertation help you may need.</p>
                        </div>
                        <div class="help-card-btn">
                            <a href="#">Read More &#187;</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-3">
                    <div class="help-card card-writting-book-yellow">
                        <div class="help-card-img">
                            <img src="{{ asset('assets/images/writting-book-yellow-icon.webp') }}" loading="lazy" width="45px" height="44px" alt="Personal Statement Writing" class="img-fluid">
                        </div>
                        <div class="help-card-title">
                            <h4>Personal Statement Writing</h4>
                        </div>
                        <div class="help-card-content">
                            <p>Get a professionally written description your personal statement and interests.</p>
                        </div>
                        <div class="help-card-btn">
                            <a href="#">Read More &#187;</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-3">
                    <div class="help-card card-writting-book-orange">
                        <div class="help-card-img">
                            <img src="{{ asset('assets/images/writting-book-orange-icon.webp') }}" loading="lazy" width="44px" height="47px" alt="Assignment writing service" class="img-fluid">
                        </div>
                        <div class="help-card-title">
                            <h4>Assignment writing service</h4>
                        </div>
                        <div class="help-card-content">
                            <p>We can help with all of your academic needs, no matter what level or discipline.</p>
                        </div>
                        <div class="help-card-btn">
                            <a href="#">Read More &#187;</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-3">
                    <div class="help-card card-writting-book-edit-purple">
                        <div class="help-card-img">
                            <img src="{{ asset('assets/images/writting-book-edit-purple-icon.webp') }}" loading="lazy" width="52px" height="41px" alt="Proofreading & Editing service" class="img-fluid">
                        </div>
                        <div class="help-card-title">
                            <h4>Proofreading & Editing service</h4>
                        </div>
                        <div class="help-card-content">
                            <p>We will correct and improve your own work, making sure you can submit it with editing services confidence.</p>
                        </div>
                        <div class="help-card-btn">
                            <a href="#">Read More &#187;</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-3">
                    <div class="help-card card-cv-writting">
                        <div class="help-card-img">
                            <img src="{{ asset('assets/images/cv-writting-icon.webp') }}" loading="lazy" width="43px" height="44px" alt="CV writing service" class="img-fluid">
                        </div>
                        <div class="help-card-title">
                            <h4>CV writing service</h4>
                        </div>
                        <div class="help-card-content">
                            <p>Full dissertations, chapters, plans and topics – any dissertation help you may need.</p>
                        </div>
                        <div class="help-card-btn">
                            <a href="#">Read More &#187;</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-3">
                    <div class="help-card card-course-work-writting">
                        <div class="help-card-img">
                            <img src="{{ asset('assets/images/course-work-writting-icon.webp') }}" loading="lazy" width="46px" height="52px" alt="Coursework writing service" class="img-fluid">
                        </div>
                        <div class="help-card-title">
                            <h4>Coursework writing service</h4>
                        </div>
                        <div class="help-card-content">
                            <p>Get a work tailored to your assessment requirements, helping you to achieve grade.</p>
                        </div>
                        <div class="help-card-btn">
                            <a href="#">Read More &#187;</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-3">
                    <div class="help-card marking-writing-service">
                        <div class="help-card-img">
                            <img src="{{ asset('assets/images/hand-up-check-icon.webp') }}" loading="lazy" width="53px" height="46px" alt="Marking Writing service" class="img-fluid">
                        </div>
                        <div class="help-card-title">
                            <h4>Marking Writing service</h4>
                        </div>
                        <div class="help-card-content">
                            <p>We will grade your work against a set marking criteria, helping you to understand what to improve.</p>
                        </div>
                        <div class="help-card-btn">
                            <a href="#">Read More &#187;</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
<<<<<<< HEAD
    </section>
    <!-- ===============  Professional Dissertation Help section end ================ -->
    <!-- ===================================================== -->
    
    <!-- ===================================================== -->
    <!-- ===============  help students section start ================ -->
    @include('partials.subjects-section')
    <!-- ===============  help students section end ================ -->
    <!-- ===================================================== -->
=======
    </div>
    <div class="mt-10 lg:mt-14">
        <h3 class="text-2xl font-medium text-dark dark:text-light lg:text-3xl">
            Frequently Asked Questions </h3>
        <div class="hs-accordion-group mt-8 space-y-4">
            <div
                class="hs-accordion rounded-lg border border-transparent bg-light transition hs-accordion-active:border-light hs-accordion-active:bg-white dark:border-transparent dark:bg-dark-2 dark:hs-accordion-active:border-dark-2 dark:hs-accordion-active:bg-black">
                <button
                    class="hs-accordion-toggle inline-flex w-full items-center justify-between gap-x-3 px-6 py-5 text-start text-lg font-medium text-dark transition hover:text-muted disabled:pointer-events-none disabled:opacity-50 hs-accordion-active:text-primary dark:text-light/70 dark:hover:text-light dark:focus:outline-none dark:hs-accordion-active:text-primary xl:text-2xl"><span>What
                        does a product designer need to know?</span><span
                        class="grid h-8 w-8 shrink-0 place-content-center rounded bg-white text-primary hs-accordion-active:bg-light dark:bg-black dark:hs-accordion-active:bg-dark-2"><svg
                            class="block h-3.5 w-3.5 hs-accordion-active:hidden" xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round">
                            <path d="M5 12h14"></path>
                            <path d="M12 5v14"></path>
                        </svg><svg class="hidden h-3.5 w-3.5 hs-accordion-active:block"
                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M5 12h14"></path>
                        </svg></span></button>
                <div class="hs-accordion-content hidden w-full overflow-hidden transition-[height] duration-300">
                    <div class="px-6 pb-5">
                        <p class="text-base xl:text-lg"> I'm
                            here to help if you're searching for a product
                            designer to bring your idea to life or a design
                            partner to help take your business to the next
                            level. </p>
                    </div>
                </div>
            </div>
            <div
                class="hs-accordion active rounded-lg border border-transparent bg-light transition hs-accordion-active:border-light hs-accordion-active:bg-white dark:border-transparent dark:bg-dark-2 dark:hs-accordion-active:border-dark-2 dark:hs-accordion-active:bg-black">
                <button
                    class="hs-accordion-toggle inline-flex w-full items-center justify-between gap-x-3 px-6 py-5 text-start text-lg font-medium text-dark transition hover:text-muted disabled:pointer-events-none disabled:opacity-50 hs-accordion-active:text-primary dark:text-light/70 dark:hover:text-light dark:focus:outline-none dark:hs-accordion-active:text-primary xl:text-2xl"><span>What
                        does a product designer need to know?</span><span
                        class="grid h-8 w-8 shrink-0 place-content-center rounded bg-white text-primary hs-accordion-active:bg-light dark:bg-black dark:hs-accordion-active:bg-dark-2"><svg
                            class="block h-3.5 w-3.5 hs-accordion-active:hidden" xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round">
                            <path d="M5 12h14"></path>
                            <path d="M12 5v14"></path>
                        </svg><svg class="hidden h-3.5 w-3.5 hs-accordion-active:block"
                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M5 12h14"></path>
                        </svg></span></button>
                <div class="hs-accordion-content w-full overflow-hidden transition-[height] duration-300">
                    <div class="px-6 pb-5">
                        <p class="text-base xl:text-lg"> I'm
                            here to help if you're searching for a product
                            designer to bring your idea to life or a design
                            partner to help take your business to the next
                            level. </p>
                    </div>
                </div>
            </div>
            <div
                class="hs-accordion rounded-lg border border-transparent bg-light transition hs-accordion-active:border-light hs-accordion-active:bg-white dark:border-transparent dark:bg-dark-2 dark:hs-accordion-active:border-dark-2 dark:hs-accordion-active:bg-black">
                <button
                    class="hs-accordion-toggle inline-flex w-full items-center justify-between gap-x-3 px-6 py-5 text-start text-lg font-medium text-dark transition hover:text-muted disabled:pointer-events-none disabled:opacity-50 hs-accordion-active:text-primary dark:text-light/70 dark:hover:text-light dark:focus:outline-none dark:hs-accordion-active:text-primary xl:text-2xl"><span>What
                        does a product designer need to know?</span><span
                        class="grid h-8 w-8 shrink-0 place-content-center rounded bg-white text-primary hs-accordion-active:bg-light dark:bg-black dark:hs-accordion-active:bg-dark-2"><svg
                            class="block h-3.5 w-3.5 hs-accordion-active:hidden" xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round">
                            <path d="M5 12h14"></path>
                            <path d="M12 5v14"></path>
                        </svg><svg class="hidden h-3.5 w-3.5 hs-accordion-active:block"
                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M5 12h14"></path>
                        </svg></span></button>
                <div class="hs-accordion-content hidden w-full overflow-hidden transition-[height] duration-300">
                    <div class="px-6 pb-5">
                        <p class="text-base xl:text-lg"> I'm
                            here to help if you're searching for a product
                            designer to bring your idea to life or a design
                            partner to help take your business to the next
                            level. </p>
                    </div>
                </div>
            </div>
            <div
                class="hs-accordion rounded-lg border border-transparent bg-light transition hs-accordion-active:border-light hs-accordion-active:bg-white dark:border-transparent dark:bg-dark-2 dark:hs-accordion-active:border-dark-2 dark:hs-accordion-active:bg-black">
                <button
                    class="hs-accordion-toggle inline-flex w-full items-center justify-between gap-x-3 px-6 py-5 text-start text-lg font-medium text-dark transition hover:text-muted disabled:pointer-events-none disabled:opacity-50 hs-accordion-active:text-primary dark:text-light/70 dark:hover:text-light dark:focus:outline-none dark:hs-accordion-active:text-primary xl:text-2xl"><span>What
                        does a product designer need to know?</span><span
                        class="grid h-8 w-8 shrink-0 place-content-center rounded bg-white text-primary hs-accordion-active:bg-light dark:bg-black dark:hs-accordion-active:bg-dark-2"><svg
                            class="block h-3.5 w-3.5 hs-accordion-active:hidden" xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round">
                            <path d="M5 12h14"></path>
                            <path d="M12 5v14"></path>
                        </svg><svg class="hidden h-3.5 w-3.5 hs-accordion-active:block"
                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M5 12h14"></path>
                        </svg></span></button>
                <div class="hs-accordion-content hidden w-full overflow-hidden transition-[height] duration-300">
                    <div class="px-6 pb-5">
                        <p class="text-base xl:text-lg"> I'm
                            here to help if you're searching for a product
                            designer to bring your idea to life or a design
                            partner to help take your business to the next
                            level. </p>
                    </div>
                </div>
            </div>
            <div
                class="hs-accordion rounded-lg border border-transparent bg-light transition hs-accordion-active:border-light hs-accordion-active:bg-white dark:border-transparent dark:bg-dark-2 dark:hs-accordion-active:border-dark-2 dark:hs-accordion-active:bg-black">
                <button
                    class="hs-accordion-toggle inline-flex w-full items-center justify-between gap-x-3 px-6 py-5 text-start text-lg font-medium text-dark transition hover:text-muted disabled:pointer-events-none disabled:opacity-50 hs-accordion-active:text-primary dark:text-light/70 dark:hover:text-light dark:focus:outline-none dark:hs-accordion-active:text-primary xl:text-2xl"><span>What
                        does a product designer need to know?</span><span
                        class="grid h-8 w-8 shrink-0 place-content-center rounded bg-white text-primary hs-accordion-active:bg-light dark:bg-black dark:hs-accordion-active:bg-dark-2"><svg
                            class="block h-3.5 w-3.5 hs-accordion-active:hidden" xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round">
                            <path d="M5 12h14"></path>
                            <path d="M12 5v14"></path>
                        </svg><svg class="hidden h-3.5 w-3.5 hs-accordion-active:block"
                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M5 12h14"></path>
                        </svg></span></button>
                <div class="hs-accordion-content hidden w-full overflow-hidden transition-[height] duration-300">
                    <div class="px-6 pb-5">
                        <p class="text-base xl:text-lg"> I'm
                            here to help if you're searching for a product
                            designer to bring your idea to life or a design
                            partner to help take your business to the next
                            level. </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
<<<<<<< HEAD
>>>>>>> parent of ee563be (Latest)
=======
    <div class="mt-10 lg:mt-14">
        <h3 class="text-2xl font-medium text-dark dark:text-light lg:text-3xl">
            Frequently Asked Questions </h3>
        <div class="hs-accordion-group mt-8 space-y-4">
            <div
                class="hs-accordion rounded-lg border border-transparent bg-light transition hs-accordion-active:border-light hs-accordion-active:bg-white dark:border-transparent dark:bg-dark-2 dark:hs-accordion-active:border-dark-2 dark:hs-accordion-active:bg-black">
                <button
                    class="hs-accordion-toggle inline-flex w-full items-center justify-between gap-x-3 px-6 py-5 text-start text-lg font-medium text-dark transition hover:text-muted disabled:pointer-events-none disabled:opacity-50 hs-accordion-active:text-primary dark:text-light/70 dark:hover:text-light dark:focus:outline-none dark:hs-accordion-active:text-primary xl:text-2xl"><span>What
                        does a product designer need to know?</span><span
                        class="grid h-8 w-8 shrink-0 place-content-center rounded bg-white text-primary hs-accordion-active:bg-light dark:bg-black dark:hs-accordion-active:bg-dark-2"><svg
                            class="block h-3.5 w-3.5 hs-accordion-active:hidden" xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round">
                            <path d="M5 12h14"></path>
                            <path d="M12 5v14"></path>
                        </svg><svg class="hidden h-3.5 w-3.5 hs-accordion-active:block"
                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M5 12h14"></path>
                        </svg></span></button>
                <div class="hs-accordion-content hidden w-full overflow-hidden transition-[height] duration-300">
                    <div class="px-6 pb-5">
                        <p class="text-base xl:text-lg"> I'm
                            here to help if you're searching for a product
                            designer to bring your idea to life or a design
                            partner to help take your business to the next
                            level. </p>
                    </div>
                </div>
            </div>
            <div
                class="hs-accordion active rounded-lg border border-transparent bg-light transition hs-accordion-active:border-light hs-accordion-active:bg-white dark:border-transparent dark:bg-dark-2 dark:hs-accordion-active:border-dark-2 dark:hs-accordion-active:bg-black">
                <button
                    class="hs-accordion-toggle inline-flex w-full items-center justify-between gap-x-3 px-6 py-5 text-start text-lg font-medium text-dark transition hover:text-muted disabled:pointer-events-none disabled:opacity-50 hs-accordion-active:text-primary dark:text-light/70 dark:hover:text-light dark:focus:outline-none dark:hs-accordion-active:text-primary xl:text-2xl"><span>What
                        does a product designer need to know?</span><span
                        class="grid h-8 w-8 shrink-0 place-content-center rounded bg-white text-primary hs-accordion-active:bg-light dark:bg-black dark:hs-accordion-active:bg-dark-2"><svg
                            class="block h-3.5 w-3.5 hs-accordion-active:hidden" xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round">
                            <path d="M5 12h14"></path>
                            <path d="M12 5v14"></path>
                        </svg><svg class="hidden h-3.5 w-3.5 hs-accordion-active:block"
                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M5 12h14"></path>
                        </svg></span></button>
                <div class="hs-accordion-content w-full overflow-hidden transition-[height] duration-300">
                    <div class="px-6 pb-5">
                        <p class="text-base xl:text-lg"> I'm
                            here to help if you're searching for a product
                            designer to bring your idea to life or a design
                            partner to help take your business to the next
                            level. </p>
                    </div>
                </div>
            </div>
            <div
                class="hs-accordion rounded-lg border border-transparent bg-light transition hs-accordion-active:border-light hs-accordion-active:bg-white dark:border-transparent dark:bg-dark-2 dark:hs-accordion-active:border-dark-2 dark:hs-accordion-active:bg-black">
                <button
                    class="hs-accordion-toggle inline-flex w-full items-center justify-between gap-x-3 px-6 py-5 text-start text-lg font-medium text-dark transition hover:text-muted disabled:pointer-events-none disabled:opacity-50 hs-accordion-active:text-primary dark:text-light/70 dark:hover:text-light dark:focus:outline-none dark:hs-accordion-active:text-primary xl:text-2xl"><span>What
                        does a product designer need to know?</span><span
                        class="grid h-8 w-8 shrink-0 place-content-center rounded bg-white text-primary hs-accordion-active:bg-light dark:bg-black dark:hs-accordion-active:bg-dark-2"><svg
                            class="block h-3.5 w-3.5 hs-accordion-active:hidden" xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round">
                            <path d="M5 12h14"></path>
                            <path d="M12 5v14"></path>
                        </svg><svg class="hidden h-3.5 w-3.5 hs-accordion-active:block"
                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M5 12h14"></path>
                        </svg></span></button>
                <div class="hs-accordion-content hidden w-full overflow-hidden transition-[height] duration-300">
                    <div class="px-6 pb-5">
                        <p class="text-base xl:text-lg"> I'm
                            here to help if you're searching for a product
                            designer to bring your idea to life or a design
                            partner to help take your business to the next
                            level. </p>
                    </div>
                </div>
            </div>
            <div
                class="hs-accordion rounded-lg border border-transparent bg-light transition hs-accordion-active:border-light hs-accordion-active:bg-white dark:border-transparent dark:bg-dark-2 dark:hs-accordion-active:border-dark-2 dark:hs-accordion-active:bg-black">
                <button
                    class="hs-accordion-toggle inline-flex w-full items-center justify-between gap-x-3 px-6 py-5 text-start text-lg font-medium text-dark transition hover:text-muted disabled:pointer-events-none disabled:opacity-50 hs-accordion-active:text-primary dark:text-light/70 dark:hover:text-light dark:focus:outline-none dark:hs-accordion-active:text-primary xl:text-2xl"><span>What
                        does a product designer need to know?</span><span
                        class="grid h-8 w-8 shrink-0 place-content-center rounded bg-white text-primary hs-accordion-active:bg-light dark:bg-black dark:hs-accordion-active:bg-dark-2"><svg
                            class="block h-3.5 w-3.5 hs-accordion-active:hidden" xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round">
                            <path d="M5 12h14"></path>
                            <path d="M12 5v14"></path>
                        </svg><svg class="hidden h-3.5 w-3.5 hs-accordion-active:block"
                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M5 12h14"></path>
                        </svg></span></button>
                <div class="hs-accordion-content hidden w-full overflow-hidden transition-[height] duration-300">
                    <div class="px-6 pb-5">
                        <p class="text-base xl:text-lg"> I'm
                            here to help if you're searching for a product
                            designer to bring your idea to life or a design
                            partner to help take your business to the next
                            level. </p>
                    </div>
                </div>
            </div>
            <div
                class="hs-accordion rounded-lg border border-transparent bg-light transition hs-accordion-active:border-light hs-accordion-active:bg-white dark:border-transparent dark:bg-dark-2 dark:hs-accordion-active:border-dark-2 dark:hs-accordion-active:bg-black">
                <button
                    class="hs-accordion-toggle inline-flex w-full items-center justify-between gap-x-3 px-6 py-5 text-start text-lg font-medium text-dark transition hover:text-muted disabled:pointer-events-none disabled:opacity-50 hs-accordion-active:text-primary dark:text-light/70 dark:hover:text-light dark:focus:outline-none dark:hs-accordion-active:text-primary xl:text-2xl"><span>What
                        does a product designer need to know?</span><span
                        class="grid h-8 w-8 shrink-0 place-content-center rounded bg-white text-primary hs-accordion-active:bg-light dark:bg-black dark:hs-accordion-active:bg-dark-2"><svg
                            class="block h-3.5 w-3.5 hs-accordion-active:hidden" xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round">
                            <path d="M5 12h14"></path>
                            <path d="M12 5v14"></path>
                        </svg><svg class="hidden h-3.5 w-3.5 hs-accordion-active:block"
                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M5 12h14"></path>
                        </svg></span></button>
                <div class="hs-accordion-content hidden w-full overflow-hidden transition-[height] duration-300">
                    <div class="px-6 pb-5">
                        <p class="text-base xl:text-lg"> I'm
                            here to help if you're searching for a product
                            designer to bring your idea to life or a design
                            partner to help take your business to the next
                            level. </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
>>>>>>> parent of ee563be (Latest)

    <!-- ===================================================== -->
    <!-- ===============  How it Works section start ================ -->
    @include('partials.how-it-works-section')
    <!-- ===============  How it Works section end ================ -->
    <!-- ===================================================== -->

    <!-- ===================================================== -->
    <!-- ===============  Call To Action 1 section start ================ -->
    @include('partials.call-to-action-1')
    <!-- ===============  Call To Action 1 section end ================ -->
    <!-- ===================================================== -->

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

    <!-- ===================================================== -->
    <!-- ===============  Every Update section start ================ -->
    @include('partials.every-update-section')
    <!-- ===============  Every Update section end ================ -->
    <!-- ===================================================== -->

@endsection
