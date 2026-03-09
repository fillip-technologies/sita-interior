@extends('layouts.app')

@section('content')

<!-- Hero Section -->
<section class="bg-[#f8f5f2] py-16">
    <div class="max-w-7xl mx-auto px-6 text-center">
        <h1 class="text-4xl md:text-5xl font-bold text-gray-800">
            Contact Sita Interior
        </h1>
        <p class="mt-4 text-gray-600 text-lg">
            Let’s transform your space into something beautiful.
        </p>
    </div>
</section>

<!-- Contact Section -->
<section class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-6 grid md:grid-cols-2 gap-12">

        <!-- Contact Form -->
        <div class="bg-[#f8f5f2] p-8 rounded-2xl shadow-md">
            <h2 class="text-2xl font-semibold text-gray-800 mb-6">
                Send Us a Message
            </h2>

            <form method="POST" action="#">
                @csrf

                <div class="mb-5">
                    <label class="block text-gray-600 mb-2">Full Name</label>
                    <input type="text" name="name"
                        class="w-full px-4 py-3 border rounded-lg focus:outline-none focus:ring-2 focus:ring-gray-800"
                        placeholder="Your Name">
                </div>

                <div class="mb-5">
                    <label class="block text-gray-600 mb-2">Email Address</label>
                    <input type="email" name="email"
                        class="w-full px-4 py-3 border rounded-lg focus:outline-none focus:ring-2 focus:ring-gray-800"
                        placeholder="Your Email">
                </div>

                <div class="mb-5">
                    <label class="block text-gray-600 mb-2">Phone Number</label>
                    <input type="text" name="phone"
                        class="w-full px-4 py-3 border rounded-lg focus:outline-none focus:ring-2 focus:ring-gray-800"
                        placeholder="Your Phone">
                </div>

                <div class="mb-5">
                    <label class="block text-gray-600 mb-2">Your Message</label>
                    <textarea name="message" rows="4"
                        class="w-full px-4 py-3 border rounded-lg focus:outline-none focus:ring-2 focus:ring-gray-800"
                        placeholder="Tell us about your project"></textarea>
                </div>

                <button type="submit"
                    class="w-full bg-gray-900 text-white py-3 rounded-lg hover:bg-gray-700 transition">
                    Send Message
                </button>
            </form>
        </div>

        <!-- Contact Info -->
        <div>
            <h2 class="text-2xl font-semibold text-gray-800 mb-6">
                Get in Touch
            </h2>

            <div class="space-y-6 text-gray-600">

                <div>
                    <h3 class="font-semibold text-gray-800">📍 Office Address</h3>
                    <p>Hanuman Nagar, Kankarbagh 90 Feet
                        Beside Indian Bank
                        Patna - 800020, Bihar</p>
                </div>

                <div>
                    <h3 class="font-semibold text-gray-800">📞 Phone</h3>
                    <p>+91 9204152266</p>
                </div>

                <div>
                    <h3 class="font-semibold text-gray-800">📧 Email</h3>
                    <p>sitainteriorpatna@gmail.com</p>
                </div>

                <div>
                    <h3 class="font-semibold text-gray-800">⏰ Working Hours</h3>
                    <p>Mon – Sat : 10:00 AM – 7:00 PM</p>
                </div>

            </div>

            <!-- Map -->
            <div class="mt-10 rounded-2xl overflow-hidden shadow-md">
                <!-- Map -->
                <div class="mt-12 rounded-xl overflow-hidden border border-white/20">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3256.5419109862023!2d85.15285147850513!3d25.585105957792564!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39ed590050917f9d%3A0xe0d7e2f4264fed30!2sSita%20architectural%20consultancy%20(SAC)!5e1!3m2!1sen!2sin!4v1773048936893!5m2!1sen!2sin"
                        class="w-full h-[220px]"
                        style="border:0;"
                        loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade">
                    </iframe>
                </div>
            </div>
        </div>

    </div>
</section>

@endsection