<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Manage Preferences') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    @if (session('success'))
                        <div class="mb-6 rounded bg-green-100 p-4 text-green-500">
                            {{ session('success') }}
                        </div>
                    @endif

                    <form action="{{ route('customer.preferences.update') }}" method="POST">
                        @csrf

                        <!-- Clothing Style -->
                        <div class="mb-4">
                            <label for="clothing_style" class="block text-sm font-medium text-gray-700">Clothing
                                Style</label>
                            <select name="clothing_style" id="clothing_style"
                                class="mt-1 block w-full rounded-md border-gray-300 shadow-sm" required>
                                <option value="Casual"
                                    {{ old('clothing_style', $preference->clothing_style) == 'Casual' ? 'selected' : '' }}>
                                    Casual</option>
                                <option value="Formal"
                                    {{ old('clothing_style', $preference->clothing_style) == 'Formal' ? 'selected' : '' }}>
                                    Formal</option>
                                <option value="Sporty"
                                    {{ old('clothing_style', $preference->clothing_style) == 'Sporty' ? 'selected' : '' }}>
                                    Sporty</option>
                                <option value="Vintage"
                                    {{ old('clothing_style', $preference->clothing_style) == 'Vintage' ? 'selected' : '' }}>
                                    Vintage</option>
                                <option value="Business"
                                    {{ old('clothing_style', $preference->clothing_style) == 'Business' ? 'selected' : '' }}>
                                    Business</option>
                            </select>
                        </div>

                        <!-- Preferred Colors -->
                        <div class="mb-4">
                            <label for="preferred_colors" class="block text-sm font-medium text-gray-700">Preferred
                                Colors</label>
                            <select name="preferred_colors" id="preferred_colors"
                                class="mt-1 block w-full rounded-md border-gray-300 shadow-sm" required>
                                <option value="Red"
                                    {{ old('preferred_colors', $preference->preferred_colors) == 'Red' ? 'selected' : '' }}>
                                    Red</option>
                                <option value="Blue"
                                    {{ old('preferred_colors', $preference->preferred_colors) == 'Blue' ? 'selected' : '' }}>
                                    Blue</option>
                                <option value="Black"
                                    {{ old('preferred_colors', $preference->preferred_colors) == 'Black' ? 'selected' : '' }}>
                                    Black</option>
                                <option value="White"
                                    {{ old('preferred_colors', $preference->preferred_colors) == 'White' ? 'selected' : '' }}>
                                    White</option>
                                <option value="Green"
                                    {{ old('preferred_colors', $preference->preferred_colors) == 'Green' ? 'selected' : '' }}>
                                    Green</option>
                            </select>
                        </div>

                        <!-- Preferred Size -->
                        <div class="mb-4">
                            <label for="preferred_size" class="block text-sm font-medium text-gray-700">Preferred
                                Size</label>
                            <select name="preferred_size" id="preferred_size"
                                class="mt-1 block w-full rounded-md border-gray-300 shadow-sm" required>
                                <option value="Small"
                                    {{ old('preferred_size', $preference->preferred_size) == 'Small' ? 'selected' : '' }}>
                                    Small</option>
                                <option value="Medium"
                                    {{ old('preferred_size', $preference->preferred_size) == 'Medium' ? 'selected' : '' }}>
                                    Medium</option>
                                <option value="Large"
                                    {{ old('preferred_size', $preference->preferred_size) == 'Large' ? 'selected' : '' }}>
                                    Large</option>
                                <option value="XL"
                                    {{ old('preferred_size', $preference->preferred_size) == 'XL' ? 'selected' : '' }}>
                                    XL</option>
                                <option value="XXL"
                                    {{ old('preferred_size', $preference->preferred_size) == 'XXL' ? 'selected' : '' }}>
                                    XXL</option>
                            </select>
                        </div>

                        <!-- Fabric Material -->
                        <div class="mb-4">
                            <label for="fabric_material" class="block text-sm font-medium text-gray-700">Fabric
                                Material</label>
                            <select name="fabric_material" id="fabric_material"
                                class="mt-1 block w-full rounded-md border-gray-300 shadow-sm">
                                <option value="Cotton"
                                    {{ old('fabric_material', $preference->fabric_material) == 'Cotton' ? 'selected' : '' }}>
                                    Cotton</option>
                                <option value="Wool"
                                    {{ old('fabric_material', $preference->fabric_material) == 'Wool' ? 'selected' : '' }}>
                                    Wool</option>
                                <option value="Polyester"
                                    {{ old('fabric_material', $preference->fabric_material) == 'Polyester' ? 'selected' : '' }}>
                                    Polyester</option>
                                <option value="Silk"
                                    {{ old('fabric_material', $preference->fabric_material) == 'Silk' ? 'selected' : '' }}>
                                    Silk</option>
                                <option value="Linen"
                                    {{ old('fabric_material', $preference->fabric_material) == 'Linen' ? 'selected' : '' }}>
                                    Linen</option>
                            </select>
                        </div>

                        <!-- Submit Button -->
                        <div class="mt-6">
                            <button type="submit" class="rounded bg-blue-500 px-4 py-2 text-white hover:bg-blue-600">
                                Update Preferences
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
