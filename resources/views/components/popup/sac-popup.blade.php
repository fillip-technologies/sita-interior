<style>
    [x-cloak] {
        display: none !important;
    }
</style>

<div
    x-data="{ open: false }"
    x-init="setTimeout(() => open = true, 60000)"
    x-cloak
    x-show="open"
    x-transition.opacity
    class="fixed inset-0 z-[9998] flex items-start sm:items-center justify-center
           bg-black/70 px-4 pt-6 sm:pt-0">

    <!-- POPUP CARD -->
    <div
        class="relative w-full max-w-3xl bg-white rounded-2xl sm:rounded-3xl
               shadow-[0_20px_60px_rgba(0,0,0,0.25)] overflow-hidden"
        @click.outside="open = false">

        <!-- TOP ACCENT BAR -->
        <div class="h-1 w-full bg-gradient-to-r from-[#1434A4] via-[#1f4ed8] to-[#1434A4]"></div>

        <!-- CLOSE -->
        <button
            @click="open = false"
            class="absolute top-4 right-4 sm:top-6 sm:right-6
                   w-9 h-9 flex items-center justify-center
                   rounded-full bg-gray-100 text-gray-500 hover:text-black">
            ✕
        </button>

        <!-- CONTENT -->
        <div class="p-8 sm:p-12">

            <!-- BRAND ROW -->
            <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-6 mb-8">

                <div class="flex items-center gap-4">
                    <div class="w-14 h-14 rounded-full border-2 border-[#1434A4]
                                text-[#1434A4] flex items-center justify-center
                                font-bold tracking-wide">
                        SAC
                    </div>

                    <div>
                        <p class="text-xs tracking-[0.25em] text-gray-500">
                            SITA ARCHITECTURAL CONSULTANCY
                        </p>
                        <p class="text-sm text-gray-400">
                            Architectural & Project Consultancy
                        </p>
                    </div>
                </div>

                <span class="inline-block text-xs px-3 py-1 rounded-full
                             bg-[#1434A4]/10 text-[#1434A4]">
                    New Vertical
                </span>
            </div>

            <!-- HEADLINE -->
            <h2 class="text-2xl sm:text-4xl font-light leading-tight mb-6">
                Beyond Interiors<br>
                <span class="font-semibold text-[#1434A4]">
                    Architectural Expertise That Shapes Tomorrow
                </span>
            </h2>

            <!-- DIVIDER -->
            <div class="w-20 h-[2px] bg-[#1434A4]/40 mb-6"></div>

            <!-- DESCRIPTION -->
            <p class="text-gray-600 text-sm sm:text-base leading-relaxed max-w-2xl">
                <strong>SITA ARCHITECTURAL CONSULTANCY (SAC)</strong> is our dedicated architectural wing for
                clients seeking architectural planning, structural design, and end-to-end
                project consultancy — built on <strong>precision, innovation, and trust</strong>.
            </p>

            <!-- CTA -->
            <div class="mt-10 flex flex-col sm:flex-row gap-4">

                <a
                    href="https://sitaarchitecturalconsultancy.com/"
                    target="_blank"
                    class="inline-flex items-center justify-center
                           px-8 py-4 rounded-xl
                           bg-[#1434A4] text-white font-medium
                           hover:bg-blue-800 transition">
                    Visit SAC Website →
                </a>

                <a
                    href="/contact"
                    class="inline-flex items-center justify-center
                           px-8 py-4 rounded-xl
                           border border-gray-300 text-gray-700
                           hover:border-[#1434A4] hover:text-[#1434A4] transition">
                    Talk to Our Architects
                </a>
            </div>

        </div>
    </div>
</div>