<form action="{{ isset($writer) ? route('writers.update', $writer->id) : route('writers.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    @if(isset($writer))
        @method('PUT')
    @endif

    <input type="hidden" name="user_id" value="{{ auth()->id() }}">

    <div class="mb-4 border border-gray-300 p-4 rounded">

        <!-- Name -->
        <div class="mb-4">
            <label for="name" class="block text-gray-700 font-medium mb-2">Name</label>
            <input type="text" name="name" id="name" class="form-input mt-1 block w-full @error('name') border-red-500 @enderror" value="{{ old('name', $writer->name ?? '') }}">
            @error('name')
                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
            @enderror
            <p class="text-gray-600 text-sm mt-1">The full name of the writer.</p>
        </div>

        <!-- Slug -->
        <div class="mb-4">
            <label for="slug" class="block text-gray-700 font-medium mb-2">Slug</label>
            <input type="text" name="slug" id="slug" class="form-input mt-1 block w-full @error('slug') border-red-500 @enderror" value="{{ old('slug', $writer->slug ?? '') }}">
            @error('slug')
                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
            @enderror
            <p class="text-gray-600 text-sm mt-1">The unique identifier for the writer. Must be unique.</p>
        </div>

        <!-- Writer No -->
        <div class="mb-4">
            <label for="writer_no" class="block text-gray-700 font-medium mb-2">Writer No</label>
            <input type="text" name="writer_no" id="writer_no" class="form-input mt-1 block w-full @error('writer_no') border-red-500 @enderror" value="{{ old('writer_no', $writer->writer_no ?? '') }}">
            @error('writer_no')
                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
            @enderror
            <p class="text-gray-600 text-sm mt-1">A unique number assigned to the writer.</p>
        </div>

        <!-- About -->
        <div class="mb-4">
            <label for="about" class="block text-gray-700 font-medium mb-2">About</label>
            <textarea name="about" id="about" class="form-textarea mt-1 block w-full @error('about') border-red-500 @enderror">{{ old('about', $writer->about ?? '') }}</textarea>
            @error('about')
                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
            @enderror
            <p class="text-gray-600 text-sm mt-1">A brief description about the writer.</p>
        </div>

        <!-- Education -->
        <div class="mb-4">
            <label for="education" class="block text-gray-700 font-medium mb-2">Education</label>
            <select name="education" id="education" class="form-select mt-1 block w-full @error('education') border-red-500 @enderror">
                <option value="">Select Education Level</option>
                @foreach(['A Level', 'O Level', 'Undergraduate', 'Graduate', 'Master', 'M.Phil', 'PhD'] as $level)
                    <option value="{{ $level }}" {{ old('education', $writer->education ?? '') == $level ? 'selected' : '' }}>{{ $level }}</option>
                @endforeach
            </select>
            @error('education')
                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
            @enderror
            <p class="text-gray-600 text-sm mt-1">The highest level of education achieved by the writer.</p>
        </div>

        <!-- Profession -->
        <div class="mb-4">
            <label for="profession" class="block text-gray-700 font-medium mb-2">Profession</label>
            <input type="text" name="profession" id="profession" class="form-input mt-1 block w-full @error('profession') border-red-500 @enderror" value="{{ old('profession', $writer->profession ?? '') }}">
            @error('profession')
                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
            @enderror
            <p class="text-gray-600 text-sm mt-1">The writer's profession or field of expertise.</p>
        </div>

        <!-- Status -->
        <div class="mb-4">
            <label for="status" class="block text-gray-700 font-medium mb-2">Status</label>
            <input type="text" name="status" id="status" class="form-input mt-1 block w-full @error('status') border-red-500 @enderror" value="{{ old('status', $writer->status ?? '') }}">
            @error('status')
                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
            @enderror
            <p class="text-gray-600 text-sm mt-1">Current status of the writer (e.g., Active, Inactive).</p>
        </div>

        <!-- Experience -->
        <div class="mb-4">
            <label for="experience" class="block text-gray-700 font-medium mb-2">Experience</label>
            <input type="text" name="experience" id="experience" class="form-input mt-1 block w-full @error('experience') border-red-500 @enderror" value="{{ old('experience', $writer->experience ?? '') }}">
            @error('experience')
                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
            @enderror
            <p class="text-gray-600 text-sm mt-1">Years of experience the writer has in their field.</p>
        </div>

        <!-- Rating -->
        <div class="mb-4">
            <label for="rating" class="block text-gray-700 font-medium mb-2">Rating</label>
            <input type="text" name="rating" id="rating" class="form-input mt-1 block w-full @error('rating') border-red-500 @enderror" value="{{ old('rating', $writer->rating ?? '') }}">
            @error('rating')
                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
            @enderror
            <p class="text-gray-600 text-sm mt-1">The rating given to the writer based on their performance.</p>
        </div>

        <!-- Review -->
        <div class="mb-4">
            <label for="review" class="block text-gray-700 font-medium mb-2">Review</label>
            <input type="text" name="review" id="review" class="form-input mt-1 block w-full @error('review') border-red-500 @enderror" value="{{ old('review', $writer->review ?? '') }}">
            @error('review')
                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
            @enderror
            <p class="text-gray-600 text-sm mt-1">Total number of review the writer has received.</p>
        </div>

        <!-- Orders -->
        <div class="mb-4">
            <label for="orders" class="block text-gray-700 font-medium mb-2">Orders</label>
            <input type="text" name="orders" id="orders" class="form-input mt-1 block w-full @error('orders') border-red-500 @enderror" value="{{ old('orders', $writer->orders ?? '') }}">
            @error('orders')
                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
            @enderror
            <p class="text-gray-600 text-sm mt-1">The total number of orders completed by the writer.</p>
        </div>

        <!-- Success Rate -->
        <div class="mb-4">
            <label for="success_rate" class="block text-gray-700 font-medium mb-2">Success Rate</label>
            <input type="text" name="success_rate" id="success_rate" class="form-input mt-1 block w-full @error('success_rate') border-red-500 @enderror" value="{{ old('success_rate', $writer->success_rate ?? '') }}">
            @error('success_rate')
                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
            @enderror
            <p class="text-gray-600 text-sm mt-1">The percentage of successful orders completed by the writer.</p>
        </div>

        <!-- On Time Rate -->
        <div class="mb-4">
            <label for="on_time_rate" class="block text-gray-700 font-medium mb-2">On Time Rate</label>
            <input type="text" name="on_time_rate" id="on_time_rate" class="form-input mt-1 block w-full @error('on_time_rate') border-red-500 @enderror" value="{{ old('on_time_rate', $writer->on_time_rate ?? '') }}">
            @error('on_time_rate')
                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
            @enderror
            <p class="text-gray-600 text-sm mt-1">Percentage of orders delivered on time.</p>
        </div>

        <!-- Competences -->
        <div class="mb-4">
            <label for="competences" class="block text-gray-700 font-medium mb-2">Competences</label>
            <input type="text" name="competences" id="competences" class="form-input mt-1 block w-full @error('competences') border-red-500 @enderror" value="{{ old('competences', $writer->competences ?? '') }}">
            @error('competences')
                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
            @enderror
            <p class="text-gray-600 text-sm mt-1">Areas of expertise and skills of the writer.</p>
        </div>

        <!-- Work -->
        <div class="mb-4">
            <label for="works" class="block text-gray-700 font-medium mb-2">Works</label>
            <input type="text" name="works" id="works" class="form-input mt-1 block w-full @error('works') border-red-500 @enderror" value="{{ old('works', $writer->works ?? '') }}">
            @error('works')
                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
            @enderror
            <p class="text-gray-600 text-sm mt-1">Works of the writer.</p>
        </div>

        <!-- Online Status --> 
        <div class="mb-4">
            <label for="online" class="block text-gray-700 font-medium mb-2">Online Status</label>
            <input type="checkbox" name="online" id="online" class="form-checkbox mt-1" value="1" {{ (isset($writer) && $writer->online) ? 'checked' : '' }}>
            @error('online')
                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
            @enderror
            <p class="text-gray-600 text-sm mt-1">Check if the writer is currently online.</p>
        </div>

        <!-- Delivery -->
        <div class="mb-4">
            <label for="delivery" class="block text-gray-700 font-medium mb-2">Delivery</label>
            <input type="text" name="delivery" id="delivery" class="form-input mt-1 block w-full @error('delivery') border-red-500 @enderror" value="{{ old('delivery', $writer->delivery ?? '') }}">
            @error('delivery')
                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
            @enderror
            <p class="text-gray-600 text-sm mt-1">Wck if the writer offers delivery services.</p>
        </div>

        <!-- Subjects -->
        <div class="mb-4">
            <label for="subjects" class="block text-gray-700 font-medium mb-2">Subjects</label>
            <input type="text" name="subjects" id="subjects" class="form-input mt-1 block w-full @error('subjects') border-red-500 @enderror" value="{{ old('subjects', $writer->subjects ?? '') }}">
            @error('subjects')
                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
            @enderror
            <p class="text-gray-600 text-sm mt-1">List of subjects the writer is proficient in.</p>
        </div>

        <!-- Reviews -->
        <div class="mb-4">
            <label for="reviews" class="block text-gray-700 font-medium mb-2">Reviews</label>
            <input type="text" name="reviews" id="reviews" class="form-input mt-1 block w-full @error('reviews') border-red-500 @enderror" value="{{ old('reviews', $writer->reviews ?? '') }}">
            @error('reviews')
                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
            @enderror
            <p class="text-gray-600 text-sm mt-1">Reviews the writer has received.</p>
        </div>

        <!-- Image -->
        <div class="mb-4">
            <label for="image" class="block text-gray-700 font-medium mb-2">Uploaded Image</label>
            @if(isset($writer->image))
            <div class="mt-4" id="imagePreview">
                <img src="{{ asset($writer->image) }}" id="preview" alt="Uploaded Image" class="w-32 h-32 object-cover rounded-lg">
            </div>
            @endif
            
            <input type="file" name="image" id="image" class="form-input mt-1 block w-full @error('image') border-red-500 @enderror" accept="image/*" onchange="previewImage(event)">
            @error('image')
                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
            @enderror
            <p class="text-gray-600 text-sm mt-1">Upload an image to represent the writer. (URL or file)</p>
        </div>

        <!-- Submit Button -->
        <div class="mb-4">
            <button type="submit" class="inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md shadow-sm text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                {{ isset($writer) ? 'Update Writer' : 'Add Writer' }}
            </button>
        </div>

    </div>
