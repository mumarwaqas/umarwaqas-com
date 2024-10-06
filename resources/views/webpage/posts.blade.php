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
<<<<<<< HEAD
<<<<<<< HEAD

    <!-- ===================================================== -->
    <!-- ================ hero section start ===================== -->
    @include('partials.inner-pages-hero-section')
    <!-- ================ hero section end ======================= -->
    <!-- ===================================================== -->



    <!-- ===================================================== -->
    <!-- ===============  Blog section start ================ -->
    <section class="blogs-main-container">
        <div class="container">
            <div class="title">
                <h3>Search Your Blog Query What You Need:</h3>
            </div>
            <div class="content">
                <p>You might be thinking about what’s so special about our Law essay help UK? We provide excellent, original legal writing while keeping <br> our law essay help affordable.</p>
            </div>
            <div class="row">
                <div class="col-xl-8">
                    <div class="blog-container">
                        <div class="posts-start">

                            @include('partials.post')

                        </div>
                    </div>
                </div>
                <div class="col-xl-4">
                    <div class="blogs-right">
                        @include('partials.blog-search')
                        @include('partials.instant-price')
                        @include('partials.free-features')
                        @include('partials.payment-and-security')
                    </div>
                </div>
            </div>
=======
=======
>>>>>>> parent of fc9fe7c (Latest)
    <div>
        <div class="rounded-2xl bg-white p-6 shadow dark:bg-black dark:shadow-dark lg:sticky lg:top-24">
            <x-intro />
        </div>    
    </div>
    <div class="rounded-2xl bg-white p-6 shadow dark:bg-black dark:shadow-dark lg:col-span-2 lg:p-10">
<<<<<<< HEAD
        <div class="">
            <h2 class="text-3xl font-semibold leading-tight text-dark dark:text-light lg:text-[40px] lg:leading-tight">My Recent Article and Publications</h2>
            <p class="mt-4 text-lg text-muted dark:text-light/70">I'm here to help if you're searching for a product designer to bring your idea to life or a design partner to help take your business to the next level.</p>
        </div>
        <div class="mt-10 lg:mt-14">
<<<<<<< HEAD
            @include('webpage.post')
>>>>>>> parent of ee563be (Latest)
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
>>>>>>> parent of 53ecb51 (Latest)
=======
        <x-title :page="$page"/>
        <div class="mt-10 lg:mt-14">
            @include('webpage.post')
>>>>>>> parent of fc9fe7c (Latest)
        </div>
        <div class="mt-10 lg:mt-14">
            @include('partials.contact')
        </div>
    </div>
@endsection


