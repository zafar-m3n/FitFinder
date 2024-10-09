<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('My Orders') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden shadow-sm sm:rounded-lg">
                <table class="min-w-full divide-y divide-gray-200">
                    <thead class="bg-gray-50">
                        <tr>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium uppercase text-gray-500">
                                Product</th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium uppercase text-gray-500">
                                Quantity</th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium uppercase text-gray-500">
                                Total Price</th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium uppercase text-gray-500">
                                Status</th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium uppercase text-gray-500">
                                Actions</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-200 bg-white">
                        @foreach ($orders as $order)
                            <tr>
                                <td class="px-6 py-4">
                                    {{ $order->product->name }}
                                </td>
                                <td class="px-6 py-4">
                                    {{ $order->quantity }}
                                </td>
                                <td class="px-6 py-4">
                                    ${{ $order->total_price }}
                                </td>
                                <td class="px-6 py-4">
                                    {{ $order->status }}
                                </td>
                                <td class="px-6 py-4">
                                    @if ($order->status === \App\Models\Order::STATUS_PENDING)
                                        <!-- Show Cancel button only for pending orders -->
                                        <form action="{{ route('customer.orders.cancel', $order) }}" method="POST"
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
</x-app-layout>
