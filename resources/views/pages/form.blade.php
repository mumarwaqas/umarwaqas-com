<form action="{{ isset($page) ? route('pages.update', $page->id) : route('pages.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    @if(isset($page))
        @method('PUT')
    @endif
    <!-- Example: assuming user ID is from authenticated user -->
    <input type="hidden" name="user_id" value="{{ auth()->id() }}">

    <!-- Basic Information -->
    <div class="border border-gray-300 rounded-lg p-4 mb-8">
        <h2 class="text-lg font-semibold text-gray-800 mb-4">Basic Information</h2>

        <!-- Title -->
        <div class="mb-4">
            <label for="title" class="block text-gray-700 font-medium mb-2">Title</label>
<<<<<<< HEAD
<<<<<<< HEAD
            <input type="text" name="title" id="title" class="form-input mt-1 block w-full @error('title') border-red-500 @enderror" value="{{ old('title', $page->title ?? '') }}" onkeyup="generateSlug()">

            <!-- Current host URL -->
            <div class="mt-2">
                <strong>Permalink:</strong>
                <span id="permalink-url">{{ url('/') }}/<span id="slug-preview">{{ $page->slug ?? '' }}</span></span>
                <button id="edit-slug-btn" type="button" class="text-blue-500 ml-2" onclick="editSlug()">Edit</button>
            </div>

            <div id="slug-edit-container" class="hidden mt-2">
                <label for="slug" class="block text-gray-700 font-medium mb-2">Edit Slug</label>
                <input type="text" name="slug" id="slug" class="form-input mt-1 block w-full @error('slug') border-red-500 @enderror" value="{{ old('slug', $page->slug ?? '') }}">
                <button type="button" class="text-green-500 mt-2" onclick="saveSlug()">Save</button>
                <button type="button" class="text-red-500 mt-2 ml-2" onclick="cancelEdit()">Cancel</button>
            </div>

=======
            <input type="text" name="title" id="title" class="form-input mt-1 block w-full @error('title') border-red-500 @enderror" value="{{ old('title', $page->title ?? '') }}">
>>>>>>> parent of ee563be (Latest)
=======
            <input type="text" name="title" id="title" class="form-input mt-1 block w-full @error('title') border-red-500 @enderror" value="{{ old('title', $page->title ?? '') }}">
>>>>>>> parent of ee563be (Latest)
            @error('title')
                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
            @enderror
            <p class="text-gray-500 text-xs mt-1">Enter the title of the post.</p>
        </div>
<<<<<<< HEAD
<<<<<<< HEAD
    </div>

    <!-- Content Information -->
    <div class="border border-gray-300 rounded-lg p-4 mb-8">
        <h2 class="text-lg font-semibold text-gray-800 mb-4">Content Information</h2>

        <!-- Page Title -->
        <div class="mb-4">
            <label for="title" class="block text-gray-700 font-medium mb-2">Page Title</label>
            <input type="text" name="page_title" id="page_title" class="form-input mt-1 block w-full @error('page_title') border-red-500 @enderror" value="{{ old('page_title', $page->page_title ?? '') }}">
            @error('page_title')
                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
            @enderror
            <p class="text-gray-500 text-xs mt-1">Enter the page title of the post. This will be displayed as the main heading.</p>
        </div>
