<form action="{{ isset($faq) ? route('faqs.update', $faq->id) : route('faqs.store') }}" enctype="multipart/form-data" method="POST">
    @csrf
    @if(isset($faq))
        @method('PUT') <!-- Include this line for updates -->
    @endif

    <!-- Example: assuming user ID is from authenticated user -->
    <input type="hidden" name="user_id" value="{{ auth()->id() }}">

    <!-- Faq Information -->
    <div class="mb-4 border border-gray-300 p-4 rounded">
        <h2 class="text-lg font-semibold mb-4">Faq Information</h2>

        <!-- Question -->
        <div class="mb-4">
            <label for="question" class="block text-gray-700 font-medium mb-2">Question</label>
            <input type="text" name="question" id="question" class="form-input mt-1 block w-full @error('question') border-red-500 @enderror" value="{{ old('question', $faq->question ?? '') }}">
            <p class="text-gray-600 text-xs mt-1">Enter the question.</p>
            @error('question')
                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
            @enderror
        </div>

        <!-- Answer -->
        <div class="mb-4">
            <label for="answer" class="block text-gray-700 font-medium mb-2">Answer</label>
            <input type="text" name="answer" id="answer" class="form-input mt-1 block w-full @error('answer') border-red-500 @enderror" value="{{ old('answer', $faq->answer ?? '') }}">
            <p class="text-gray-600 text-xs mt-1">Enter the answer.</p>
            @error('answer')
                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
            @enderror
        </div>

    </div>

    <!-- Submit Button -->
    <div class="mb-4">
        <button type="submit" class="inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md shadow-sm text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
            {{ isset($faq) ? 'Update Faqs' : 'Create Faqs' }}
        </button>
    </div>
</form>
