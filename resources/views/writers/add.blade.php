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
                    </div>

                    <h2 class="text-2xl font-semibold mb-4">Add Writer</h2>

                    <!-- Writer Create Form -->
                    <form action="{{ route('writers.store') }}" enctype="multipart/form-data" method="POST">
                        @csrf

                        <!-- Slug -->
                        <div class="mb-4">
                            <label for="slug" class="block text-gray-700 font-medium mb-2">Slug</label>
                            <input type="text" name="slug" id="slug" class="form-input mt-1 block w-full @error('slug') border-red-500 @enderror" value="{{ old('slug') }}">
                            @error('slug')
                                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                            @enderror
                        </div>

                        <!-- Writer No -->
                        <div class="mb-4">
                            <label for="writer_no" class="block text-gray-700 font-medium mb-2">Writer No</label>
                            <input type="text" name="writer_no" id="writer_no" class="form-input mt-1 block w-full @error('writer_no') border-red-500 @enderror" value="{{ old('writer_no') }}">
                            @error('writer_no')
                                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                            @enderror
                        </div>

                        <!-- Name -->
                        <div class="mb-4">
                            <label for="name" class="block text-gray-700 font-medium mb-2">Name</label>
                            <input type="text" name="name" id="name" class="form-input mt-1 block w-full @error('name') border-red-500 @enderror" value="{{ old('name') }}">
                            @error('name')
                                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                            @enderror
                        </div>

                        <!-- About -->
                        <div class="mb-4">
                            <label for="about" class="block text-gray-700 font-medium mb-2">About</label>
                            <textarea name="about" id="about" class="form-textarea mt-1 block w-full @error('about') border-red-500 @enderror">{{ old('about') }}</textarea>
                            @error('about')
                                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                            @enderror
                        </div>

                        <!-- Education -->
                        <div class="mb-4">
                            <label for="education" class="block text-gray-700 font-medium mb-2">Education</label>
                            <select name="education" id="education" class="form-select mt-1 block w-full @error('education') border-red-500 @enderror">
                                <option value="">Select Education Level</option>
                                <option value="A Level" {{ old('education') == 'A Level' ? 'selected' : '' }}>A Level</option>
                                <option value="O Level" {{ old('education') == 'O Level' ? 'selected' : '' }}>O Level</option>
                                <option value="Undergraduate" {{ old('education') == 'Undergraduate' ? 'selected' : '' }}>Undergraduate</option>
                                <option value="Graduate" {{ old('education') == 'Graduate' ? 'selected' : '' }}>Graduate</option>
                                <option value="Master" {{ old('education') == 'Master' ? 'selected' : '' }}>Master</option>
                                <option value="M.Phil" {{ old('education') == 'M.Phil' ? 'selected' : '' }}>M.Phil</option>
                                <option value="PhD" {{ old('education') == 'PhD' ? 'selected' : '' }}>PhD</option>
                            </select>
                            @error('education')
                                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                            @enderror
                        </div>

                        <!-- Experience -->
                        <div class="mb-4">
                            <label for="experience" class="block text-gray-700 font-medium mb-2">Experience</label>
                            <input type="text" name="experience" id="experience" class="form-input mt-1 block w-full @error('experience') border-red-500 @enderror" value="{{ old('experience') }}">
                            @error('experience')
                                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                            @enderror
                        </div>

                        <!-- Rating -->
                        <div class="mb-4">
                            <label for="rating" class="block text-gray-700 font-medium mb-2">Rating</label>
                            <input type="text" name="rating" id="rating" class="form-input mt-1 block w-full @error('rating') border-red-500 @enderror" value="{{ old('rating') }}">
                            @error('rating')
                                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                            @enderror
                        </div>

                        <!-- Reviews -->
                        <div class="mb-4">
                            <label for="reviews" class="block text-gray-700 font-medium mb-2">Reviews</label>
                            <input type="text" name="reviews" id="reviews" class="form-input mt-1 block w-full @error('reviews') border-red-500 @enderror" value="{{ old('reviews') }}">
                            @error('reviews')
                                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                            @enderror
                        </div>

                        <!-- Orders -->
                        <div class="mb-4">
                            <label for="orders" class="block text-gray-700 font-medium mb-2">Orders</label>
                            <input type="text" name="orders" id="orders" class="form-input mt-1 block w-full @error('orders') border-red-500 @enderror" value="{{ old('orders') }}">
                            @error('orders')
                                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                            @enderror
                        </div>

                        <!-- Success Rate -->
                        <div class="mb-4">
                            <label for="success_rate" class="block text-gray-700 font-medium mb-2">Success Rate</label>
                            <input type="text" name="success_rate" id="success_rate" class="form-input mt-1 block w-full @error('success_rate') border-red-500 @enderror" value="{{ old('success_rate') }}">
                            @error('success_rate')
                                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                            @enderror
                        </div>

                        <!-- Competences -->
                        <div class="mb-4">
                            <label for="competences" class="block text-gray-700 font-medium mb-2">Competences</label>
                            <input type="text" name="competences" id="competences" class="form-input mt-1 block w-full @error('competences') border-red-500 @enderror" value="{{ old('competences') }}">
                            @error('competences')
                                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                            @enderror
                        </div>

                        <!-- Online Status -->
                        <div class="mb-4">
                            <label for="online" class="block text-gray-700 font-medium mb-2">Online Status</label>
                            <input type="checkbox" name="online" id="online" class="form-checkbox mt-1" value="1" {{ old('online') ? 'checked' : '' }}>
                            @error('online')
                                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                            @enderror
                        </div>                        

                        <!-- Image -->
                        <div class="mb-4">
                            <label for="image" class="block text-gray-700 font-medium mb-2">Image URL</label>
                            <input type="file" name="image" id="image" class="form-input mt-1 block w-full @error('image') border-red-500 @enderror" value="{{ old('image') }}">
                            @error('image')
                                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                            @enderror
                        </div>

                        <!-- Submit Button -->
                        <div class="mb-4">
                            <button type="submit" class="inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md shadow-sm text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                                Create Writer
                            </button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
