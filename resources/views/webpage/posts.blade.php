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
        <x-title :page="$page"/>
        <div class="mt-10 lg:mt-14">
            @include('webpage.post')
        </div>
        <div class="mt-10 lg:mt-14">
            @include('partials.contact')
        </div>
    </div>
@endsection


