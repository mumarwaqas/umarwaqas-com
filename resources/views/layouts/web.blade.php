<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        {{-- @yield('head') --}}
        @include('partials.meta')

        <link rel="shortcut icon" href="/favicon.ico">
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link rel="stylesheet" href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" />
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,100..1000;1,9..40,100..1000&family=Open+Sans:ital,wght@0,300..800;1,300..800&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap">

        <link rel="stylesheet" href="{{ asset('assets/owlcarousel/assets/owl.carousel.min.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/bootstrap/css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/uploadfile.min.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
        {{-- @yield('template_linked_fonts') --}}
        {{-- @vite(['resources/assets/sass/app.scss', 'resources/assets/js/app.js']) --}}
        {{-- @vite(['website/assets/app.css', 'website/assets/app.js']) --}}
        {{-- @yield('template_linked_css') --}}
        {{-- Scripts --}}
        <script>
            window.Laravel = {!! json_encode(['csrfToken' => csrf_token()]) !!};
        </script>
        @include('scripts.ga-analytics')
    </head>
    <body>
        @include('partials.header')
        @yield('content')
        @include('partials.footer')

        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <!-- javascript -->
        <script src="{{ asset('assets/owlcarousel/owl.carousel.js') }}" defer></script>
        <!-- bootstrap js -->
        <!-- <script src="{{ asset('assets/bootstrap/js/bootstrap.min.js') }}"></script> -->
        <script src="{{ asset('assets/bootstrap/js/bootstrap.bundle.min.js') }}" defer></script>
        <!-- <script src="{{ asset('assets/bootstrap/js/bootstrap.esm.min.js') }}"></script> -->
        <!-- uploadfile js file  -->
        <script src="{{ asset('assets/js/jquery.uploadfile.min.js') }}" defer></script>
        <!-- order js file  -->
        <script src="{{ asset('assets/js/order.js') }}" defer></script>
        <!-- custom js file  -->
        <script src="{{ asset('assets/js/style.js') }}" defer></script>

        @yield('footer_scripts')
        @include('scripts.chat')
        <style>
            [action='/file-upload'] {
                display: none !important;
            }
        </style>

        <script>
            $(document).ready(function(){
                $(document).on('click', '#table-of-contents-plus', function() {
                    $("#table-of-contents > ul").toggle('slow');
                });
            });
        </script>
    </body>
</html>

