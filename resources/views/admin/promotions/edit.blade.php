<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Edit Promotion') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <form action="{{ route('admin.promotions.update', $promotion) }}" method="POST">
                        @csrf
                        @method('PUT')

                        <div class="mb-4">
                            <label for="title" class="block text-sm font-medium text-gray-700">Title</label>
                            <input type="text" name="title" id="title" value="{{ $promotion->title }}"
                                class="mt-1 block w-full" required>
                        </div>

                        <div class="mb-4">
                            <label for="description" class="block text-sm font-medium text-gray-700">Description</label>
                            <textarea name="description" id="description" class="mt-1 block w-full" rows="5" required>{{ $promotion->description }}</textarea>
                        </div>

                        <div class="mb-4">
                            <label for="discount" class="block text-sm font-medium text-gray-700">Discount (%)</label>
                            <input type="number" name="discount" id="discount" value="{{ $promotion->discount }}"
                                class="mt-1 block w-full" required>
                        </div>

                        <div class="mb-4">
                            <label for="start_date" class="block text-sm font-medium text-gray-700">Start Date</label>
                            <input type="date" name="start_date" id="start_date" value="{{ $promotion->start_date }}"
                                class="mt-1 block w-full" required>
                        </div>

                        <div class="mb-4">
                            <label for="end_date" class="block text-sm font-medium text-gray-700">End Date</label>
                            <input type="date" name="end_date" id="end_date" value="{{ $promotion->end_date }}"
                                class="mt-1 block w-full" required>
                        </div>

                        <div class="flex justify-end">
                            <button type="submit" class="rounded bg-blue-500 px-4 py-2 text-white">Save
                                Changes</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
