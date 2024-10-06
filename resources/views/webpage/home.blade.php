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

    {{-- {{ dd($data['work']) }} --}}

    <!-- Intro -->
    <div class="rounded-2xl bg-white p-6 shadow dark:bg-black dark:shadow-dark">
        <x-intro />
    </div>
    <div class="grid grid-cols-1 gap-4 lg:gap-6">
        <div class="group rounded-2xl bg-white px-6 pt-0 shadow dark:bg-black dark:shadow-dark">
            <h3 class="relative z-10 bg-white pb-2 pt-6 text-2xl font-semibold dark:bg-black dark:text-light">Work Experience</h3>
            <div class="max-h-[200px] space-y-4 overflow-hidden pb-6 pt-4 [&amp;::-webkit-scrollbar-thumb]:bg-gray-400 dark:[&amp;::-webkit-scrollbar-thumb]:bg-slate-500 [&amp;::-webkit-scrollbar-track]:bg-transparent [&amp;::-webkit-scrollbar]:w-0">
                <div class="animate-scrollY space-y-4 group-hover:[animation-play-state:paused]">
                    <x-works />
                    <x-works />
                </div>
            </div>
        </div>
        <div class="rounded-2xl bg-white p-6 shadow dark:bg-black dark:shadow-dark">
            <h3 class="text-2xl font-semibold dark:text-light">My Expert Area</h3>
            <div class="mt-6 grid grid-cols-2 gap-4 md:grid-cols-3">
                <x-skills />
            </div>
        </div>
    </div>
    <div class="rounded-2xl bg-white p-6 shadow dark:bg-black dark:shadow-dark">
        <div class="flex flex-wrap items-center justify-between gap-2">
            <h3 class="text-2xl font-semibold dark:text-light">Recent Projects</h3>
            <a href="/work" class="inline-flex items-center justify-center gap-2 border-b text-center text-base text-primary transition hover:border-b-primary dark:border-b-muted dark:hover:border-b-primary">
                <span>All Projects</span>
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" class="h-5 w-5">
                    <path d="M4.167 10h11.666m-4.999 5 5-5m-5-5 5 5"></path>
                </svg>
            </a>
        </div>
        <div class="mt-6 space-y-6">
            <x-projects :count="2" />
        </div>
    </div>
    <div class="rounded-2xl bg-white p-6 shadow dark:bg-black dark:shadow-dark lg:col-span-2">
        <div class="flex flex-wrap items-center justify-between gap-2">
            <h3 class="text-2xl font-semibold dark:text-light">Services I Offered</h3>
            <a href="/services" class="inline-flex items-center justify-center gap-2 border-b text-center text-base text-primary transition hover:border-b-primary dark:border-b-muted dark:hover:border-b-primary"><span>See All Services</span>
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" class="h-5 w-5">
                    <path d="M4.167 10h11.666m-4.999 5 5-5m-5-5 5 5"></path>
                </svg>
            </a>
        </div>
        <div class="mt-6 grid grid-cols-2 gap-6 md:grid-cols-4">
            <x-services :count="4" />
        </div>
    </div>
    <div class="rounded-2xl bg-white p-6 shadow dark:bg-black dark:shadow-dark">
        <marquee behavior="scroll" direction="left" class="overflow-hidden text-nowrap rounded-lg bg-light p-3 text-lg font-medium text-muted dark:bg-dark-2">
            Available For Hire 🚀 Crafting Digital Experiences 🎨 Available For Hire 🚀 Crafting Digital Experiences 🎨
        </marquee>
        <h2 class="mt-4 text-[40px] font-semibold leading-snug text-dark dark:text-light"> Let's👋 <br> Work Together </h2>
        <a href="/contact" class="mt-6 inline-flex items-center justify-center gap-2 border-b text-center text-base text-primary transition hover:border-b-primary dark:border-b-muted dark:hover:border-b-primary">
            <span>Let's Talk</span>
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" class="h-5 w-5">
                <path d="M17.5 11.667v-5h-5"></path>
                <path d="m17.5 6.667-7.5 7.5-7.5-7.5"></path>
            </svg>
        </a>
    </div>

@endsection
