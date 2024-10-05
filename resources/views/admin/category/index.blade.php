<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Categories') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
                <div class="min-w-full overflow-x-auto">


                    <!-- Buttons Section -->
                    <div class="mb-6 m-2 flex justify-between">
                        <form method="GET" action="{{ route('category.index') }}" class="flex space-x-2">
                            <input type="text" name="search" value="{{ request('search') }}" class="px-4 py-2 border rounded-md" placeholder="Search by title...">
                            <button type="submit" class="px-4 py-2 bg-blue-500 text-white rounded-md">Search</button>
                        </form>
                        
                        <!-- Create New Categories Button -->
                        <a href="{{ route('category.create') }}" class="inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md shadow-sm text-white bg-green-600 hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-500">
                            Create New Category
                        </a>
                    </div>

                    <table class="min-w-full divide-y divide-gray-200 border">
                        <thead class="bg-gray-50">
                            <tr>
                                <th class="whitespace-pre py-2 px-4 border-b bg-gray-50 text-left">#</th>
                                <th class="whitespace-pre py-2 px-4 border-b bg-gray-50 text-left">Title</th>
                                <th class="whitespace-pre py-2 px-4 border-b bg-gray-50 text-left">Author</th>
                                <th class="whitespace-pre py-2 px-4 border-b bg-gray-50 text-left">Created At</th>
                                <td class="whitespace-pre py-2 px-4 border-b bg-gray-50 text-right">Actions</td>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200">
                            @forelse($categories as $category)
                                <tr>
                                    <td class="whitespace-pre py-2 px-4 border-b text-sm text-gray-900 text-ellipsis">{{ $category->id }}</td>
                                    <td class="whitespace-pre py-2 px-4 border-b text-sm text-gray-900 text-ellipsis">{{ $category->title }}</td>
                                    <td class="whitespace-pre py-2 px-4 border-b text-sm text-gray-900 text-ellipsis">{{ $category->user->name }}</td>
                                    <td class="whitespace-pre py-2 px-4 border-b text-sm text-gray-900">{{ $category->created_at->format('M j, Y, g:i a') }}</td>
                                    <td class="whitespace-pre py-2 px-4 border-b text-sm text-gray-900 text-right flex items-center justify-end space-x-2">
                                        <a href="{{ route('category.show', $category->id) }}" class="inline-block bg-blue-500 text-white py-1 px-3 rounded hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-opacity-50">View</a>
                                        <a href="{{ route('category.edit', $category->id) }}" class="inline-block bg-yellow-500 text-white py-1 px-3 rounded hover:bg-yellow-600 focus:outline-none focus:ring-2 focus:ring-yellow-500 focus:ring-opacity-50 ml-2">Edit</a>
                                        <form action="{{ route('category.destroy', $category->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this category?');">@csrf @method('DELETE')<button type="submit" class="inline-block bg-red-500 text-white py-1 px-3 rounded hover:bg-red-600 focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-opacity-50">Delete</button></form>
                                    </td>
                                </tr>
                            @empty
                                <tr><td colspan="3" class="px-6 py-4 whitespace-nowrap">No categories to display</td></tr>
                            @endforelse
                        </tbody>
                    </table>
                    <!-- Pagination links -->
                    <div class="mt-2">
                        {{ $categories->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>