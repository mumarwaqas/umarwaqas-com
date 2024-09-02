<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Pages') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
                <div class="min-w-full overflow-x-auto">

                    <!-- Buttons Section -->
                    <div class="mb-6 m-2 flex justify-end space-x-4">
                        <a href="{{ route('pages.index') }}" class="inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md shadow-sm text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                            Back to Pages
                        </a>
                        <a href="{{ route('pages.add') }}" class="inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md shadow-sm text-white bg-green-600 hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-500">
                            Add
                        </a>
                        <form action="{{ route('pages.destroy', $page->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this page?');">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md shadow-sm text-white bg-red-600 hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500">
                                Delete
                            </button>
                        </form>
                    </div>

                    <h2 class="text-2xl font-semibold mb-4">Edit Page</h2>

                    <!-- Page Update Form -->
                    <form action="{{ route('pages.update', $page->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <!-- Title -->
                        <div class="mb-4">
                            <label for="title" class="block text-gray-700 font-medium mb-2">Title</label>
                            <input type="text" name="title" id="title" class="form-input mt-1 block w-full @error('title') border-red-500 @enderror" value="{{ old('title', $page->title) }}">
                            @error('title')
                                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                            @enderror
                        </div>

                        <!-- Slug -->
                        <div class="mb-4">
                            <label for="slug" class="block text-gray-700 font-medium mb-2">Slug</label>
                            <input type="text" name="slug" id="slug" class="form-input mt-1 block w-full @error('slug') border-red-500 @enderror" value="{{ old('slug', $page->slug) }}">
                            @error('slug')
                                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                            @enderror
                        </div>

                        <!-- Content -->
                        <div class="mb-4">
                            <label for="content" class="block text-gray-700 font-medium mb-2">Content</label>
                            <textarea name="content" id="content" class="form-textarea mt-1 block w-full @error('content') border-red-500 @enderror">{{ old('content', $page->content) }}</textarea>
                            @error('content')
                                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                            @enderror
                        </div>

                        <!-- Meta Title -->
                        <div class="mb-4">
                            <label for="meta_title" class="block text-gray-700 font-medium mb-2">Meta Title</label>
                            <input type="text" name="meta_title" id="meta_title" class="form-input mt-1 block w-full @error('meta_title') border-red-500 @enderror" value="{{ old('meta_title', $page->meta_title) }}">
                            @error('meta_title')
                                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                            @enderror
                        </div>

                        <!-- Meta Description -->
                        <div class="mb-4">
                            <label for="meta_description" class="block text-gray-700 font-medium mb-2">Meta Description</label>
                            <textarea name="meta_description" id="meta_description" class="form-textarea mt-1 block w-full @error('meta_description') border-red-500 @enderror">{{ old('meta_description', $page->meta_description) }}</textarea>
                            @error('meta_description')
                                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                            @enderror
                        </div>

                        <!-- Meta Keywords -->
                        <div class="mb-4">
                            <label for="meta_keywords" class="block text-gray-700 font-medium mb-2">Meta Keywords</label>
                            <input type="text" name="meta_keywords" id="meta_keywords" class="form-input mt-1 block w-full @error('meta_keywords') border-red-500 @enderror" value="{{ old('meta_keywords', $page->meta_keywords) }}">
                            @error('meta_keywords')
                                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                            @enderror
                        </div>

                        <!-- Canonical URL -->
                        <div class="mb-4">
                            <label for="canonical_url" class="block text-gray-700 font-medium mb-2">Canonical URL</label>
                            <input type="text" name="canonical_url" id="canonical_url" class="form-input mt-1 block w-full @error('canonical_url') border-red-500 @enderror" value="{{ old('canonical_url', $page->canonical_url) }}">
                            @error('canonical_url')
                                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                            @enderror
                        </div>

                        <!-- Meta Robots -->
                        <div class="mb-4">
                            <label for="meta_robots" class="block text-gray-700 font-medium mb-2">Meta Robots</label>
                            <input type="text" name="meta_robots" id="meta_robots" class="form-input mt-1 block w-full @error('meta_robots') border-red-500 @enderror" value="{{ old('meta_robots', $page->meta_robots) }}">
                            @error('meta_robots')
                                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                            @enderror
                        </div>

                        <!-- Image -->
                        <div class="mb-4">
                            <label for="image" class="block text-gray-700 font-medium mb-2">Image URL</label>
                            <input type="file" name="image" id="image" class="form-input mt-1 block w-full @error('image') border-red-500 @enderror">
                            @error('image')
                                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                            @enderror
                        </div>

                        <!-- Submit Button -->
                        <div class="mb-4">
                            <button type="submit" class="inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md shadow-sm text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                                Update Page
                            </button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
