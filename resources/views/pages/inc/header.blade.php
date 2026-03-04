<div>
<header class="main-header navbar-light header-sticky header-sticky-smart">
        <div class="topbar d-none d-xl-block" style="background-color:#EDF1F0;">
            <div class="max-w-7xl mx-auto flex justify-between">
                <ul class="list-inline flex align-items-center mb-0">
                    <li class="list-inline-item mr-5"><a href="{{ env('BIZ_FACEBOOK_URL') }}" target="_blank"
                                                         class="fs-14 lh-1"><x-heroicon-o-shopping-cart class="w-6 h-6" /></a>
                    </li>
                    <li class="list-inline-item mr-5"><a href="{{ env('BIZ_INSTAGRAM_URL') }}" target="_blank"
                                                         class="fs-14 lh-1"><x-heroicon-s-heart class="h-6 w-6 text-red-600" /></a>
                    </li>
                    <li class="list-inline-item mr-5"><a href="{{ env('BIZ_TIKTOK_URL') }}" target="_blank"
                                                         class="fs-14 lh-1"><i
                                class="fab fa-tiktok"></i></a>
                    </li>
                </ul>
                <p class="mb-0 fs-13 font-weight-bold text-primary letter-spacing-01 text-uppercase">Shipping Across
                    East Africa</p>
                <div class="flex">
                    <div class="dropdown">
                        <button class="btn btn-link dropdown-toggle text-uppercase fs-13 letter-spacing-01 py-0"
                                type="button" id="dropdown-english" data-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false">
                            english
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <div class="sticky top-0 bg-white">
    <div class="max-w-7xl mx-auto px-4">
        <nav class="flex items-center justify-between py-4">

            <!-- Left Section -->
            <div class="hidden xl:flex items-center w-1/2">
                <a href="{{ url('index') }}" class="mx-6">
                    <img src="{{ asset('assets/images/frenol.png') }}" width="30" alt="{{ config('app.name') }}">
                </a>

                <ul class="flex space-x-6">
                    <li><a href="{{ url('index') }}" class="hover:text-gray-600">Home</a></li>
                    <li><a href="{{ url('about.us') }}" class="hover:text-gray-600">About Us</a></li>
                    <li><a href="{{ url('solutions') }}" class="hover:text-gray-600">Solutions</a></li>
                    <livewire:pages.inc.shop-nav :categories="$categories"/>
                </ul>
            </div>

            <!-- Right Section -->
            <div class="hidden xl:flex items-center justify-end w-1/2 space-x-6">
                <a href="{{ url('blog') }}">Blogs</a>
                <a href="{{ url('faqs') }}">FAQs</a>
                <a href="{{ url('contact') }}">Contact</a>

                <a href="{{ url('user.home') }}">
                    <i class="fa fa-user"></i>
                </a>

                <a href="{{ url('wishlist') }}">
                    <i class="fa fa-star"></i>
                </a>

                <a href="{{ url('cart.page') }}" class="relative flex items-center">
                    <span class="mr-2 font-bold">Shop</span>
                    <i class="fa fa-shopping-cart"></i>
                    <span class="absolute -top-2 -right-2 bg-red-500 text-white text-xs px-2 rounded-full">
                        2
                    </span>
                </a>
            </div>

        </nav>
    </div>
</div>
{{-- phone view --}}


<div x-data="{ open:false }" class="flex items-center justify-between xl:hidden py-4 px-4">

    <button @click="open = true" class="text-2xl">
        ☰
    </button>

    <a href="{{ url('index') }}">
        <img src="{{ asset('assets/images/logo.png') }}" width="100">
    </a>

    <a href="{{ url('cart.page') }}" class="relative">
        <i class="fa fa-shopping-cart"></i>
        <span class="absolute -top-2 -right-2 bg-red-500 text-white text-xs px-2 rounded-full">2</span>
    </a>

    <x-sidebar />

</div>


</header>
</div>
