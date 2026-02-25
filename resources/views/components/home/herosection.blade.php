<section
    id="hero"
    class="relative min-h-[60vh] md:min-h-screen overflow-hidden">

    <!-- Background Slider -->
    <div class="absolute inset-0 -z-10">
        <div class="swiper heroSwiper w-full h-full">
            <div class="swiper-wrapper h-full">

                <!-- Slide 1 -->
                <div class="swiper-slide h-full">
                    <img src="{{ asset('images/inter.jpg.PNG') }}"
                        class="w-full h-full object-cover"
                        alt="Interior 1" />
                </div>

                <!-- Slide 2 -->
                <div class="swiper-slide h-full">
                    <img src="{{ asset('images/BEDROOM.PNG') }}"
                        class="w-full h-full object-cover"
                        alt="Interior 2" />
                </div>

                <!-- Slide 3 -->
                <div class="swiper-slide h-full">
                    <img src="{{ asset('images/livingroom-2.png') }}"
                        class="w-full h-full object-cover"
                        alt="Interior 3" />
                </div>

                <div class="swiper-slide h-full">
                    <img src="{{ asset('images/proj.PNG') }}"
                        class="w-full h-full object-cover"
                        alt="Interior 3" />
                </div>

                <div class="swiper-slide h-full">
                    <img src="{{ asset('images/livingroom-1.PNG') }}"
                        class="w-full h-full object-cover"
                        alt="Interior 3" />
                </div>

            </div>
        </div>

        <!-- Overlay -->
        <div class="absolute inset-0 bg-black/50"></div>
    </div>

    <!-- CONTENT -->
    <div class="relative z-10 min-h-screen flex items-center">
        <div
            class="max-w-7xl mx-auto px-8 w-full
                   flex flex-col md:flex-row justify-between items-end gap-10">

            <!-- LEFT TEXT -->
            <div class="max-w-3xl text-white">
                <h1 class="text-[40px] sm:text-[55px] lg:text-[65px]
                           font-semibold leading-tight tracking-tight">
                    Where Aesthetics Meet
                    <br />Purposeful Living
                </h1>

                <p class="mt-6 text-base sm:text-lg text-gray-200 max-w-xl">
                    We create interiors that blend timeless elegance with modern
                    functionality, reflecting your story and lifestyle.
                </p>
            </div>

            <!-- RIGHT SIDE GLOW LOGO -->
            <!-- RIGHT SIDE WHITE GLOW LOGO -->
            <div class="hidden md:flex items-center justify-center relative w-[300px] lg:w-[360px]">

                <!-- Soft White Glow -->
                <div class="absolute w-[260px] h-[260px] rounded-full 
                bg-white opacity-20 blur-3xl">
                </div>

                <!-- Extra Light Aura -->
                <div class="absolute w-[220px] h-[220px] rounded-full 
                bg-white opacity-10 blur-2xl">
                </div>

                <!-- Logo -->
                <img src="{{ asset('images/sita-interior.png') }}"
                    class="relative z-10 max-w-[620px] 
                drop-shadow-[0_0_40px_rgba(255,255,255,0.8)]"
                    alt="Sita Interior Logo" />
            </div>

        </div>
    </div>
</section>

<!-- Swiper JS -->
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        new Swiper(".heroSwiper", {
            loop: true,
            effect: "fade",
            speed: 2000,
            autoplay: {
                delay: 3500,
                disableOnInteraction: false,
            },
        });
    });
</script>