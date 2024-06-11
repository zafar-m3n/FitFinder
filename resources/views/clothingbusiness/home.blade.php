<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Clothing Business Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 gap-6 sm:grid-cols-2 lg:grid-cols-3">
                <!-- Manage Products Card -->
                <div class="overflow-hidden rounded-lg bg-white shadow-lg">
                    <div class="p-6">
                        <div class="flex items-center">
                            <div class="flex h-12 w-12 items-center justify-center rounded-full bg-blue-500 text-white">
                                <i class="fas fa-tshirt"></i>
                            </div>
                            <div class="ml-4">
                                <h3 class="text-lg font-semibold text-gray-700">Manage Products</h3>
                                <p class="mt-2 text-gray-500">Add, edit, and remove your products</p>
                            </div>
                        </div>
                        <div class="mt-4">
                            <a href="#" class="rounded bg-blue-500 px-4 py-2 text-white hover:bg-blue-600">Go to
                                Products</a>
                        </div>
                    </div>
                </div>

                <!-- View Orders Card -->
                <div class="overflow-hidden rounded-lg bg-white shadow-lg">
                    <div class="p-6">
                        <div class="flex items-center">
                            <div
                                class="flex h-12 w-12 items-center justify-center rounded-full bg-green-500 text-white">
                                <i class="fas fa-shopping-cart"></i>
                            </div>
                            <div class="ml-4">
                                <h3 class="text-lg font-semibold text-gray-700">View Orders</h3>
                                <p class="mt-2 text-gray-500">Check and manage your orders</p>
                            </div>
                        </div>
                        <div class="mt-4">
                            <a href="#" class="rounded bg-green-500 px-4 py-2 text-white hover:bg-green-600">Go to
                                Orders</a>
                        </div>
                    </div>
                </div>

                <!-- Customer Support Card -->
                <div class="overflow-hidden rounded-lg bg-white shadow-lg">
                    <div class="p-6">
                        <div class="flex items-center">
                            <div
                                class="flex h-12 w-12 items-center justify-center rounded-full bg-yellow-500 text-white">
                                <i class="fas fa-headset"></i>
                            </div>
                            <div class="ml-4">
                                <h3 class="text-lg font-semibold text-gray-700">Customer Support</h3>
                                <p class="mt-2 text-gray-500">Access support for any issues</p>
                            </div>
                        </div>
                        <div class="mt-4">
                            <a href="#" class="rounded bg-yellow-500 px-4 py-2 text-white hover:bg-yellow-600">Get
                                Support</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Latest Orders Section -->
            <div class="mt-8 overflow-hidden bg-white shadow-lg sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <h3 class="mb-6 text-xl font-semibold">Latest Orders</h3>
                    <div class="overflow-x-auto">
                        <table class="min-w-full divide-y divide-gray-200">
                            <thead class="bg-gray-50">
                                <tr>
                                    <th
                                        class="px-6 py-3 text-left text-xs font-medium uppercase tracking-wider text-gray-500">
                                        Order ID</th>
                                    <th
                                        class="px-6 py-3 text-left text-xs font-medium uppercase tracking-wider text-gray-500">
                                        Customer Name</th>
                                    <th
                                        class="px-6 py-3 text-left text-xs font-medium uppercase tracking-wider text-gray-500">
                                        Product</th>
                                    <th
                                        class="px-6 py-3 text-left text-xs font-medium uppercase tracking-wider text-gray-500">
                                        Quantity</th>
                                    <th
                                        class="px-6 py-3 text-left text-xs font-medium uppercase tracking-wider text-gray-500">
                                        Total Price</th>
                                    <th
                                        class="px-6 py-3 text-left text-xs font-medium uppercase tracking-wider text-gray-500">
                                        Status</th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-gray-200 bg-white">
                                <tr>
                                    <td class="whitespace-nowrap px-6 py-4">#1001</td>
                                    <td class="whitespace-nowrap px-6 py-4">John Doe</td>
                                    <td class="whitespace-nowrap px-6 py-4">T-Shirt</td>
                                    <td class="whitespace-nowrap px-6 py-4">2</td>
                                    <td class="whitespace-nowrap px-6 py-4">$40.00</td>
                                    <td class="whitespace-nowrap px-6 py-4">
                                        <span
                                            class="inline-flex rounded-full bg-green-100 px-2 text-xs font-semibold leading-5 text-green-800">
                                            Shipped
                                        </span>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="whitespace-nowrap px-6 py-4">#1002</td>
                                    <td class="whitespace-nowrap px-6 py-4">Jane Smith</td>
                                    <td class="whitespace-nowrap px-6 py-4">Jeans</td>
                                    <td class="whitespace-nowrap px-6 py-4">1</td>
                                    <td class="whitespace-nowrap px-6 py-4">$50.00</td>
                                    <td class="whitespace-nowrap px-6 py-4">
                                        <span
                                            class="inline-flex rounded-full bg-yellow-100 px-2 text-xs font-semibold leading-5 text-yellow-800">
                                            Pending
                                        </span>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="whitespace-nowrap px-6 py-4">#1003</td>
                                    <td class="whitespace-nowrap px-6 py-4">Michael Brown</td>
                                    <td class="whitespace-nowrap px-6 py-4">Jacket</td>
                                    <td class="whitespace-nowrap px-6 py-4">1</td>
                                    <td class="whitespace-nowrap px-6 py-4">$120.00</td>
                                    <td class="whitespace-nowrap px-6 py-4">
                                        <span
                                            class="inline-flex rounded-full bg-red-100 px-2 text-xs font-semibold leading-5 text-red-800">
                                            Cancelled
                                        </span>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="whitespace-nowrap px-6 py-4">#1004</td>
                                    <td class="whitespace-nowrap px-6 py-4">Emily Davis</td>
                                    <td class="whitespace-nowrap px-6 py-4">Dress</td>
                                    <td class="whitespace-nowrap px-6 py-4">3</td>
                                    <td class="whitespace-nowrap px-6 py-4">$90.00</td>
                                    <td class="whitespace-nowrap px-6 py-4">
                                        <span
                                            class="inline-flex rounded-full bg-green-100 px-2 text-xs font-semibold leading-5 text-green-800">
                                            Delivered
                                        </span>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="whitespace-nowrap px-6 py-4">#1005</td>
                                    <td class="whitespace-nowrap px-6 py-4">Chris Wilson</td>
                                    <td class="whitespace-nowrap px-6 py-4">Shoes</td>
                                    <td class="whitespace-nowrap px-6 py-4">2</td>
                                    <td class="whitespace-nowrap px-6 py-4">$80.00</td>
                                    <td class="whitespace-nowrap px-6 py-4">
                                        <span
                                            class="inline-flex rounded-full bg-green-100 px-2 text-xs font-semibold leading-5 text-green-800">
                                            Shipped
                                        </span>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

<!-- Include Font Awesome for Icons -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
