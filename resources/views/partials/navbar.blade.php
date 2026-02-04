<header class="fixed top-4 inset-x-0 z-[9999]">
    <div class="max-w-7xl mx-auto px-4 sm:px-6">
        <div
            class="flex items-center justify-between
             h-16 sm:h-20
             px-5 sm:px-10
             rounded-full
             bg-white
             shadow-[0_12px_40px_rgba(0,0,0,0.12)]
             transition-all duration-300">

            <!-- LOGO -->
            <span class="text-base sm:text-lg font-semibold text-gray-900">
                Sita<span class="text-gray-500">Interior</span>
            </span>

            <!-- DESKTOP NAV -->
            <nav class="hidden lg:flex items-center gap-10 text-[15px] font-medium text-gray-700">
                <a href="{{ route('home') }}" class="hover:text-black transition">Home</a>
                <a href="{{ route('services')}}" class="hover:text-black transition">
                    Services
                </a>


                <a href="{{ route('projects') }}" class="hover:text-black transition">Projects</a>
                <a href="{{route('about') }}" class="hover:text-black transition">About</a>
            </nav>

            <!-- RIGHT -->
            <div class="flex items-center gap-3">
                <!-- CTA (hide on small mobile if needed) -->
                <a
                    href="/contact"
                    class="hidden sm:inline-flex px-5 py-2 rounded-full
                 bg-black text-white text-sm
                 hover:bg-black/90 transition">
                    Contact
                </a>

                <!-- hamburger -->
                <button
                    id="menuBtn"
                    class="lg:hidden p-2 rounded-full hover:bg-gray-100 transition">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2"
                        viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                </button>
            </div>

        </div>
    </div>

    <!-- ================= MOBILE MENU ================= -->
    <div
        id="mobileMenu"
        class="hidden lg:hidden mt-3 mx-4 sm:mx-6
           rounded-3xl bg-white
           shadow-[0_20px_50px_rgba(0,0,0,0.15)]
           px-6 py-6 space-y-5 text-sm font-medium">

        <a href="{{ route('home') }}" class="block hover:text-black">Home</a>
        <a href="{{ route('services') }}" class="block hover:text-black">Services</a>
        <a href="{{ route('projects') }}" class="block hover:text-black">Projects</a>
        <a href="{{ route('about') }}" class="block hover:text-black">About</a>

        <a
            href="/contact"
            class="block mt-4 text-center px-5 py-2 rounded-full
             bg-black text-white text-sm">
            Contact
        </a>
    </div>
</header>