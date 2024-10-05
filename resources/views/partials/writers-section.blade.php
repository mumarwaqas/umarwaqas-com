@php
// Check if pageMeta exists and is not null
$writer_section_meta = isset($page) && $page->pageMeta  ? $page->pageMeta->where('meta_key', 'writer_section_title')->first() : null;        
$writer_section_title = $writer_section_meta ? $writer_section_meta->meta_value : '';

// Check if pageMeta exists and is not null
$writer_section_meta = isset($page) && $page->pageMeta  ? $page->pageMeta->where('meta_key', 'writer_section_content')->first() : null;        
$writer_section_content = $writer_section_meta ? $writer_section_meta->meta_value : '';

// Check if pageMeta exists and is not null
$writer_section_meta = isset($page) && $page->pageMeta ? $page->pageMeta->where('meta_key', 'writers')->first() : null;
// Convert meta_value to an array of IDs
$writerIds = $writer_section_meta ? explode(',', $writer_section_meta->meta_value) : [];

// Fetch Customer if IDs exist, otherwise fetch latest writers
$writersFromIDs = !empty($writerIds)
    ? App\Models\Writer::whereIn('id', $writerIds)->orderBy('id', 'desc')->get()
    : App\Models\Writer::orderBy('id', 'desc')->limit(5)->get();
@endphp
<section id="our-writers">
    <div class="container">
        <div class="mini-title">
            <div class="circle-bg circle-black-bg"></div>
            <p>Our writers</p>
        </div>
        <div class="title">
            <h3>{{ $writer_section_title }}</h3>
        </div>
        <div class="content">
            <p>{{ $writer_section_content }}</p>
        </div>
        <div class="row">
            <div class="col-md-6 col-xl-8">
                <div class="writers-carousel">
                    <div class="writers-carousel-1 owl-carousel owl-theme">
                        @foreach($writersFromIDs as $writer)
                        <div class="item">
                            <div class="writer-card">
                                <div class="writer-card-header">
                                    <div class="writer-img">
                                        {{-- $writer->image == ??  --}}
                                        <img src="{{ $writer->image ? asset($writer->image) : asset('assets/images/writer-tumb-1.webp') }}" loading="lazy" width="101px" height="101px" class="img-fluid" alt="{{ $writer->name }}">
                                    </div>
                                    <div class="writer-profile">
                                        <div class="writer-card-title">
                                            <h4>{{ $writer->name }}</h4>
                                            <img src="{{ asset('assets/images/verified-icon.webp') }}" loading="lazy" alt="verified writer" width="19px" height="19px" class="img-fluid">
                                        </div>
                                        <div class="writer-rating">
                                            <img src="{{ asset('assets/images/rating-yellow.webp') }}" loading="lazy" class="img-fluid" width="101px" height="17.701px" alt="writer rating">
                                            <p>{{ $writer->rating }}</p>
                                            <span>({{ number_format($writer->reviews) }} reviews)</span>
                                        </div>
                                        <div class="writer-degree">
                                            <img src="{{ asset('assets/images/degree-icon.webp') }}" loading="lazy" class="img-fluid" width="23px" height="16.031px" alt="writer degree">
                                            <p>{{ $writer->education  }}</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="writer-card-body">
                                    <div class="writer-stats-container">
                                        <div class="writer-stats">
                                            <p class="content">completed orders:</p>
                                            <div class="yellow-content">{{ $writer->orders }}+</div>
                                        </div>
                                        <div class="writer-stats">
                                            <p class="content">Satisfaction Rate:</p>
                                            <div class="yellow-content">{{ $writer->success_rate }}%</div>
                                        </div>
                                    </div>
                                    <div class="writer-card-badges">
                                        <div class="badge-title">
                                            <h4>Competences</h4>
                                        </div>
                                        <div class="badge-lists">
                                            @if(!empty($writer->competences))
                                                @foreach(explode(',', $writer->competences) as $competence)
                                                    <div class="badges-label">{{ trim($competence) }}</div>
                                                @endforeach
                                            @else
                                                <div class="badges-label">Liberal arts and humanities</div>
                                                <div class="badges-label">History</div>
                                                <div class="badges-label">Business and finance</div>
                                                {{-- <div class="badges-label">No competences listed</div> --}}
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="writer-footer">
                                    <div class="writers-card-btns">
                                        <div class="btns-flex our-goals-btns">
                                            <div class="primary-btn black-bg-btn">
                                                <a href="{{ route('writer', $writer->slug) }}">About Writer</a>
                                            </div>
                                            <div class="primary-btn yellow-bg-btn">
                                                <a href="{{ route('order-now') }}">Hire Writer</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="d-none d-md-block col-md-6 col-xl-4">
                <div class="writer-right-yellow-banner">
                    <div class="title">
                        <h4>Want to discuss <br> your paper? Chat <br> with our writers <br> for FREE.</h4>
                    </div>
                    <div class="content">
                        <p>Let Us Introduce You To Our <br> Professional Essay Writers!</p>
                    </div>
                    <div class="yellow-banner-btn">
                        <div class="btns-flex our-goals-btns">
                            <div class="primary-btn black-bg-btn">
                                <!-- <img src="{{ asset('assets/images/order-now-icon-black.webp') }}" class="img-fluid" height="25.3px" width="26.325px" alt="Live Chat"> -->
                                <a href="{{ route('writers') }}">View All writer's</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>