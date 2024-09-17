@php
// Check if pageMeta exists and is not null
$customer_section_meta = isset($page) && $page->pageMeta  ? $page->pageMeta->where('meta_key', 'customer_section_title')->first() : null;        
$customer_section_title = $customer_section_meta ? $customer_section_meta->meta_value : '';

// Check if pageMeta exists and is not null
$customer_section_meta = isset($page) && $page->pageMeta  ? $page->pageMeta->where('meta_key', 'customer_section_content')->first() : null;        
$customer_section_content = $customer_section_meta ? $customer_section_meta->meta_value : '';

// Check if pageMeta exists and is not null
$customer_section_meta = isset($page) && $page->pageMeta ? $page->pageMeta->where('meta_key', 'customers')->first() : null;
// Convert meta_value to an array of IDs
$customerIds = $customer_section_meta ? explode(',', $customer_section_meta->meta_value) : [];

// Fetch Customer if IDs exist, otherwise fetch latest customers
$customersFromIDs = !empty($customerIds)
    ? App\Models\Customer::whereIn('id', $customerIds)->orderBy('id', 'desc')->get()
    : App\Models\Customer::orderBy('id', 'desc')->limit(5)->get();
@endphp
<div class="flex flex-wrap items-center justify-between gap-6">
    {{-- {{ $client }} --}}
    <h3 class="text-2xl font-medium text-dark dark:text-light lg:text-3xl"> Trusted By Clients </h3>
    <div class="flex items-center gap-2">
        <button class="review-carousel-button-prev grid h-9 w-9 place-content-center rounded-lg border border-muted/30 text-muted transition hover:border-primary hover:text-primary" tabindex="0" aria-label="Previous slide" aria-controls="swiper-wrapper-a47a317e38ebec59">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" class="h-5 w-5 shrink-0">
                <path d="M4.167 10h11.666M4.167 10l5 5m-5-5 5-5"></path>
            </svg>
        </button>
        <button class="review-carousel-button-next grid h-9 w-9 place-content-center rounded-lg border border-muted/30 text-muted transition hover:border-primary hover:text-primary" tabindex="0" aria-label="Next slide" aria-controls="swiper-wrapper-a47a317e38ebec59">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" class="h-5 w-5 shrink-0">
                <path d="M4.167 10h11.666m-5 5 5-5m-5-5 5 5"></path>
            </svg>
        </button>
    </div>
</div>
<div class="mt-8">
    <div class="swiper review-carousel swiper-initialized swiper-horizontal swiper-backface-hidden">
        <div class="swiper-wrapper" id="swiper-wrapper-a47a317e38ebec59" aria-live="polite">
            @foreach ($customersFromIDs as $customer)
            <div class="swiper-slide swiper-slide-active" role="group" aria-label="{{ $loop->index }} / {{ count($customersFromIDs) }}" data-swiper-slide-index="{{ $loop->index }}" style="width: 368px; margin-right: 24px;">
                <div class="flex h-full flex-col justify-between rounded-lg bg-light p-6 dark:bg-dark-2">
                    <div class="flex flex-wrap items-center justify-between gap-4">
                        <div class="flex flex-wrap items-center gap-1">
                            @for ($i = 0; $i < 5; $i++)
                                <img src="{{ asset('assets/images/star-full.svg') }}" alt="star" width="" height="" class="h-4 w-4 shrink-0">
                            @endfor
                        </div>
                        <a href="#" class="inline-flex items-center gap-2 rounded bg-white px-2 py-1 text-sm leading-none text-primary transition hover:bg-primary hover:text-white dark:bg-black">
                            <span>{{ $customer['name'] }}</span>
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 14 15" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" class="h-3.5 w-3.5 shrink-0">
                                <path d="m9.917 4.583-5.834 5.834m.584-5.834h5.25v5.25"></path>
                            </svg>
                        </a>
                    </div>
                    <blockquote class="mt-6 flex-1 text-lg"> "{{ $customer['review'] }} "</blockquote>
                    <p class="mt-8 font-medium">{{ $customer['name'] }} - <span class="font-normal text-muted"> {{ $customer['designation'] }} </span></p>
                </div>
            </div>
            @endforeach
        </div>
        <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
    </div>
</div>