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
    <div class="">
        <h2 class="text-3xl font-semibold leading-tight text-dark dark:text-light lg:text-[40px] lg:leading-tight"> Let's 👋 <span class="text-primary">Work</span> Together </h2>
        <p class="mt-4 text-lg text-muted dark:text-light/70"> I'm here to help if you're searching for a product designer to bring your idea to life or a design partner to help take your business to the next level. </p>
        <div class="mt-6 flex flex-wrap gap-2">
            <a href="#" class="inline-flex items-center gap-x-2 rounded-lg border border-transparent bg-primary px-6 py-4 font-medium text-white transition hover:bg-blue-600 focus:outline-none focus:ring disabled:pointer-events-none disabled:opacity-50">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" class="h-6 w-6">
                    <path d="M5 4h4l2 5-2.5 1.5a11 11 0 0 0 5 5L15 13l5 2v4a2 2 0 0 1-2 2A16 16 0 0 1 3 6a2 2 0 0 1 2-2Zm10 3a2 2 0 0 1 2 2m-2-6a6 6 0 0 1 6 6"></path>
                </svg>
                <span>Book A Call</span>
            </a>
            <button type="button" data-clipboard-text="{{ $email }}" data-clipboard-action="copy" data-clipboard-success-text="Copied to clipboard" class="js-clipboard hs-tooltip inline-flex items-center gap-x-2 rounded-lg border border-light bg-transparent px-6 py-4 font-medium text-dark transition [--trigger:focus] hover:bg-light focus:outline-none focus:ring disabled:pointer-events-none disabled:opacity-50 dark:border-dark dark:text-light/70 dark:hover:bg-dark dark:hover:text-white">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" class="h-6 w-6">
                    <path d="M8 10a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2h-8a2 2 0 0 1-2-2v-8Z"></path>
                    <path d="M16 8V6a2 2 0 0 0-2-2H6a2 2 0 0 0-2 2v8a2 2 0 0 0 2 2h2"></path>
                </svg>
                <span>Copy Email</span>
                <span class="hs-tooltip-content invisible z-10 hidden rounded-lg bg-gray-900 px-2 py-1 text-xs font-medium text-white opacity-0 shadow-sm transition-opacity hs-tooltip-shown:visible hs-tooltip-shown:opacity-100 dark:bg-slate-700" role="tooltip" data-popper-placement="top" style="position: fixed; inset: auto auto 0px 0px; margin: 0px; transform: translate(1049px, -264px);">Copied to clipboard </span>
            </button>
        </div>
    </div>
    <div class="mt-10 lg:mt-14">
        <form id="" method="POST" action="{{ route('contact.store') }}" class="space-y-6 rounded-lg bg-light p-6">
            @csrf
            <div class="">
                <label for="name" class="mb-2 block text-sm font-medium text-dark dark:text-light"> Name </label>
                <input required="" type="text" id="name" name="name" placeholder="Enter your name" class="block w-full rounded-lg border border-gray-200 bg-white px-6 py-4 text-base outline-none transition focus:border-dark focus:ring focus:ring-dark/20 disabled:pointer-events-none disabled:opacity-50 dark:border-dark dark:bg-black dark:text-white dark:focus:border-muted dark:focus:ring-white/20">
            </div>

            <div class="grid grid-cols-1 gap-4 md:grid-cols-2">
                <div class="">
                    <label for="email" class="mb-2 block text-sm font-medium text-dark dark:text-light"> Email </label>
                    <input required="" type="email" id="email" name="email" placeholder="Enter your email" class="block w-full rounded-lg border border-gray-200 bg-white px-6 py-4 text-base outline-none transition focus:border-dark focus:ring focus:ring-dark/20 disabled:pointer-events-none disabled:opacity-50 dark:border-dark dark:bg-black dark:text-white dark:focus:border-muted dark:focus:ring-white/20">
                </div>
                <div class="">
                    <label for="phone" class="mb-2 block text-sm font-medium text-dark dark:text-light"> Phone </label>
                    <input required="" type="text" id="phone" name="phone" placeholder="Enter your phone" class="block w-full rounded-lg border border-gray-200 bg-white px-6 py-4 text-base outline-none transition focus:border-dark focus:ring focus:ring-dark/20 disabled:pointer-events-none disabled:opacity-50 dark:border-dark dark:bg-black dark:text-white dark:focus:border-muted dark:focus:ring-white/20">
                </div>
            </div>
            <div class="">
                <label for="message" class="mb-2 block text-sm font-medium text-dark dark:text-light"> Message </label>
                <textarea required="" id="message" name="message" placeholder="Type details about your inquiry" rows="4" class="block w-full rounded-lg border border-gray-200 bg-white px-6 py-4 text-base outline-none transition focus:border-dark focus:ring focus:ring-dark/20 disabled:pointer-events-none disabled:opacity-50 dark:border-dark dark:bg-black dark:text-white dark:focus:border-muted dark:focus:ring-white/20"></textarea>
            </div>
            <button type="submit" class="inline-flex w-full items-center justify-center gap-x-2 rounded-lg border border-transparent bg-primary px-6 py-4 text-center font-medium text-white transition hover:bg-blue-600 focus:outline-none focus:ring disabled:pointer-events-none disabled:opacity-50">
                <span>Send Message</span>
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" class="h-5 w-5">
                    <path d="M17.5 11.667v-5h-5"></path>
                    <path d="m17.5 6.667-7.5 7.5-7.5-7.5"></path>
                </svg>
            </button>
            @if(session('success'))
            <div class="status alert alert alert-success">
                {{ session('success') }}
            </div>
            @endif
        </form>
    </div>
    <div class="mt-10 aspect-video overflow-hidden rounded-lg lg:mt-14">
        <iframe src="{{ json_decode( $location, true )['map'] }}" width="100%" height="100%" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" class="h-full w-full object-cover" style="border: 0px;"></iframe>
    </div>
    <div class="mt-10 lg:mt-14">
        <h3 class="text-2xl font-medium text-dark dark:text-light lg:text-3xl"> Frequently Asked Questions </h3>
        <div class="hs-accordion-group mt-8 space-y-4">
            <div class="hs-accordion rounded-lg border border-transparent bg-light transition hs-accordion-active:border-light hs-accordion-active:bg-white dark:border-transparent dark:bg-dark-2 dark:hs-accordion-active:border-dark-2 dark:hs-accordion-active:bg-black">
                <button class="hs-accordion-toggle inline-flex w-full items-center justify-between gap-x-3 px-6 py-5 text-start text-lg font-medium text-dark transition hover:text-muted disabled:pointer-events-none disabled:opacity-50 hs-accordion-active:text-primary dark:text-light/70 dark:hover:text-light dark:focus:outline-none dark:hs-accordion-active:text-primary xl:text-2xl">
                    <span>What does a product designer need to know?</span>
                    <span class="grid h-8 w-8 shrink-0 place-content-center rounded bg-white text-primary hs-accordion-active:bg-light dark:bg-black dark:hs-accordion-active:bg-dark-2">
                        <svg class="block h-3.5 w-3.5 hs-accordion-active:hidden" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M5 12h14"></path>
                            <path d="M12 5v14"></path>
                        </svg>
                        <svg class="hidden h-3.5 w-3.5 hs-accordion-active:block" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M5 12h14"></path>
                        </svg>
                    </span>
                </button>
                <div class="hs-accordion-content hidden w-full overflow-hidden transition-[height] duration-300">
                    <div class="px-6 pb-5">
                        <p class="text-base xl:text-lg">I'm here to help if you're searching for a product designer to bring your idea to life or a design partner to help take your business to the next level.</p>
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
                        <p class="text-base xl:text-lg"> I'm here to help if you're searching for a product designer to
                            bring your idea to life or a design partner to help take your business to the next level.
                        </p>
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
                        <p class="text-base xl:text-lg"> I'm here to help if you're searching for a product designer to
                            bring your idea to life or a design partner to help take your business to the next level.
                        </p>
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
                        <p class="text-base xl:text-lg"> I'm here to help if you're searching for a product designer to
                            bring your idea to life or a design partner to help take your business to the next level.
                        </p>
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
                        <p class="text-base xl:text-lg"> I'm here to help if you're searching for a product designer to
                            bring your idea to life or a design partner to help take your business to the next level.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="mt-10 lg:mt-14">
        @include('partials.contact')
    </div>
</div>

@endsection


