<section class="relative bg-white py-28">
    <div class="max-w-7xl mx-auto px-6">

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-20 items-center">

            <!-- ================= LEFT : CONTENT ================= -->
            <div>

                <!-- Small label -->
                <span class="text-sm tracking-[0.3em] uppercase text-[#1434A4]">
                    About Us
                </span>

                <!-- Heading -->
                <h2 class="mt-6 text-4xl sm:text-5xl font-semibold text-neutral-900 leading-tight">
                    Spaces designed around
                    <br />
                    <span class="text-[#1434A4]">real people & real living</span>
                </h2>

                <!-- Brand story -->
                <p class="mt-8 text-lg text-neutral-600 leading-relaxed">
                    We believe great interiors begin with listening.
                    Understanding your lifestyle, preferences, and everyday needs
                    allows us to create spaces that feel personal, functional, and timeless.
                </p>

                <p class="mt-4 text-lg text-neutral-600 leading-relaxed">
                    Our approach blends thoughtful design, careful customization,
                    and seamless execution — ensuring every detail works beautifully together.
                </p>

                <!-- CTA -->
                <a
                    href="/about"
                    class="inline-flex items-center gap-3 mt-10
                           text-[#1434A4] font-medium text-lg
                           hover:gap-4 transition-all">
                    Know More About Us
                    <span class="text-xl">→</span>
                </a>

            </div>

            <!-- ================= RIGHT : IMAGE ================= -->
            <div class="relative">

                <!-- optional soft blue accent -->
                <div class="absolute -top-6 -left-6 w-full h-full bg-[]/10 rounded-3xl"></div>

                <img
                    src="{{ asset('images/hero-section.avif') }}"
                    alt="Interior Design Studio"
                    class="relative z-10 w-full h-[420px]
                           object-cover 
                           shadow-[0_30px_80px_rgba(0,0,0,0.12)]" />
            </div>

        </div>

    </div>
</section>