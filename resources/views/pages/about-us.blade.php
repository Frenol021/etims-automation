<!-- About Us Section -->

<section class="py-16 lg:py-24">
<!-- image on the leftt and content on the right -->
<div class="max-w-7xl mx-auto px-4 flex flex-col md:flex-row items-center gap-8">

    <div class="md:w-1/2">
        <img src="{{ asset('assets/images/about2.jpg') }}" alt="About Us" class="w-full h-auto rounded-lg shadow-md">
    </div>

    <div class="md:w-1/2">
        <h2 class="text-3xl md:text-5xl font-semibold mb-4">What Defines us?</h2>
        <p class="text-gray-600 text-lg leading-relaxed mb-6">
            We are a team of dedicated professionals committed to delivering innovative solutions for your business.
        </p>
        <a href="{{ url('contact') }}"
           class="inline-block bg-gray-900 text-white px-6 py-3 rounded-lg hover:bg-blue-600 transition">
            Contact Us
        </a>
    </div>
</div>
</section>
