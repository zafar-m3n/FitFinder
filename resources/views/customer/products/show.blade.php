<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Product Details') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-md sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <div class="mb-6 flex items-center">
                        <h3 class="text-3xl font-bold">{{ $product->name }}</h3>
                    </div>

                    <div class="flex items-start justify-between">
                        <div class="mb-6 flex justify-center">
                            @if ($product->image)
                                <img src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->name }}"
                                    class="rounded-lg shadow-lg" width="400">
                            @else
                                <p>No image available for this product.</p>
                            @endif
                        </div>

                        <!-- Product Details -->
                        <div class="grid grid-cols-1 gap-6 md:grid-cols-3">
                            <!-- Price -->
                            <div class="rounded-lg bg-gray-100 p-4 shadow-sm">
                                <strong class="mb-1 block text-gray-600">Price:</strong>
                                <span class="text-2xl font-semibold text-green-600">${{ $product->price }}</span>
                            </div>

                            <!-- Category -->
                            <div class="rounded-lg bg-gray-100 p-4 shadow-sm">
                                <strong class="mb-1 block text-gray-600">Category:</strong>
                                <span
                                    class="text-lg">{{ $product->category ? $product->category->name : 'No Category' }}</span>
                            </div>

                            <!-- Description -->
                            <div class="rounded-lg bg-gray-100 p-4 shadow-sm">
                                <strong class="mb-1 block text-gray-600">Description:</strong>
                                <p>{{ $product->description ?? 'No description available.' }}</p>
                            </div>

                            <!-- Stock Quantity -->
                            <div class="rounded-lg bg-gray-100 p-4 shadow-sm">
                                <strong class="mb-1 block text-gray-600">Stock Quantity:</strong>
                                <span class="text-lg">{{ $product->stock_quantity }}</span>
                            </div>

                            <!-- Size -->
                            <div class="rounded-lg bg-gray-100 p-4 shadow-sm">
                                <strong class="mb-1 block text-gray-600">Size:</strong>
                                <span class="text-lg">{{ $product->size ?? 'N/A' }}</span>
                            </div>

                            <!-- Color -->
                            <div class="rounded-lg bg-gray-100 p-4 shadow-sm">
                                <strong class="mb-1 block text-gray-600">Color:</strong>
                                <span class="text-lg">{{ $product->color ?? 'N/A' }}</span>
                            </div>
                            <div class="rounded-lg bg-gray-100 p-4 shadow-sm">
                                <strong class="mb-1 block text-gray-600">Seller:</strong>
                                <span class="text-lg">{{ $product->creator->name ?? 'N/A' }}</span>
                            </div>
                        </div>
                    </div>

                    <div class="mt-8 flex justify-end space-x-4">
                        <a href="{{ route('customer.products.index') }}"
                            class="rounded bg-gray-500 px-4 py-2 text-white hover:bg-gray-600">
                            Back to Products
                        </a>
                        <a href="#" class="rounded bg-blue-500 px-4 py-2 text-white hover:bg-blue-600">
                            Place Order
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
