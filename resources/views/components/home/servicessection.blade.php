<section class="relative bg-white py-20">
    <div class="max-w-7xl mx-auto px-6">

        <!-- HEADER -->
        <div class="mb-20 grid grid-cols-1 lg:grid-cols-2 gap-12 items-end">
            <h2 class="text-[40px] sm:text-[48px] font-semibold tracking-tight text-gray-900">
                Our <span class="text-[#1434A4]">Services</span>
            </h2>

            <p class="text-gray-500 text-lg leading-relaxed max-w-xl lg:ml-auto">
                We provide end-to-end interior solutions thoughtfully designed
                to elevate everyday living through refined aesthetics.
            </p>
        </div>

        <!-- GRID -->
        <div id="servicesGrid"
            class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-12">
        </div>

    </div>
</section>

<!-- Swiper JS -->
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

<script>
    document.addEventListener("DOMContentLoaded", function() {

        const services = [{
                id: "01",
                title: "Residential Interiors",
                desc: "Elegant and functional home interiors tailored to your lifestyle.",
                images: [
                    "/images/com.PNG",
                    "/images/livingroom-1.PNG",
                    "/images/livingroom-2.png"
                ],
                link: "/services",
                cta: "Explore Residential Interiors"
            },
            {
                id: "02",
                title: "Commercial Spaces",
                desc: "Professional office and retail interior solutions.",
                images: [
                    "/images/com.jpg",
                    "/images/corporate-1.jpg",
                    "/images/corporate-2.jpg",
                    "/images/corporate-3.jpg"
                ],
                link: "/services",
                cta: "Explore Commercial Spaces"
            },
            {
                id: "03",
                title: "Modular Kitchens",
                desc: "Modern kitchen layouts with smart storage.",
                images: [
                    "/images/kitchen-sita-interior.png",
                    "/images/kitchen-2.png",
                    "/images/kitchen-3.png"
                ],
                link: "/services",
                cta: "Explore Modular Kitchens"
            },
            {
                id: "04",
                title: "Living Room Designs",
                desc: "Comfortable and stylish living spaces.",
                images: [
                    "/images/livingroom.PNG",
                    "/images/livingroom-1.PNG",
                    "/images/livingroom-2.png"
                ],
                link: "/services",
                cta: "Explore Living Room Designs"
            },
            {
                id: "05",
                title: "Bedroom Designs",
                desc: "Relaxing bedroom interiors with modern styling.",
                images: [
                    "/images/BEDROOM.PNG",
                    "/images/bedroom-1.PNG",
                    "/images/BEDROOM.jpg"
                ],
                link: "/services",
                cta: "Explore Bedroom Designs"
            },
            {
                id: "06",
                title: "Washroom Designs",
                desc: "Elegant and durable modern washroom interiors.",
                images: [
                    "/images/washroom-1.png",
                    "/images/washroom-2.png",
                    "/images/washroom-3.png",
                    "/images/washroom-4.png"
                ],
                link: "/services",
                cta: "Explore Washroom Designs"
            }
        ];

        const grid = document.getElementById("servicesGrid");

        services.forEach((service, index) => {

            let slides = "";

            service.images.forEach(img => {
                slides += `
            <div class="swiper-slide">
                <img src="${img}"
                     class="w-full h-[260px] object-cover"
                     alt="${service.title}">
            </div>
        `;
            });

            grid.innerHTML += `
    <div class="bg-white border border-black/5 shadow-sm">

        <!-- IMAGE SLIDER -->
        <div class="relative h-[260px] overflow-hidden">

            <div class="swiper innerSwiper${index}">
                <div class="swiper-wrapper">
                    ${slides}
                </div>
            </div>

            <!-- COUNTER -->
            <div class="absolute top-3 right-3 
                        bg-black/70 text-white text-xs px-3 py-1 
                        rounded-full z-20 counter${index}">
                1/${service.images.length}
            </div>

        </div>

        <!-- CONTENT -->
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

            <a href="${service.link}"
               class="inline-flex items-center gap-2 mt-6
                      text-[#1434A4] text-sm font-medium hover:underline">
                ${service.cta} →
            </a>
        </div>

    </div>
    `;
        });


        /* INIT SWIPERS */
        services.forEach((service, index) => {

            const swiper = new Swiper(`.innerSwiper${index}`, {
                slidesPerView: 1,
                allowTouchMove: true,
                simulateTouch: true,
                loop: false
            });

            swiper.on('slideChange', function() {
                document.querySelector(`.counter${index}`)
                    .innerText = (swiper.activeIndex + 1) + "/" + service.images.length;
            });

        });

    });
</script>