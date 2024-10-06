<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Faq') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
                <div class="min-w-full overflow-x-auto">
    
                    <!-- Buttons Section -->
                    <div class="mb-6 m-2 flex justify-end space-x-4">
                        <a href="{{ route('faqs.index') }}" class="inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md shadow-sm text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                            {{ __('Back to Faqs') }}
                        </a>
                        <a href="{{ route('faqs.edit', $faq->id) }}" class="inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md shadow-sm text-white bg-yellow-600 hover:bg-yellow-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-yellow-500">
                            {{ __('Update Faq') }}
                        </a>
                        <form action="{{ route('faqs.destroy', $faq->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this faq?');">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md shadow-sm text-white bg-red-600 hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500">
                                Delete
                            </button>
                        </form>
                    </div>

                    <!-- Faq Information -->
                    <div class="text-xl font-semibold mb-4">faq Information</div>
                    <div class="grid grid-cols-1 gap-4">
                        <div class="flex justify-between py-2 border-b">
                            <strong class="font-medium text-gray-700">Question:</strong>
                            <span class="text-gray-900">{{ $faq->question }}</span>
                        </div>
                        <div class="flex justify-between py-2 border-b">
                            <strong class="font-medium text-gray-700">Answer:</strong>
                            <span class="text-gray-900">{{ $faq->answer }}</span>
                        </div>
                    </div>

                    <!-- Timestamps -->
                    <div class="text-xl font-semibold mb-4">Timestamps</div>
                    <div class="grid grid-cols-1 gap-4">
                        <div class="flex justify-between py-2 border-b">
                            <strong class="font-medium text-gray-700">Created At:</strong>
                            <span class="text-gray-900">{{ $faq->created_at->format('F j, Y, g:i a') }}</span>
                        </div>
                        <div class="flex justify-between py-2 border-b">
                            <strong class="font-medium text-gray-700">Updated At:</strong>
                            <span class="text-gray-900">{{ $faq->updated_at->format('F j, Y, g:i a') }}</span>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    </x-app-layout>
