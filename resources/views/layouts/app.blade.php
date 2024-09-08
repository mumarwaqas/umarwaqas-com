<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-gray-100 dark:bg-gray-900">
            @include('layouts.navigation')

            <!-- Page Heading -->
            @isset($header)
                <header class="bg-white dark:bg-gray-800 shadow">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            @endisset

            <!-- Page Content -->
            <main>
                @if($errors->any() || session('success') || session('error') )
                <div class="py-12 pb-0">
                    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
                        <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
                            <div class="min-w-full overflow-x-auto">
                                <!-- Display error messages -->
                                @if($errors->any())
                                    <x-error-message :messages="$errors->all()" />
                                @endif
                
                                <!-- Display success messages -->
                                @if(session('success'))
                                    <x-success-message :messages="[session('success')]" />
                                @endif
                
                                <!-- Display custom error messages -->
                                @if(session('error'))
                                    <x-error-message :messages="[session('error')]" />
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
                @endif

                {{ $slot }}
            </main>
        </div>
    <!-- Load scripts at the end of the body -->
    @stack('scripts')
    </body>
</html>
