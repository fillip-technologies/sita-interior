<header class="fixed top-6 inset-x-0 z-[9999]">
    <div class="max-w-7xl mx-auto px-4 sm:px-6">
        <div
            class="flex items-center justify-between
                   h-16 sm:h-18
                   px-6 sm:px-10
                   rounded-full
                   bg-white/90 backdrop-blur-md
                   border border-gray-200
                   shadow-[0_8px_30px_rgba(0,0,0,0.08)]
                   transition-all duration-300">

            <!-- LOGO -->
            <a href="{{ url('/') }}" class="flex items-center h-full">

                <div class="flex items-center justify-center h-full">
                    <img
                        src="{{ asset('images/sita-interior.png') }}"
                        alt="Sita Interior Logo"
                        class="h-10 w-auto object-contain">
                </div>

                <span class="ml-2 text-xl font-semibold tracking-wide text-gray-900 uppercase">
                    Sita Interior
                </span>
            </a>

            <!-- DESKTOP NAV -->
            <nav class="hidden lg:flex items-center gap-8 text-[15px] font-medium text-gray-600">
                <a href="{{ route('home') }}" class="hover:text-black transition">Home</a>
                <a href="{{ route('services')}}" class="hover:text-black transition">Services</a>
                <a href="{{ route('projects') }}" class="hover:text-black transition">Projects</a>
                <a href="{{route('about') }}" class="hover:text-black transition">About</a>
            </nav>

            <!-- RIGHT -->
            <div class="flex items-center gap-3">
                <a
                    href="{{ route('contact') }}"
                    class="hidden sm:inline-flex px-6 py-2.5 rounded-full
                           bg-black text-white text-sm font-medium
                           hover:bg-gray-800 transition duration-300">
                    Contact
                </a>

                <!-- Hamburger -->
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
</header>