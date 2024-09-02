<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Writers') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
                <div class="min-w-full overflow-x-auto">
    
                    <!-- Buttons Section -->
                    <div class="mb-6 m-2 flex justify-end space-x-4">
                        <a href="{{ route('writers.index') }}" class="inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md shadow-sm text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                            Back to Writers
                        </a>
                        <a href="{{ route('writers.edit', $writer->id) }}" class="inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md shadow-sm text-white bg-yellow-600 hover:bg-yellow-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-yellow-500">
                            Edit
                        </a>
                        <form action="{{ route('writers.destroy', $writer->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this writer?');">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md shadow-sm text-white bg-red-600 hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500">
                                Delete
                            </button>
                        </form>
                    </div>

                    <!-- Writer Details -->
                    <div class="text-xl font-semibold mb-4">Writer Details</div>
                    <div class="grid grid-cols-1 gap-4">
                        <div class="flex justify-between py-2 border-b">
                            <strong class="font-medium text-gray-700">Slug:</strong>
                            <span class="text-gray-900">{{ $writer->slug }}</span>
                        </div>
                        <div class="flex justify-between py-2 border-b">
                            <strong class="font-medium text-gray-700">Writer No:</strong>
                            <span class="text-gray-900">{{ $writer->writer_no }}</span>
                        </div>
                        <div class="flex justify-between py-2 border-b">
                            <strong class="font-medium text-gray-700">Image:</strong>
                            <span class="text-gray-900">
                                <img src="{{ asset($writer->image) }}" alt="{{ $writer->name }}" class="w-24 h-24 object-cover">
                            </span>
                        </div>
                        <div class="flex justify-between py-2 border-b">
                            <strong class="font-medium text-gray-700">Name:</strong>
                            <span class="text-gray-900">{{ $writer->name }}</span>
                        </div>
                        <div class="flex justify-between py-2 border-b">
                            <strong class="font-medium text-gray-700">About:</strong>
                            <span class="text-gray-900">{{ $writer->about }}</span>
                        </div>
                        <div class="flex justify-between py-2 border-b">
                            <strong class="font-medium text-gray-700">Education:</strong>
                            <span class="text-gray-900">{{ $writer->education }}</span>
                        </div>
                        <div class="flex justify-between py-2 border-b">
                            <strong class="font-medium text-gray-700">Experience:</strong>
                            <span class="text-gray-900">{{ $writer->experience }}</span>
                        </div>
                        <div class="flex justify-between py-2 border-b">
                            <strong class="font-medium text-gray-700">Rating:</strong>
                            <span class="text-gray-900">{{ $writer->rating }}</span>
                        </div>
                        <div class="flex justify-between py-2 border-b">
                            <strong class="font-medium text-gray-700">Reviews:</strong>
                            <span class="text-gray-900">{{ $writer->reviews }}</span>
                        </div>
                        <div class="flex justify-between py-2 border-b">
                            <strong class="font-medium text-gray-700">Orders:</strong>
                            <span class="text-gray-900">{{ $writer->orders }}</span>
                        </div>
                        <div class="flex justify-between py-2 border-b">
                            <strong class="font-medium text-gray-700">Success Rate:</strong>
                            <span class="text-gray-900">{{ $writer->success_rate }}</span>
                        </div>
                        <div class="flex justify-between py-2 border-b">
                            <strong class="font-medium text-gray-700">Competences:</strong>
                            <span class="text-gray-900">{{ $writer->competences }}</span>
                        </div>
                        <div class="flex justify-between py-2 border-b">
                            <strong class="font-medium text-gray-700">Online:</strong>
                            <span class="text-gray-900">{{ $writer->online }}</span>
                        </div>
                        <div class="flex justify-between py-2 border-b">
                            <strong class="font-medium text-gray-700">Created At:</strong>
                            <span class="text-gray-900">{{ $writer->created_at->format('F j, Y, g:i a') }}</span>
                        </div>
                        <div class="flex justify-between py-2 border-b">
                            <strong class="font-medium text-gray-700">Updated At:</strong>
                            <span class="text-gray-900">{{ $writer->updated_at->format('F j, Y, g:i a') }}</span>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    </x-app-layout>
