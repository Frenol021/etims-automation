<footer class="bg-gray-100 pt-14 pb-12 text-gray-700">

    <div class="max-w-7xl mx-auto px-4">

        <!-- TOP GRID -->
        <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-10">

            <!-- COMPANY -->
            <div>
                <h3 class="text-xl font-semibold mb-3">{{ config('app.name') }}</h3>

                <p class="text-sm leading-relaxed mb-4 font-semibold text-gray-900">
                   we provide seamless integration solutions for your business needs. Our team of experts is dedicated to delivering innovative solutions that drive success and growth for your business.
                </p>

                <p class="text-sm leading-relaxed">
                    <span class="font-semibold text-gray-900">{{ env('BIZ_PHONE_NUMBER') }}</span><br>
                    {{ env('BIZ_EMAIL') }}
                </p>
            </div>

            <!-- USEFUL LINKS -->
            <div>
                <h3 class="text-xl font-semibold mb-3">Useful links</h3>

                <ul class="space-y-2 text-sm">
                    <li><a href="{{ url('shop') }}" class="hover:text-blue-600">New Solutions</a></li>
                    <li><a href="{{ url('shop') }}" class="hover:text-blue-600">Shop</a></li>
                    <li><a href="{{ url('user.list.wishlist') }}" class="hover:text-blue-600">WishList</a></li>
                    <li><a href="{{ url('cart.page') }}" class="hover:text-blue-600">Cart</a></li>
                    <li><a href="{{ url('list.guest.orders') }}" class="hover:text-blue-600">Order Tracking</a></li>
                </ul>
            </div>

            <!-- INFORMATION -->
            <div>
                <h3 class="text-xl font-semibold mb-3">Information</h3>

                <ul class="space-y-2 text-sm">
                    <li><a href="{{ url('about.us') }}" class="hover:text-blue-600">About</a></li>
                    <li><a href="{{ url('contact.us') }}" class="hover:text-blue-600">Contact Us</a></li>
                    <li><a href="{{ url('faqs') }}" class="hover:text-blue-600">FAQ's</a></li>
                    <li><a href="#" class="hover:text-blue-600">Terms & Conditions</a></li>
                    <li><a href="#" class="hover:text-blue-600">Privacy Policy</a></li>
                </ul>
            </div>

            <!-- SUBSCRIBE -->
            <div>
                <h3 class="text-lg font-semibold mb-2">
                    Tech solutions by {{ config('app.name') }}.
                </h3>

                <p class="text-sm mb-4">
                    Our latest news, articles and resources will be sent to your inbox weekly.
                </p>

                <form wire:submit.prevent="submit" class="flex">
                    <input
                        type="text"
                        wire:model="email"
                        placeholder="Enter your email address"
                        class="w-full border border-gray-300 rounded-l-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-gray-800"
                    >

                    <button type="submit"
                        class="bg-gray-900 text-white px-5 rounded-r-lg hover:bg-blue-600 transition">
                        Subscribe
                    </button>
                </form>

                @error('phone_number')
                    <p class="text-red-500 text-sm mt-2">{{ $message }}</p>
                @enderror
            </div>

        </div>

        <!-- BOTTOM BAR -->
        <div class="border-t mt-14 pt-8 grid md:grid-cols-3 gap-6 items-center text-sm">

            <!-- LEFT -->
            <div class="flex items-center gap-4">
                <p>&copy; {{ config('app.name') }} {{ date('Y') }}</p>

                <div class="flex gap-4 text-xl">
                    <a href="{{ env('BIZ_FACEBOOK_URL') }}" target="_blank" class="hover:text-blue-600">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a href="{{ env('BIZ_INSTAGRAM_URL') }}" target="_blank" class="hover:text-blue-600">
                        <i class="fab fa-instagram"></i>
                    </a>
                    <a href="{{ env('BIZ_TIKTOK_URL') }}" target="_blank" class="hover:text-blue-600">
                        <i class="fab fa-tiktok"></i>
                    </a>
                </div>
            </div>

            <!-- CENTER -->
            <div class="text-center">

                <p>All rights reserved © {{ date('Y') }}</p>
            </div>

            <!-- RIGHT -->
            <div class="md:text-right">
                <img src="{{ asset('images/custom/payment_mpesa.png') }}" class="inline-block w-52">
            </div>

        </div>

    </div>

</footer>