=======
>>>>>>> parent of ee563be (Latest)
=======
>>>>>>> parent of ee563be (Latest)

        <!-- Content -->
        <div class="mb-4">
            <label for="content" class="block text-gray-700 font-medium mb-2">Content</label>
            <textarea name="content" id="content" class="form-textarea mt-1 block w-full @error('content') border-red-500 @enderror">{{ old('content', $page->content ?? '') }}</textarea>
            @error('content')
                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
            @enderror
            <p class="text-gray-500 text-xs mt-1">Provide the main content for the post. This will be the body of your post.</p>
        </div>
    </div>

    <!-- SEO Information -->
    <div class="border border-gray-300 rounded-lg p-4 mb-8">
        <h2 class="text-lg font-semibold text-gray-800 mb-4">SEO Information</h2>

        <!-- Meta Title -->
        <div class="mb-4">
            <label for="meta_title" class="block text-gray-700 font-medium mb-2">Meta Title</label>
            <input type="text" name="meta_title" id="meta_title" class="form-input mt-1 block w-full @error('meta_title') border-red-500 @enderror" value="{{ old('meta_title', $page->meta_title ?? '') }}">
            @error('meta_title')
                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
            @enderror
            <p class="text-gray-500 text-xs mt-1">Enter a title for SEO purposes. This is what will appear in search engine results.</p>
        </div>

        <!-- Meta Description -->
        <div class="mb-4">
            <label for="meta_description" class="block text-gray-700 font-medium mb-2">Meta Description</label>
            <textarea name="meta_description" id="meta_description" class="form-textarea mt-1 block w-full @error('meta_description') border-red-500 @enderror">{{ old('meta_description', $page->meta_description ?? '') }}</textarea>
            @error('meta_description')
                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
            @enderror
            <p class="text-gray-500 text-xs mt-1">Provide a brief description of the post for SEO. This description will appear under the meta title in search engine results.</p>
        </div>

        <!-- Meta Keywords -->
        <div class="mb-4">
            <label for="meta_keywords" class="block text-gray-700 font-medium mb-2">Meta Keywords</label>
            <input type="text" name="meta_keywords" id="meta_keywords" class="form-input mt-1 block w-full @error('meta_keywords') border-red-500 @enderror" value="{{ old('meta_keywords', $page->meta_keywords ?? '') }}">
            @error('meta_keywords')
                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
            @enderror
            <p class="text-gray-500 text-xs mt-1">Enter keywords relevant to the post. These keywords help search engines understand the content.</p>
        </div>

        <!-- Canonical URL -->
        <div class="mb-4">
            <label for="canonical_url" class="block text-gray-700 font-medium mb-2">Canonical URL</label>
            <input type="text" name="canonical_url" id="canonical_url" class="form-input mt-1 block w-full @error('canonical_url') border-red-500 @enderror" value="{{ old('canonical_url', $page->canonical_url ?? '') }}">
            @error('canonical_url')
                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
            @enderror
            <p class="text-gray-500 text-xs mt-1">Enter the canonical URL if this post is a duplicate of another. This helps with SEO by avoiding duplicate content issues.</p>
        </div>

        <!-- Meta Robots -->
        <div class="mb-4">
            <label for="meta_robots" class="block text-gray-700 font-medium mb-2">Meta Robots</label>
            <input type="text" name="meta_robots" id="meta_robots" class="form-input mt-1 block w-full @error('meta_robots') border-red-500 @enderror" value="{{ old('meta_robots', $page->meta_robots ?? '') }}">
            @error('meta_robots')
                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
            @enderror
            <p class="text-gray-500 text-xs mt-1">Specify the robots meta tag values (e.g., "noindex, nofollow") to control how search engines index and follow the post.</p>
        </div>
    </div>

    <!-- Image -->
    <div class="border border-gray-300 rounded-lg p-4 mb-8">
        <h2 class="text-lg font-semibold text-gray-800 mb-4">Image</h2>

        <div class="mb-4">
            <label for="image" class="block text-gray-700 font-medium mb-2">Image</label>
            <input type="file" name="image" id="image" class="form-input mt-1 block w-full @error('image') border-red-500 @enderror">
            @error('image')
                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
            @enderror
            <p class="text-gray-500 text-xs mt-1">Upload an image related to the post. This image can be displayed as a thumbnail or in the content.</p>
        </div>
    </div>

    <!-- Submit Button -->
    <div class="mb-4">
        <button type="submit" class="inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md shadow-sm text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
            {{ isset($page) ? 'Update Page' : 'Create Page' }}
        </button>
    </div>
</form>
<<<<<<< HEAD
<<<<<<< HEAD

