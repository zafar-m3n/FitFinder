<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Welcome to Our Store') }}
        </h2>
    </x-slot>

    <!-- Hero Section -->
    <div class="relative h-screen bg-cover bg-center"
        style="background-image: url('{{ asset('images/background.jpg') }}');">
        <div class="absolute inset-0 bg-gray-900 opacity-50"></div>
        <div class="relative z-10 flex h-full items-center justify-center">
            <div class="text-center text-white">
                <h1 class="mb-6 text-5xl font-bold">Discover Your Perfect Fit</h1>
                <p class="mb-8 text-xl">Find clothes that match your style and preferences with ease.</p>
                <div class="flex justify-center space-x-4">
                    <a href="{{ route('login') }}"
                        class="rounded bg-blue-500 px-6 py-3 text-white hover:bg-blue-600">Shop Now</a>
                    <a href="{{ route('register') }}"
                        class="rounded bg-green-500 px-6 py-3 text-white hover:bg-green-600">Join Us</a>
                </div>
            </div>
        </div>
    </div>
    <!-- End Hero Section -->

    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
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

            <!-- About Section -->
            <div class="mt-12 rounded-lg bg-gray-100 p-6">
                <h3 class="mb-6 text-center text-2xl font-semibold">About Us</h3>
                <p class="text-center text-gray-700">FitFinder is your go-to platform for finding the perfect clothes
                    that match your personal style and fit. Our cutting-edge technology helps personalize
                    recommendations based on your preferences, so you can shop effortlessly.</p>
            </div>
            <!-- End About Section -->

            <!-- Contact Section -->
            <div class="mt-12 rounded-lg bg-white p-6 shadow-lg">
                <h3 class="mb-6 text-center text-2xl font-semibold">Contact Us</h3>
                <form class="space-y-4">
                    <div>
                        <label for="name" class="block text-gray-700">Name</label>
                        <input type="text" id="name" name="name" class="w-full rounded border-gray-300">
                    </div>
                    <div>
                        <label for="email" class="block text-gray-700">Email</label>
                        <input type="email" id="email" name="email" class="w-full rounded border-gray-300">
                    </div>
                    <div>
                        <label for="message" class="block text-gray-700">Message</label>
                        <textarea id="message" name="message" rows="4" class="w-full rounded border-gray-300"></textarea>
                    </div>
                    <div class="flex justify-center">
                        <button type="submit" class="rounded bg-blue-500 px-4 py-2 text-white hover:bg-blue-600">Send
                            Message</button>
                    </div>
                </form>
            </div>
            <!-- End Contact Section -->

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

    <!-- Footer Section -->
    <footer class="bg-gray-800 py-6 text-center text-white">
        <p>&copy; 2024 FitFinder. All rights reserved.</p>
        <p><a href="#" class="text-blue-400 hover:underline">Privacy Policy</a> | <a href="#"
                class="text-blue-400 hover:underline">Terms of Service</a></p>
    </footer>
    <!-- End Footer Section -->

</x-app-layout>

<!-- Include Font Awesome for Icons -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