</form>



<!-- Popup Modal -->
<div id="popup" class="fixed inset-0 bg-gray-800 bg-opacity-75 hidden">
    <div class="bg-white rounded-lg shadow-lg max-w-xxl w-1/2 p-6 mx-auto mt-20">
        <h2 class="text-xl font-semibold mb-4">CSV Editor</h2>        

        <!-- File input for uploading CSV -->
        <input type="file" id="csv-file" class="mb-4" accept=".csv">
        <button type="button" id="load-csv-btn" class="bg-blue-500 text-white px-4 py-2 rounded">Load CSV</button>

        <div class="flex justify-end mt-4">
            <button type="button" id="save-json-btn" class="bg-green-500 text-white px-4 py-2 rounded mr-2">Save as JSON</button>
            <button type="button" onclick="addRow()" class="bg-green-500 text-white px-4 py-2 rounded mr-2">Add Row</button>
            <button type="button" id="close-modal-btn" class="bg-gray-500 text-white px-4 py-2 rounded">Close</button>
        </div>

        <table class="min-w-full border-collapse border border-gray-300 mt-4" id="csv-table">
            <thead>
                <tr>
                    <th class="border border-gray-300 p-2">Name</th>
                    <th class="border border-gray-300 p-2">Customer No</th>
                    <th class="border border-gray-300 p-2">Image</th>
                    <th class="border border-gray-300 p-2">Reviews</th>
                    <th class="border border-gray-300 p-2">Type</th>
                    <th class="border border-gray-300 p-2">Date</th>
                    <th class="border border-gray-300 p-2">Action</th>
                </tr>
            </thead>
            <tbody id="csv-body">
                <!-- CSV Rows will be inserted here -->
            </tbody>
        </table>
    </div>
