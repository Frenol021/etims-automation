<div>
    <div class="sidenav canvas-sidebar bg-white" wire:ignore>
        <div class="canvas-overlay">
        </div>
        <div class="pt-5 pb-7 card border-0 h-100">
            <div class="d-flex align-items-center card-header border-0 py-0 pl-8 pr-7 mb-9 bg-transparent">
                <a href="{{ route('index') }}" class="d-block w-179px">
                    <img src="{{ asset('assets/images/logo.png') }}" alt="{{ config('app.name') }}">
                </a>
                <span class="canvas-close d-inline-block text-right fs-24 ml-auto lh-1 text-primary"><i
                        class="fal fa-times"></i></span>
            </div>
            <div class="overflow-y-auto pb-6 pl-8 pr-7 card-body pt-0">
                <ul class="navbar-nav main-menu px-0 ">
                    <li aria-haspopup="true" aria-expanded="false" class="nav-item dropdown py-1 px-0">
                        <a class="nav-link dropdown-toggle p-0" href="{{ route('index') }}">
                            Home
                            <span class="caret"></span>
                        </a>
                    </li>
                    <li aria-haspopup="true" aria-expanded="false" class="nav-item dropdown py-1 px-0">
                        <a class="nav-link dropdown-toggle p-0" href="{{ route('about.us') }}">
                            About Us
                            <span class="caret"></span>
                        </a>
                    </li>
                    <li aria-haspopup="true" aria-expanded="false" class="nav-item dropdown py-1 px-0">
                        <a class="nav-link dropdown-toggle p-0" href="{{ route('shop') }}" data-toggle="dropdown">
                            Shop
                            <span class="caret"></span>
                        </a>
                        <div class="dropdown-menu p-0 dropdown-menu-listing x-animated x-fadeInUp">
                            <a href="{{ route('shop') }}">
                                <h6 class="text-secondary fs-13 my-3">
                                    <b>ALL</b>
                                </h6>
                            </a>
                            @foreach ($categories as $category)
                                <a class="nav-link dropdown-toggle p-0" href="#" data-toggle="dropdown">
                                    <h6 class="text-secondary fs-13 my-3">
                                        <b>{{ $category->name }}</b>
                                    </h6>
                                    <span class="caret"></span>
                                </a>
                                <ul class="dropdown-menu pt-3 pb-0 pb-xl-3 x-animated x-fadeInUp">
                                    @foreach ($category->sub_categories->take(8) as $sub_category)
                                        <li class="dropdown-item">
                                            <a class="dropdown-link"
                                               href="{{ route('sub.category.shop', ['slug' => $sub_category->slug]) }}">
                                                {{ $sub_category->name }}
                                            </a>
                                        </li>
                                    @endforeach
                                </ul>
                            @endforeach
                        </div>
                    </li>
                    <li aria-haspopup="true" aria-expanded="false" class="nav-item dropdown py-1 px-0">
                        <a class="nav-link dropdown-toggle p-0" href="{{ route('blog.list') }}">
                            Blogs
                            <span class="caret"></span>
                        </a>
                    </li>
                    <li aria-haspopup="true" aria-expanded="false" class="nav-item dropdown py-1 px-0">
                        <a class="nav-link dropdown-toggle p-0" href="{{ route('faqs') }}">
                            FAQs
                            <span class="caret"></span>
                        </a>
                    </li>
                    <li aria-haspopup="true" aria-expanded="false" class="nav-item dropdown py-1 px-0">
                        <a class="nav-link dropdown-toggle p-0" href="{{ route('contact.us') }}">
                            Contact
                            <span class="caret"></span>
                        </a>
                    </li>
                    <li aria-haspopup="true" aria-expanded="false" class="nav-item dropdown py-1 px-0">
                        <a class="nav-link dropdown-toggle p-0" href="{{ route('login') }}">
                            Sign In/Sign Up
                            <span class="caret"></span>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="overflow-y-auto pb-6 pl-8 pr-7 card-body pt-0">
                <a href="{{ route('cart.page') }}">
                    <h3 class="text-center"><span class="fa fa-shopping-basket"></span><sup><span
                                class="badge badge-primary">{{ number_format($cartCount) }}</span></sup></h3>
                </a>
            </div>
            <div class="card-footer bg-transparent border-0 mt-auto pl-8 pr-7 pb-0 pt-4">
                <ul class="list-inline d-flex align-items-center mb-3">
                    <li class="list-inline-item mr-4"><a href="{{ env('BIZ_FACEBOOK_URL') }}" target="_blank"
                                                         class="fs-20 lh-1"><i
                                class="fab fa-facebook-f"></i></a>
                    </li>
                    <li class="list-inline-item mr-4"><a href="{{ env('BIZ_INSTAGRAM_URL') }}" target="_blank"
                                                         class="fs-20 lh-1"><i
                                class="fab fa-instagram"></i></a>
                    </li>
                    <li class="list-inline-item"><a href="{{ env('BIZ_TIKTOK_URL') }}" target="_blank"
                                                    class="fs-20 lh-1"><i class="fab fa-tiktok"></i></a>
                    </li>
                </ul>
                <p class="mb-0 text-gray">
                    © {{ date('Y') }} {{ config('app.name') }}.<br>
                    All rights reserved.
                </p>
            </div>
        </div>
    </div>
</div>
