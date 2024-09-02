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

                    <h2 class="text-2xl font-semibold mb-4">Edit Order</h2>

                    <!-- Order Update Form -->
                    <form action="{{ route('orders.update', $order->id) }}" method="POST">
                        @csrf
                        @method('PUT')

                        <!-- Academic Level -->
                        <div class="mb-4">
                            <label for="academic_level" class="block text-gray-700 font-medium mb-2">Academic Level</label>
                            <input type="text" name="academic_level" id="academic_level" class="form-input mt-1 block w-full @error('academic_level') border-red-500 @enderror" value="{{ old('academic_level', $order->academic_level) }}">
                            @error('academic_level')
                                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                            @enderror
                        </div>

                        <!-- Subject -->
                        <div class="mb-4">
                            <label for="subject" class="block text-gray-700 font-medium mb-2">Subject</label>
                            <input type="text" name="subject" id="subject" class="form-input mt-1 block w-full @error('subject') border-red-500 @enderror" value="{{ old('subject', $order->subject) }}">
                            @error('subject')
                                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                            @enderror
                        </div>

                        <!-- Writer -->
                        <div class="mb-4">
                            <label for="writer" class="block text-gray-700 font-medium mb-2">Writer</label>
                            <input type="text" name="writer" id="writer" class="form-input mt-1 block w-full @error('writer') border-red-500 @enderror" value="{{ old('writer', $order->writer) }}">
                            @error('writer')
                                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                            @enderror
                        </div>

                        <!-- Topic -->
                        <div class="mb-4">
                            <label for="topic" class="block text-gray-700 font-medium mb-2">Topic</label>
                            <input type="text" name="topic" id="topic" class="form-input mt-1 block w-full @error('topic') border-red-500 @enderror" value="{{ old('topic', $order->topic) }}">
                            @error('topic')
                                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                            @enderror
                        </div>

                        <!-- Type of Paper -->
                        <div class="mb-4">
                            <label for="type_of_paper" class="block text-gray-700 font-medium mb-2">Type of Paper</label>
                            <input type="text" name="type_of_paper" id="type_of_paper" class="form-input mt-1 block w-full @error('type_of_paper') border-red-500 @enderror" value="{{ old('type_of_paper', $order->type_of_paper) }}">
                            @error('type_of_paper')
                                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                            @enderror
                        </div>

                        <!-- Paper Description -->
                        <div class="mb-4">
                            <label for="paper_description" class="block text-gray-700 font-medium mb-2">Paper Description</label>
                            <textarea name="paper_description" id="paper_description" class="form-textarea mt-1 block w-full @error('paper_description') border-red-500 @enderror">{{ old('paper_description', $order->paper_description) }}</textarea>
                            @error('paper_description')
                                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                            @enderror
                        </div>

                        <!-- Number of Words -->
                        <div class="mb-4">
                            <label for="number_of_words" class="block text-gray-700 font-medium mb-2">Number of Words</label>
                            <input type="text" name="number_of_words" id="number_of_words" class="form-input mt-1 block w-full @error('number_of_words') border-red-500 @enderror" value="{{ old('number_of_words', $order->number_of_words) }}">
                            @error('number_of_words')
                                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                            @enderror
                        </div>

                        <!-- Number of Pages -->
                        <div class="mb-4">
                            <label for="number_of_pages" class="block text-gray-700 font-medium mb-2">Number of Pages</label>
                            <input type="text" name="number_of_pages" id="number_of_pages" class="form-input mt-1 block w-full @error('number_of_pages') border-red-500 @enderror" value="{{ old('number_of_pages', $order->number_of_pages) }}">
                            @error('number_of_pages')
                                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                            @enderror
                        </div>

                        <!-- Citation Style -->
                        <div class="mb-4">
                            <label for="citation_style" class="block text-gray-700 font-medium mb-2">Citation Style</label>
                            <input type="text" name="citation_style" id="number_of_pages" class="form-input mt-1 block w-full @error('citation_style') border-red-500 @enderror" value="{{ old('citation_style', $order->citation_style) }}">
                            @error('citation_style')
                                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                            @enderror
                        </div>

                        <!-- Number of Sources -->
                        <div class="mb-4">
                            <label for="number_of_sources" class="block text-gray-700 font-medium mb-2">Number of Sources</label>
                            <input type="text" name="number_of_sources" id="number_of_pages" class="form-input mt-1 block w-full @error('number_of_sources') border-red-500 @enderror" value="{{ old('number_of_sources', $order->number_of_sources) }}">
                            @error('number_of_sources')
                                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                            @enderror
                        </div>

                        <!-- Delivery Time -->
                        <div class="mb-4">
                            <label for="delivery_time" class="block text-gray-700 font-medium mb-2">Delivery Time</label>
                            <input type="text" name="delivery_time" id="delivery_time" class="form-input mt-1 block w-full @error('delivery_time') border-red-500 @enderror" value="{{ old('delivery_time', $order->delivery_time) }}">
                            @error('delivery_time')
                                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                            @enderror
                        </div>

                        <!-- Order Status -->
                        <div class="mb-4">
                            <label for="order_status" class="block text-gray-700 font-medium mb-2">Order Status</label>
                            <select name="order_status" id="order_status" class="form-select mt-1 block w-full @error('order_status') border-red-500 @enderror">
                                <option value="pending" {{ old('order_status', $order->order_status) == 'pending' ? 'selected' : '' }}>Pending</option>
                                <option value="completed" {{ old('order_status', $order->order_status) == 'completed' ? 'selected' : '' }}>Completed</option>
                                <option value="in-progress" {{ old('order_status', $order->order_status) == 'in-progress' ? 'selected' : '' }}>In Progress</option>
                                <option value="refund" {{ old('order_status', $order->order_status) == 'refund' ? 'selected' : '' }}>Refund</option>
                                <option value="cancelled" {{ old('order_status', $order->order_status) == 'cancelled' ? 'selected' : '' }}>Cancelled</option>
                            </select>
                            @error('order_status')
                                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                            @enderror
                        </div>

                        <!-- Payment Status -->
                        <div class="mb-4">
                            <label for="payment_status" class="block text-gray-700 font-medium mb-2">Payment Status</label>
                            <select name="payment_status" id="payment_status" class="form-select mt-1 block w-full @error('payment_status') border-red-500 @enderror">
                                <option value="paid" {{ old('payment_status', $order->payment_status) == 'paid' ? 'selected' : '' }}>Paid</option>
                                <option value="unpaid" {{ old('payment_status', $order->payment_status) == 'unpaid' ? 'selected' : '' }}>Unpaid</option>
                            </select>
                            @error('payment_status')
                                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                            @enderror
                        </div>

                        <!-- Actual Price -->
                        <div class="mb-4">
                            <label for="actual_price" class="block text-gray-700 font-medium mb-2">Actual Price</label>
                            <input type="text" name="actual_price" id="actual_price" class="form-input mt-1 block w-full @error('actual_price') border-red-500 @enderror" value="{{ old('actual_price', $order->actual_price) }}">
                            @error('actual_price')
                                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                            @enderror
                        </div>

                        <!-- Discounted Price -->
                        <div class="mb-4">
                            <label for="discounted_price" class="block text-gray-700 font-medium mb-2">Discounted Price</label>
                            <input type="text" name="discounted_price" id="discounted_price" class="form-input mt-1 block w-full @error('discounted_price') border-red-500 @enderror" value="{{ old('discounted_price', $order->discounted_price) }}">
                            @error('discounted_price')
                                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                            @enderror
                        </div>

                        <!-- Final Price -->
                        <div class="mb-4">
                            <label for="final_price" class="block text-gray-700 font-medium mb-2">Final Price</label>
                            <input type="text" name="final_price" id="final_price" class="form-input mt-1 block w-full @error('final_price') border-red-500 @enderror" value="{{ old('final_price', $order->final_price) }}">
                            @error('final_price')
                                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                            @enderror
                        </div>
                        <!-- Submit Button -->
                        <div class="mb-4">
                            <button type="submit" class="inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md shadow-sm text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                                Update Order
                            </button>
                        </div>
                    </form>
            
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
