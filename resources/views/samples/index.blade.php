<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Samples') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
                <div class="min-w-full overflow-x-auto">
                    <!-- Buttons Section -->
                    <div class="mb-6 m-2 flex justify-end space-x-4">
                        <a href="{{ route('samples.add') }}" class="inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md shadow-sm text-white bg-green-600 hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-500">
                            {{ __('Create New Sample') }}
                        </a>
                    </div>

                    <table class="min-w-full divide-y divide-gray-200 border">
                        <thead>
                            <tr>
                            <td class="whitespace-pre py-2 px-4 border-b bg-gray-50 text-left">#</td>
                            <td class="whitespace-pre py-2 px-4 border-b bg-gray-50 text-left">Author</td>
                            <td class="whitespace-pre py-2 px-4 border-b bg-gray-50 text-left">Title</td>
                            <td class="whitespace-pre py-2 px-4 border-b bg-gray-50 text-left">Created At</td>
                            <td class="whitespace-pre py-2 px-4 border-b bg-gray-50 text-left">Actions</td>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200 divide-solid">
                            @foreach ($samples as $sample)
                                <tr class="bg-white">
                                    <td class="whitespace-pre py-2 px-4 border-b text-sm text-gray-900">{{ $sample->id }}</td>
                                    <td class="whitespace-pre py-2 px-4 border-b text-sm text-gray-900 text-ellipsis">{{ $sample->user->name }}</td>
                                    <td class="whitespace-pre py-2 px-4 border-b text-sm text-gray-900 text-ellipsis">{{ $sample->title }}</td>
                                    <td class="whitespace-pre py-2 px-4 border-b text-sm text-gray-900">{{ $sample->created_at->format('M j, Y, g:i a') }}</td>
                                    <td class="whitespace-pre py-2 px-4 border-b text-sm text-gray-900 flex items-center space-x-2">
                                        <a href="{{ route('samples.show', $sample->id) }}" class="inline-block bg-blue-500 text-white py-1 px-3 rounded hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-opacity-50">View</a>
                                        <a href="{{ route('samples.edit', $sample->id) }}" class="inline-block bg-yellow-500 text-white py-1 px-3 rounded hover:bg-yellow-600 focus:outline-none focus:ring-2 focus:ring-yellow-500 focus:ring-opacity-50 ml-2">Edit</a>
                                        <form action="{{ route('samples.destroy', $sample->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this sample?');">@csrf @method('DELETE')<button type="submit" class="inline-block bg-red-500 text-white py-1 px-3 rounded hover:bg-red-600 focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-opacity-50">Delete</button></form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                    <!-- Pagination links -->
                    <div class="mt-2">
                        {{ $samples->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
