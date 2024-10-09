<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('My Orders') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-lg sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <div class="overflow-x-auto">
                        <table class="min-w-full divide-y divide-gray-200">
                            <thead class="bg-gray-50">
                                <tr>
                                    <th
                                        class="px-6 py-3 text-left text-xs font-medium uppercase tracking-wider text-gray-500">
                                        Order ID</th>
                                    <th
                                        class="px-6 py-3 text-left text-xs font-medium uppercase tracking-wider text-gray-500">
                                        Product</th>
                                    <th
                                        class="px-6 py-3 text-left text-xs font-medium uppercase tracking-wider text-gray-500">
                                        Quantity</th>
                                    <th
                                        class="px-6 py-3 text-left text-xs font-medium uppercase tracking-wider text-gray-500">
                                        Total Price</th>
                                    <th
                                        class="px-6 py-3 text-left text-xs font-medium uppercase tracking-wider text-gray-500">
                                        Status</th>
                                    <th
                                        class="px-6 py-3 text-left text-xs font-medium uppercase tracking-wider text-gray-500">
                                        Actions</th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-gray-200 bg-white">
                                @foreach ($orders as $order)
                                    <tr>
                                        <td class="whitespace-nowrap px-6 py-4">#{{ $order->id }}</td>
                                        <td class="whitespace-nowrap px-6 py-4">{{ $order->product->name }}</td>
                                        <td class="whitespace-nowrap px-6 py-4">{{ $order->quantity }}</td>
                                        <td class="whitespace-nowrap px-6 py-4">${{ $order->total_price }}</td>
                                        <td class="whitespace-nowrap px-6 py-4">
                                            <span
                                                class="@if ($order->status === \App\Models\Order::STATUS_PENDING) bg-yellow-100 text-yellow-800
                                                @elseif ($order->status === \App\Models\Order::STATUS_CANCELLED)
                                                    bg-red-100 text-red-800
                                                @elseif ($order->status === \App\Models\Order::STATUS_SHIPPING)
                                                    bg-blue-100 text-blue-800
                                                @elseif ($order->status === \App\Models\Order::STATUS_DELIVERED)
                                                    bg-green-100 text-green-800 @endif inline-flex rounded-full px-4 py-2 font-semibold leading-5">
                                                {{ $order->status }}
                                            </span>
                                        </td>
                                        <td class="whitespace-nowrap px-6 py-4">
                                            @if ($order->status === \App\Models\Order::STATUS_PENDING)
                                                <form action="{{ route('customer.orders.cancel', $order) }}"
                                                    method="POST"
                                                    onsubmit="return confirm('Are you sure you want to cancel this order?');">
                                                    @csrf
                                                    @method('PATCH')
                                                    <button type="submit"
                                                        class="rounded bg-red-500 px-4 py-2 text-white hover:bg-red-600">Cancel</button>
                                                </form>
                                            @else
                                                <span class="text-gray-500">No actions available</span>
                                            @endif
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
