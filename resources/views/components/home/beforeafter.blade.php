<section class="relative py-32 bg-neutral-50 overflow-hidden">

    <!-- Subtle background lines / texture -->
    <div class="absolute inset-0 opacity-[0.03] bg-[linear-gradient(to_right,#000_1px,transparent_1px),linear-gradient(to_bottom,#000_1px,transparent_1px)] bg-[size:48px_48px]"></div>

    <!-- subtleInterior glow -->
    <!-- <div class="absolute -top-40 left-1/2 -translate-x-1/2
    w-[700px] h-[700px] bg-[#b9a26a]/10 rounded-full blur-3xl">
    </div> -->

    <div class="relative max-w-7xl mx-auto px-6 grid lg:grid-cols-2 gap-20 items-center">

        <!-- ================= LEFT CONTENT ================= -->
        <div>
            <span class="inline-block text-sm tracking-[0.3em] uppercase text-[#1434A4] mb-6">
                Sita Interior
            </span>

            <h2 class="text-4xl md:text-5xl font-semibold text-neutral-900 leading-tight">
                Interior<br />
                <span class="text-[#1434A4]">Transformation</span>
            </h2>

            <p class="mt-6 text-lg text-neutral-600 max-w-xl">
                We believe great interior is not about decoration,
                but about thoughtful planning, proportion, and precision.
                Every space is transformed with intent and clarity.
            </p>

            <ul class="mt-10 space-y-4 text-neutral-800">
                <li>• Context-driven Interior planning</li>
                <li>• Structural clarity & spatial balance</li>
                <li>• Material-led design decisions</li>
                <li>• Timeless, functional outcomes</li>
            </ul>
        </div>

        <!-- ================= BEFORE AFTER SLIDER ================= -->
        <div
            id="beforeAfter"
            class="relative h-[560px] md:h-[420px]  overflow-hidden
             bg-white shadow-[0_30px_60px_rgba(0,0,0,0.15)]
             cursor-ew-resize select-none">

            <!-- BEFORE -->
            <img
                src="https://images.unsplash.com/photo-1600585154340-be6161a56a0c"
                class="absolute inset-0 w-full h-full object-cover pointer-events-none" />

            <!-- AFTER -->
            <div class="after-layer absolute inset-0 w-1/2 overflow-hidden pointer-events-none">
                <img
                    src="https://images.unsplash.com/photo-1600607687920-4e2a09cf159d"
                    class="absolute inset-0 w-full h-full object-cover" />
            </div>

            <!-- Labels -->
            <span class="absolute bottom-4 left-4 px-4 py-1 rounded-full text-sm bg-black/40 text-white">
                Before
            </span>

            <span class="absolute bottom-4 right-4 px-4 py-1 rounded-full text-sm bg-[#1434A4] text-white">
                After
            </span>

            <!-- Handle -->
            <div
                id="handle"
                class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2
               w-14 h-14 rounded-full
               bg-gradient-to-br from-[#1434A4] to-[#1434A4]
               grid place-items-center text-[#ffffff]
               font-semibold shadow-lg cursor-ew-resize z-10">
                ↔
            </div>

        </div>

    </div>
</section>


<script>
    document.addEventListener("DOMContentLoaded", function() {

        const slider = document.getElementById("beforeAfter");
        const afterLayer = slider.querySelector(".after-layer");
        const handle = document.getElementById("handle");

        let dragging = false;

        function move(x) {
            const rect = slider.getBoundingClientRect();
            let percent = ((x - rect.left) / rect.width) * 100;
            percent = Math.max(0, Math.min(100, percent));

            afterLayer.style.width = percent + "%";
            handle.style.left = percent + "%";
        }

        slider.addEventListener("mousedown", e => {
            dragging = true;
            move(e.clientX);
        });

        window.addEventListener("mousemove", e => {
            if (!dragging) return;
            move(e.clientX);
        });

        window.addEventListener("mouseup", () => dragging = false);

        slider.addEventListener("touchstart", e => {
            dragging = true;
            move(e.touches[0].clientX);
        });

        window.addEventListener("touchmove", e => {
            if (!dragging) return;
            move(e.touches[0].clientX);
        });

        window.addEventListener("touchend", () => dragging = false);
    });
</script>