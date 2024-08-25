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
            <h2 class="text-3xl font-semibold leading-tight text-dark dark:text-light lg:text-[40px] lg:leading-tight">My
                Recent Article and Publications</h2>
            <p class="mt-4 text-lg text-muted dark:text-light/70">I'm here to help if you're searching for a product
                designer to bring your idea to life or a design partner to help take your business to the next level.</p>
        </div>
        <div class="mt-10 lg:mt-14">
            <div class="grid grid-cols-1 gap-x-6 gap-y-10 md:grid-cols-2">
                <div>
                    <div class="relative"><a href="https://www.umarwaqas.com/they-all-start-with-small-beginning"
                            class="group block aspect-6/4 overflow-hidden rounded-lg"><img
                                data-src="/assets/images/posts/they_all_start_with_small_beginning-2.jpg"
                                alt="they all start with small beginning"
                                class="h-full w-full rounded-lg object-cover transition duration-700 group-hover:scale-105"
                                src="/assets/images/posts/they_all_start_with_small_beginning-2.jpg" lazy="loaded"></a>
                        <div class="absolute bottom-4 left-4 flex flex-wrap gap-2"><a href="#"
                                class="inline-flex items-center justify-center gap-2 rounded bg-white px-2 py-1 text-center text-xs leading-none text-primary shadow transition hover:bg-primary hover:text-white">Programmer</a>
                        </div>
                    </div>
                    <div class="mt-6">
                        <h2 class="text-xl font-medium xl:text-2xl"><a
                                href="https://www.umarwaqas.com/they-all-start-with-small-beginning"
                                class="inline-block text-dark transition hover:text-primary dark:text-light/70 dark:hover:text-primary">They
                                all start with small beginning</a></h2>
                        <ul class="mt-4 flex flex-wrap items-center gap-2">
                            <li class="relative text-sm text-muted/50 before:mr-1 before:content-['\2022'] dark:text-muted">
                                15 min read</li>
                            <li class="relative text-sm text-muted/50 before:mr-1 before:content-['\2022'] dark:text-muted">
                                2024-01-14 17:39:15</li>
                        </ul>
                    </div>
                </div>
                <div>
                    <div class="relative"><a href="https://www.umarwaqas.com/web-developer-in-lahore"
                            class="group block aspect-6/4 overflow-hidden rounded-lg"><img
                                data-src="/assets/images/posts/web-developer-in-lahore-2.jpg" alt="Web Developer in Lahore"
                                class="h-full w-full rounded-lg object-cover transition duration-700 group-hover:scale-105"
                                src="/assets/images/posts/web-developer-in-lahore-2.jpg" lazy="loaded"></a>
                        <div class="absolute bottom-4 left-4 flex flex-wrap gap-2"><a href="#"
                                class="inline-flex items-center justify-center gap-2 rounded bg-white px-2 py-1 text-center text-xs leading-none text-primary shadow transition hover:bg-primary hover:text-white">Web
                                Developer</a></div>
                    </div>
                    <div class="mt-6">
                        <h2 class="text-xl font-medium xl:text-2xl"><a
                                href="https://www.umarwaqas.com/web-developer-in-lahore"
                                class="inline-block text-dark transition hover:text-primary dark:text-light/70 dark:hover:text-primary">Web
                                Developer in Lahore</a></h2>
                        <ul class="mt-4 flex flex-wrap items-center gap-2">
                            <li class="relative text-sm text-muted/50 before:mr-1 before:content-['\2022'] dark:text-muted">
                                15 min read</li>
                            <li class="relative text-sm text-muted/50 before:mr-1 before:content-['\2022'] dark:text-muted">
                                2024-01-14 17:39:15</li>
                        </ul>
                    </div>
                </div>
                <div>
                    <div class="relative"><a href="https://www.umarwaqas.com/i-am-programmer-i-have-no-life"
                            class="group block aspect-6/4 overflow-hidden rounded-lg"><img
                                data-src="/assets/images/posts/i-am-programmer-i-have-no-life.jpg" alt=""
                                class="h-full w-full rounded-lg object-cover transition duration-700 group-hover:scale-105"
                                src="/assets/images/posts/i-am-programmer-i-have-no-life.jpg" lazy="loaded"></a>
                        <div class="absolute bottom-4 left-4 flex flex-wrap gap-2"><a href="#"
                                class="inline-flex items-center justify-center gap-2 rounded bg-white px-2 py-1 text-center text-xs leading-none text-primary shadow transition hover:bg-primary hover:text-white">Programmer</a>
                        </div>
                    </div>
                    <div class="mt-6">
                        <h2 class="text-xl font-medium xl:text-2xl"><a
                                href="https://www.umarwaqas.com/i-am-programmer-i-have-no-life"
                                class="inline-block text-dark transition hover:text-primary dark:text-light/70 dark:hover:text-primary">I
                                am programmer, I have no life</a></h2>
                        <ul class="mt-4 flex flex-wrap items-center gap-2">
                            <li class="relative text-sm text-muted/50 before:mr-1 before:content-['\2022'] dark:text-muted">
                                15 min read</li>
                            <li class="relative text-sm text-muted/50 before:mr-1 before:content-['\2022'] dark:text-muted">
                                2024-01-14 17:39:15</li>
                        </ul>
                    </div>
                </div>
                <div>
                    <div class="relative"><a href="https://www.umarwaqas.com/programmers-life"
                            class="group block aspect-6/4 overflow-hidden rounded-lg"><img
                                data-src="/assets/images/posts/Programmer’s-life.jpg" alt="Programmer’s life"
                                class="h-full w-full rounded-lg object-cover transition duration-700 group-hover:scale-105"
                                src="[object Promise]" lazy="error"></a>
                        <div class="absolute bottom-4 left-4 flex flex-wrap gap-2"><a href="#"
                                class="inline-flex items-center justify-center gap-2 rounded bg-white px-2 py-1 text-center text-xs leading-none text-primary shadow transition hover:bg-primary hover:text-white">Programmer</a>
                        </div>
                    </div>
                    <div class="mt-6">
                        <h2 class="text-xl font-medium xl:text-2xl"><a href="https://www.umarwaqas.com/programmers-life"
                                class="inline-block text-dark transition hover:text-primary dark:text-light/70 dark:hover:text-primary">Programmer's
                                life</a></h2>
                        <ul class="mt-4 flex flex-wrap items-center gap-2">
                            <li class="relative text-sm text-muted/50 before:mr-1 before:content-['\2022'] dark:text-muted">
                                15 min read</li>
                            <li class="relative text-sm text-muted/50 before:mr-1 before:content-['\2022'] dark:text-muted">
                                2024-01-14 17:39:15</li>
                        </ul>
                    </div>
                </div>
                <div>
                    <div class="relative"><a href="https://www.umarwaqas.com/sleeping-positions-programmer"
                            class="group block aspect-6/4 overflow-hidden rounded-lg"><img
                                data-src="/assets/images/posts/Sleeping-Positions.jpg" alt="Sleeping Positions"
                                class="h-full w-full rounded-lg object-cover transition duration-700 group-hover:scale-105"
                                src="/assets/images/posts/Sleeping-Positions.jpg" lazy="loaded"></a>
                        <div class="absolute bottom-4 left-4 flex flex-wrap gap-2"><a href="#"
                                class="inline-flex items-center justify-center gap-2 rounded bg-white px-2 py-1 text-center text-xs leading-none text-primary shadow transition hover:bg-primary hover:text-white">Programmer</a>
                        </div>
                    </div>
                    <div class="mt-6">
                        <h2 class="text-xl font-medium xl:text-2xl"><a
                                href="https://www.umarwaqas.com/sleeping-positions-programmer"
                                class="inline-block text-dark transition hover:text-primary dark:text-light/70 dark:hover:text-primary">Sleeping
                                Positions</a></h2>
                        <ul class="mt-4 flex flex-wrap items-center gap-2">
                            <li class="relative text-sm text-muted/50 before:mr-1 before:content-['\2022'] dark:text-muted">
                                15 min read</li>
                            <li class="relative text-sm text-muted/50 before:mr-1 before:content-['\2022'] dark:text-muted">
                                2023-12-20 13:01:30</li>
                        </ul>
                    </div>
                </div>
                <div>
                    <div class="relative"><a href="https://www.umarwaqas.com/i-will-not-fix-your-computer"
                            class="group block aspect-6/4 overflow-hidden rounded-lg"><img
                                data-src="/assets/images/posts/I-will-not-fix-your-computer.jpg"
                                alt="I will not fix your computer"
                                class="h-full w-full rounded-lg object-cover transition duration-700 group-hover:scale-105"
                                src="/assets/images/posts/I-will-not-fix-your-computer.jpg" lazy="loaded"></a>
                        <div class="absolute bottom-4 left-4 flex flex-wrap gap-2"><a href="#"
                                class="inline-flex items-center justify-center gap-2 rounded bg-white px-2 py-1 text-center text-xs leading-none text-primary shadow transition hover:bg-primary hover:text-white">Programmer</a>
                        </div>
                    </div>
                    <div class="mt-6">
                        <h2 class="text-xl font-medium xl:text-2xl"><a
                                href="https://www.umarwaqas.com/i-will-not-fix-your-computer"
                                class="inline-block text-dark transition hover:text-primary dark:text-light/70 dark:hover:text-primary">I
                                will not fix your computer</a></h2>
                        <ul class="mt-4 flex flex-wrap items-center gap-2">
                            <li class="relative text-sm text-muted/50 before:mr-1 before:content-['\2022'] dark:text-muted">
                                15 min read</li>
                            <li class="relative text-sm text-muted/50 before:mr-1 before:content-['\2022'] dark:text-muted">
                                2024-01-14 17:39:15</li>
                        </ul>
                    </div>
                </div>
            </div>
            <nav class="mt-10 flex items-center justify-center gap-1.5"><button disabled=""
                    class="inline-flex min-h-9 min-w-9 items-center justify-center rounded-lg border border-light text-center text-dark transition hover:border-primary hover:text-primary focus:outline-none focus:ring-2 disabled:pointer-events-none disabled:opacity-50 dark:border-dark dark:text-muted dark:hover:border-primary dark:hover:text-primary"><svg
                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                        stroke="currentColor" class="h-4 w-4">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 19.5 3 12m0 0 7.5-7.5M3 12h18"></path>
                    </svg><span aria-hidden="true" class="sr-only">Previous</span></button><button aria-current="page"
                    class="inline-flex min-h-9 min-w-9 items-center justify-center rounded-lg border border-light text-center text-dark transition hover:border-primary hover:text-primary focus:outline-none focus:ring-2 disabled:pointer-events-none disabled:opacity-50 dark:border-dark dark:text-muted dark:hover:border-primary dark:hover:text-primary">1</button><button
                    aria-current="false"
                    class="inline-flex min-h-9 min-w-9 items-center justify-center rounded-lg border border-light text-center text-dark transition hover:border-primary hover:text-primary focus:outline-none focus:ring-2 disabled:pointer-events-none disabled:opacity-50 dark:border-dark dark:text-muted dark:hover:border-primary dark:hover:text-primary">2</button><button
                    aria-current="false"
                    class="inline-flex min-h-9 min-w-9 items-center justify-center rounded-lg border border-light text-center text-dark transition hover:border-primary hover:text-primary focus:outline-none focus:ring-2 disabled:pointer-events-none disabled:opacity-50 dark:border-dark dark:text-muted dark:hover:border-primary dark:hover:text-primary">3</button><button
                    class="inline-flex min-h-9 min-w-9 items-center justify-center rounded-lg border border-light text-center text-dark transition hover:border-primary hover:text-primary focus:outline-none focus:ring-2 disabled:pointer-events-none disabled:opacity-50 dark:border-dark dark:text-muted dark:hover:border-primary dark:hover:text-primary"><span
                        aria-hidden="true" class="sr-only">Next</span><svg xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="h-4 w-4">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3"></path>
                    </svg></button></nav>
        </div>

        <div class="mt-10 lg:mt-14">
            @include('partials.contact')
        </div>
    
    </div>
@endsection


