<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        {{-- <meta name="csrf-token" content="{{ csrf_token() }}"> --}}

        {{-- Dynamic Meta Tags --}}
        <title>@hasSection('title') @yield('title') | @endif {{ config('app.name', Lang::get('titles.app')) }}</title>
        @yield('meta')
        
        <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/images/favicon.jpg') }}">
        <!-- Place favicon.ico in the root directory -->

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com" />
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
        <link href="https://fonts.googleapis.com/css2?family=Bricolage+Grotesque:opsz,wght@12..96,300;12..96,400;12..96,500;12..96,600;12..96,700&display=swap" rel="stylesheet" />

        <!-- CSS here -->
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/swiper-bundle.min.css') }}" />
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/venobox.min.css') }}" />
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/style.css') }}" />
        
        {{-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries --}}
        <!--
            [if lt IE 9]>
            <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
            <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
            [endif]
        -->
        {{-- @yield('template_linked_fonts')
        @vite(['resources/assets/sass/app.scss', 'resources/assets/js/app.js'])
        @yield('template_linked_css') --}}
        @yield('head')
        {{-- @include('scripts.ga-analytics') --}}
    </head>
    <body class="relative h-screen overflow-y-auto overflow-x-hidden bg-light text-dark dark:bg-dark-2 dark:text-light">

        <div class="mx-auto flex max-w-screen-2xl flex-col justify-between gap-4 p-4 lg:gap-6 lg:p-6">

        <!-- header part start -->
        <x-header />
        <!-- header part end -->

        <main class="grid grid-cols-1 gap-4 lg:grid-cols-3 lg:gap-6">
            <!-- main area part start -->
            @yield('content')
            <!-- main area part end -->
        </main>
          
        <!-- footer part start -->
        @include('partials.footer')
        <!-- footer part end -->
          
        </div>

        <div class="shapes">
            <div class="fixed -left-1/2 -top-1/2 -z-10 animate-spin-very-slow xl:-left-[20%] xl:-top-1/3">
                <img src="assets/img/gradient-1.png" alt="" class="">
            </div>
        
            <div class="fixed -right-[50%] top-[10%] -z-10 animate-spin-very-slow xl:-right-[15%] xl:top-[10%]">
                <img src="assets/img/gradient-2.png" alt="" class="">
            </div>
        
            <div class="move-with-cursor fixed left-[10%] top-[20%] -z-10" style="transition: transform 0.6s cubic-bezier(0.34, 1.56, 0.64, 1); transform: translate(4.07px, 1.11px) rotate(5.18deg);">
                <img src="assets/img/object-3d-1.png" alt="" class="">
            </div>
        
            <div class="move-with-cursor fixed bottom-[20%] right-[10%] -z-10" style="transition: transform 0.6s cubic-bezier(0.34, 1.56, 0.64, 1); transform: translate(4.07px, 1.11px) rotate(5.18deg);">
                <img src="assets/img/object-3d-2.png" alt="" class="">
            </div>
        </div>

        <!-- JS here -->
        <script src="{{ asset('assets/js/jquery.lazyload.min.js') }}"></script>
        <script src="{{ asset('assets/js/preline.js') }}"></script>
        <script src="{{ asset('assets/js/swiper-bundle.min.js') }}"></script>
        <script src="{{ asset('assets/js/venobox.min.js') }}"></script>
        <script src="{{ asset('assets/js/clipboard.min.js') }}"></script>
        <script src="{{ asset('assets/js/main.js') }}"></script>

        @yield('footer_scripts')

    </body>
</html>