@push('scripts')
<!-- Select2 CSS -->
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
<!-- jQuery (required for Select2) -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<!-- Select2 JS -->
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<script>
    $(document).ready(function() {
        $('#faqs').select2({
            placeholder: "Search and select FAQs",
            width: '100%',
            allowClear: true
        });

        $('#customers').select2({
            placeholder: "Search and select Customers",
            width: '100%',
            allowClear: true
        });

        $('#writers').select2({
            placeholder: "Search and select Writers",
            width: '100%',
            allowClear: true
        });

        // Re-select the options from pageMeta if needed (this should already be handled by Laravel)
        var selectedFaqs = @json($selectedFaqs ?? []);
        if (selectedFaqs.length > 0) {
            $('#faqs').val(selectedFaqs).trigger('change');
        }
        var selectedCustomers = @json($selectedCustomers ?? []);
        if (selectedCustomers.length > 0) {
            $('#customers').val(selectedCustomers).trigger('change');
        }
        var selectedWriters = @json($selectedWriters ?? []);
        if (selectedWriters.length > 0) {
            $('#writers').val(selectedWriters).trigger('change');
        }
    });
</script>

<script>
    function generateSlug() {
        const titleInput = document.getElementById('title');
        const slugInput = document.getElementById('slug');
        const slugPreview = document.getElementById('slug-preview');
    
        // Generate slug from title
        let slug = titleInput.value
            .toLowerCase()
            .trim()
            .replace(/[^a-z0-9 -]/g, '')  // Remove special characters
            .replace(/\s+/g, '-')          // Replace spaces with dashes
            .replace(/--+/g, '-')          // Replace multiple dashes with a single dash
            .replace(/^-|-$/g, '');        // Trim dashes from start and end
    
        slugInput.value = slug;         // Update the slug input field
        slugPreview.innerText = slug;   // Update the slug preview
    }
    
    function editSlug() {
        document.getElementById('slug-edit-container').classList.remove('hidden'); // Show slug edit container
        document.getElementById('slug-preview').parentElement.style.display = 'none'; // Hide permalink display
    }
    
    function saveSlug() {
        const slugInput = document.getElementById('slug');
        const slugPreview = document.getElementById('slug-preview');
    
        slugPreview.innerText = slugInput.value; // Update preview with manual slug input
        document.getElementById('slug-edit-container').classList.add('hidden'); // Hide slug edit container
        document.getElementById('slug-preview').parentElement.style.display = 'inline'; // Show permalink display
    }
    
    function cancelEdit() {
        document.getElementById('slug-edit-container').classList.add('hidden'); // Hide slug edit container
        document.getElementById('slug-preview').parentElement.style.display = 'inline'; // Show permalink display
    }
</script>

<script>
    function previewImage(event) {
        var input = event.target;
        var reader = new FileReader();

        reader.onload = function() {
            var preview = document.getElementById('preview');
            preview.src = reader.result;
            preview.classList.remove('hidden'); // Make the image visible
        };

        if (input.files && input.files[0]) {
            reader.readAsDataURL(input.files[0]);
        }
    }
</script>

<!-- JavaScript to toggle sections -->
<script>
    function toggleSections() {
        var pageType = document.getElementById('page_type').value;
        var pageSection = document.getElementById('pageSection');
        var serviceSection = document.getElementById('serviceSection');

        // Show or hide sections based on selected value
        if (pageType === 'page') {
            pageSection.classList.remove('hidden');
            serviceSection.classList.add('hidden');
        } else if (pageType === 'service') {
            pageSection.classList.add('hidden');
            serviceSection.classList.remove('hidden');
        } else {
            // Hide both sections if no valid selection
            pageSection.classList.add('hidden');
            serviceSection.classList.add('hidden');
        }
    }

    // Run the function on page load to reflect the correct section for pre-selected values
    window.onload = toggleSections;
</script>

<script src="{{ asset('assets/ckeditor/ckeditor.js') }}"></script>
<script src="{{ asset('assets/ckeditor/samples/js/sample.js') }}"></script>

<link rel="stylesheet" href="{{ asset('assets/ckeditor/samples/css/samples.css') }}">
<link rel="stylesheet" href="{{ asset('assets/ckeditor/samples/toolbarconfigurator/lib/codemirror/neo.css') }}">
<script>
	initSample(null);
