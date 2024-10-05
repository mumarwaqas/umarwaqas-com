<form method="post" action="{{ isset($category) ? route('category.update', [$category->id]) : route('category.store') }}" enctype="multipart/form-data">
    @csrf
    @if(isset($category))
        @method('PUT')
    @endif

    <!-- Example: assuming user ID is from authenticated user -->
    <input type="hidden" name="user_id" value="{{ auth()->id() }}">
    
    <!-- Basic Information -->
    <div class="border border-gray-300 p-6 rounded-md shadow-md mb-6">
        <h2 class="text-lg font-medium text-gray-700 mb-4">Basic Information</h2>

        <!-- Title -->
        <div class="mb-4">
            <label for="title" class="block text-gray-700 font-medium mb-2">Title</label>
            <input type="text" name="title" id="title" class="form-input mt-1 block w-full @error('title') border-red-500 @enderror" value="{{ old('title', $category->title ?? '') }}">
            @error('title')
                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
            @enderror
            <p class="text-gray-500 text-xs mt-1">Enter the title of the category. This will be displayed as the main heading.</p>
        </div>

        <!-- Slug -->
        <div class="mb-4">
            <label for="slug" class="block text-gray-700 font-medium mb-2">Slug</label>
            <input type="text" name="slug" id="slug" class="form-input mt-1 block w-full @error('slug') border-red-500 @enderror" value="{{ old('slug', $category->slug ?? '') }}">
            @error('slug')
                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
            @enderror
            <p class="text-gray-500 text-xs mt-1">Enter a unique slug for the URL.</p>
        </div>

        <!-- Description -->
        <div class="mb-4">
            <label for="description" class="block text-gray-700 font-medium mb-2">Description</label>
            <textarea name="description" id="description" rows="4" class="form-input mt-1 block w-full @error('description') border-red-500 @enderror">{{ old('description', $category->description ?? '') }}</textarea>
            @error('description')
                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
            @enderror
            <p class="text-gray-500 text-xs mt-1">Enter the category content or description.</p>
        </div>
    </div>

    <!-- SEO Information -->
    <div class="border border-gray-300 p-6 rounded-md shadow-md mb-6">
        <h2 class="text-lg font-medium text-gray-700 mb-4">SEO Information</h2>

        <!-- Meta Title -->
        <div class="mb-4">
            <label for="meta_title" class="block text-gray-700 font-medium mb-2">Meta Title</label>
            <input type="text" name="meta_title" id="meta_title" class="form-input mt-1 block w-full @error('meta_title') border-red-500 @enderror" value="{{ old('meta_title', $category->meta_title ?? '') }}">
            @error('meta_title')
                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
            @enderror
            <p class="text-gray-500 text-xs mt-1">Enter the meta title for SEO purposes.</p>
        </div>

        <!-- Meta Description -->
        <div class="mb-4">
            <label for="meta_description" class="block text-gray-700 font-medium mb-2">Meta Description</label>
            <textarea name="meta_description" id="meta_description" rows="3" class="form-input mt-1 block w-full @error('meta_description') border-red-500 @enderror">{{ old('meta_description', $category->meta_description ?? '') }}</textarea>
            @error('meta_description')
                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
            @enderror
            <p class="text-gray-500 text-xs mt-1">Enter the meta description for SEO purposes.</p>
        </div>

        <!-- Meta Keywords -->
        <div class="mb-4">
            <label for="meta_keywords" class="block text-gray-700 font-medium mb-2">Meta Keywords</label>
            <input type="text" name="meta_keywords" id="meta_keywords" class="form-input mt-1 block w-full @error('meta_keywords') border-red-500 @enderror" value="{{ old('meta_keywords', $category->meta_keywords ?? '') }}">
            @error('meta_keywords')
                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
            @enderror
            <p class="text-gray-500 text-xs mt-1">Enter the meta keywords for SEO purposes.</p>
        </div>

        <!-- Canonical URL -->
        <div class="mb-4">
            <label for="canonical_url" class="block text-gray-700 font-medium mb-2">Canonical URL</label>
            <input type="text" name="canonical_url" id="canonical_url" class="form-input mt-1 block w-full @error('canonical_url') border-red-500 @enderror" value="{{ old('canonical_url', $category->canonical_url ?? '') }}">
            @error('canonical_url')
                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
            @enderror
            <p class="text-gray-500 text-xs mt-1">Enter the canonical URL for SEO purposes.</p>
        </div>

        <!-- Meta Robots -->
        <div class="mb-4">
            <label for="meta_robots" class="block text-gray-700 font-medium mb-2">Meta Robots</label>
            <input type="text" name="meta_robots" id="meta_robots" class="form-input mt-1 block w-full @error('meta_robots') border-red-500 @enderror" value="{{ old('meta_robots', $category->meta_robots ?? '') }}">
            @error('meta_robots')
                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
            @enderror
            <p class="text-gray-500 text-xs mt-1">You can use combinations such as "index,follow" or "noindex,nofollow". Separate multiple tags with commas.</p>
        </div>
    </div>

    <!-- Image -->
    <div class="border border-gray-300 p-6 rounded-md shadow-md mb-6">
        <h2 class="text-lg font-medium text-gray-700 mb-4">Image</h2>

        <!-- Image -->
        <div class="mb-4">
            <label for="image" class="block text-gray-700 font-medium mb-2">Image</label>
            @if(isset($category) && $category->image)
                <img src="{{ url('/') . '/' . $category->image }}" width="200" />
            @endif
            <input type="file" name="image" id="image" class="form-input mt-1 block w-full @error('image') border-red-500 @enderror">
            @error('image')
                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
            @enderror
            <p class="text-gray-500 text-xs mt-1">Upload an image for the category. Leave blank if you do not want to change the existing image.</p>
        </div>
    </div>

    <!-- Submit Button -->
    <div class="mb-4">
        <button type="submit" class="inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md shadow-sm text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
            {{ isset($category) ? 'Update Category' : 'Create Category' }}
        </button>
    </div>
</form>