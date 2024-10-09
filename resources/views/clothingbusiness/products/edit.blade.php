<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Edit Product') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <form action="{{ route('clothingbusiness.products.update', $product) }}" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <!-- Product Name -->
                        <div class="mb-4">
                            <label for="name" class="block text-sm font-medium text-gray-700">Product Name</label>
                            <input type="text" name="name" id="name" value="{{ $product->name }}"
                                class="mt-1 block w-full rounded-md border-gray-300 shadow-sm" required>
                        </div>

                        <!-- Description -->
                        <div class="mb-4">
                            <label for="description" class="block text-sm font-medium text-gray-700">Description</label>
                            <textarea name="description" id="description" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm">{{ $product->description }}</textarea>
                        </div>

                        <!-- Price -->
                        <div class="mb-4">
                            <label for="price" class="block text-sm font-medium text-gray-700">Price</label>
                            <input type="number" name="price" id="price" step="0.01"
                                value="{{ $product->price }}"
                                class="mt-1 block w-full rounded-md border-gray-300 shadow-sm" required>
                        </div>

                        <!-- Stock Quantity -->
                        <div class="mb-4">
                            <label for="stock_quantity" class="block text-sm font-medium text-gray-700">Stock
                                Quantity</label>
                            <input type="number" name="stock_quantity" id="stock_quantity"
                                value="{{ $product->stock_quantity }}"
                                class="mt-1 block w-full rounded-md border-gray-300 shadow-sm" required>
                        </div>

                        <!-- Category -->
                        <div class="mb-4">
                            <label for="category_id" class="block text-sm font-medium text-gray-700">Category</label>
                            <select name="category_id" id="category_id"
                                class="mt-1 block w-full rounded-md border-gray-300 shadow-sm" required>
                                @foreach ($categories as $category)
                                    <option value="{{ $category->id }}"
                                        {{ $category->id == $product->category_id ? 'selected' : '' }}>
                                        {{ $category->name }}
                                    </option>
                                @endforeach
                            </select>
                        </div>

                        <!-- Size -->
                        <div class="mb-4">
                            <label for="size" class="block text-sm font-medium text-gray-700">Size</label>
                            <input type="text" name="size" id="size" value="{{ $product->size }}"
                                class="mt-1 block w-full rounded-md border-gray-300 shadow-sm">
                        </div>

                        <!-- Color -->
                        <div class="mb-4">
                            <label for="color" class="block text-sm font-medium text-gray-700">Color</label>
                            <input type="text" name="color" id="color" value="{{ $product->color }}"
                                class="mt-1 block w-full rounded-md border-gray-300 shadow-sm">
                        </div>

                        <!-- Product Image -->
                        <div class="mb-4">
                            <label for="image" class="block text-sm font-medium text-gray-700">Product Image</label>
                            <input type="file" name="image" id="image" class="mt-1 block w-full">
                            @if ($product->image)
                                <img src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->name }}"
                                    class="mt-2" width="100">
                            @endif
                        </div>

                        <div class="mb-4 flex justify-between">
                            <button type="submit" class="rounded bg-blue-500 px-4 py-2 text-white">Update
                                Product</button>
                            <a href="{{ route('clothingbusiness.products.index') }}"
                                class="rounded bg-gray-500 px-4 py-2 text-white">Cancel</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
