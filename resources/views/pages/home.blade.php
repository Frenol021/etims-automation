@extends('layouts.app')

@section('content')
    <!-- background image -->
    <!-- sliders -->
    <!-- <section class="swiper hero-slider">

        <div class="swiper-wrapper">

            @foreach ($sliders as $slider)
    <div class="swiper-slide">

                <div class="bg-cover bg-center py-16 lg:py-24"
                     style="background-image: url('{{ asset($slider['image']) }}');">

                    <div class="max-w-7xl mx-auto px-4">

                        <div class="bg-white shadow-xl rounded-xl max-w-md p-8">

                            <h1 class="text-3xl md:text-5xl font-semibold leading-tight mb-4">
                                Etims Integration
                            </h1>

                            <p class="text-gray-600 text-lg leading-relaxed mb-6">
                                We are dedicated to providing seamless integration solutions for your business needs.
                            </p>

                            <a href="{{ url('shop') }}"
                               class="inline-block bg-gray-900 text-white px-6 py-3 rounded-lg hover:bg-blue-600 transition">
                                Contact Us
                            </a>

                        </div>

                    </div>

                </div>

            </div>
    @endforeach

        </div>

        <!-- dots -->
    <div class="swiper-pagination"></div>

    </section>

    <section class="relative w-full h-[80vh] overflow-hidden">

        <!-- Background Video -->
        <video autoplay muted loop playsinline class="absolute inset-0 w-full h-full object-cover">
            <source src="{{ asset('assets/videos/hero.mp4') }}" type="video/mp4">
        </video>

        <!-- Dark overlay -->
        <div class="absolute inset-0 bg-black/50"></div>

        <!-- Content -->
        <div class="relative z-10 max-w-7xl mx-auto px-4 h-full flex items-center">

            <div class="bg-white/90 backdrop-blur rounded-xl shadow-xl max-w-md p-8">

                <h1 class="text-3xl md:text-5xl font-semibold mb-4">
                    Etims Integration
                </h1>

                <p class="text-gray-700 text-lg mb-6">
                    We provide seamless integration solutions for your business needs.
                </p>

                <a href="{{ url('shop') }}"
                    class="inline-block bg-gray-900 text-white px-6 py-3 rounded-lg hover:bg-blue-600 transition">
                    Contact Us
                </a>

            </div>

        </div>

    </section>
<!-- end of background image -->
    <hr class="my-8">

<!-- include/ call about us page -->
@include('pages.about-us')

    <hr class="my-8">
<div class="rounded-lg shadow p-6 md:p-8" style="background-color: #eff8f4;">

    <h2 class="text-2xl font-semibold mb-3">
        Our Partners
    </h2>

    <p class="text-gray-700 max-w-2xl mb-8">
        We are proud to partner with leading companies in the industry to deliver the best solutions for our clients.
    </p>

    <div class="overflow-hidden py-6 bg-gray-50 rounded-xl">

        <div class="partners-track flex items-center">

            {{-- ORIGINAL --}}
            @foreach ($partners as $partner)
                <div class="partner-card">
                    <div class="bg-white rounded-lg shadow p-4 flex items-center justify-center">
                        <img src="{{ asset($partner['logo']) }}" alt="{{ $partner['name'] }} Logo">
                    </div>
                </div>
            @endforeach

            {{-- DUPLICATE --}}
            @foreach ($partners as $partner)
                <div class="partner-card">
                    <div class="bg-white rounded-lg shadow p-4 flex items-center justify-center">
                        <img src="{{ asset($partner['logo']) }}" alt="{{ $partner['name'] }} Logo">
                    </div>
                </div>
            @endforeach

        </div>
    </div>

</div>
@include('pages.contact-us')
@endsection