</div>

<script>
    function previewImage(event) {
        var input = event.target;
        var reader = new FileReader();

        reader.onload = function() {
            var preview = document.getElementById('preview');
            preview.src = reader.result;
            preview.classList.remove('hidden'); // Make the image visible
        };

        if (input.files && input.files[0]) {
            reader.readAsDataURL(input.files[0]);
        }
    }
</script>

<script>
    // Function to show the modal when the Reviews field is clicked
    document.getElementById('reviews').addEventListener('click', function() {
        showModal();
    });

    // Function to show the modal
    function showModal() {
        document.getElementById('popup').classList.remove('hidden');
    }

    // Function to hide the modal
    document.getElementById('close-modal-btn').addEventListener('click', function() {
        document.getElementById('popup').classList.add('hidden');
    });

    // Function to load the CSV file and display its content in the table
    document.getElementById('load-csv-btn').addEventListener('click', function() {
        const fileInput = document.getElementById('csv-file');

        // Your JSON string
        const jsonString = document.getElementById('reviews').value;

        // Parse the JSON string
        const parsedData = JSON.parse(jsonString);

        // Function to populate table from parsed JSON data
        function populateTable(data) {
            const csvBody = document.getElementById('csv-body');
            csvBody.innerHTML = ''; // Clear previous contents

            data.forEach(item => {
                const newRow = document.createElement('tr');
                newRow.innerHTML = `
                    <td class="border border-gray-300 p-2"><input type="text" class="form-input w-full" value="${item.name || ''}" placeholder="Enter Name"></td>
                    <td class="border border-gray-300 p-2"><input type="text" class="form-input w-full" value="${item.customer_no || ''}" placeholder="Enter Customer No"></td>
                    <td class="border border-gray-300 p-2"><input type="file" class="form-input w-full"></td>
                    <td class="border border-gray-300 p-2"><textarea class="form-input w-full" placeholder="Enter Reviews">${item.reviews || ''}</textarea></td>
                    <td class="border border-gray-300 p-2"><input type="text" class="form-input w-full" value="${item.type || ''}" placeholder="Enter Type"></td>
                    <td class="border border-gray-300 p-2"><input type="date" class="form-input w-full" value="${item.date || ''}"></td>
                    <td class="border border-gray-300 p-2">
                        <button type="button" class="bg-red-500 text-white px-2 py-1 rounded" onclick="deleteRow(this)">Delete</button>
                    </td>
                `;
                csvBody.appendChild(newRow);
            });
        }

        // Call the function to populate the table
        populateTable(parsedData);

        // const file = fileInput.files[0];

        // if (file) {
        //     const reader = new FileReader();
        //     reader.onload = function(event) {
        //         const text = event.target.result;
        //         const rows = text.split('\n').map(row => row.split(','));

        //         const csvBody = document.getElementById('csv-body');
        //         csvBody.innerHTML = ''; // Clear previous contents

        //         rows.forEach((row, index) => {
        //             const newRow = document.createElement('tr');
        //             newRow.innerHTML = `
        //                 <td class="border border-gray-300 p-2"><input type="text" class="form-input w-full" value="${row[0] || ''}" placeholder="Enter Name"></td>
        //                 <td class="border border-gray-300 p-2"><input type="text" class="form-input w-full" value="${row[1] || ''}" placeholder="Enter Customer No"></td>
        //                 <td class="border border-gray-300 p-2"><input type="file" class="form-input w-full"></td>
        //                 <td class="border border-gray-300 p-2"><textarea class="form-input w-full" placeholder="Enter Reviews">${row[3] || ''}</textarea></td>
        //                 <td class="border border-gray-300 p-2"><input type="text" class="form-input w-full" value="${row[4] || ''}" placeholder="Enter Type"></td>
        //                 <td class="border border-gray-300 p-2"><input type="date" class="form-input w-full" value="${row[5] || ''}"></td>
        //                 <td class="border border-gray-300 p-2">
        //                     <button type="button" class="bg-red-500 text-white px-2 py-1 rounded" onclick="deleteRow(this)">Delete</button>
        //                 </td>
        //             `;
        //             csvBody.appendChild(newRow);
        //         });
        //     };
        //     reader.readAsText(file);
        // }
    });

    // Function to add a new row in the CSV editor
    function addRow() {
        const csvBody = document.getElementById('csv-body');
        const newRow = document.createElement('tr');
        newRow.innerHTML = `
            <td class="border border-gray-300 p-2"><input type="text" class="form-input w-full" placeholder="Enter Name"></td>
            <td class="border border-gray-300 p-2"><input type="text" class="form-input w-full" placeholder="Enter Customer No"></td>
            <td class="border border-gray-300 p-2"><input type="file" class="form-input w-full"></td>
            <td class="border border-gray-300 p-2"><textarea class="form-input w-full" placeholder="Enter Reviews"></textarea></td>
            <td class="border border-gray-300 p-2"><input type="text" class="form-input w-full" placeholder="Enter Type"></td>
            <td class="border border-gray-300 p-2"><input type="date" class="form-input w-full"></td>
            <td class="border border-gray-300 p-2">
                <button type="button" class="bg-red-500 text-white px-2 py-1 rounded" onclick="deleteRow(this)">Delete</button>
            </td>
        `;
        csvBody.appendChild(newRow);
    }
    // Function to delete a row from the CSV editor
    function deleteRow(button) {
        const row = button.parentElement.parentElement;
        row.parentElement.removeChild(row);
    }

    // Function to save the table data as JSON when the Save button is clicked
    document.getElementById('save-json-btn').addEventListener('click', function() {
        const csvBody = document.getElementById('csv-body');
        const rows = csvBody.querySelectorAll('tr');
        const data = [];

        rows.forEach(row => {
            const nameInput = row.querySelector('input[type="text"]:nth-child(1)');
            const customerNoInput = row.querySelector('input[type="text"]:nth-child(2)');
            const reviewsTextarea = row.querySelector('textarea');
            const typeInput = row.querySelector('input[type="text"]:nth-child(5)');
            const dateInput = row.querySelector('input[type="date"]');

            console.log("Row Data: ", {
                name: nameInput ? nameInput.value.trim() : null,
                customer_no: customerNoInput ? customerNoInput.value.trim() : null,
                reviews: reviewsTextarea ? reviewsTextarea.value.trim() : null,
                type: typeInput ? typeInput.value.trim() : null,
                date: dateInput ? dateInput.value : null
            });

            // Check if inputs exist and if they have values
            // if (nameInput && customerNoInput && reviewsTextarea && typeInput && dateInput) {
                const rowData = {
                    name: nameInput ? nameInput.value.trim() : null,
                    customer_no: customerNoInput ? customerNoInput.value.trim() : null,
                    reviews: reviewsTextarea ? reviewsTextarea.value.trim() : null,
                    type: typeInput ? typeInput.value.trim() : null,
                    date: dateInput ? dateInput.value : null
                };

                // Only push to data if any input field has a value
                // if (Object.values(rowData).some(value => value)) {
                    data.push(rowData);
                // }
            // }
        });

        const jsonData = JSON.stringify(data);

        // Set the JSON data in the reviews input field
        document.getElementById('reviews').value = jsonData;

        // Debugging: Log the JSON data to check what's being saved
        console.log(jsonData);

        if (data.length > 0) {
            // Here, you can send the JSON data to your backend
            // Example: fetch('/save', { method: 'POST', body: jsonData });
        } else {
            alert("No valid data to save.");
        }
    });

</script>

<style>
    /* Additional styles for table and inputs */
    .form-input {
        border: 1px solid #ccc;
        padding: 0.5rem;
        border-radius: 0.25rem;
        width: 100%;
    }
</style>