<!-- HEADER -->
<header class="fixed top-6 inset-x-0 z-[9999]">

    <div class="max-w-7xl mx-auto px-4 sm:px-6">

        <div
            class="flex items-center justify-between
            h-16
            px-6 sm:px-10
            rounded-full
            bg-white/90 backdrop-blur-md
            border border-gray-200
            shadow-[0_8px_30px_rgba(0,0,0,0.08)]">

            <!-- LOGO -->
            <a href="{{ url('/') }}" class="flex items-center">

                <img
                    src="{{ asset('images/sita-interior.png') }}"
                    alt="Sita Interior Logo"
                    class="h-16 w-auto object-contain">

                <span class="text-xl font-semibold text-gray-900 uppercase -ml-3 mt-4">
                    SITA INTERIOR
                </span>

            </a>

            <!-- DESKTOP NAV -->
            <nav class="hidden lg:flex items-center gap-8 text-[15px] font-medium text-gray-600">

                <a href="{{ route('home') }}" class="hover:text-black transition">
                    Home
                </a>

                <a href="{{ route('services') }}" class="hover:text-black transition">
                    Services
                </a>

                <a href="{{ route('projects') }}" class="hover:text-black transition">
                    Projects
                </a>

                <a href="{{ route('about') }}" class="hover:text-black transition">
                    About
                </a>

            </nav>

            <!-- RIGHT -->
            <div class="flex items-center gap-3">

                <a
                    href="{{ route('contact') }}"
                    class="hidden sm:inline-flex px-6 py-2.5 rounded-full
                    bg-black text-white text-sm font-medium
                    hover:bg-gray-800 transition">
                    Contact
                </a>

                <!-- HAMBURGER -->
                <button
                    onclick="toggleMenu()"
                    class="lg:hidden p-2 rounded-full hover:bg-gray-100 text-xl">
                    ☰
                </button>

            </div>

        </div>

    </div>

</header>


<!-- MOBILE MENU -->
<div
    id="mobileMenu"
    class="hidden fixed top-28 left-0 w-full px-6 z-[9998] lg:hidden">

    <div
        class="bg-white rounded-2xl shadow-xl border border-gray-200 p-6">

        <nav
            class="flex flex-col gap-6 text-gray-700 text-lg font-medium">

            <a href="{{ route('home') }}" class="hover:text-black">
                Home
            </a>

            <a href="{{ route('services') }}" class="hover:text-black">
                Services
            </a>

            <a href="{{ route('projects') }}" class="hover:text-black">
                Projects
            </a>

            <a href="{{ route('about') }}" class="hover:text-black">
                About
            </a>

            <a
                href="{{ route('contact') }}"
                class="mt-4 text-center bg-black text-white py-3 rounded-full">
                Contact
            </a>

        </nav>

    </div>

</div>


<!-- SCRIPT -->
<script>
    function toggleMenu() {

        let menu = document.getElementById("mobileMenu");

        menu.classList.toggle("hidden");

    }
</script>