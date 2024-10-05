
    <section class="inner-pages-hero-section">
        <div class="container">

            <div class="hero-title">
                {{-- @hasSection('inner_page_hero_section_title')  --}}
                <h4>{{ $meta['page_title'] }}</h4>
                {{-- <h4>@yield('inner_page_hero_section_title')</h4> --}}
                {{-- @endif --}}
            </div>
            <div class="hero-back-home">
                <div class="home-btn">
                    <img src="{{ asset('assets/images/house-icon.webp') }}" loading="lazy" height="20px" width="20px" alt="House Icon" class="img-fluid">
                    <a href="{{ route('home') }}">Home </a>
                    >
                </div>
                {{-- @hasSection('inner_page_hero_section_mini_title')  --}}
                <div class="hero-mini-title">{{ $meta['page_title'] }}</div>
                {{-- <div class="hero-mini-title">@yield('inner_page_hero_section_mini_title')</div> --}}
                {{-- @endif --}}
            </div>

            @hasSection('inner_page_hero_section_phone') 
            <div class="hero-btn">
                <a class="tranperant-bg-btn" href="tel:{{ config('settings.app_phone') }}">
                    <div class="img-container">
                        <img src="{{ asset('assets/images/call-icon-black.webp') }}" loading="lazy" class="img-fluid" width="24.199px" height="24px" alt="Call Now">
                    </div>
                    {{ config('settings.app_phone') }}
                </a>
                <a href="tel:{{ config('settings.app_phone') }}" class="bg-black-btn">Order on WhatsApp</a>
            </div>
            @endif

            @hasSection('inner_page_hero_section_email_phone') 
            <div class="hero-btn-faqs">
                <a class="tranperant-bg-btn" href="tel:{{ config('settings.app_phone') }}">
                    <span class="call-now">
                        <div class="img-container">
                            <img src="{{ asset('assets/images/call-icon-black.webp') }}" loading="lazy" class="img-fluid" height="23.72px" width="23.53px" alt="Call Now">
                        </div>
                        {{ config('settings.app_phone') }}
                    </span>
                    <span class="bg-black-btn-faq">Call Me</span>
                </a>
                <a href="mailto:{{ config('settings.app_email') }}" class="bg-black-btn">
                    <div class="img-container">
                        <img src="{{ asset('assets/images/mail-yellow-icon-faqs.webp') }}" height="15.57px" width="22.15px" class="img-fluid" loading="lazy" alt="mail"> 
                    </div>
                    {{ config('settings.app_email') }}
                </a>
            </div>
            @endif

            @hasSection('inner_page_hero_section_search') 
            <div class="hero-btn-faqs">
                <a class="tranperant-bg-btn" href="tel:{{ config('settings.app_phone') }}">
                    <span>
                        <img src="{{ asset('assets/images/call-icon-black.webp') }}" loading="lazy" class="img-fluid" height="37px" width="37px" alt="Call Now">
                        {{ config('settings.app_phone') }}
                    </span>
                    <span class="bg-black-btn-faq">Call Me</span>
                </a>
                <a href="mailto:{{ config('settings.app_email') }}" class="bg-black-btn"><img src="{{ asset('assets/images/mail-yellow-icon-faqs.webp') }}" width="36px" height="36px" class="img-fluid" loading="lazy" alt="mail"> {{ config('settings.app_email') }}</a>
            </div>
            @endif

            @hasSection('inner_page_hero_section_review_rating') 
            <div class="review-count">
                <div class="total-review">
                    <div class="numbers">38983</div>
                    <div class="content">Genuine Reviews</div>
                </div>
                <div class="total-rating">
                    <div class="rating">4.9/5</div>
                    <div class="content">Overall Rating</div>
                </div>
            </div>
            @endif

            @hasSection('inner_page_hero_section_samples_search') 
                <div class="samples-search">
                    <form action="#" method="post">
                        <div class="form-group">
                            <input type="text" name="search">
                        </div>
                    </form>
                </div>
            @endif

        </div>
    </section>

