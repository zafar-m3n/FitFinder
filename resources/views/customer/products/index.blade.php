<x-app-layout>
    <x-slot name="header">
        <div class="flex items-center justify-between">
            <h2 class="text-xl font-semibold leading-tight text-gray-800">
                {{ __('Available Products') }}
            </h2>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden shadow-sm sm:rounded-lg">
                @if (session('success'))
                    <div class="mb-6 rounded bg-green-100 p-4 text-green-500">
                        {{ session('success') }}
                    </div>
                @endif

                <div class="grid grid-cols-1 gap-6 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4">
                    @foreach ($products as $product)
                        <div class="overflow-hidden rounded-lg bg-white shadow-md">
                            <a href="{{ route('customer.products.show', $product) }}">
                                @if ($product->image)
                                    <img src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->name }}"
                                        class="h-48 w-full object-cover">
                                @else
                                    <img src="https://via.placeholder.com/150" alt="{{ $product->name }}"
                                        class="h-48 w-full object-cover">
                                @endif
                            </a>
                            <div class="p-4 text-center">
                                <div class="flex items-center justify-between">
                                    <h3 class="text-lg font-semibold">
                                        <a href="{{ route('customer.products.show', $product) }}">
                                            {{ $product->name }}
                                        </a>
                                    </h3>
                                    <p class="text-gray-600">${{ $product->price }}</p>
                                </div>
                                <p class="text-left text-sm text-gray-500">Business: {{ $product->creator->name }}</p>
                                <a href="{{ route('customer.products.show', $product) }}"
                                    class="mt-2 inline-block text-blue-500">View Details</a>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
