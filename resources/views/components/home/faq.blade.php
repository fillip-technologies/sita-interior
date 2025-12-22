<section class="py-20 bg-neutral-50">
    <div class="max-w-5xl mx-auto px-6">

        <!-- SECTION HEADER -->
        <div class="text-center mb-14">
            <p class="text-sm tracking-widest text-[#1434A4] uppercase mb-3">
                FAQs
            </p>
            <h2 class="text-3xl sm:text-4xl font-semibold text-gray-900 mb-4">
                Frequently Asked Questions
            </h2>
            <p class="text-gray-600 max-w-2xl mx-auto">
                Everything you need to know about working with Sita Interior.
            </p>
        </div>

        <!-- FAQ LIST -->
        <div class="space-y-4">

            <!-- ITEM -->
            <div x-data="{ open: false }"
                class="bg-white rounded-2xl shadow-sm border">

                <button
                    @click="open = !open"
                    class="w-full flex justify-between items-center px-6 py-5 text-left">
                    <span class="font-medium text-gray-900">
                        What services does Sita Interior provide?
                    </span>
                    <span
                        :class="open ? 'rotate-45' : ''"
                        class="text-2xl text-[#1434A4] transition">
                        +
                    </span>
                </button>

                <div x-show="open" x-collapse class="px-6 pb-6 text-gray-600 text-sm leading-relaxed">
                    We provide end-to-end interior design solutions including residential,
                    commercial, office interiors, modular kitchens, space planning, and
                    execution management.
                </div>
            </div>

            <!-- ITEM -->
            <div x-data="{ open: false }"
                class="bg-white rounded-2xl shadow-sm border">

                <button
                    @click="open = !open"
                    class="w-full flex justify-between items-center px-6 py-5 text-left">
                    <span class="font-medium text-gray-900">
                        Do you offer customized interior designs?
                    </span>
                    <span
                        :class="open ? 'rotate-45' : ''"
                        class="text-2xl text-[#1434A4] transition">
                        +
                    </span>
                </button>

                <div x-show="open" x-collapse class="px-6 pb-6 text-gray-600 text-sm leading-relaxed">
                    Yes. Every design is tailored based on your lifestyle, budget,
                    space requirements, and personal preferences.
                </div>
            </div>

            <!-- ITEM -->
            <div x-data="{ open: false }"
                class="bg-white rounded-2xl shadow-sm border">

                <button
                    @click="open = !open"
                    class="w-full flex justify-between items-center px-6 py-5 text-left">
                    <span class="font-medium text-gray-900">
                        How long does an interior project usually take?
                    </span>
                    <span
                        :class="open ? 'rotate-45' : ''"
                        class="text-2xl text-[#1434A4] transition">
                        +
                    </span>
                </button>

                <div x-show="open" x-collapse class="px-6 pb-6 text-gray-600 text-sm leading-relaxed">
                    Project timelines depend on scope and size. On average,
                    residential projects take 6–12 weeks after design finalization.
                </div>
            </div>

            <!-- ITEM -->
            <div x-data="{ open: false }"
                class="bg-white rounded-2xl shadow-sm border">

                <button
                    @click="open = !open"
                    class="w-full flex justify-between items-center px-6 py-5 text-left">
                    <span class="font-medium text-gray-900">
                        Do you handle execution and site supervision?
                    </span>
                    <span
                        :class="open ? 'rotate-45' : ''"
                        class="text-2xl text-[#1434A4] transition">
                        +
                    </span>
                </button>

                <div x-show="open" x-collapse class="px-6 pb-6 text-gray-600 text-sm leading-relaxed">
                    Yes. We manage the complete execution process including
                    coordination, supervision, and quality checks to ensure
                    timely and precise delivery.
                </div>
            </div>

            <!-- ITEM -->
            <div x-data="{ open: false }"
                class="bg-white rounded-2xl shadow-sm border">

                <button
                    @click="open = !open"
                    class="w-full flex justify-between items-center px-6 py-5 text-left">
                    <span class="font-medium text-gray-900">
                        How can I get started with Sita Interior?
                    </span>
                    <span
                        :class="open ? 'rotate-45' : ''"
                        class="text-2xl text-[#1434A4] transition">
                        +
                    </span>
                </button>

                <div x-show="open" x-collapse class="px-6 pb-6 text-gray-600 text-sm leading-relaxed">
                    Simply contact us through our website or consultation form.
                    Our team will connect with you to understand your requirements
                    and guide you through the next steps.
                </div>
            </div>

        </div>

    </div>
</section>