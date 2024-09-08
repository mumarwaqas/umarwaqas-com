<form action="{{ isset($sample) ? route('samples.update', $sample->id) : route('samples.store') }}" enctype="multipart/form-data" method="POST">
    @csrf
    @if(isset($sample))
        @method('PUT') <!-- Include this line for updates -->
    @endif

    <!-- Example: assuming user ID is from authenticated user -->
    <input type="hidden" name="user_id" value="{{ auth()->id() }}">

    <!-- Basic Information -->
    <div class="mb-4 border border-gray-300 p-4 rounded">
        <h2 class="text-lg font-semibold mb-4">Basic Information</h2>

        <!-- Title -->
        <div class="mb-4">
            <label for="title" class="block text-gray-700 font-medium mb-2">Title</label>
            <input type="text" name="title" id="title" class="form-input mt-1 block w-full @error('title') border-red-500 @enderror" value="{{ old('title', $sample->title ?? '') }}">
            @error('title')
                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
            @enderror
            <p class="text-gray-600 text-sm mt-1">Provide a descriptive title for the content.</p>
        </div>

        <!-- Slug -->
        <div class="mb-4">
            <label for="slug" class="block text-gray-700 font-medium mb-2">Slug</label>
            <input type="text" name="slug" id="slug" class="form-input mt-1 block w-full @error('slug') border-red-500 @enderror" value="{{ old('slug', $sample->slug ?? '') }}">
            @error('slug')
                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
            @enderror
            <p class="text-gray-600 text-sm mt-1">A unique identifier for the content. Must be unique and URL-friendly.</p>
        </div>

        <!-- Content -->
        <div class="mb-4">
            <label for="content" class="block text-gray-700 font-medium mb-2">Content</label>
            <textarea name="content" id="content" class="form-input mt-1 block w-full @error('content') border-red-500 @enderror">{{ old('content', $sample->content ?? '') }}</textarea>
            @error('content')
                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
            @enderror
            <p class="text-gray-600 text-sm mt-1">The main body of your content.</p>
        </div>
    </div>

    <!-- Academic Information -->
    <div class="mb-4 border border-gray-300 p-4 rounded">
        <h2 class="text-lg font-semibold mb-4">Academic Information</h2>

        <!-- Academic Level -->
        <div class="mb-4">
            <label for="academic_level" class="block text-gray-700 font-medium mb-2">Academic Level</label>
            <select name="academic_level" id="academic_level" class="form-select mt-1 block w-full @error('academic_level') border-red-500 @enderror">
                <option value="">Select Academic Level</option>
                <option value="A Level" {{ old('academic_level', $sample->academic_level ?? '') == 'A Level' ? 'selected' : '' }}>A Level</option>
                <option value="O Level" {{ old('academic_level', $sample->academic_level ?? '') == 'O Level' ? 'selected' : '' }}>O Level</option>
                <option value="Undergraduate" {{ old('academic_level', $sample->academic_level ?? '') == 'Undergraduate' ? 'selected' : '' }}>Undergraduate</option>
                <option value="Graduate" {{ old('academic_level', $sample->academic_level ?? '') == 'Graduate' ? 'selected' : '' }}>Graduate</option>
                <option value="Master" {{ old('academic_level', $sample->academic_level ?? '') == 'Master' ? 'selected' : '' }}>Master</option>
                <option value="M.Phil" {{ old('academic_level', $sample->academic_level ?? '') == 'M.Phil' ? 'selected' : '' }}>M.Phil</option>
                <option value="PhD" {{ old('academic_level', $sample->academic_level ?? '') == 'PhD' ? 'selected' : '' }}>PhD</option>
            </select>
            @error('academic_level')
                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
            @enderror
            <p class="text-gray-600 text-sm mt-1">Choose the appropriate academic level for this content.</p>
        </div>

        <!-- Type of Paper -->
        <div class="mb-4">
            <label for="type_of_paper" class="block text-gray-700 font-medium mb-2">Type of Paper</label>
            <input type="text" name="type_of_paper" id="type_of_paper" class="form-input mt-1 block w-full @error('type_of_paper') border-red-500 @enderror" value="{{ old('type_of_paper', $sample->type_of_paper ?? '') }}">
            @error('type_of_paper')
                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
            @enderror
            <p class="text-gray-600 text-sm mt-1">Specify the type of paper (e.g., Essay, Thesis).</p>
        </div>

        <!-- Citation Style -->
        <div class="mb-4">
            <label for="citation_style" class="block text-gray-700 font-medium mb-2">Citation Style</label>
            <input type="text" name="citation_style" id="citation_style" class="form-input mt-1 block w-full @error('citation_style') border-red-500 @enderror" value="{{ old('citation_style', $sample->citation_style ?? '') }}">
            @error('citation_style')
                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
            @enderror
            <p class="text-gray-600 text-sm mt-1">Mention the citation style (e.g., APA, MLA).</p>
        </div>

        <!-- Number of Words -->
        <div class="mb-4">
            <label for="number_of_words" class="block text-gray-700 font-medium mb-2">Number of Words</label>
            <input type="number" name="number_of_words" id="number_of_words" class="form-input mt-1 block w-full @error('number_of_words') border-red-500 @enderror" value="{{ old('number_of_words', $sample->number_of_words ?? '') }}">
            @error('number_of_words')
                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
            @enderror
            <p class="text-gray-600 text-sm mt-1">Enter the word count for the paper.</p>
        </div>

        <!-- Number of Pages -->
        <div class="mb-4">
            <label for="number_of_pages" class="block text-gray-700 font-medium mb-2">Number of Pages</label>
            <input type="number" name="number_of_pages" id="number_of_pages" class="form-input mt-1 block w-full @error('number_of_pages') border-red-500 @enderror" value="{{ old('number_of_pages', $sample->number_of_pages ?? '') }}">
            @error('number_of_pages')
                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
            @enderror
            <p class="text-gray-600 text-sm mt-1">Specify the total number of pages.</p>
        </div>
    </div>

    <!-- SEO Information -->
    <div class="mb-4 border border-gray-300 p-4 rounded">
        <h2 class="text-lg font-semibold mb-4">SEO Information</h2>

        <!-- Meta Title -->
        <div class="mb-4">
            <label for="meta_title" class="block text-gray-700 font-medium mb-2">Meta Title</label>
            <input type="text" name="meta_title" id="meta_title" class="form-input mt-1 block w-full @error('meta_title') border-red-500 @enderror" value="{{ old('meta_title', $sample->meta_title ?? '') }}">
            @error('meta_title')
                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
            @enderror
            <p class="text-gray-600 text-sm mt-1">Enter the title for SEO purposes. This will appear in search engine results.</p>
        </div>

        <!-- Meta Description -->
        <div class="mb-4">
            <label for="meta_description" class="block text-gray-700 font-medium mb-2">Meta Description</label>
            <textarea name="meta_description" id="meta_description" class="form-input mt-1 block w-full @error('meta_description') border-red-500 @enderror">{{ old('meta_description', $sample->meta_description ?? '') }}</textarea>
            @error('meta_description')
                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
            @enderror
            <p class="text-gray-600 text-sm mt-1">Provide a description for search engines to display under the page title.</p>
        </div>

        <!-- Meta Keywords -->
        <div class="mb-4">
            <label for="meta_keywords" class="block text-gray-700 font-medium mb-2">Meta Keywords</label>
            <input type="text" name="meta_keywords" id="meta_keywords" class="form-input mt-1 block w-full @error('meta_keywords') border-red-500 @enderror" value="{{ old('meta_keywords', $sample->meta_keywords ?? '') }}">
            @error('meta_keywords')
                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
            @enderror
            <p class="text-gray-600 text-sm mt-1">Enter relevant keywords separated by commas for SEO purposes.</p>
        </div>

        <!-- Canonical URL -->
        <div class="mb-4">
            <label for="canonical_url" class="block text-gray-700 font-medium mb-2">Canonical URL</label>
            <input type="text" name="canonical_url" id="canonical_url" class="form-input mt-1 block w-full @error('canonical_url') border-red-500 @enderror" value="{{ old('canonical_url', $sample->canonical_url ?? '') }}">
            @error('canonical_url')
                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
            @enderror
            <p class="text-gray-600 text-sm mt-1">The preferred URL for SEO (useful for avoiding duplicate content).</p>
        </div>

        <!-- Meta Robots -->
        <div class="mb-4">
            <label for="meta_robots" class="block text-gray-700 font-medium mb-2">Meta Robots</label>
            <input type="text" name="meta_robots" id="meta_robots" class="form-input mt-1 block w-full @error('meta_robots') border-red-500 @enderror" value="{{ old('meta_robots', $sample->meta_robots ?? '') }}">
            @error('meta_robots')
                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
            @enderror
            <p class="text-gray-600 text-sm mt-1">Control how search engines index this page (e.g., "index, follow").</p>
        </div>
    </div>

    <!-- Image -->
    <div class="mb-4 border border-gray-300 p-4 rounded">
        <h2 class="text-lg font-semibold mb-4">Image</h2>

        <!-- Image -->
        <label for="image" class="block text-gray-700 font-medium mb-2">Image</label>
        <input type="file" name="image" id="image" class="form-input mt-1 block w-full @error('image') border-red-500 @enderror">
        @error('image')
            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
        @enderror
        <p class="text-gray-600 text-sm mt-1">Upload an image to represent this content.</p>
    </div>

    <!-- Submit Button -->
    <div class="mb-4">
        <button type="submit" class="inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md shadow-sm text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
            {{ isset($sample) ? 'Update Sample' : 'Create Sample' }}
        </button>
    </div>
</form>
