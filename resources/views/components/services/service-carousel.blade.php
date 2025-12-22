@props([
'id',
'title',
'description',
'includes' => [],
'whoFor',
'timeline',
'images',
'link' => '#',
'ctaText' => 'Get Cost for This Design'
])

<section class="py-16 bg-white">

    <!-- Header -->
    <div class="max-w-7xl mx-auto px-6 mb-10 flex items-end justify-between">
        <div>
            <h2 class="text-[24px] sm:text-[30px] font-medium text-gray-900">
                {{ $title }}
            </h2>
            <span class="block mt-2 text-base text-gray-500">
                Curated interior solutions
            </span>
        </div>

        <a href="{{ $link }}"
            class="text-base text-gray-500 hover:text-gray-900 transition">
            See all →
        </a>
    </div>

    <!-- Carousel -->
    <div class="relative mb-12">

        <!-- Soft glow edges -->
        <div class="pointer-events-none absolute left-0 top-0 h-full w-24 bg-gradient-to-r from-white to-transparent z-10"></div>
        <div class="pointer-events-none absolute right-0 top-0 h-full w-24 bg-gradient-to-l from-white to-transparent z-10"></div>

        <div
            id="carousel-{{ $id }}"
            class="flex gap-6 overflow-x-scroll px-6 scroll-smooth snap-x snap-mandatory scrollbar-hide"
            onmouseenter="pauseAuto('{{ $id }}')"
            onmouseleave="resumeAuto('{{ $id }}')">

            @foreach (array_merge($images, $images) as $image)
            <div
                class="min-w-[320px] sm:min-w-[400px] lg:min-w-[460px]
                           h-[280px] snap-start rounded-2xl overflow-hidden group">

                <img
                    src="{{ asset($image) }}"
                    class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110"
                    alt="{{ $title }}" />
            </div>
            @endforeach
        </div>
    </div>

    <!-- Service Details -->
    <div class="max-w-7xl mx-auto px-6 grid grid-cols-1 lg:grid-cols-2 gap-12">

        <!-- Left: Description + Includes -->
        <div>
            <p class="text-gray-700 text-lg leading-relaxed mb-8">
                {{ $description }}
            </p>

            <h4 class="text-lg font-medium text-gray-900 mb-4">
                What’s Included
            </h4>

            <ul class="space-y-3 text-base text-gray-700">
                @foreach ($includes as $item)
                <li class="flex items-start gap-3">
                    <span class="mt-1 w-2 h-2 rounded-full bg-[#1434A4]"></span>
                    <span>{{ $item }}</span>
                </li>
                @endforeach
            </ul>
        </div>

        <!-- Right: Who for + Timeline + CTA -->
        <div class="bg-gray-50 rounded-3xl p-8 flex flex-col justify-between">

            <div class="space-y-6">
                <div>
                    <p class="text-base font-medium text-gray-900 mb-1">
                        Who this service is for
                    </p>
                    <p class="text-base text-gray-700">
                        {{ $whoFor }}
                    </p>
                </div>

                <div>
                    <p class="text-base font-medium text-gray-900 mb-1">
                        Timeline expectation
                    </p>
                    <p class="text-base text-gray-700">
                        {{ $timeline }}
                    </p>
                </div>
            </div>

            <a href="/contact"
                class="mt-8 inline-flex justify-center items-center
                      px-8 py-4 rounded-full
                      bg-[#1434A4] text-white text-base font-medium
                      hover:bg-[#102c8a] transition">
                {{ $ctaText }}
            </a>
        </div>

    </div>

</section>

<style>
    /* Hide scrollbar */
    .scrollbar-hide::-webkit-scrollbar {
        display: none;
    }

    .scrollbar-hide {
        -ms-overflow-style: none;
        scrollbar-width: none;
    }
</style>