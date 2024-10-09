<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Edit About Section') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <!-- Form to edit the About section -->
                    <form action="{{ route('clothingbusiness.about.update') }}" method="POST">
                        @csrf
                        <div class="mb-4">
                            <label for="company_about" class="block text-sm font-medium text-gray-700">
                                {{ __('About Your Company') }}
                            </label>
                            <textarea name="company_about" id="company_about" rows="5"
                                class="mt-1 block w-full rounded-md border-gray-300 shadow-sm" required>{{ old('company_about', $about->company_about ?? '') }}</textarea>
                        </div>

                        @if (session('success'))
                            <div class="mb-4 rounded bg-green-500 p-4 text-white">
                                {{ session('success') }}
                            </div>
                        @endif

                        <div class="flex justify-end">
                            <button type="submit" class="rounded bg-blue-500 px-4 py-2 text-white">
                                {{ __('Update About Section') }}
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
