<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Product Details') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <h3 class="mb-4 text-2xl font-semibold">{{ $product->name }}</h3>

                    @if ($product->image)
                        <img src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->name }}" class="mb-4"
                            width="200">
                    @endif

                    <div class="mb-4">
                        <strong>Price:</strong> ${{ $product->price }}
                    </div>

                    <div class="mb-4">
                        <strong>Category:</strong> {{ $product->category->name }}
                    </div>

                    <div class="mb-4">
                        <strong>Description:</strong> {{ $product->description ?? 'No description available.' }}
                    </div>

                    <div class="mb-4">
                        <strong>Stock Quantity:</strong> {{ $product->stock_quantity }}
                    </div>

                    <div class="flex justify-between">
                        <a href="{{ route('clothingbusiness.products.edit', $product) }}"
                            class="rounded bg-yellow-500 px-4 py-2 text-white hover:bg-yellow-600">Edit Product</a>

                        <form action="{{ route('clothingbusiness.products.destroy', $product) }}" method="POST"
                            class="inline-block">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="rounded bg-red-500 px-4 py-2 text-white hover:bg-red-600"
                                onclick="return confirm('Are you sure?')">Delete</button>
                        </form>

                        <a href="{{ route('clothingbusiness.products.index') }}"
                            class="rounded bg-gray-500 px-4 py-2 text-white">Back to Products</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
