<section class="relative bg-white py-20 overflow-hidden">
    <div class="max-w-7xl mx-auto px-6">

        <!-- SECTION HEADER -->
        <div class="mb-20 grid grid-cols-1 lg:grid-cols-2 gap-12 items-end">
            <h2 class="text-[40px] sm:text-[48px] font-semibold tracking-tight text-gray-900">
                Our <span class="text-[#1434A4]">Services</span>
            </h2>

            <p class="text-gray-500 text-lg leading-relaxed max-w-xl lg:ml-auto">
                We provide end-to-end interior solutions thoughtfully designed
                to elevate everyday living through refined aesthetics and
                seamless execution.
            </p>
        </div>

        <!-- SERVICES GRID -->
        <div
            id="servicesGrid"
            class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-12">
        </div>

    </div>
</section>

<script>
    /* ===== SERVICES DATA ===== */
    const services = [{
            id: "01",
            title: "Residential Interiors",
            desc: "Personalized residential interior design services in Patna, creating comfortable, functional, and elegant homes tailored to your lifestyle.",
            image: "/images/com.PNG",
            link: "/services",
            cta: "Explore Residential Interiors"
        },
        {
            id: "02",
            title: "Commercial Spaces",
            desc: "Professional commercial interior design in Patna for offices, retail spaces, and studios, focused on functionality, branding, and productivity.",
            image: "/images/com.jpg",
            link: "/services",
            cta: "Explore Commercial Spaces"
        },
        {
            id: "03",
            title: "Modular Kitchens",
            desc: "Modern modular kitchen designs in Patna featuring smart layouts, efficient storage solutions, and durable, stylish finishes.",
            image: "/images/kitchen-sita-interior.png",
            link: "/services",
            cta: "Explore Modular Kitchens"
        },
        {
            id: "04",
            title: "Living Room Designs",
            desc: "Living room interior design services in Patna that balance comfort, aesthetics, and functionality for everyday living and social gatherings.",
            image: "/images/livingroom.PNG",
            link: "/services",
            cta: "Explore Living Room Designs"
        },
        {
            id: "05",
            title: "Bedroom Designs",
            desc: "Bedroom interior design in Patna focused on comfort, relaxation, smart storage, and personalized design aesthetics.",
            image: "/images/BEDROOM.PNG",
            link: "/services",
            cta: "Explore Bedroom Designs"
        },
        {
            id: "06",
            title: "Washroom Designs",
            desc: "Modern washroom and bathroom interior design services in Patna with a focus on functionality, hygiene, durability, and elegant finishes.",
            image: "/images/washroom-1.png",
            link: "/services",
            cta: "Explore Washroom Designs"
        }
    ];


    /* ===== RENDER ===== */
    const grid = document.getElementById("servicesGrid");

    services.forEach(service => {
        grid.innerHTML += `
        <div class="group relative overflow-hidden 
                    bg-white/80 backdrop-blur
                    border border-black/5
                    transition hover:-translate-y-2">

            <!-- Image -->
            <div class="h-[260px] overflow-hidden">
                <img
                    src="${service.image}"
                    alt="${service.title}"
                    class="w-full h-full object-cover
                           transition duration-700 group-hover:scale-110">
            </div>

            <!-- Content -->
            <div class="p-7">
                <span class="block text-xs text-black/40 mb-3">
                    ${service.id}
                </span>

                <h3 class="text-[22px] font-medium mb-2 text-gray-900">
                    ${service.title}
                </h3>

                <p class="text-[15px] text-gray-500 leading-relaxed">
                    ${service.desc}
                </p>

                <!-- CTA -->
                <a
                    href="${service.link}"
                    class="inline-flex items-center gap-2 mt-6
                           text-[#1434A4] text-sm font-medium
                           transition group-hover:underline">
                    ${service.cta}
                    <span class="transition-transform group-hover:translate-x-1">→</span>
                </a>
            </div>
        </div>
    `;
    });
</script>