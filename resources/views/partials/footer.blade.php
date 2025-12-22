<footer class="relative text-white overflow-hidden">

    <!-- Background -->
    <div class="absolute inset-0 z-0">
        <img
            src="{{ asset('images/footer-background.avif') }}"
            alt="Sita Interior Footer"
            class="w-full h-full object-cover object-center" />
        <div class="absolute inset-0 bg-black/75"></div>
    </div>

    <!-- Content -->
    <div class="relative z-10 max-w-7xl mx-auto px-6 py-24">

        <!-- Top Section -->
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-20 items-start">

            <!-- LEFT : Brand -->
            <div>
                <h2 class="text-[64px] sm:text-[88px] lg:text-[110px]
                           font-bold leading-none tracking-tight">
                    Sita
                    <br />
                    <span class="text-white/60">Interior</span>
                </h2>

                <p class="mt-8 max-w-md text-white/70 leading-relaxed">
                    Thoughtfully designed interiors that balance aesthetics,
                    functionality, and timeless comfort.
                </p>
            </div>

            <!-- RIGHT : Navigation + Social -->
            <div class="flex flex-col justify-between h-full">

                <!-- Navigation -->
                <nav class="grid grid-cols-2 sm:grid-cols-3 gap-y-6 gap-x-10 text-sm font-medium">
                    <a href="/about" class="text-white/70 hover:text-white transition">About</a>
                    <a href="/projects" class="text-white/70 hover:text-white transition">Projects</a>
                    <a href="/services" class="text-white/70 hover:text-white transition">Services</a>
                    <a href="/blog" class="text-white/70 hover:text-white transition">Blog</a>
                    <a href="/contact" class="text-white/70 hover:text-white transition">Contact</a>
                </nav>

                <!-- Social -->
                <div class="mt-12 flex items-center gap-4">
                    <a href="#" class="w-10 h-10 rounded-full border border-white/30
                                      flex items-center justify-center
                                      text-white/70 hover:text-white hover:border-white transition">
                        <i class="fa-brands fa-instagram"></i>
                    </a>
                    <a href="#" class="w-10 h-10 rounded-full border border-white/30
                                      flex items-center justify-center
                                      text-white/70 hover:text-white hover:border-white transition">
                        <i class="fa-brands fa-facebook-f"></i>
                    </a>
                    <a href="#" class="w-10 h-10 rounded-full border border-white/30
                                      flex items-center justify-center
                                      text-white/70 hover:text-white hover:border-white transition">
                        <i class="fa-brands fa-x-twitter"></i>
                    </a>
                    <a href="#" class="w-10 h-10 rounded-full border border-white/30
                                      flex items-center justify-center
                                      text-white/70 hover:text-white hover:border-white transition">
                        <i class="fa-brands fa-linkedin-in"></i>
                    </a>
                </div>

            </div>
        </div>

        <!-- Bottom -->
        <div class="mt-20 pt-8 border-t border-white/20
                    flex flex-col sm:flex-row
                    justify-between items-start sm:items-center
                    gap-4 text-sm text-white/50">

            <span>© {{ date('Y') }} Sita Interior. All rights reserved.</span>

            <div class="flex gap-6">
                <a href="#" class="hover:text-white transition">Privacy Policy</a>
                <a href="#" class="hover:text-white transition">Terms & Conditions</a>
            </div>

            <span class="hidden sm:inline-block text-white/30">|</span>

            <span class="text-white/60">
                Designed &amp; Developed by
                <a href="https://filliptechnologies.com"
                    target="_blank"
                    class="hover:text-white underline underline-offset-4 transition">
                    Fillip Technologies
                </a>
            </span>

        </div>



    </div>
</footer>