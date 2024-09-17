@extends('layouts.web')

@section('title')
Our Sample Page
@endsection

<!-- Set the meta title -->
@section('head')
<!-- General Meta Tags -->
        <meta name="description" content="This is the Our Samples page of our website.">
        <meta name="keywords" content="Our Samples, welcome, main page">

        <!-- Open Graph Meta Tags -->
        <meta property="og:title" content="Our Samples Page">
        <meta property="og:description" content="This is the Our Samples page of our website.">
        <meta property="og:type" content="website">
        <meta property="og:url" content="{{ url()->current() }}">
        <meta property="og:image" content="{{ asset('images/discount-page.png') }}">

        <!-- Twitter Meta Tags -->
        <meta name="twitter:card" content="summary_large_image">
        <meta name="twitter:title" content="Our Samples Page">
        <meta name="twitter:description" content="This is the Our Samples page of our website.">
        <meta name="twitter:image" content="{{ asset('images/discount-page.png') }}">
        <meta name="twitter:site" content="@YourTwitterHandle">
@endsection

@section('footer_scripts')

@endsection

@section('inner_page_hero_section_title')
Our Samples
@endsection

@section('inner_page_hero_section_mini_title')
Our Samples
@endsection

@section('content')

    <!-- ===================================================== -->
    <!-- ================ hero section start ===================== -->
    @include('partials.inner-pages-hero-section')
    <!-- ================ hero section end ======================= -->
    <!-- ===================================================== -->

    <!-- ===================================================== -->
    <!-- ================ Samples carousel section start ======================= -->
    <section id="our-samples-page-preview">
        <div class="container">
            <div class="row">
                <div class="col-xl-8">
                    <div class="sample-preview-container">
                        <a href="{{ route('samples') }}" class="back-btn-top">
                            <img src="{{ asset('assets/images/arrow-left-black.webp') }}" class="img-fluid" loading="lazy" width="18px" height="12px" alt="Arrow">
                            <span>Back to all samples</span>
                        </a>
                        <div class="sample-preview-content">
                            <div class="sample-title">
                                <h1>{{ $sample->title }}</h1>
                            </div>
                            <div class="sample-details">
                                <div class="sample-pages-details">
                                    <span>{{ $sample->type_of_paper }}, {{ $sample->citation_style }}, {{ $sample->academic_level }}</span>
                                    <span class="pages">{{ $sample->number_of_pages }} page, {{ $sample->number_of_words }} words</span>
                                </div>
                                <div class="sample-share-btns">
                                    <span>Share:</span>
                                    <a href="#"><img src="{{ asset('assets/images/facebook-social-black-bg.webp') }}" class="img-fluid" height="43.9px" width="43.9px" loading="lazy" alt="Facebook"></a>
                                    <a href="#"><img src="{{ asset('assets/images/linkedin-social-black-bg.webp') }}" class="img-fluid" height="43.9px" width="43.9px" loading="lazy" alt="Linkedin"></a>
                                    <a href="#"><img src="{{ asset('assets/images/insta-social-black-bg.webp') }}" class="img-fluid" height="43.9px" width="43.9px" loading="lazy" alt="Instagram"></a>
                                </div>
                            </div>
                            <h2 class="sample-heading">Common Oxidizers Properties</h2>
                            <p class="samples-para">The ability or inability for a matter to change from one type to another is merely known as a chemical property. Moreover, chemical properties refer to the element's aspects such as flammability, toxicity, acidity, and reactions in the presence of the heat of combustion. According to Burke and Robert (2017), a chemical change produces one or more types of matter that is usually different from the previous one. Formation of rust is a chemical reaction that occurs in the presence of water because iron and rust are two different kinds of matter. Oxidizers are solids, fluids, or gasses that promptly react with most of the organic material.</p>
                            <p class="samples-para">Oxidizers are dangerous fire hazards. They are not combustible, but instead, they can escalate combustion and make the ignition of chemicals more readily. Examples of common oxidizers are Nitric acid, Bromine, Chlorates, Hypochlorite's, Perchloric acid among others. Measurable properties of reaction fall into two classes, extensive and intensive. Extensive chemical properties depend on the amount of matter present, and Intensive properties do not depend on the amount of matter in their reactions as noted by Burke and Robert (2017). Heat is a case of an extensive property, and the temperature is a case of an intensive property.</p>
                            <div class="inner-pages-order-now-card">
                                <div class="order-now-card-content">
                                    <h3>Do you need help with your assignment?</h3>
                                    <p>The ability or inability for a matter to change from one type to another is merely known as a chemical property. Moreover, chemical properties refer to the element's aspects such as flammability, toxicity, acidity, and reactions in the presence of the heat.</p>
                                </div>
                                <div class="order-now-btn">
                                    <div class="primary-btn yellow-bg-btn">
                                        <img src="{{ asset('assets/images/order-now-icon-black.webp') }}" loading="lazy" class="img-fluid" height="25.3px" width="26.325px" alt="Order Now">
                                        <a href="{{ route('order-now') }}">Order Now</a>
                                    </div>
                                </div>
                            </div>
                            <h2 class="sample-heading">Uses of Common Oxidizers</h2>
                            <p class="samples-para">Class 1 oxidizers found in homes have a variety of applications both indoors and outdoors. Nitric Acid is a significant chemical used in the manufacture of fertilizers, making plastics, manufacture of dyes, production of ammonium nitrate, and explosives such as nitroglycerin and TNT. Nitrates such as sodium nitrate usage ranges from curing meat and sausage among others. The active element in salt that for a very long time has been used as a preservative in different kinds of foods is sodium nitrate. It preserves the healthy state of foods by preventing the growth of bacteria. Class 1 oxidizers found in homes have a variety of applications both indoors and outdoors. Nitric Acid is a significant chemical used in the manufacture of fertilizers, making plastics, manufacture of dyes, production of ammonium nitrate, and explosives such as nitroglycerin and TNT. Nitrates such as sodium nitrate usage ranges from curing meat and sausage among others. The active element in salt that for a very long time has been used as a preservative in different kinds of foods is sodium nitrate. It preserves the healthy state of preventing the growth of bacteria.</p>
                            <h2 class="sample-heading">Uses of Common Oxidizers</h2>
                            <p class="samples-para">Class 1 oxidizers found in homes have a variety of applications both indoors and outdoors. Nitric Acid is a significant chemical used in the manufacture of fertilizers, making plastics, manufacture of dyes, production of ammonium nitrate, and explosives such as nitroglycerin and TNT. Nitrates such as sodium nitrate usage ranges from curing meat and sausage among others. The active element in salt that for a very long time has been used as a preservative in different kinds of foods is sodium nitrate. It preserves the healthy state of foods by preventing the growth of bacteria.</p>
                            <h2 class="sample-heading">Common Laboratory Hazards and occupational exposure limit</h2>
                            <p class="samples-para">The corrosive nature of acid and bases makes them irritate the skin, burn the eyes or affect the respiratory system. Therefore the recommended protective clothing is advisable when carrying out experiments. Fluorine is an extremely toxic halogen that requires specialized equipment and handling. Mixing oxidizing agents such as nitric acid with organic materials in waste bottles leads to explosions (Burke &amp; Robert, 2017).</p>
                            <p class="samples-para">An occupational exposure upper limit that’s acceptable in concentration of a toxic substance in workplace air for a particular matter or class of materials should be adhered strictly. As cited by Tweedy (2014) occupational exposure limit for Nitric acid is TLV: 2 ppm as TWA, 4 ppm as STEL while Bromine is TLV: 0.1 ppm as TWA; 0.2 ppm as STEL chlorine include a short-term exposure for up to 15-minute not to exceed 1 ppm 2.9 mg/m−3. That for a long-term exposure up to 6-hour exposures not to exceed 0.5 ppm 1.5 mg/m−3.</p>
                            <p class="samples-para">The aspect of risks reduction depends entirely on safe practices, using the minimum or right quantities of materials as well as replacing toxic chemicals with those that are less toxic. The hazardous properties of a particular element dictate the precautions to be taken such as eliminating other possible ignition sources when handling flammable chemicals. Appropriate storage of corrosive chemicals without putting together acids and bases to avoid unintended reactions is recommended. Use of fume hood is highly regarded when working with volatile irritants such as ammonium hydroxide to minimize oxidizer incidents.</p>
                            <p class="samples-para">The aspect of risks reduction depends entirely on safe practices, using the minimum or right quantities of materials as well as replacing toxic chemicals with those that are less toxic. The hazardous properties of a particular element dictate the precautions to be taken such as eliminating other possible ignition sources when handling flammable chemicals. Appropriate storage of corrosive chemicals without putting together acids and bases to avoid unintended reactions is recommended. Use of fume hood is highly regarded when working with volatile irritants such as ammonium hydroxide to minimize oxidizer incidents. The aspect of risks reduction depends entirely on safe practices, using the minimum or right quantities of materials as well as replacing toxic chemicals with those that are less toxic. The hazardous properties of a particular element dictate the precautions to be taken such as eliminating other possible ignition sources when handling flammable chemicals.</p>
                            <h2 class="sample-heading">Importance of the Process Safety Management Standard</h2>
                            <p class="samples-para">The Occupational Safety and Health Act of 1970 created OSHA Law and Standards which sets out and enforces the significance of a workplace safety by incorporating safety management programs (Tweedy, 2014). Workers have a right to do their jobs in a safe and healthy workplace as protection for workers from work-related injuries and illnesses. A fertilizer manufacturing plant must comply with the set standards of handling toxic chemicals in their premises because this protects its brand reputation and minimizes losses that arise due to non-compliance penalties.</p>
                            <div class="previous-and-next-btns">
                                <a href="{{ route('samples') }}" class="previous-post">
                                    <img src="{{ asset('assets/images/arrow-left-yellow.webp') }}" width="18px" height="12px" class="img-fluid" loading="lazy" alt="Arrow">
                                    <span>Previous Post</span>
                                </a>
                                <a href="{{ route('samples') }}" class="back-all-samples">Back to all Samples</a>
                                <a href="{{ route('samples') }}" class="next-btn">
                                    <span>Next Post</span>
                                    <img src="{{ asset('assets/images/arrow-right-yellow.webp') }}" width="18px" height="12px" class="img-fluid" loading="lazy" alt="Arrow">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4">
                    <div class="our-samples-page-right">
                        @include('partials.instant-price')
                        @include('partials.free-features')
                        @include('partials.payment-and-security')
                        @include('partials.any-questions') 
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ================ Samples carousel section end ======================= -->
    <!-- ===================================================== -->

    <!-- ===================================================== -->
    <!-- ===============  Testimonials section start ================ -->
    @include('partials.testimonials-section')
    <!-- ===============  Testimonials section end ================ -->
    <!-- ===================================================== -->

    <!-- ===================================================== -->
    <!-- ===============  faqs section start ================ -->
    @include('partials.faqs-section')
    <!-- ===============  faqs section end ================ -->
    <!-- ===================================================== -->

    <!-- ===================================================== -->
    <!-- ===============  Every Update section start ================ -->
    @include('partials.every-update-section')
    <!-- ===============  Every Update section end ================ -->
    <!-- ===================================================== -->

@endsection
