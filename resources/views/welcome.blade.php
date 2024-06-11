<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Welcome to Our Store') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <h3 class="mb-6 text-2xl font-semibold">Welcome, Guest!</h3>
                    <p class="mb-6 text-gray-700">You are not logged in. Please log in or register to enjoy our full
                        features.</p>
                    <div class="flex justify-center space-x-4">
                        <a href="{{ route('login') }}"
                            class="rounded bg-blue-500 px-4 py-2 text-white hover:bg-blue-600">Log In</a>
                        <a href="{{ route('register') }}"
                            class="rounded bg-green-500 px-4 py-2 text-white hover:bg-green-600">Register</a>
                    </div>
                </div>
            </div>

            <!-- Features Section -->
            <div class="mt-8 grid grid-cols-1 gap-6 sm:grid-cols-2 lg:grid-cols-3">
                <!-- Feature Card 1 -->
                <div class="overflow-hidden rounded-lg bg-white shadow-lg">
                    <div class="p-6">
                        <div class="flex items-center">
                            <div class="flex h-12 w-12 items-center justify-center rounded-full bg-blue-500 text-white">
                                <i class="fas fa-tags"></i>
                            </div>
                            <div class="ml-4">
                                <h3 class="text-lg font-semibold text-gray-700">Exclusive Offers</h3>
                                <p class="mt-2 text-gray-500">Get access to exclusive offers and discounts.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Feature Card 2 -->
                <div class="overflow-hidden rounded-lg bg-white shadow-lg">
                    <div class="p-6">
                        <div class="flex items-center">
                            <div
                                class="flex h-12 w-12 items-center justify-center rounded-full bg-green-500 text-white">
                                <i class="fas fa-shipping-fast"></i>
                            </div>
                            <div class="ml-4">
                                <h3 class="text-lg font-semibold text-gray-700">Fast Shipping</h3>
                                <p class="mt-2 text-gray-500">Enjoy fast and reliable shipping on all orders.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Feature Card 3 -->
                <div class="overflow-hidden rounded-lg bg-white shadow-lg">
                    <div class="p-6">
                        <div class="flex items-center">
                            <div
                                class="flex h-12 w-12 items-center justify-center rounded-full bg-yellow-500 text-white">
                                <i class="fas fa-thumbs-up"></i>
                            </div>
                            <div class="ml-4">
                                <h3 class="text-lg font-semibold text-gray-700">Top Quality</h3>
                                <p class="mt-2 text-gray-500">We offer only the best quality products.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Features Section -->

            <!-- Call to Action Section -->
            <div class="mt-12 text-center">
                <h3 class="mb-6 text-2xl font-semibold">Join Us Today!</h3>
                <p class="mb-6 text-gray-700">Become a member to enjoy exclusive benefits and offers.</p>
                <div class="flex justify-center space-x-4">
                    <a href="{{ route('login') }}"
                        class="rounded bg-blue-500 px-4 py-2 text-white hover:bg-blue-600">Log In</a>
                    <a href="{{ route('register') }}"
                        class="rounded bg-green-500 px-4 py-2 text-white hover:bg-green-600">Register</a>
                </div>
            </div>
            <!-- End Call to Action Section -->
        </div>
    </div>
</x-app-layout>

<!-- Include Font Awesome for Icons -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
