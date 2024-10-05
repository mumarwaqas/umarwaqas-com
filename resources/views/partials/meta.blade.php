{{-- <title>@hasSection('title') {{ $meta['title'] }} | @endif {{ config('app.name', Lang::get('titles.app')) }}</title> --}}
    <title>@if(isset($meta['title']) && $meta['title']){{ $meta['title'] }} @else {{ config('app.name', Lang::get('titles.app')) }} @endif</title>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta name="author" content="{{ config('app.name') }}">

        <meta name="description" content="{{ $meta['description'] }}">
        <meta name="keywords" content="{{ $meta['keywords'] }}">
        <meta name="robots" content="{{ $meta['robots'] }}">
        {{-- <meta name="robots" content="noindex, nofollow, noarchive"> --}}
        <meta property="og:type" content="{{ $meta['og']['type'] }}">
        <meta property="og:locale" content="{{ $meta['og']['locale'] }}">
        <meta property="og:site_name" content="{{ $meta['og']['site_name'] }}">
        <meta property="og:url" content="{{ $meta['og']['url'] }}">
        <meta property="og:image" content="{{ $meta['og']['image'] }}">
        <meta property="og:image:type" content="{{ $meta['og']['image_type'] }}">
        <meta property="og:description" content="{{ $meta['og']['description'] }}">
        <meta name="twitter:card" content="{{ $meta['twitter']['card'] }}">
        <meta name="twitter:title" content="{{ $meta['twitter']['title'] }}">
        <meta name="twitter:description" content="{{ $meta['twitter']['description'] }}">
        <meta name="twitter:image" content="{{ $meta['twitter']['image'] }}">
        <link rel="canonical" href="{{ $meta['canonical_url'] }}">