@props([
'title' => 'Page Title',
'description' => '',
'image' => '',

// CTA props
'primaryCtaText' => 'Start Your Project',
'primaryCtaLink' => '/contact',

'secondaryCtaText' => null,
'secondaryCtaLink' => null,
])

<section class="relative h-[70vh] min-h-[440px] overflow-hidden">

    <!-- Background Image -->
    <div class="absolute inset-0">
        <img
            src="{{ asset($image) }}"
            alt="{{ $title }}"
            class="w-full h-full object-cover object-center" />

        <!-- Dark overlay -->
        <div class="absolute inset-0 bg-black/50"></div>
    </div>

    <!-- Content -->
    <div class="relative z-10 h-full flex items-end">
        <div class="max-w-7xl mx-auto px-6 pb-32 pt-24 w-full">

            <!-- Title -->
            <h1
                class="text-white font-[500]
                       text-[32px] sm:text-[44px] lg:text-[56px]
                       leading-tight max-w-4xl">
                {{ $title }}
            </h1>

            <!-- Description -->
            @if($description)
            <p class="mt-6 max-w-2xl text-white/80
                          text-base sm:text-lg leading-relaxed">
                {{ $description }}
            </p>
            @endif

            <!-- CTA Buttons -->
            <div class="mt-8 flex flex-wrap gap-4">

                {{-- Primary CTA --}}
                @if($primaryCtaText && $primaryCtaLink)
                <a
                    href="{{ $primaryCtaLink }}"
                    class="inline-flex items-center gap-3
                               px-8 py-4 rounded-full
                               bg-[#1434A4] text-white text-base font-medium
                               hover:bg-[#102c8a] transition">
                    {{ $primaryCtaText }}
                    <span class="text-lg">→</span>
                </a>
                @endif

                {{-- Secondary CTA --}}
                @if($secondaryCtaText && $secondaryCtaLink)
                <a
                    href="{{ $secondaryCtaLink }}"
                    class="inline-flex items-center gap-3
                               px-8 py-4 rounded-full
                               border border-white/40 text-white
                               hover:bg-white/10 transition">
                    {{ $secondaryCtaText }}
                </a>
                @endif

            </div>

        </div>
    </div>

</section>