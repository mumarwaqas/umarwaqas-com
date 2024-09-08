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
                        <a href="{{ route('writers.add') }}" class="inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md shadow-sm text-white bg-green-600 hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-500">
                            Add
                        </a>
                        <form action="{{ route('writers.destroy', $writer->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this writer?');">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md shadow-sm text-white bg-red-600 hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500">
                                Delete
                            </button>
                        </form>
                    </div>

                    <h2 class="text-2xl font-semibold mb-4">Edit Writer</h2>

                    <!-- Writer Update Form -->
                    <form action="{{ route('writers.update', $writer->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <div class="mb-4 border border-gray-300 p-4 rounded">
                        <!-- Slug -->
                            <label for="slug" class="block text-gray-700 font-medium mb-2">Slug</label>
                            <input type="text" name="slug" id="slug" class="form-input mt-1 block w-full @error('slug') border-red-500 @enderror" value="{{ old('slug', $writer->slug) }}">
                            @error('slug')
                                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                            @enderror
                            <p class="text-gray-600 text-sm mt-1">The unique identifier for the writer. Must be unique.</p>
                        </div>

                        <!-- Writer No -->
                        <div class="mb-4 border border-gray-300 p-4 rounded">
                            <label for="writer_no" class="block text-gray-700 font-medium mb-2">Writer No</label>
                            <input type="text" name="writer_no" id="writer_no" class="form-input mt-1 block w-full @error('writer_no') border-red-500 @enderror" value="{{ old('writer_no', $writer->writer_no) }}">
                            @error('writer_no')
                                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                            @enderror
                            <p class="text-gray-600 text-sm mt-1">A unique number assigned to the writer.</p>
                        </div>

                        <!-- Name -->
                        <div class="mb-4 border border-gray-300 p-4 rounded">
                            <label for="name" class="block text-gray-700 font-medium mb-2">Name</label>
                            <input type="text" name="name" id="name" class="form-input mt-1 block w-full @error('name') border-red-500 @enderror" value="{{ old('name', $writer->name) }}">
                            @error('name')
                                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                            @enderror
                            <p class="text-gray-600 text-sm mt-1">The full name of the writer.</p>
                        </div>

                        <!-- About -->
                        <div class="mb-4 border border-gray-300 p-4 rounded">
                            <label for="about" class="block text-gray-700 font-medium mb-2">About</label>
                            <textarea name="about" id="about" class="form-textarea mt-1 block w-full @error('about') border-red-500 @enderror">{{ old('about', $writer->about) }}</textarea>
                            @error('about')
                                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                            @enderror
                            <p class="text-gray-600 text-sm mt-1">A brief description about the writer.</p>
                        </div>

                        <!-- Education -->
                        <div class="mb-4 border border-gray-300 p-4 rounded">
                            <label for="education" class="block text-gray-700 font-medium mb-2">Education</label>
                            <select name="education" id="education" class="form-select mt-1 block w-full @error('education') border-red-500 @enderror">
                                <option value="">Select Education Level</option>
                                <option value="A Level" {{ old('education', $writer->education) == 'A Level' ? 'selected' : '' }}>A Level</option>
                                <option value="O Level" {{ old('education', $writer->education) == 'O Level' ? 'selected' : '' }}>O Level</option>
                                <option value="Undergraduate" {{ old('education', $writer->education) == 'Undergraduate' ? 'selected' : '' }}>Undergraduate</option>
                                <option value="Graduate" {{ old('education', $writer->education) == 'Graduate' ? 'selected' : '' }}>Graduate</option>
                                <option value="Master" {{ old('education', $writer->education) == 'Master' ? 'selected' : '' }}>Master</option>
                                <option value="M.Phil" {{ old('education', $writer->education) == 'M.Phil' ? 'selected' : '' }}>M.Phil</option>
                                <option value="PhD" {{ old('education', $writer->education) == 'PhD' ? 'selected' : '' }}>PhD</option>
                            </select>
                            @error('education')
                                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                            @enderror
                            <p class="text-gray-600 text-sm mt-1">The highest level of education achieved by the writer.</p>
                        </div>

                        <!-- Experience -->
                        <div class="mb-4 border border-gray-300 p-4 rounded">
                            <label for="experience" class="block text-gray-700 font-medium mb-2">Experience</label>
                            <input type="text" name="experience" id="experience" class="form-input mt-1 block w-full @error('experience') border-red-500 @enderror" value="{{ old('experience', $writer->experience) }}">
                            @error('experience')
                                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                            @enderror
                            <p class="text-gray-600 text-sm mt-1">Years of experience the writer has in their field.</p>
                        </div>

                        <!-- Rating -->
                        <div class="mb-4 border border-gray-300 p-4 rounded">
                            <label for="rating" class="block text-gray-700 font-medium mb-2">Rating</label>
                            <input type="text" name="rating" id="rating" class="form-input mt-1 block w-full @error('rating') border-red-500 @enderror" value="{{ old('rating', $writer->rating) }}">
                            @error('rating')
                                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                            @enderror
                            <p class="text-gray-600 text-sm mt-1">The rating given to the writer based on their performance.</p>
                        </div>

                        <!-- Reviews -->
                        <div class="mb-4 border border-gray-300 p-4 rounded">
                            <label for="reviews" class="block text-gray-700 font-medium mb-2">Reviews</label>
                            <input type="text" name="reviews" id="reviews" class="form-input mt-1 block w-full @error('reviews') border-red-500 @enderror" value="{{ old('reviews', $writer->reviews) }}">
                            @error('reviews')
                                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                            @enderror
                            <p class="text-gray-600 text-sm mt-1">Total number of reviews the writer has received.</p>
                        </div>

                        <!-- Orders -->
                        <div class="mb-4 border border-gray-300 p-4 rounded">
                            <label for="orders" class="block text-gray-700 font-medium mb-2">Orders</label>
                            <input type="text" name="orders" id="orders" class="form-input mt-1 block w-full @error('orders') border-red-500 @enderror" value="{{ old('orders', $writer->orders) }}">
                            @error('orders')
                                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                            @enderror
                            <p class="text-gray-600 text-sm mt-1">The total number of orders completed by the writer.</p>
                        </div>

                        <!-- Success Rate -->
                        <div class="mb-4 border border-gray-300 p-4 rounded">
                            <label for="success_rate" class="block text-gray-700 font-medium mb-2">Success Rate</label>
                            <input type="text" name="success_rate" id="success_rate" class="form-input mt-1 block w-full @error('success_rate') border-red-500 @enderror" value="{{ old('success_rate', $writer->success_rate) }}">
                            @error('success_rate')
                                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                            @enderror
                            <p class="text-gray-600 text-sm mt-1">The percentage of successful orders completed by the writer.</p>
                        </div>

                        <!-- Competences -->
                        <div class="mb-4 border border-gray-300 p-4 rounded">
                            <label for="competences" class="block text-gray-700 font-medium mb-2">Competences</label>
                            <input type="text" name="competences" id="competences" class="form-input mt-1 block w-full @error('competences') border-red-500 @enderror" value="{{ old('competences', $writer->competences) }}">
                            @error('competences')
                                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                            @enderror
                            <p class="text-gray-600 text-sm mt-1">Areas of expertise and skills of the writer.</p>
                        </div>

                        <!-- Online Status -->
                        <div class="mb-4 border border-gray-300 p-4 rounded">
                            <label for="online" class="block text-gray-700 font-medium mb-2">Online Status</label>
                            <input type="checkbox" name="online" id="online" class="form-checkbox mt-1" value="1" {{ $writer->online ? 'checked' : '' }}>
                            @error('online')
                                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                            @enderror
                            <p class="text-gray-600 text-sm mt-1">Check if the writer is currently online.</p>
                        </div>

                        <!-- Image -->
                        <div class="mb-4 border border-gray-300 p-4 rounded">
                            <label for="image" class="block text-gray-700 font-medium mb-2">Image URL</label>
                            <input type="file" name="image" id="image" class="form-input mt-1 block w-full @error('image') border-red-500 @enderror" value="{{ old('image', $writer->image) }}">
                            @error('image')
                                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                            @enderror
                            <p class="text-gray-600 text-sm mt-1">Upload an image to represent the writer. (URL or file)</p>
                        </div>

                        <!-- Submit Button -->
                        <div class="mb-4">
                            <button type="submit" class="inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md shadow-sm text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                                Update Writer
                            </button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
