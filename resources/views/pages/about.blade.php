@extends('layouts.web')
 
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

<div class="rounded-2xl bg-white p-6 shadow dark:bg-black dark:shadow-dark lg:col-span-2 lg:p-10">
    <div class="flex flex-col-reverse items-start gap-6 lg:flex-row lg:gap-10">
        <div class="">    
            <h2 class="text-3xl font-semibold text-dark dark:text-light lg:text-[40px]">Hi, This Is <span class="text-primary">{{ $name }}</span> 👋</h2>
            <p class="mt-4 text-lg text-muted dark:text-light/70 lg:mt-6 lg:text-2xl">{{ $summary }}</p>
        </div>
        <div class="flex items-center justify-center gap-2 whitespace-nowrap rounded-lg bg-light px-4 py-2 text-center text-base font-medium leading-none text-primary dark:bg-dark-2 lg:text-lg">
            <span class="relative flex h-2 w-2 shrink-0">
                <span class="absolute inline-flex h-full w-full animate-ping rounded-full bg-primary opacity-75 dark:bg-light"></span>
                <span class="relative inline-flex h-2 w-2 rounded-full bg-primary"></span></span><span>Available For Hire</span>
            </div>
    </div>
    <div class="mt-8 flex flex-wrap justify-between gap-6 lg:mt-12 lg:gap-10">
        <div class="flex flex-wrap items-start gap-6 lg:gap-10">
            <div class="">    
                <h2 class="text-3xl font-semibold text-dark dark:text-light lg:text-[40px]"><span>{{ $experience }}</span>+ </h2>
                <p class="mt-2 text-muted">Year of Experience</p>
            </div>
            <div class="">
                <h2 class="text-3xl font-semibold text-dark dark:text-light lg:text-[40px]"><span>{{ $project }}</span>+ </h2>
                <p class="mt-2 text-muted">Project Completed</p>
            </div>
            <div class="">
                <h2 class="text-3xl font-semibold text-dark dark:text-light lg:text-[40px]"><span>{{ $client }}</span>+ </h2>
                <p class="mt-2 text-muted">Happy Client</p>
            </div>
        </div>
        <div class="relative -mt-6 hidden h-[100px] w-[100px] p-4 lg:block xl:-mt-10">
            <img src="/assets/images/circle-text.svg" alt="" class="absolute inset-0 h-full w-full animate-spin-slow dark:hidden">
            <img src="/assets/images/circle-text-light.svg" alt="" class="absolute inset-0 hidden h-full w-full animate-spin-slow dark:block">
            <div class="grid h-full w-full place-content-center rounded-full bg-primary text-light">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 40 40" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="h-10 w-10">
                    <path d="M20 5v30m-5-5 5 5 5-5"></path>
                </svg>
            </div>
        </div>
    </div>
    <div class="mt-10 lg:mt-14">
        <h3 class="text-2xl font-medium text-dark dark:text-light lg:text-3xl"> Working With 50+ Brands ✨ Worldwide </h3>
        <div class="mt-8 grid grid-cols-[repeat(auto-fit,_minmax(60px,1fr))] gap-2 lg:grid-cols-[repeat(auto-fit,_minmax(80px,1fr))] lg:gap-4">
            <div class="grid h-16 place-content-center rounded-lg bg-light p-3 dark:bg-dark-2 lg:h-20 lg:rounded-2xl lg:p-4">
                <img src="/assets/images/notion.svg" alt="" class="h-8 w-8 lg:h-10 lg:w-10">
            </div>
            <div class="grid h-16 place-content-center rounded-lg bg-light p-3 dark:bg-dark-2 lg:h-20 lg:rounded-2xl lg:p-4">
                <img src="/assets/images/webflow.svg" alt="" class="h-8 w-8 lg:h-10 lg:w-10">
            </div>
            <div class="grid h-16 place-content-center rounded-lg bg-light p-3 dark:bg-dark-2 lg:h-20 lg:rounded-2xl lg:p-4">
                <img src="/assets/images/mico.svg" alt="" class="h-8 w-8 lg:h-10 lg:w-10">
            </div>
            <div class="grid h-16 place-content-center rounded-lg bg-light p-3 dark:bg-dark-2 lg:h-20 lg:rounded-2xl lg:p-4">
                <img src="/assets/images/framer.svg" alt="" class="h-8 w-8 lg:h-10 lg:w-10">
            </div>
            <div class="grid h-16 place-content-center rounded-lg bg-light p-3 dark:bg-dark-2 lg:h-20 lg:rounded-2xl lg:p-4">
                <img src="/assets/images/zeplin.svg" alt="" class="h-8 w-8 lg:h-10 lg:w-10">
            </div>
            <div class="grid h-16 place-content-center rounded-lg bg-light p-3 dark:bg-dark-2 lg:h-20 lg:rounded-2xl lg:p-4">
                <img src="/assets/images/figma.svg" alt="" class="h-8 w-8 lg:h-10 lg:w-10">
            </div>
            <div class="grid h-16 place-content-center rounded-lg bg-light p-3 dark:bg-dark-2 lg:h-20 lg:rounded-2xl lg:p-4">
                <img src="/assets/images/notion.svg" alt="" class="h-8 w-8 lg:h-10 lg:w-10">
            </div>
            <div class="grid h-16 place-content-center rounded-lg bg-light p-3 dark:bg-dark-2 lg:h-20 lg:rounded-2xl lg:p-4">
                <img src="/assets/images/webflow.svg" alt="" class="h-8 w-8 lg:h-10 lg:w-10">
            </div>
            <div class="grid h-16 place-content-center rounded-lg bg-light p-3 dark:bg-dark-2 lg:h-20 lg:rounded-2xl lg:p-4">
                <img src="/assets/images/mico.svg" alt="" class="h-8 w-8 lg:h-10 lg:w-10">
            </div>
            <div class="grid h-16 place-content-center rounded-lg bg-light p-3 dark:bg-dark-2 lg:h-20 lg:rounded-2xl lg:p-4">
                <img src="/assets/images/framer.svg" alt="" class="h-8 w-8 lg:h-10 lg:w-10">
            </div>
            <div class="grid h-16 place-content-center rounded-lg bg-light p-3 dark:bg-dark-2 lg:h-20 lg:rounded-2xl lg:p-4">
                <img src="/assets/images/zeplin.svg" alt="" class="h-8 w-8 lg:h-10 lg:w-10">
            </div>
            <div class="grid h-16 place-content-center rounded-lg bg-light p-3 dark:bg-dark-2 lg:h-20 lg:rounded-2xl lg:p-4">
                <img src="/assets/images/figma.svg" alt="" class="h-8 w-8 lg:h-10 lg:w-10">
            </div>
            <div class="grid h-16 place-content-center rounded-lg bg-light p-3 dark:bg-dark-2 lg:h-20 lg:rounded-2xl lg:p-4">
                <img src="/assets/images/notion.svg" alt="" class="h-8 w-8 lg:h-10 lg:w-10">
            </div>
            <div class="grid h-16 place-content-center rounded-lg bg-light p-3 dark:bg-dark-2 lg:h-20 lg:rounded-2xl lg:p-4">
                <img src="/assets/images/webflow.svg" alt="" class="h-8 w-8 lg:h-10 lg:w-10">
            </div>
            <div class="grid h-16 place-content-center rounded-lg bg-light p-3 dark:bg-dark-2 lg:h-20 lg:rounded-2xl lg:p-4">
                <img src="/assets/images/mico.svg" alt="" class="h-8 w-8 lg:h-10 lg:w-10">
            </div>
            <div class="grid h-16 place-content-center rounded-lg bg-light p-3 dark:bg-dark-2 lg:h-20 lg:rounded-2xl lg:p-4">
                <img src="/assets/images/framer.svg" alt="" class="h-8 w-8 lg:h-10 lg:w-10">
            </div>
        </div>
    </div>
    <div class="mt-10 lg:mt-14">
        <div class="flex flex-wrap items-center justify-between gap-6">
            <h3 class="text-2xl font-medium text-dark dark:text-light lg:text-3xl"> Trusted By {{ $client }}+ Clients </h3>
            <div class="flex items-center gap-2">
                <button class="review-carousel-button-prev grid h-9 w-9 place-content-center rounded-lg border border-muted/30 text-muted transition hover:border-primary hover:text-primary" tabindex="0" aria-label="Previous slide" aria-controls="swiper-wrapper-a47a317e38ebec59">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" class="h-5 w-5 shrink-0">
                        <path d="M4.167 10h11.666M4.167 10l5 5m-5-5 5-5"></path>
                    </svg>
                </button>
                <button class="review-carousel-button-next grid h-9 w-9 place-content-center rounded-lg border border-muted/30 text-muted transition hover:border-primary hover:text-primary" tabindex="0" aria-label="Next slide" aria-controls="swiper-wrapper-a47a317e38ebec59">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" class="h-5 w-5 shrink-0">
                        <path d="M4.167 10h11.666m-5 5 5-5m-5-5 5 5"></path>
                    </svg>
                </button>
            </div>
        </div>
        <div class="mt-8">
            <div class="swiper review-carousel swiper-initialized swiper-horizontal swiper-backface-hidden">
                <div class="swiper-wrapper" id="swiper-wrapper-a47a317e38ebec59" aria-live="polite">

                    @foreach ($customers as $customer)
                    <div class="swiper-slide swiper-slide-active" role="group" aria-label="{{ $loop->index }} / {{ count($customers) }}" data-swiper-slide-index="{{ $loop->index }}" style="width: 368px; margin-right: 24px;">
                        <div class="flex h-full flex-col justify-between rounded-lg bg-light p-6 dark:bg-dark-2">
                            <div class="flex flex-wrap items-center justify-between gap-4">
                                <div class="flex flex-wrap items-center gap-1">
                                    @for ($i = 0; $i < 5; $i++)
                                        <img src="/assets/images/star-full.svg" alt="star" width="" height="" class="h-4 w-4 shrink-0">
                                    @endfor
                                </div>
                                <a href="#" class="inline-flex items-center gap-2 rounded bg-white px-2 py-1 text-sm leading-none text-primary transition hover:bg-primary hover:text-white dark:bg-black">
                                    <span>{{ $customer['name'] }}</span>
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 14 15" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" class="h-3.5 w-3.5 shrink-0">
                                        <path d="m9.917 4.583-5.834 5.834m.584-5.834h5.25v5.25"></path>
                                    </svg>
                                </a>
                            </div>
                            <blockquote class="mt-6 flex-1 text-lg"> "{{ $customer['review'] }} "</blockquote>
                            <p class="mt-8 font-medium">{{ $customer['name'] }} - <span class="font-normal text-muted"> {{ $customer['designation'] }} </span></p>
                        </div>
                    </div>
                    @endforeach
                
                </div>
                <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
            </div>
        </div>
    </div>
    <div class="mt-10 lg:mt-14">
        <h3 class="text-2xl font-medium text-dark dark:text-light lg:text-3xl"> Awards and Recognitions </h3>
        <div class="mt-8 space-y-4">
            <div
                class="group relative grid grid-cols-1 items-center gap-4 rounded-lg border border-transparent bg-light p-6 transition hover:border-light hover:bg-white dark:bg-dark-2 dark:hover:border-primary dark:hover:bg-black md:grid-cols-4 xl:gap-10">
                <div class="flex flex-col gap-4 md:col-span-2 md:flex-row md:items-center md:gap-6">
                    <div
                        class="grid h-10 w-10 shrink-0 place-content-center rounded-lg bg-white transition group-hover:bg-light dark:bg-black dark:group-hover:bg-dark-2">
                        <img src="/assets/images/adobe.svg" alt="" class="h-6 w-6 shrink-0"></div>
                    <div class="">
                        <h5 class="font-medium leading-tight text-dark dark:text-light xl:text-lg xl:leading-tight">
                            Adobe Design Contest </h5>
                        <p class="text-muted">2022 - 2023</p>
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
                    <h5 class="font-medium leading-tight text-dark dark:text-light"> Runner Up </h5>
                </div>
                <div class="text-right"><a href="#"
                        class="inline-flex items-center justify-center gap-2 rounded bg-white px-3 py-2 text-center text-sm leading-none text-dark transition after:absolute after:inset-0 after:h-full after:w-full after:content-[''] hover:bg-light hover:text-primary dark:bg-black dark:text-light/70 dark:hover:bg-dark-2 dark:hover:text-primary"><span>View
                            Project</span><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 14 15" fill="none"
                            stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                            class="h-3.5 w-3.5 shrink-0">
                            <path d="m9.917 4.583-5.834 5.834m.584-5.834h5.25v5.25"></path>
                        </svg></a></div>
            </div>
            <div
                class="group relative grid grid-cols-1 items-center gap-4 rounded-lg border border-transparent bg-light p-6 transition hover:border-light hover:bg-white dark:bg-dark-2 dark:hover:border-primary dark:hover:bg-black md:grid-cols-4 xl:gap-10">
                <div class="flex flex-col gap-4 md:col-span-2 md:flex-row md:items-center md:gap-6">
                    <div
                        class="grid h-10 w-10 shrink-0 place-content-center rounded-lg bg-white transition group-hover:bg-light dark:bg-black dark:group-hover:bg-dark-2">
                        <img src="/assets/images/dribbble.svg" alt="" class="h-6 w-6 shrink-0"></div>
                    <div class="">
                        <h5 class="font-medium leading-tight text-dark dark:text-light xl:text-lg xl:leading-tight">
                            Dribbble Design Contest </h5>
                        <p class="text-muted">2022 - 2023</p>
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
                    <h5 class="font-medium leading-tight text-dark dark:text-light"> Gold Winner </h5>
                </div>
                <div class="text-right"><a href="#"
                        class="inline-flex items-center justify-center gap-2 rounded bg-white px-3 py-2 text-center text-sm leading-none text-dark transition after:absolute after:inset-0 after:h-full after:w-full after:content-[''] hover:bg-light hover:text-primary dark:bg-black dark:text-light/70 dark:hover:bg-dark-2 dark:hover:text-primary"><span>View
                            Project</span><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 14 15" fill="none"
                            stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                            class="h-3.5 w-3.5 shrink-0">
                            <path d="m9.917 4.583-5.834 5.834m.584-5.834h5.25v5.25"></path>
                        </svg></a></div>
            </div>
            <div
                class="group relative grid grid-cols-1 items-center gap-4 rounded-lg border border-transparent bg-light p-6 transition hover:border-light hover:bg-white dark:bg-dark-2 dark:hover:border-primary dark:hover:bg-black md:grid-cols-4 xl:gap-10">
                <div class="flex flex-col gap-4 md:col-span-2 md:flex-row md:items-center md:gap-6">
                    <div
                        class="grid h-10 w-10 shrink-0 place-content-center rounded-lg bg-white transition group-hover:bg-light dark:bg-black dark:group-hover:bg-dark-2">
                        <img src="/assets/images/awwwards.png" alt="" class="h-6 w-6 shrink-0"></div>
                    <div class="">
                        <h5 class="font-medium leading-tight text-dark dark:text-light xl:text-lg xl:leading-tight">
                            Awwwards Nominee </h5>
                        <p class="text-muted">2022 - 2023</p>
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
                    <h5 class="font-medium leading-tight text-dark dark:text-light"> Runner Up </h5>
                </div>
                <div class="text-right"><a href="#"
                        class="inline-flex items-center justify-center gap-2 rounded bg-white px-3 py-2 text-center text-sm leading-none text-dark transition after:absolute after:inset-0 after:h-full after:w-full after:content-[''] hover:bg-light hover:text-primary dark:bg-black dark:text-light/70 dark:hover:bg-dark-2 dark:hover:text-primary"><span>View
                            Project</span><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 14 15" fill="none"
                            stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                            class="h-3.5 w-3.5 shrink-0">
                            <path d="m9.917 4.583-5.834 5.834m.584-5.834h5.25v5.25"></path>
                        </svg></a></div>
            </div>
            <div
                class="group relative grid grid-cols-1 items-center gap-4 rounded-lg border border-transparent bg-light p-6 transition hover:border-light hover:bg-white dark:bg-dark-2 dark:hover:border-primary dark:hover:bg-black md:grid-cols-4 xl:gap-10">
                <div class="flex flex-col gap-4 md:col-span-2 md:flex-row md:items-center md:gap-6">
                    <div
                        class="grid h-10 w-10 shrink-0 place-content-center rounded-lg bg-white transition group-hover:bg-light dark:bg-black dark:group-hover:bg-dark-2">
                        <img src="/assets/images/behance.svg" alt="" class="h-6 w-6 shrink-0"></div>
                    <div class="">
                        <h5 class="font-medium leading-tight text-dark dark:text-light xl:text-lg xl:leading-tight">
                            Behance Design Contest </h5>
                        <p class="text-muted">2022 - 2023</p>
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
                    <h5 class="font-medium leading-tight text-dark dark:text-light"> Gold Winner </h5>
                </div>
                <div class="text-right"><a href="#"
                        class="inline-flex items-center justify-center gap-2 rounded bg-white px-3 py-2 text-center text-sm leading-none text-dark transition after:absolute after:inset-0 after:h-full after:w-full after:content-[''] hover:bg-light hover:text-primary dark:bg-black dark:text-light/70 dark:hover:bg-dark-2 dark:hover:text-primary"><span>View
                            Project</span><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 14 15" fill="none"
                            stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                            class="h-3.5 w-3.5 shrink-0">
                            <path d="m9.917 4.583-5.834 5.834m.584-5.834h5.25v5.25"></path>
                        </svg></a></div>
            </div>
        </div>
    </div>
    <div class="mt-10 lg:mt-14">
        <div class="flex flex-wrap items-center justify-between gap-6">
            <h3 class="text-2xl font-medium text-dark dark:text-light lg:text-3xl"> Article and Publications </h3>
            <div class="flex items-center gap-2"><button
                    class="blog-carousel-button-prev grid h-9 w-9 place-content-center rounded-lg border border-muted/30 text-muted transition hover:border-primary hover:text-primary"
                    tabindex="0" aria-label="Previous slide" aria-controls="swiper-wrapper-3fc2cf63a719c57a"><svg
                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="none" stroke="currentColor"
                        stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" class="h-5 w-5 shrink-0">
                        <path d="M4.167 10h11.666M4.167 10l5 5m-5-5 5-5"></path>
                    </svg></button><button
                    class="blog-carousel-button-next grid h-9 w-9 place-content-center rounded-lg border border-muted/30 text-muted transition hover:border-primary hover:text-primary"
                    tabindex="0" aria-label="Next slide" aria-controls="swiper-wrapper-3fc2cf63a719c57a"><svg
                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="none" stroke="currentColor"
                        stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" class="h-5 w-5 shrink-0">
                        <path d="M4.167 10h11.666m-5 5 5-5m-5-5 5 5"></path>
                    </svg></button></div>
        </div>
        <div class="mt-8">
            <div class="swiper blog-carousel swiper-initialized swiper-horizontal swiper-backface-hidden">
                <div class="swiper-wrapper" id="swiper-wrapper-3fc2cf63a719c57a" aria-live="polite">
                    <div class="swiper-slide swiper-slide-active" role="group" aria-label="1 / 3"
                        data-swiper-slide-index="0" style="width: 368px; margin-right: 24px;">
                        <div class="">
                            <div class="relative"><a href="article.html"
                                    class="group block aspect-6/4 overflow-hidden rounded-lg"><img
                                        src="/assets/images/blog-img-1.jpg" alt=""
                                        class="h-full w-full rounded-lg object-cover transition duration-700 group-hover:scale-105"></a>
                                <div class="absolute bottom-4 left-4 flex flex-wrap gap-2"><a href="#"
                                        class="inline-flex items-center justify-center gap-2 rounded bg-white px-2 py-1 text-center text-xs leading-none text-primary shadow transition hover:bg-primary hover:text-white">
                                        Development </a></div>
                            </div>
                            <div class="mt-6">
                                <h2 class="text-xl font-medium xl:text-2xl"><a href="article.html"
                                        class="inline-block text-dark transition hover:text-primary dark:text-light/70 dark:hover:text-primary">
                                        Want To Upgrade Your Brain? Stop Doing These 7 Things </a></h2>
                                <ul class="mt-4 flex flex-wrap items-center gap-2">
                                    <li
                                        class="relative text-sm text-muted/50 before:mr-1 before:content-['\2022'] dark:text-muted">
                                        15 min read </li>
                                    <li
                                        class="relative text-sm text-muted/50 before:mr-1 before:content-['\2022'] dark:text-muted">
                                        Nov 6, 2023 </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide swiper-slide-next" role="group" aria-label="2 / 3"
                        data-swiper-slide-index="1" style="width: 368px; margin-right: 24px;">
                        <div class="">
                            <div class="relative"><a href="article.html"
                                    class="group block aspect-6/4 overflow-hidden rounded-lg"><img
                                        src="/assets/images/blog-img-2.jpg" alt=""
                                        class="h-full w-full rounded-lg object-cover transition duration-700 group-hover:scale-105"></a>
                                <div class="absolute bottom-4 left-4 flex flex-wrap gap-2"><a href="#"
                                        class="inline-flex items-center justify-center gap-2 rounded bg-white px-2 py-1 text-center text-xs leading-none text-primary shadow transition hover:bg-primary hover:text-white">
                                        Development </a></div>
                            </div>
                            <div class="mt-6">
                                <h2 class="text-xl font-medium xl:text-2xl"><a href="article.html"
                                        class="inline-block text-dark transition hover:text-primary dark:text-light/70 dark:hover:text-primary">
                                        Want To Upgrade Your Brain? Stop Doing These 7 Things </a></h2>
                                <ul class="mt-4 flex flex-wrap items-center gap-2">
                                    <li
                                        class="relative text-sm text-muted/50 before:mr-1 before:content-['\2022'] dark:text-muted">
                                        15 min read </li>
                                    <li
                                        class="relative text-sm text-muted/50 before:mr-1 before:content-['\2022'] dark:text-muted">
                                        Nov 6, 2023 </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide" role="group" aria-label="3 / 3" data-swiper-slide-index="2"
                        style="width: 368px; margin-right: 24px;">
                        <div class="">
                            <div class="relative"><a href="article.html"
                                    class="group block aspect-6/4 overflow-hidden rounded-lg"><img
                                        src="/assets/images/blog-img-3.jpg" alt=""
                                        class="h-full w-full rounded-lg object-cover transition duration-700 group-hover:scale-105"></a>
                                <div class="absolute bottom-4 left-4 flex flex-wrap gap-2"><a href="#"
                                        class="inline-flex items-center justify-center gap-2 rounded bg-white px-2 py-1 text-center text-xs leading-none text-primary shadow transition hover:bg-primary hover:text-white">
                                        Development </a></div>
                            </div>
                            <div class="mt-6">
                                <h2 class="text-xl font-medium xl:text-2xl"><a href="article.html"
                                        class="inline-block text-dark transition hover:text-primary dark:text-light/70 dark:hover:text-primary">
                                        Want To Upgrade Your Brain? Stop Doing These 7 Things </a></h2>
                                <ul class="mt-4 flex flex-wrap items-center gap-2">
                                    <li
                                        class="relative text-sm text-muted/50 before:mr-1 before:content-['\2022'] dark:text-muted">
                                        15 min read </li>
                                    <li
                                        class="relative text-sm text-muted/50 before:mr-1 before:content-['\2022'] dark:text-muted">
                                        Nov 6, 2023 </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div><span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
            </div>
        </div>
    </div>
    <div class="mt-10 lg:mt-14">
        @include('partials.contact')
    </div>
</div>

@endsection

