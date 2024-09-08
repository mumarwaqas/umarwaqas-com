<form action="{{ isset($customer) ? route('customers.update', $customer->id) : route('customers.store') }}" enctype="multipart/form-data" method="POST">
    @csrf
    @if(isset($customer))
        @method('PUT') <!-- Include this line for updates -->
    @endif

    <!-- Example: assuming user ID is from authenticated user -->
    <input type="hidden" name="user_id" value="{{ auth()->id() }}">

    <!-- Customer Information -->
    <div class="mb-4 border border-gray-300 p-4 rounded">
        <h2 class="text-lg font-semibold mb-4">Customer Information</h2>

        <!-- Customer Number -->
        <div class="mb-4">
            <label for="customer_no" class="block text-gray-700 font-medium mb-2">Customer Number</label>
            <input type="text" name="customer_no" id="customer_no" class="form-input mt-1 block w-full @error('customer_no') border-red-500 @enderror" value="{{ old('customer_no', $customer->customer_no ?? '') }}">
            <p class="text-gray-600 text-xs mt-1">Enter a unique customer number. It should match the format 'DM-XXXXXX', where X is a digit.</p>
            @error('customer_no')
                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
            @enderror
        </div>

        <!-- Name -->
        <div class="mb-4">
            <label for="name" class="block text-gray-700 font-medium mb-2">Name</label>
            <input type="text" name="name" id="name" class="form-input mt-1 block w-full @error('name') border-red-500 @enderror" value="{{ old('name', $customer->name ?? '') }}">
            <p class="text-gray-600 text-xs mt-1">Enter the full name of the customer.</p>
            @error('name')
                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
            @enderror
        </div>

        <!-- Review -->
        <div class="mb-4">
            <label for="review" class="block text-gray-700 font-medium mb-2">Review</label>
            <input type="text" name="review" id="review" class="form-input mt-1 block w-full @error('review') border-red-500 @enderror" value="{{ old('review', $customer->review ?? '') }}">
            <p class="text-gray-600 text-xs mt-1">Provide a brief review or feedback from the customer. Maximum length is 500 characters.</p>
            @error('review')
                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
            @enderror
        </div>

        <!-- Text -->
        <div class="mb-4">
            <label for="text" class="block text-gray-700 font-medium mb-2">Text</label>
            <textarea name="text" id="text" class="form-input mt-1 block w-full @error('text') border-red-500 @enderror">{{ old('text', $customer->text ?? '') }}</textarea>
            <p class="text-gray-600 text-xs mt-1">Enter any additional text or comments related to the customer. Maximum length is 250 characters.</p>
            @error('text')
                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
            @enderror
        </div>

        <!-- About -->
        <div class="mb-4">
            <label for="about" class="block text-gray-700 font-medium mb-2">About</label>
            <textarea name="about" id="about" class="form-input mt-1 block w-full @error('about') border-red-500 @enderror">{{ old('about', $customer->about ?? '') }}</textarea>
            <p class="text-gray-600 text-xs mt-1">Provide details about the customer's background or other relevant information. Maximum length is 500 characters.</p>
            @error('about')
                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
            @enderror
        </div>

        <!-- Rating -->
        <div class="mb-4">
            <label for="rating" class="block text-gray-700 font-medium mb-2">Rating</label>
            <input type="number" name="rating" id="rating" class="form-input mt-1 block w-full @error('rating') border-red-500 @enderror" min="1" max="5" value="{{ old('rating', $customer->rating ?? '') }}">
            <p class="text-gray-600 text-xs mt-1">Rate the customer on a scale from 1 to 5, with 5 being the highest. This field is required.</p>
            @error('rating')
                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
            @enderror
        </div>

        <!-- Number of Reviews -->
        <div class="mb-4">
            <label for="no_of_review" class="block text-gray-700 font-medium mb-2">Number of Reviews</label>
            <input type="number" name="no_of_review" id="no_of_review" class="form-input mt-1 block w-full @error('no_of_review') border-red-500 @enderror" value="{{ old('no_of_review', $customer->no_of_review ?? '') }}">
            <p class="text-gray-600 text-xs mt-1">Enter the total number of reviews the customer has provided. This field is required.</p>
            @error('no_of_review')
                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
            @enderror
        </div>

        <!-- Date -->
        <div class="mb-4">
            <label for="date" class="block text-gray-700 font-medium mb-2">Date</label>
            <input type="date" name="date" id="date" class="form-input mt-1 block w-full @error('date') border-red-500 @enderror" value="{{ old('date', $customer->date ?? '') }}">
            <p class="text-gray-600 text-xs mt-1">Select the date related to the customer entry or review. This field is required.</p>
            @error('date')
                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
            @enderror
        </div>

        <!-- Image -->
        <div class="mb-4">
            <label for="image" class="block text-gray-700 font-medium mb-2">Image</label>
            <input type="file" name="image" id="image" class="form-input mt-1 block w-full @error('image') border-red-500 @enderror">
            <p class="text-gray-600 text-xs mt-1">Upload an image related to the customer. This could be a profile picture or other relevant image. Maximum file size is 2MB.</p>
            @error('image')
                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
            @enderror
        </div>

    </div>

    <!-- Submit Button -->
    <div class="mb-4">
        <button type="submit" class="inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md shadow-sm text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
            {{ isset($customer) ? 'Update Customer' : 'Create Customer' }}
        </button>
    </div>
</form>
