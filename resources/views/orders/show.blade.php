<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Orders') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
                <div class="min-w-full overflow-x-auto">
    
                    <!-- Buttons Section -->
                    <div class="mb-6 m-2 flex justify-end space-x-4">
                        <a href="{{ route('orders.index') }}" class="inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md shadow-sm text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                            Back to Orders
                        </a>
                        <a href="{{ route('orders.edit', $order->id) }}" class="inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md shadow-sm text-white bg-yellow-600 hover:bg-yellow-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-yellow-500">
                            Edit
                        </a>
                        <form action="{{ route('orders.destroy', $order->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this order?');">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md shadow-sm text-white bg-red-600 hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500">
                                Delete
                            </button>
                        </form>
                    </div>

                    <!-- Paper Details -->
                    <div class="text-xl font-semibold mb-4">Paper Details</div>
                    <div class="grid grid-cols-1 gap-4">
                        <div class="flex justify-between py-2 border-b">
                            <strong class="font-medium text-gray-700">Academic Level:</strong>
                            <span class="text-gray-900">{{ $order->academic_level }}</span>
                        </div>
                        <div class="flex justify-between py-2 border-b">
                            <strong class="font-medium text-gray-700">Subject:</strong>
                            <span class="text-gray-900">{{ $order->subject }}</span>
                        </div>
                        <div class="flex justify-between py-2 border-b">
                            <strong class="font-medium text-gray-700">Writer:</strong>
                            <span class="text-gray-900">{{ $order->writer }}</span>
                        </div>
                        <div class="flex justify-between py-2 border-b">
                            <strong class="font-medium text-gray-700">Delivery Time:</strong>
                            <span class="text-gray-900">{{ $order->delivery_time }}</span>
                        </div>
                        <div class="flex justify-between py-2 border-b">
                            <strong class="font-medium text-gray-700">Number of Words:</strong>
                            <span class="text-gray-900">{{ $order->number_of_words }}</span>
                        </div>
                        <div class="flex justify-between py-2 border-b">
                            <strong class="font-medium text-gray-700">Number of Pages:</strong>
                            <span class="text-gray-900">{{ $order->number_of_pages }}</span>
                        </div>
                        <div class="flex justify-between py-2 border-b">
                            <strong class="font-medium text-gray-700">Number of Sources:</strong>
                            <span class="text-gray-900">{{ $order->number_of_sources }}</span>
                        </div>
                        <div class="flex justify-between py-2 border-b">
                            <strong class="font-medium text-gray-700">Topic:</strong>
                            <span class="text-gray-900">{{ $order->topic }}</span>
                        </div>
                        <div class="flex justify-between py-2 border-b">
                            <strong class="font-medium text-gray-700">Paper Description:</strong>
                            <span class="text-gray-900">{{ $order->paper_description }}</span>
                        </div>
                    </div>
                    
                    <!-- Contact Details -->
                    <div class="text-xl font-semibold mt-6 mb-4">Contact Details</div>
                    <div class="grid grid-cols-1 gap-4">
                        <div class="flex justify-between py-2 border-b">
                            <strong class="font-medium text-gray-700">Name:</strong>
                            <span class="text-gray-900">{{ $order->user->name }}</span>
                        </div>
                        <div class="flex justify-between py-2 border-b">
                            <strong class="font-medium text-gray-700">Email:</strong>
                            <span class="text-gray-900">{{ $order->user->email }}</span>
                        </div>
                        <div class="flex justify-between py-2 border-b">
                            <strong class="font-medium text-gray-700">Alternate Email:</strong>
                            <span class="text-gray-900">{{ $order->profile->email }}</span>
                        </div>
                        <div class="flex justify-between py-2 border-b">
                            <strong class="font-medium text-gray-700">Phone:</strong>
                            <span class="text-gray-900">{{ $order->profile->phone }}</span>
                        </div>
                    </div>
                    
                    <!-- Payment Details -->
                    <div class="text-xl font-semibold mt-6 mb-4">Payment Details</div>
                    <div class="grid grid-cols-1 gap-4">
                        <div class="flex justify-between py-2 border-b">
                            <strong class="font-medium text-gray-700">Actual Price:</strong>
                            <span class="text-gray-900">{{ $order->actual_price }}</span>
                        </div>
                        <div class="flex justify-between py-2 border-b">
                            <strong class="font-medium text-gray-700">Discounted Price:</strong>
                            <span class="text-gray-900">{{ $order->discounted_price }}</span>
                        </div>
                        <div class="flex justify-between py-2 border-b">
                            <strong class="font-medium text-gray-700">Final Price:</strong>
                            <span class="text-gray-900">{{ $order->final_price }}</span>
                        </div>
                    </div>

                    <!-- Files Details -->
                    <div class="text-xl font-semibold mt-6 mb-4">Files</div>
                    <div class="grid grid-cols-1 gap-4">
                        <div class="flex flex-col py-2 border-b">
                            <strong class="font-medium text-gray-700">Attachment:</strong>        
                            <div class="text-gray-900">
                                @php
                                $attachments = json_decode($order->attachment, true);
                                if (is_array($attachments)) {
                                    foreach ($attachments as $filePath) {
                                        if (public_path($filePath)) {
                                            $publicUrl = public_path($filePath);
                                            echo '<a href="' . $publicUrl . '" target="_blank" class="text-blue-500 hover:underline">' . htmlspecialchars($filePath) . '</a><br>';
                                        } else {
                                            echo '<span class="text-red-500">File not found: ' . htmlspecialchars($filePath) . '</span><br>';
                                        }
                                    }
                                } else {
                                    echo '<span class="text-gray-500">No attachments found.</span>';
                                }
                                @endphp
                            </div>
                        </div>
                    </div>
                    
                    <!-- System Details -->
                    <div class="text-xl font-semibold mt-6 mb-4">System Details</div>
                    <div class="grid grid-cols-1 gap-4">
                        <div class="flex justify-between py-2 border-b">
                            <strong class="font-medium text-gray-700">User IP:</strong>
                            <span class="text-gray-900">{{ $order->user_ip }}</span>
                        </div>
                        <div class="flex justify-between py-2 border-b">
                            <strong class="font-medium text-gray-700">User Agent:</strong>
                            <span class="text-gray-900">{{ $order->user_agent }}</span>
                        </div>

                        <div class="flex justify-between py-2 border-b">
                            <strong class="font-medium text-gray-700">Created At:</strong>
                            <span class="text-gray-900">{{ $order->created_at->format('F j, Y, g:i a') }}</span>
                        </div>
                        <div class="flex justify-between py-2 border-b">
                            <strong class="font-medium text-gray-700">Updated At:</strong>
                            <span class="text-gray-900">{{ $order->updated_at->format('F j, Y, g:i a') }}</span>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    </x-app-layout>
