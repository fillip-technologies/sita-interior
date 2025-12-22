<style>
    [x-cloak] {
        display: none !important;
    }
</style>

<div
    x-data="{ open: true, step: 1 }"
    x-cloak
    x-show="open"
    class="fixed inset-0 z-[9999] flex items-center justify-center bg-black/70 px-4">

    <!-- POPUP WRAPPER -->
    <div
        class="relative w-full max-w-4xl bg-white rounded-3xl shadow-2xl overflow-hidden"
        @click.outside="open = false">

        <!-- CLOSE -->
        <button
            @click="open = false"
            class="absolute top-5 right-5 text-gray-400 hover:text-black text-xl">
            ✕
        </button>

        <div class="grid grid-cols-1 md:grid-cols-2">

            <!-- LEFT BRAND -->
            <div class="hidden md:flex flex-col justify-between p-10 bg-[#1434A4] text-white">
                <div>
                    <div class="flex items-center gap-3 mb-10">
                        <div class="w-12 h-12 rounded-full bg-white text-[#1434A4] flex items-center justify-center font-bold text-lg">
                            S
                        </div>
                        <span class="text-xl font-semibold">Sita Interior</span>
                    </div>

                    <h3 class="text-3xl font-light leading-snug mb-4">
                        Thoughtful Interiors,<br>
                        Designed Around You
                    </h3>

                    <p class="text-white/80 text-sm leading-relaxed">
                        Personalized interior planning based on your space,
                        lifestyle and preferences — no spam, no pressure.
                    </p>
                </div>

                <div class="text-xs text-white/60">
                    Trusted by homeowners & businesses
                </div>
            </div>

            <!-- RIGHT FORM -->
            <div class="p-8 sm:p-10">

                <!-- STEP INDICATOR -->
                <div class="flex items-center gap-2 mb-5 text-xs sm:text-sm">

                    <div class="flex items-center gap-2">
                        <span
                            :class="step === 1 ? 'bg-[#1434A4] text-white' : 'bg-gray-200 text-gray-500'"
                            class="w-7 h-7 rounded-full flex items-center justify-center text-xs font-medium">
                            1
                        </span>
                        <span class="text-gray-500">Details</span>
                    </div>

                    <div class="flex-1 h-px bg-gray-200"></div>

                    <div class="flex items-center gap-2">
                        <span
                            :class="step === 2 ? 'bg-[#1434A4] text-white' : 'bg-gray-200 text-gray-500'"
                            class="w-7 h-7 rounded-full flex items-center justify-center text-xs font-medium">
                            2
                        </span>
                        <span class="text-gray-500">Contact</span>
                    </div>
                </div>

                <!-- STEP 1 -->
                <!-- STEP 1 -->
                <template x-if="step === 1">
                    <div>
                        <h2 class="text-2xl font-semibold mb-2">
                            Get Your Interior Plan
                        </h2>
                        <p class="text-gray-500 text-sm mb-6">
                            Share a few details to help us understand your space.
                        </p>

                        <form @submit.prevent="step = 2" class="space-y-4">

                            <input
                                required
                                placeholder="Full Name"
                                class="w-full rounded-xl border px-4 py-3 text-sm focus:ring-2 focus:ring-[#1434A4]" />

                            <input
                                type="email"
                                required
                                placeholder="Email Address"
                                class="w-full rounded-xl border px-4 py-3 text-sm focus:ring-2 focus:ring-[#1434A4]" />

                            <div class="relative">
                                <select
                                    required
                                    class="w-full rounded-xl border px-4 py-3 text-sm bg-white appearance-none focus:ring-2 focus:ring-[#1434A4]">
                                    <option value="">Space Type</option>
                                    <option>Home</option>
                                    <option>Office</option>
                                    <option>Commercial</option>
                                </select>

                                <!-- dropdown icon -->
                                <span class="pointer-events-none absolute right-4 top-1/2 -translate-y-1/2 text-gray-400">
                                    ▾
                                </span>
                            </div>


                            <button
                                class="w-full bg-[#1434A4] text-white py-3 rounded-xl font-medium hover:bg-blue-800 transition">
                                Continue →
                            </button>
                        </form>
                    </div>
                </template>


                <!-- STEP 2 -->
                <template x-if="step === 2">
                    <div>
                        <h2 class="text-2xl font-semibold mb-2">
                            Almost There
                        </h2>
                        <p class="text-gray-500 text-sm mb-6">
                            Just one last step to receive your plan.
                        </p>

                        <form method="POST" action="" class="space-y-4">
                            @csrf

                            <div class="relative">
                                <select
                                    required
                                    class="w-full rounded-xl border px-4 py-3 text-sm bg-white appearance-none focus:ring-2 focus:ring-[#1434A4]">
                                    <option value="">Configuration</option>
                                    <option>1 BHK</option>
                                    <option>2 BHK</option>
                                    <option>3 BHK</option>
                                    <option>Villa</option>
                                </select>

                                <span class="pointer-events-none absolute right-4 top-1/2 -translate-y-1/2 text-gray-400">
                                    ▾
                                </span>
                            </div>


                            <input
                                type="tel"
                                name="phone"
                                required
                                placeholder="Mobile Number"
                                class="w-full rounded-xl border px-4 py-3 text-sm focus:ring-2 focus:ring-[#1434A4]" />

                            <button
                                class="w-full bg-[#1434A4] text-white py-3 rounded-xl font-medium hover:bg-blue-800 transition">
                                Get My Plan
                            </button>

                            <button
                                type="button"
                                @click="step = 1"
                                class="block mx-auto text-sm text-gray-500 mt-3 hover:underline">
                                ← Back to details
                            </button>
                        </form>
                    </div>
                </template>

            </div>
        </div>
    </div>
</div>