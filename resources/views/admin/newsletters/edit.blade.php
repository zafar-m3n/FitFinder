<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Edit Newsletter') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <form action="{{ route('admin.newsletters.update', $newsletter) }}" method="POST">
                        @csrf
                        @method('PUT')

                        <div class="mb-4">
                            <label for="title" class="block text-sm font-medium text-gray-700">Title</label>
                            <input type="text" name="title" id="title" value="{{ $newsletter->title }}"
                                class="mt-1 block w-full" required>
                        </div>

                        <div class="mb-4">
                            <label for="content" class="block text-sm font-medium text-gray-700">Content</label>
                            <textarea name="content" id="content" class="mt-1 block w-full" rows="5" required>{{ $newsletter->content }}</textarea>
                        </div>

                        <div class="mb-4">
                            <label for="status" class="block text-sm font-medium text-gray-700">Status</label>
                            <select name="status" id="status" class="mt-1 block w-full">
                                <option value="1" {{ $newsletter->status ? 'selected' : '' }}>Published</option>
                                <option value="0" {{ !$newsletter->status ? 'selected' : '' }}>Draft</option>
                            </select>
                        </div>

                        <div class="mb-4">
                            <label for="sent_date" class="block text-sm font-medium text-gray-700">Sent Date</label>
                            <input type="date" name="sent_date" id="sent_date" value="{{ $newsletter->sent_date }}"
                                class="mt-1 block w-full">
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
