<x-inner-hero
    title="About Sita Interior"
    description="A curated selection of spaces crafted with
    purpose, precision, and timeless aesthetics."
    image="images/com.jpg"

    primaryCtaText="Request a Consultation"
    primaryCtaLink="/contact" />

<section class="relative py-24 bg-white overflow-hidden">
    <!-- Background grid pattern -->
    <div
        class="absolute inset-0 opacity-[0.08]"
        style="
                background-image:
                linear-gradient(to right, #474747ff 1px, transparent 1px),
                linear-gradient(to bottom, #494949ff 1px, transparent 1px);
                background-size: 48px 48px;
            ">
    </div>
    <div class="max-w-7xl mx-auto px-6 relative">



        <!-- Content -->
        <div class="relative z-10 max-w-3xl mx-auto text-center">
            <h2 class="text-4xl sm:text-5xl font-[500] text-gray-900">
                Designing Spaces That Feel Like Home
            </h2>

            <p class="mt-8 text-lg text-gray-600 leading-relaxed">
                At Sita Interior, we believe great interiors begin with
                understanding people — their lifestyle, aspirations,
                and everyday needs. Our work blends creativity with
                functionality to craft spaces that feel timeless,
                thoughtful, and deeply personal.
            </p>
        </div>

    </div>
</section>





<section class="py-28 bg-white">
    <div class="max-w-7xl mx-auto px-6">

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-20 items-center">

            <!-- Image -->
            <div class="relative overflow-hidden rounded-3xl">
                <img src="/images/inter.jpg"
                    class="w-full h-[520px] object-cover" />
            </div>

            <!-- Content -->
            <div>
                <h3 class="text-3xl font-[500] text-gray-900">
                    More Than Just Interiors
                </h3>

                <p class="mt-6 text-gray-600 leading-relaxed">
                    Over the years, we have worked on a diverse range of
                    residential, commercial, and office projects.
                    Each space is designed with clarity, purpose,
                    and a commitment to lasting quality.
                </p>

                <p class="mt-6 text-gray-600 leading-relaxed">
                    Our team collaborates closely with clients to ensure
                    the final outcome reflects their vision while
                    enhancing everyday living and working experiences.
                </p>
            </div>

        </div>

    </div>
</section>

<!-- work-flow -->
<x-home.workflow />

<!-- cta -->
<x-home.cta />