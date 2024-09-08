<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Customer') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
                <div class="min-w-full overflow-x-auto">
    
                    <!-- Buttons Section -->
                    <div class="mb-6 m-2 flex justify-end space-x-4">
                        <a href="{{ route('customers.index') }}" class="inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md shadow-sm text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                            {{ __('Back to Customers') }}
                        </a>
                        <a href="{{ route('customers.edit', $customer->id) }}" class="inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md shadow-sm text-white bg-yellow-600 hover:bg-yellow-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-yellow-500">
                            {{ __('Update Customer') }}
                        </a>
                        <form action="{{ route('customers.destroy', $customer->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this customer?');">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md shadow-sm text-white bg-red-600 hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500">
                                Delete
                            </button>
                        </form>
                    </div>

                    <!-- Simple Information -->
                    <div class="text-xl font-semibold mb-4">Customer Information</div>
                    <div class="grid grid-cols-1 gap-4">
                        <div class="flex justify-between py-2 border-b">
                            <strong class="font-medium text-gray-700">Customer Number:</strong>
                            <span class="text-gray-900">{{ $customer->customer_no }}</span>
                        </div>
                        <div class="flex justify-between py-2 border-b">
                            <strong class="font-medium text-gray-700">Name:</strong>
                            <span class="text-gray-900">{{ $customer->name }}</span>
                        </div>
                        <div class="flex justify-between py-2 border-b">
                            <strong class="font-medium text-gray-700">Image:</strong>
                            <span class="text-gray-900">
                                @if($customer->image)
                                    <img src="{{ asset($customer->image) }}" alt="{{ $customer->name }}" class="w-24 h-24 object-cover">
                                @else
                                    <span>No image available</span>
                                @endif
                            </span>
                        </div>
                        <div class="flex justify-between py-2 border-b">
                            <strong class="font-medium text-gray-700">Review:</strong>
                            <span class="text-gray-900">{{ $customer->review }}</span>
                        </div>
                        <div class="flex justify-between py-2 border-b">
                            <strong class="font-medium text-gray-700">Text:</strong>
                            <span class="text-gray-900">{{ $customer->text }}</span>
                        </div>
                        <div class="flex justify-between py-2 border-b">
                            <strong class="font-medium text-gray-700">About:</strong>
                            <span class="text-gray-900">{{ $customer->about }}</span>
                        </div>
                        <div class="flex justify-between py-2 border-b">
                            <strong class="font-medium text-gray-700">Rating:</strong>
                            <span class="text-gray-900">{{ $customer->rating }}</span>
                        </div>
                        <div class="flex justify-between py-2 border-b">
                            <strong class="font-medium text-gray-700">Number of Reviews:</strong>
                            <span class="text-gray-900">{{ $customer->no_of_review }}</span>
                        </div>
                        {{-- <div class="flex justify-between py-2 border-b">
                            <strong class="font-medium text-gray-700">Date:</strong>
                            <span class="text-gray-900">{{ $customer->date->format('F j, Y, g:i a') }}</span>
                        </div> --}}
                    </div>

                    <!-- Timestamps -->
                    <div class="text-xl font-semibold mb-4">Timestamps</div>
                    <div class="grid grid-cols-1 gap-4">
                        <div class="flex justify-between py-2 border-b">
                            <strong class="font-medium text-gray-700">Created At:</strong>
                            <span class="text-gray-900">{{ $customer->created_at->format('F j, Y, g:i a') }}</span>
                        </div>
                        <div class="flex justify-between py-2 border-b">
                            <strong class="font-medium text-gray-700">Updated At:</strong>
                            <span class="text-gray-900">{{ $customer->updated_at->format('F j, Y, g:i a') }}</span>
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </div>
    </x-app-layout>
