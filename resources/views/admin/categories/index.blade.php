<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Categories') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <div class="mb-6 flex justify-between">
                        <h3 class="text-xl font-semibold">Categories List</h3>
                        <a href="{{ route('admin.categories.create') }}"
                            class="rounded bg-blue-500 px-4 py-2 text-white">Add New Category</a>
                    </div>

                    @if (session('success'))
                        <div class="mb-6 rounded bg-green-500 p-4 text-white">
                            {{ session('success') }}
                        </div>
                    @endif

                    <div class="overflow-x-auto">
                        <table class="min-w-full divide-y divide-gray-200">
                            <thead class="bg-gray-50">
                                <tr>
                                    <th scope="col"
                                        class="px-6 py-3 text-left text-xs font-medium uppercase tracking-wider text-gray-500">
                                        Name
                                    </th>
                                    <th scope="col"
                                        class="px-6 py-3 text-left text-xs font-medium uppercase tracking-wider text-gray-500">
                                        Description
                                    </th>
                                    <th scope="col"
                                        class="px-6 py-3 text-left text-xs font-medium uppercase tracking-wider text-gray-500">
                                        Status
                                    </th>
                                    <th scope="col" class="relative px-6 py-3">
                                        <span class="sr-only">Actions</span>
                                    </th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-gray-200 bg-white">
                                @foreach ($categories as $category)
                                    <tr>
                                        <td class="whitespace-nowrap px-6 py-4">
                                            <div class="text-sm font-medium text-gray-900">{{ $category->name }}</div>
                                        </td>
                                        <td class="whitespace-nowrap px-6 py-4">
                                            <div class="text-sm text-gray-900">{{ $category->description }}</div>
                                        </td>
                                        <td class="whitespace-nowrap px-6 py-4">
                                            <span
                                                class="{{ $category->status ? 'bg-green-100 text-green-800' : 'bg-red-100 text-red-800' }} inline-flex rounded-full px-2 text-xs font-semibold leading-5">
                                                {{ $category->status ? 'Active' : 'Inactive' }}
                                            </span>
                                        </td>
                                        <td class="whitespace-nowrap px-6 py-4 text-right text-sm font-medium">
                                            <a href="{{ route('admin.categories.edit', $category) }}"
                                                class="rounded bg-yellow-500 px-4 py-2 text-white hover:bg-yellow-600">Edit</a>
                                            <form action="{{ route('admin.categories.destroy', $category) }}"
                                                method="POST" class="inline-block">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit"
                                                    class="rounded bg-red-500 px-4 py-2 text-white hover:bg-red-600"
                                                    onclick="return confirm('Are you sure?')">Delete</button>
                                            </form>
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
