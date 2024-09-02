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

                    <table class="min-w-full divide-y divide-gray-200 border">
                        <thead>
                            <tr>
                            {{-- <td class="whitespace-pre py-2 px-4 border-b bg-gray-50 text-left">ID</td> --}}
                            <td class="whitespace-pre py-2 px-4 border-b bg-gray-50 text-left">Order No</td>
                            <td class="whitespace-pre py-2 px-4 border-b bg-gray-50 text-left">Name</td>
                            <td class="whitespace-pre py-2 px-4 border-b bg-gray-50 text-left">Email</td>
                            <td class="whitespace-pre py-2 px-4 border-b bg-gray-50 text-left">Phone</td>
                            {{-- 
                            <td class="whitespace-pre py-2 px-4 border-b bg-gray-50 text-left">Price</td>
                            <td class="whitespace-pre py-2 px-4 border-b bg-gray-50 text-left">Dis Price</td>
                            --}}
                            <td class="whitespace-pre py-2 px-4 border-b bg-gray-50 text-left">Price</td>
                            <td class="whitespace-pre py-2 px-4 border-b bg-gray-50 text-left">Payment</td>
                            <td class="whitespace-pre py-2 px-4 border-b bg-gray-50 text-left">Created At</td>
                            <td class="whitespace-pre py-2 px-4 border-b bg-gray-50 text-left">Actions</td>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200 divide-solid">
                            @foreach ($orders as $order)
                                <tr class="bg-white">
                                    {{-- <td class="whitespace-pre py-2 px-4 border-b text-sm text-gray-900">{{ $order->id }}</td> --}}
                                    <td class="whitespace-pre py-2 px-4 border-b text-sm text-gray-900"><span class="whitespace-no-wrap">{{ $order->order_no }}</span></td>
                                    <td class="whitespace-pre py-2 px-4 border-b text-sm text-gray-900 text-ellipsis">{{ $order->user->name }}</td>
                                    <td class="whitespace-pre py-2 px-4 border-b text-sm text-gray-900">{{ $order->user->email }}</td>
                                    <td class="whitespace-pre py-2 px-4 border-b text-sm text-gray-900">{{ $order->profile->phone }}</td>
                                    {{-- 
                                    <td class="whitespace-pre py-2 px-4 border-b text-sm text-gray-900">£{{ number_format($order->actual_price, 2) }}</td>
                                    <td class="whitespace-pre py-2 px-4 border-b text-sm text-gray-900">£{{ number_format($order->discounted_price, 2) }}</td>
                                     --}}
                                    <td class="whitespace-pre py-2 px-4 border-b text-sm text-gray-900">£{{ number_format($order->final_price, 2) }}</td>
                                    <td class="whitespace-pre py-2 px-4 border-b text-sm">@if ($order->payment_status === 'Paid')<span class="bg-green-100 text-green-800 py-1 px-2 rounded-full text-xs font-semibold">Paid</span>@else<span class="bg-red-100 text-red-800 py-1 px-2 rounded-full text-xs font-semibold">Unpaid</span>@endif</td>
                                    <td class="whitespace-pre py-2 px-4 border-b text-sm text-gray-900">{{ $order->created_at->format('M j, Y, g:i a') }}</td>
                                    <td class="whitespace-pre py-2 px-4 border-b text-sm text-gray-900 flex items-center space-x-2">
                                        <a href="{{ route('orders.show', $order->id) }}" class="inline-block bg-blue-500 text-white py-1 px-3 rounded hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-opacity-50">View</a>
                                        <a href="{{ route('orders.edit', $order->id) }}" class="inline-block bg-yellow-500 text-white py-1 px-3 rounded hover:bg-yellow-600 focus:outline-none focus:ring-2 focus:ring-yellow-500 focus:ring-opacity-50 ml-2">Edit</a>
                                        <form action="{{ route('orders.destroy', $order->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this order?');">@csrf @method('DELETE')<button type="submit" class="inline-block bg-red-500 text-white py-1 px-3 rounded hover:bg-red-600 focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-opacity-50">Delete</button></form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <style>
                        .text-ellipsis {
                            white-space: nowrap;
                            overflow: hidden;
                            text-overflow: ellipsis;
                            max-width: 100px;
                        }
                    </style>

                    <!-- Pagination links -->
                    <div class="mt-2">
                        {{ $orders->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
