<section
    id="hero"
    class="relative min-h-[60vh] md:min-h-[105vh] overflow-hidden pt-40">

    <!-- Background -->
    <div class="absolute inset-0 -z-10">
        <img
            src="{{ asset('images/inter.jpg') }}"
            class="w-full h-full object-cover object-center"
            alt="Hero" />

        <div class="absolute inset-0 bg-black/20"></div>


    </div>

    <!-- CONTENT -->
    <div class="relative z-10 h-full flex items-center pt-40 pb-24">
        <div
            class="max-w-7xl mx-auto px-8 w-full
                   flex justify-between items-end gap-10">

            <!-- LEFT TEXT -->
            <div class="max-w-3xl text-white">
                <h1
                    class="text-[40px] sm:text-[60px] lg:text-[60px]
                           font-semibold leading-tight tracking-tight">
                    Where Aesthetics Meet
                    <br />Purposeful Living
                </h1>

                <p class="mt-6 text-base sm:text-lg text-gray-200 max-w-xl">
                    We create interiors that blend timeless elegance with modern
                    functionality, reflecting your story and lifestyle.
                </p>
            </div>

            <!-- RIGHT CARD -->
            <div
                class="hidden md:block w-[320px] lg:w-[360px]
                       bg-white/10 backdrop-blur-xl
                       border border-white/20 rounded-2xl
                       overflow-hidden shadow-xl">
                <img
                    src="{{ asset('images/proj.jpg') }}"
                    class="w-full h-[220px] object-cover"
                    alt="Project" />

                <div class="p-4 text-white flex items-center justify-between">
                    <span class="text-sm font-medium">Our Recent Projects</span>
                    <span class="text-xl">→</span>
                </div>
            </div>

        </div>
    </div>
</section>