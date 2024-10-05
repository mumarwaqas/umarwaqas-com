@php
// Check if pageMeta exists and is not null
$faq_section_meta = isset($page) && $page->pageMeta  ? $page->pageMeta->where('meta_key', 'faq_section_title')->first() : null;        
$faq_section_title = $faq_section_meta ? $faq_section_meta->meta_value : '';

// Check if pageMeta exists and is not null
$faq_section_meta = isset($page) && $page->pageMeta  ? $page->pageMeta->where('meta_key', 'faq_section_content')->first() : null;        
$faq_section_content = $faq_section_meta ? $faq_section_meta->meta_value : '';

// Check if pageMeta exists and is not null
$faq_section_meta = isset($page) && $page->pageMeta ? $page->pageMeta->where('meta_key', 'faqs')->first() : null;
// Convert meta_value to an array of IDs
$faqIds = $faq_section_meta ? explode(',', $faq_section_meta->meta_value) : [];

// Fetch FAQs if IDs exist, otherwise fetch latest writers
$faqFromIDs = !empty($faqIds)
    ? App\Models\Faq::whereIn('id', $faqIds)->orderBy('id', 'desc')->get()
    : App\Models\Faq::orderBy('id', 'desc')->limit(12)->get();
@endphp

<section id="faqs">
    <div class="container">
        <div class="tabse-img d-block d-xl-none">
            <img src="{{ asset('assets/images/tabs-right-img.webp') }}" loading="lazy" width="812px" height="866px" class="img-fluid" alt="Tab tumb">
        </div>
        <div class="mini-title mt-5 m-xl-0">
            <div class="circle-bg circle-yellow-bg"></div>
            <p>Frequently Asked Questions</p>
        </div>
        <div class="title">
            <h3>{{ $faq_section_title }}</h3>
        </div>
        <div class="content">
            <p>{{ $faq_section_content }}</p>
        </div>
        <div class="faqs-tabs-container">
            <ul class="nav nav-pills mb-3 d-none d-md-flex" id="pills-tab" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="mba-dissertation-tab" data-bs-toggle="pill" data-bs-target="#mba-dissertation" type="button" role="tab" aria-controls="mba-dissertation" aria-selected="true">MBA Dissertation</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="law-dissertation-tab" data-bs-toggle="pill" data-bs-target="#mba-dissertation" type="button" role="tab" aria-controls="law-dissertation" aria-selected="false">LAW Dissertation</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#mba-dissertation" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">Assignment writing</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="assignment-writing-tab" data-bs-toggle="pill" data-bs-target="#mba-dissertation" type="button" role="tab" aria-controls="assignment-writing" aria-selected="false">Assignment writing</button>
                </li>
            </ul>
            <div class="tab-content" id="pills-tabContent">
                <div class="tab-pane fade show active" id="mba-dissertation" role="tabpanel" aria-labelledby="mba-dissertation-tab" tabindex="0">
                    <div class="row">
                        <div class="col-xl-6">
                            <div class="tabs-accordians-container">
                                <div class="accordion accordion-flush" id="accordionFlushExample">
                                    @foreach($faqFromIDs as $index => $faq)
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="flush-heading{{ $faq->id }}">
                                            <button class="accordion-button @if($index > 0) collapsed @endif" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse{{ $faq->id }}" aria-expanded="true" aria-controls="flush-collapse{{ $faq->id }}">
                                                {{ $faq->question }}
                                            </button>
                                        </h2>
                                        <div id="flush-collapse{{ $faq->id }}" class="accordion-collapse collapse @if($index === 0) show @endif" aria-labelledby="flush-heading{{ $faq->id }}" data-bs-parent="#accordionFlushExample">
                                            <div class="accordion-body">
                                                {{ $faq->answer }}
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6">
                            <div class="tabse-img d-none d-xl-block">
                                <img src="{{ asset('assets/images/tabs-right-img.webp') }}"  loading="lazy" width="812px" height="866px" class="img-fluid" alt="Tab tumb">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="law-dissertation" role="tabpanel" aria-labelledby="law-dissertation-tab" tabindex="0">...</div>
                <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab" tabindex="0">...</div>
                <div class="tab-pane fade" id="assignment-writing" role="tabpanel" aria-labelledby="assignment-writing-tab" tabindex="0">...</div>
            </div>
        </div>
    </div>
</section>