<!-- Contact Us -->
<div class="max-w-7xl mx-auto px-4 py-16">
    <h2 class="text-3xl font-semibold mb-6">Contact Us</h2>

    <p class="text-gray-700 text-lg mb-8">
        We would love to hear from you! Whether you have a question about our solutions or need assistance, our team is here to help.
    </p>

    <div class="grid grid-cols-1 md:grid-cols-2 gap-8">

        <!-- CONTACT FORM -->
        <div>
            <h3 class="text-xl font-semibold mb-3">Send Us a Message</h3>

            <form action="{{ route('send.email') }}" method="POST" class="space-y-4">
                @csrf
                <div>
                    <label for="name" class="block text-sm font-semibold">Name</label>
                    <input type="text" id="name" name="name" class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-gray-800">
                </div>

                <div>
                    <label for="email" class="block text-sm font-semibold">Email</label>
                    <input type="email" id="email" name="email" class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-gray-800">
                </div>

                <div>
                    <label for="message" class="block text-sm font-semibold">Message</label>
                    <textarea id="message" name="message" rows="4" class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-gray-800"></textarea>
                </div>

                <button type="submit" class="bg-gray-900 text-white px-5 py-2 rounded-lg hover:bg-blue-600 transition">Send Message</button>
            </form>
        </div>

        <!-- CONTACT INFORMATION -->
        <div>
            <h3 class="text-xl font-semibold mb-3">Get in Touch</h3>

            <p class="text-sm leading-relaxed mb-4">
                You can reach us through the following channels:
            </p>

            <ul class="space-y-2 text-sm">
                <li><strong>Email:</strong> <a href="mailto:{{ env('BIZ_EMAIL') }}" class="text-blue-600 hover:underline">{{ env('BIZ_EMAIL') }}</a></li>
                <li><strong>Phone:</strong> <a href="tel:{{ env('BIZ_PHONE_NUMBER') }}" class="text-blue-600 hover:underline">{{ env('BIZ_PHONE_NUMBER') }}</a></li>
            </ul>
        </div>


    </div>
</div>
