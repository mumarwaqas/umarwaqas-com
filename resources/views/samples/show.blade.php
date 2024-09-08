<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Samples') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
                <div class="min-w-full overflow-x-auto">
    
                    <!-- Buttons Section -->
                    <div class="mb-6 m-2 flex justify-end space-x-4">
                        <a href="{{ route('samples.index') }}" class="inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md shadow-sm text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                            {{ __('Back to Samples') }}
                        </a>
                        <a href="{{ route('samples.edit', $sample->id) }}" class="inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md shadow-sm text-white bg-yellow-600 hover:bg-yellow-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-yellow-500">
                            Edit
                        </a>
                        <form action="{{ route('samples.destroy', $sample->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this sample?');">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md shadow-sm text-white bg-red-600 hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500">
                                Delete
                            </button>
                        </form>
                    </div>

                    <!-- Simple Information -->
                    <div class="text-xl font-semibold mb-4">Simple Information</div>
                    <div class="grid grid-cols-1 gap-4">
                        <div class="flex justify-between py-2 border-b">
                            <strong class="font-medium text-gray-700">Slug:</strong>
                            <span class="text-gray-900">{{ $sample->slug }}</span>
                        </div>
                        <div class="flex justify-between py-2 border-b">
                            <strong class="font-medium text-gray-700">Title:</strong>
                            <span class="text-gray-900">{{ $sample->title }}</span>
                        </div>
                        <div class="flex justify-between py-2 border-b">
                            <strong class="font-medium text-gray-700">Image:</strong>
                            <span class="text-gray-900">
                                <img src="{{ asset($sample->image) }}" alt="{{ $sample->title }}" class="w-24 h-24 object-cover">
                            </span>
                        </div>
                        <div class="flex justify-between py-2 border-b">
                            <strong class="font-medium text-gray-700">Content:</strong>
                            <span class="text-gray-900">{{ $sample->content }}</span>
                        </div>
                    </div>

                    <!-- Academic Information -->
                    <div class="text-xl font-semibold mb-4">Academic Information</div>
                    <div class="grid grid-cols-1 gap-4">
                        <div class="flex justify-between py-2 border-b">
                            <strong class="font-medium text-gray-700">Academic Level:</strong>
                            <span class="text-gray-900">{{ $sample->academic_level }}</span>
                        </div>
                        <div class="flex justify-between py-2 border-b">
                            <strong class="font-medium text-gray-700">Type of Paper:</strong>
                            <span class="text-gray-900">{{ $sample->type_of_paper }}</span>
                        </div>
                        <div class="flex justify-between py-2 border-b">
                            <strong class="font-medium text-gray-700">Citation Style:</strong>
                            <span class="text-gray-900">{{ $sample->citation_style }}</span>
                        </div>
                        <div class="flex justify-between py-2 border-b">
                            <strong class="font-medium text-gray-700">Number of Words:</strong>
                            <span class="text-gray-900">{{ $sample->number_of_words }}</span>
                        </div>
                        <div class="flex justify-between py-2 border-b">
                            <strong class="font-medium text-gray-700">Number of Pages:</strong>
                            <span class="text-gray-900">{{ $sample->number_of_pages }}</span>
                        </div>
                    </div>

                    <!-- SEO Information -->
                    <div class="text-xl font-semibold mb-4">SEO Information</div>
                    <div class="grid grid-cols-1 gap-4">
                        <div class="flex justify-between py-2 border-b">
                            <strong class="font-medium text-gray-700">Meta Title:</strong>
                            <span class="text-gray-900">{{ $sample->meta_title }}</span>
                        </div>
                        <div class="flex justify-between py-2 border-b">
                            <strong class="font-medium text-gray-700">Meta Description:</strong>
                            <span class="text-gray-900">{{ $sample->meta_description }}</span>
                        </div>
                        <div class="flex justify-between py-2 border-b">
                            <strong class="font-medium text-gray-700">Meta Keywords:</strong>
                            <span class="text-gray-900">{{ $sample->meta_keywords }}</span>
                        </div>
                        <div class="flex justify-between py-2 border-b">
                            <strong class="font-medium text-gray-700">Canonical URL:</strong>
                            <span class="text-gray-900">{{ $sample->canonical_url }}</span>
                        </div>
                        <div class="flex justify-between py-2 border-b">
                            <strong class="font-medium text-gray-700">Meta Robots:</strong>
                            <span class="text-gray-900">{{ $sample->meta_robots }}</span>
                        </div>
                    </div>

                    <!-- Timestamps -->
                    <div class="text-xl font-semibold mb-4">Timestamps</div>
                    <div class="grid grid-cols-1 gap-4">
                        <div class="flex justify-between py-2 border-b">
                            <strong class="font-medium text-gray-700">Created At:</strong>
                            <span class="text-gray-900">{{ $sample->created_at->format('F j, Y, g:i a') }}</span>
                        </div>
                        <div class="flex justify-between py-2 border-b">
                            <strong class="font-medium text-gray-700">Updated At:</strong>
                            <span class="text-gray-900">{{ $sample->updated_at->format('F j, Y, g:i a') }}</span>
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </div>
    </x-app-layout>
