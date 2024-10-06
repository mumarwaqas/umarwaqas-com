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

// Fetch faq if IDs exist, otherwise fetch latest faqs
$faqsFromIDs = !empty($faqIds)
    ? App\Models\Faq::whereIn('id', $faqIds)->orderBy('id', 'desc')->get()
    : App\Models\Faq::orderBy('id', 'desc')->limit(5)->get();
@endphp

<h3 class="text-2xl font-medium text-dark dark:text-light lg:text-3xl">Frequently Asked Questions</h3>
<div class="hs-accordion-group mt-8 space-y-4">

    @foreach ($faqsFromIDs as $faq)
    <div class="hs-accordion rounded-lg border border-transparent bg-light transition hs-accordion-active:border-light hs-accordion-active:bg-white dark:border-transparent dark:bg-dark-2 dark:hs-accordion-active:border-dark-2 dark:hs-accordion-active:bg-black">
        <button class="hs-accordion-toggle inline-flex w-full items-center justify-between gap-x-3 px-6 py-5 text-start text-lg font-medium text-dark transition hover:text-muted disabled:pointer-events-none disabled:opacity-50 hs-accordion-active:text-primary dark:text-light/70 dark:hover:text-light dark:focus:outline-none dark:hs-accordion-active:text-primary xl:text-2xl">
            <span>{{ $faq->question }}</span>
            <span class="grid h-8 w-8 shrink-0 place-content-center rounded bg-white text-primary hs-accordion-active:bg-light dark:bg-black dark:hs-accordion-active:bg-dark-2">
                <svg class="block h-3.5 w-3.5 hs-accordion-active:hidden" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M5 12h14"></path>
                    <path d="M12 5v14"></path>
                </svg>
                <svg class="hidden h-3.5 w-3.5 hs-accordion-active:block" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M5 12h14"></path>
                </svg>
            </span>
        </button>
        <div class="hs-accordion-content hidden w-full overflow-hidden transition-[height] duration-300">
            <div class="px-6 pb-5">
                <p class="text-base xl:text-lg">{{ $faq->answer }}</p>
            </div>
        </div>
    </div>        
    @endforeach

</div>