</script>
<style>
div#cke_notifications_area_editor {
    display: none;
}
</style>
{{-- 
<script src="https://cdn.ckeditor.com/ckeditor5/35.1.0/classic/ckeditor.js"></script>
<script>
    ClassicEditor
        .create(document.querySelector('#content'))
        .then(editor => {
            editor.editing.view.change(writer => {
                writer.setStyle('height', '400px', editor.editing.view.document.getRoot());
            });
        })
        .catch(error => {
            console.error(error);
        });
</script> 
--}}
{{-- <link href="https://cdn.jsdelivr.net/npm/suneditor@latest/dist/css/suneditor.min.css" rel="stylesheet"> --}}
{{-- <link href="https://cdn.jsdelivr.net/npm/codemirror@5.49.0/lib/codemirror.min.css" rel="stylesheet"> --}}

<!-- suneditor -->
{{-- <script src="https://cdn.jsdelivr.net/npm/suneditor@latest/dist/suneditor.min.js"></script> --}}
<!-- languages (Basic Language: English/en) -->
{{-- <script src="https://cdn.jsdelivr.net/npm/suneditor@latest/src/lang/ko.js"></script> --}}
<!-- codeMirror -->

{{-- 
<script src="https://cdn.jsdelivr.net/npm/codemirror@5.49.0/lib/codemirror.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/codemirror@5.49.0/mode/htmlmixed/htmlmixed.js"></script>
<script src="https://cdn.jsdelivr.net/npm/codemirror@5.49.0/mode/xml/xml.js"></script>
<script src="https://cdn.jsdelivr.net/npm/codemirror@5.49.0/mode/css/css.js"></script> 
--}}
<!-- KaTeX -->
{{-- 
<script src="https://cdn.jsdelivr.net/npm/katex@0.11.1/dist/katex.min.js"></script>
<script>
    const editorInstance = SUNEDITOR.create('content', {
        width: '100%',
        height: '400',
        strictMode: false,
        popupDisplay: 'full',
        charCounter: true,
        charCounterLabel: 'Characters :',
        imageGalleryUrl: 'https://etyswjpn79.execute-api.ap-northeast-1.amazonaws.com/suneditor-demo',
        buttonList: [
            // default
            ['undo', 'redo'], 
            ['font', 'fontSize', 'formatBlock'],
            ['paragraphStyle', 'blockquote'],
            ['bold', 'underline', 'italic', 'strike', 'subscript', 'superscript'],
            ['fontColor', 'hiliteColor', 'textStyle'],

            ['removeFormat'],
            '/', // Line break
            ['outdent', 'indent'],
            ['align', 'horizontalRule', 'list', 'lineHeight'],
            ['table', 'link', 'image', 'video', 'audio', 'math'],
            ['imageGallery'],
            ['fullScreen', 'showBlocks', 'codeView'],
            ['preview', 'print'],
            ['save', 'template'],
            // (min-width: 1546)
        ],
        placeholder: 'Start typing something...',
        templates: [
            {
                name: 'Service Page',
                html: '<section class="service-inner-sec service-inner-bg-light"> <div class="container"> <div class="row flex-wrap-reverse"> <div class="col-xl-6"> <div class="service-inner-content mt-5 mt-xl-0"> <div class="title"> <h4>Why Do UK Students Love Our Term Paper Writing Service The Most?</h4> </div> <div class="content"> <p>Are you looking for the best term paper writing service in the UK? Professors enjoy assigning term papers. However, due to the increased workload, students cannot manage everything. Even when they give their all, many students fail to achieve high grades because they are unable to effectively frame their ideas and concepts.</p> <p>Writing a term paper is quite a difficult task. This is where our term paper help comes into play. We ensure that all students pass their term papers with flying colors as this is the essence of The Academic Papers UK!</p> <p>We can assist you even if you have completed half of your term paper and are unable to complete the remaining part. Our team has some of the best term paper writers who know how to deal with your writing problems. Hire our top term paper writing service online to get the best help at competitive rates!</p> </div> <div class="title"> <h6>Team of Professionals to Provide Term Paper Writing Services:</h6> </div> <div class="content"> <p>Wondering who would ‘write my term paper?’ The hard work and the ability of the professional term paper writers in our team help us provide the best term paper assistance you can get in affordable prices. We have designed a system that carefully screens writers before they are hired. This process is so strenuous that only those writers qualify to make it in our team who successfully pass our rigorous assessment and probation period. Consequently, we manage to ensure term paper writing service according to the requirements of our customers.</p> </div> <div class="btns-flex reason-why-choose-btns"> <div class="primary-btn black-bg-btn"> <img src="https://education.test/assets/images/live-chat-icon-yellow.webp" loading="lazy" class="img-fluid" height="20px" width="23px" alt="Live Chat"> <a href="javascript:$my.livechat.window.show();">Live Chat</a> </div> <div class="primary-btn yellow-bg-btn"> <img src="https://education.test/assets/images/order-now-icon-black.webp" loading="lazy" class="img-fluid" height="25.3px" width="26.325px" alt="Live Chat"> <a href="https://education.test/order-now">Order Now</a> </div> </div> </div> </div> <div class="col-xl-6"> <div class="reason-choose-left-img text-center"> <img src="https://education.test/assets/images/term_paper_img.webp" loading="lazy" width="719px" height="720px" class="img-fluid" alt="term_paper"> </div> </div> </div> <div class="row service-inner-cards-container"> <div class="col-md-6 col-xl-3"> <div class="service-card card-sky-blue"> <div class="service-card-img service-card-img-1"> <img src="https://education.test/assets/images/round-clock-icon.webp" loading="lazy" alt="Round the Clock Availability" width="56px" height="56px" class="img-fluid"> </div> <div class="service-card-title"> <h4>Term Paper Title Ideas</h4> </div> <div class="service-card-content"> <p>The customer-support team associated with the Assignment Desk is available 24/7 to help you with any queries or doubts regarding our online assignment writing help service.</p> </div> </div> </div> <div class="col-md-6 col-xl-3"> <div class="service-card dissertation-writing-service"> <div class="service-card-img service-card-img-2"> <img src="https://education.test/assets/images/fast-assignment-icon.webp" loading="lazy" height="52px" width="50px" alt="Fast Assignment Delivery" class="img-fluid"> </div> <div class="service-card-title"> <h4>Term Paper Introduction</h4> </div> <div class="service-card-content"> <p>We understand how important it is for you to deliver your assignments on time. When you buy online assignment help from us, the team makes sure it is dropped to your inbox before.</p> </div> </div> </div> <div class="col-md-6 col-xl-3"> <div class="service-card card-writting-book-yellow"> <div class="service-card-img service-card-img-3"> <img src="https://education.test/assets/images/pound-coin-icon.webp" loading="lazy" width="44px" height="45px" alt="Best Cheap Prices" class="img-fluid"> </div> <div class="service-card-title"> <h4>Term Paper Outline</h4> </div> <div class="service-card-content"> <p>The writers associated with us are ex-professionals from different walks of life. With years of experience professionally and flair for writing, they deliver A+ worthy assignments.</p> </div> </div> </div> <div class="col-md-6 col-xl-3"> <div class="service-card card-writting-book-orange"> <div class="service-card-img service-card-img-4"> <img src="https://education.test/assets/images/top-rated-review-icon.webp" loading="lazy" width="51px" height="58px" alt="Top Rated Review" class="img-fluid"> </div> <div class="service-card-title"> <h4>Term Paper Conclusion</h4> </div> <div class="service-card-content"> <p>We have never disappointed our customers in terms of quality and information. Also, our customers do not leave any chance of appreciating us through positive reviews.</p> </div> </div> </div> </div> </div> </section> <section class="service-inner-sec service-inner-bg-white"> <div class="container"> <div class="row align-items-center"> <div class="col-xl-6"> <div class="service-inner-content"> <div class="title"> <h4>100% Unique Term Papers:</h4> </div> <div class="content"> <p>Our writers understand the importance of making each project unique. Your professor has assigned a specific topic for research paper writing, so you must follow the instructions. You cannot expect to achieve excellent results by downloading pre-written content or a paper that has been completely paraphrased from online sources.</p> <p>When you rely on our writers, you can be assured that they will create each paper from scratch.</p> </div> <div class="title"> <h4>Benefits of Using Our Term Paper Writing Service in the UK!</h4> <!-- <h6>Authentic & high-qual/;ity services</h6> --> </div> <div class="content"> <p>When we claim 100% customer satisfaction, we ensure it through our term paper writing process. We achieve this through safe payment and confidentiality, assigning you the most suitable writer, and delivering first-class term papers on-time delivery! Here are a few benefits of our term paper writing services:</p> </div> </div> </div> <div class="col-xl-6"> <div class="achieved-milestone-right text-center"> <img src="https://dissertationmasters.co.uk/assets/images/achieved-milestone.webp" loading="lazy" class="img-fluid" width="673px" height="671.071px" alt="achieved milestone"> </div> </div> </div> <div class="row mt-5"> <div class="col-xl-6"> <div class="service-inner-card-2"> <div class="service-help-img service-help-img-1"> <img src="https://dissertationmasters.co.uk/assets/images/full-time-experts-icon.webp" width="79px" height="48.03px" class="img-fluid" loading="lazy" alt="Full Time Experts"> </div> <div class="service-help-content"> <h5>Full Time Experts</h5> <p>When you work with best assignment help service you get ensured that you are working with your own people. From start to finish our subject experts stick with you, to bring.</p> </div> </div> </div> <div class="col-xl-6"> <div class="service-inner-card-2"> <div class="service-help-img service-help-img-2"> <img src="https://dissertationmasters.co.uk/assets/images/best-quality-work-icon.webp" width="67" height="68px" class="img-fluid" loading="lazy" alt="Best Quality Work"> </div> <div class="service-help-content"> <h5>Best Quality Work</h5> <p>Understanding the worth of your document, our writers pay individual attention to every order handed over to them and assure that the delivered document entails all the specifications made by you. By following this approach, top-notch grades are guaranteed.</p> </div> </div> </div> <div class="col-xl-6"> <div class="service-inner-card-2"> <div class="service-help-img service-help-img-3"> <img src="https://dissertationmasters.co.uk/assets/images/partial-payment-option-icon.webp" width="67px" height="68px" class="img-fluid" loading="lazy" alt="Partial Payment Option"> </div> <div class="service-help-content"> <h5>Partial Payment Option</h5> <p>When you work with best assignment help service you get ensured that you are working with your own people. From start to finish our subject experts stick with you, to bring.</p> </div> </div> </div> <div class="col-xl-6"> <div class="service-inner-card-2"> <div class="service-help-img service-help-img-4"> <img src="https://dissertationmasters.co.uk/assets/images/delivery-before-deadline-icon.webp" width="58.73px" height="68.08px" class="img-fluid" loading="lazy" alt="Delivery Before Deadline"> </div> <div class="service-help-content"> <h5>Delivery Before Deadline</h5> <p>Understanding the worth of your document, our writers pay individual attention to every order handed over to them and assure that the delivered document entails all the specifications made by you. By following this approach, top-notch grades are guaranteed.</p> </div> </div> </div> </div> </div> </section>'
            },
            {
                name: 'Template-2',
                html: '<p>HTML source2</p>'
            }
        ],
        codeMirror: CodeMirror,
        katex: katex
    });

    document.querySelector('.se-btn').addEventListener('click', function() {
        // Find the textarea and set its value
        const textarea = document.querySelector('[name="content"]');
        if (textarea) {
            textarea.html = editorInstance.getContents(); // Set the value
        }
    });

</script>
<script src="https://cdn.ckeditor.com/4.25.0-lts/clasic/ckeditor.js"></script>
<textarea name="editor1"></textarea>
<script>
        CKEDITOR.replace( 'editor1' );
</script> 
--}}


@endpush
=======
>>>>>>> parent of ee563be (Latest)
=======
>>>>>>> parent of ee563be (Latest)
