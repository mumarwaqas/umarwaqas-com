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
        <x-title :page="$page"/>
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
        <x-reviews />
    </div>
    <div class="mt-10 lg:mt-14">
        <x-faqs />
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
            </div>
            <div
                class="group relative grid grid-cols-1 items-center gap-4 rounded-lg border border-transparent bg-light p-6 transition hover:border-light hover:bg-white dark:bg-dark-2 dark:hover:border-primary dark:hover:bg-black md:grid-cols-4 xl:gap-10">
                <div class="flex flex-col gap-4 md:col-span-2 md:flex-row md:items-center md:gap-6">
                    <div
                        class="grid h-10 w-10 shrink-0 place-content-center rounded-lg bg-white transition group-hover:bg-light dark:bg-black dark:group-hover:bg-dark-2">
                        <img src="/assets/images/dribbble.svg" alt class="h-6 w-6 shrink-0"></div>
                    <div class>
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
                    <h5 class="font-medium leading-tight text-dark dark:text-light">
                        Gold Winner </h5>
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
                        <img src="/assets/images/awwwards.png" alt class="h-6 w-6 shrink-0"></div>
                    <div class>
                        <h5 class="font-medium leading-tight text-dark dark:text-light xl:text-lg xl:leading-tight">
                            Awwwards Nominee </h5>
                        <p class="text-muted">2022 -
                            2023</p>
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
            </div>
            <div
                class="group relative grid grid-cols-1 items-center gap-4 rounded-lg border border-transparent bg-light p-6 transition hover:border-light hover:bg-white dark:bg-dark-2 dark:hover:border-primary dark:hover:bg-black md:grid-cols-4 xl:gap-10">
                <div class="flex flex-col gap-4 md:col-span-2 md:flex-row md:items-center md:gap-6">
                    <div
                        class="grid h-10 w-10 shrink-0 place-content-center rounded-lg bg-white transition group-hover:bg-light dark:bg-black dark:group-hover:bg-dark-2">
                        <img src="/assets/images/behance.svg" alt class="h-6 w-6 shrink-0"></div>
                    <div class>
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
                    <h5 class="font-medium leading-tight text-dark dark:text-light">
                        Gold Winner </h5>
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
        @include('partials.contact')
    </div>

</div>
@endsection


