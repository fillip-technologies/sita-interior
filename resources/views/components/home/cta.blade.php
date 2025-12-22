<section class="relative  overflow-hidden">

    <div class="max-w-7xl mx-auto px-6 py-28">
        <div class="grid lg:grid-cols-2 gap-16 items-center">

            <!-- LEFT : VIDEO -->
            <div class="relative">
                <div class="overflow-hidden  shadow-xl">
                    <video
                        class="w-full h-[520px] object-cover"
                        autoplay
                        muted
                        loop
                        playsinline
                        poster="{{ asset('images/video-poster.jpg') }}">
                        <source src="{{ asset('images/video/sita-video.mp4') }}" type="video/mp4" />
                        Your browser does not support the video tag.
                    </video>

                </div>

                <!-- subtle blue glow -->
                <div class="absolute -bottom-24 -left-24 w-[420px] h-[420px]
                    bg-[#1434A4]/10 rounded-full blur-3xl"></div>
            </div>

            <!-- RIGHT : CONTENT -->
            <div class="max-w-xl">
                <span class="inline-block text-sm tracking-[0.35em] uppercase text-neutral-500">
                    Sita Interiors
                </span>

                <h2 class="mt-6 text-4xl md:text-5xl font-semibold text-neutral-900 leading-tight">
                    Get Your Favorite
                    <span class="block text-[#1434A4]">Interior Design</span>
                </h2>

                <p class="mt-6 text-lg text-neutral-600 leading-relaxed">
                    Have a vision for your home or workspace?
                    Let our designers craft a space that feels personal,
                    functional, and timeless.
                </p>

                <!-- CTA -->
                <div class="mt-10">
                    <a
                        href="/contact"
                        class="inline-flex items-center gap-3 px-10 py-4 rounded-full
                   bg-[#1434A4] text-white text-lg font-medium
                   hover:bg-[#0f2c8c]
                   hover:shadow-[0_12px_40px_rgba(20,52,164,0.35)]
                   transition">
                        Start Your Project
                        <span class="text-xl">→</span>
                    </a>
                </div>

                <p class="mt-8 text-sm text-neutral-500 tracking-wide">
                    Residential • Commercial • Turnkey Interiors
                </p>
            </div>

        </div>
    </div>
</section>