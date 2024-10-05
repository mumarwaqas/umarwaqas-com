    <!-- ===================================================== -->
    <!-- ================ Navbar Start ======================= -->
    <div class="main-nav">
        <!-- navbar topbar start-->
        <div class="nav-top">
            <div class="container">
                <div class="top-nav-flex">
                    <div class="uk-flag d-none d-md-flex">
                        <img src="{{ asset('assets/images/uk-flag-icon.webp') }}" loading="lazy" class="img-fluid" height="29px" width="47px" alt="UK">
                        <p class="flag-title">United Kingdom</p>
                    </div>
                    <div class="top-nav-right">
                        <div class="email-box">
                            <div class="mail-img">
                                <img src="{{ asset('assets/images/email-icon.webp') }}" loading="lazy" class="img-fluid d-none d-md-block" height="13px" width="18px" alt="mail">
                                <a href="mailto:{{ config('settings.app_email') }}" class="d-md-none">
                                    <img src="{{ asset('assets/images/email-icon.webp') }}" loading="lazy" class="img-fluid" height="13px" width="18px" alt="mail">
                                </a>
                            </div>
                            <a href="mailto:{{ config('settings.app_email') }}" class="d-md-block d-none">{{ config('settings.app_email') }}</a>
                        </div>
                        <div class="phone-box">
                            <div class="phone-box-img">
                                <img src="{{ asset('assets/images/phone-icon.webp') }}" loading="lazy" class="img-fluid d-none d-md-block" height="13px" width="18px" alt="phone">
                                <a href="tel:{{ config('settings.app_phone') }}"  class="d-md-none">
                                    <img src="{{ asset('assets/images/phone-icon.webp') }}" loading="lazy" class="img-fluid" height="13px" width="18px" alt="phone">
                                </a>
                            </div>
                            <a href="tel:{{ config('settings.app_phone') }}"  class="d-md-block d-none">{{ config('settings.app_phone') }}</a>
                        </div>
                    </div>
                    <div class="top-nav-menu-side-btns btns-flex d-md-none">
                        {{-- 
                        <div class="primary-btn black-bg-btn">
                            <img src="{{ asset('assets/images/live-chat-icon-yellow.webp') }}" loading="lazy" class="img-fluid" height="20px" width="23px" alt="Live Chat">
                            <a href="{{ config('settings.app_chat') }}">Live Chat</a>
                        </div>                        
                        --}}
                        <div class="primary-btn white-bg-btn">
                            <img src="{{ asset('assets/images/order-now-icon-black.webp') }}" loading="lazy" class="img-fluid" height="25.3px" width="26.325px" alt="Live Chat">
                            <a href="{{ route('order-now') }}">Order Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- navbar topbar banner end-->

        <!-- navbar menu start-->
        <div class="navbar-menu">
            <nav class="navbar navbar-expand-xl">
                <div class="container">
                    <a class="navbar-brand" href="{{ route('home') }}" style=" height: 90px; display: flex; align-content: center; align-items: center; ">
                        {{-- {{ config('app.name') }} --}}
                        <img src="{{ asset('assets/images/logo.webp') }}" loading="lazy" alt="{{ config('app.name') }}" width="438px" height="89px" class="img-fluid">
                    </a>
                    <!-- <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button> -->
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                            <li class="nav-item">
                                <a class="nav-link {{ request()->routeIs('home') ? 'active' : '' }}" aria-current="page" href="{{ route('home') }}">Home</a>
                            </li>
{{-- 
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle {{ request()->routeIs('services') ? 'active' : '' }}" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Services
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#">Action</a></li>
                                    <li><a class="dropdown-item" href="#">Another action</a></li>
                                    <li><hr class="dropdown-divider"></li>
                                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                                </ul>
                            </li>
 --}}
                            <li class="nav-item">
                                <a class="nav-link {{ request()->routeIs('about') ? 'active' : '' }}" href="{{ route('about') }}">About</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link {{ request()->routeIs('discount') ? 'active' : '' }}" href="{{ route('discount') }}">Discount</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link {{ request()->routeIs('how-its-works') ? 'active' : '' }}" href="{{ route('how-its-works') }}">How It Works</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link {{ request()->routeIs('writers') ? 'active' : '' }}" href="{{ route('writers') }}">Writers</a>
                            </li>
                        </ul>
                    </div>
                    <div class="mobile-res-nav-with-btns d-flex">
                        <div class="top-nav-menu-side-btns btns-flex d-none d-md-flex">
                            <div class="primary-btn black-bg-btn">
                                <img src="{{ asset('assets/images/live-chat-icon-yellow.webp') }}" loading="lazy" class="img-fluid" height="20px" width="23px" alt="Live Chat">
                                <a href="{{ config('settings.app_chat') }}">Live Chat</a>
                            </div>
                            <div class="primary-btn yellow-bg-btn">
                                <img src="{{ asset('assets/images/order-now-icon-black.webp') }}" loading="lazy" class="img-fluid" height="25.3px" width="26.325px" alt="Live Chat">
                                <a href="{{ route('order-now') }}">Order Now</a>
                            </div>
                        </div>
                        <div class="res-mobile-menu">
                            <button class="btn mobile-burger-icon-btn" type="button" data-bs-toggle="offcanvas" data-bs-target="#staticBackdrop" aria-controls="staticBackdrop">
                                <img src="{{ asset('assets/images/burger-icon.svg') }}" loading="lazy" width="40px" height="20px" alt="Nav menu" class="img-fluid">
                            </button>
        
                            <div class="offcanvas offcanvas-start" data-bs-backdrop="static" tabindex="-1" id="staticBackdrop" aria-labelledby="staticBackdropLabel">
                                <div class="offcanvas-header">
                                    <!-- <h5 class="offcanvas-title" id="staticBackdropLabel">Offcanvas</h5> -->
                                    <a class="navbar-brand" href="/">
                                        <img src="{{ asset('assets/images/logo.webp') }}" loading="lazy" alt="affordable-dissertation" width="auto" height="89px" class="img-fluid">
                                    </a>
                                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                                </div>
                                <div class="offcanvas-body">
                                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                                        <li class="nav-item">
                                            <a class="nav-link {{ request()->routeIs('home') ? 'active' : '' }}" aria-current="page" href="{{ route('home') }}">Home</a>
                                        </li>
{{-- 
                                        <li class="nav-item dropdown">
                                            <a class="nav-link dropdown-toggle {{ request()->routeIs('services') ? 'active' : '' }}" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                Services
                                            </a>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="#">Action</a></li>
                                                <li><a class="dropdown-item" href="#">Another action</a></li>
                                                <li><hr class="dropdown-divider"></li>
                                                <li><a class="dropdown-item" href="#">Something else here</a></li>
                                            </ul>
                                        </li>
 --}}
                                        <li class="nav-item">
                                            <a class="nav-link {{ request()->routeIs('about') ? 'active' : '' }}" href="{{ route('about') }}">About</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link {{ request()->routeIs('discount') ? 'active' : '' }}" href="{{ route('discount') }}">Discount</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link {{ request()->routeIs('how-its-works') ? 'active' : '' }}" href="{{ route('how-its-works') }}">How ts Works</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link {{ request()->routeIs('writers') ? 'active' : '' }}" href="{{ route('writers') }}">Writers</a>
                                        </li>
                                    </ul>                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
        <!-- navbar menu start-->
    </div>
    <!-- ================ Navbar end ======================= -->
    <!-- ===================================================== -->
