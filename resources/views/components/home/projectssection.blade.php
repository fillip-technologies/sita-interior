<style>
    /* ================= FILTER BUTTONS ================= */

    .section-title {
        text-align: center;
        font-size: 48px;
        font-weight: 500;
        margin-bottom: 28px;
        color: #111;
        letter-spacing: -0.02em;
    }

    .filter-btn {
        padding: 10px 22px;
        border-radius: 999px;
        border: 1.5px solid #e5e7eb;
        font-size: 14px;
        font-weight: 500;
        cursor: pointer;
        background: #fff;
        color: #374151;
        transition: .3s ease;
    }

    .filter-btn:hover {
        border-color: #000;
        transform: translateY(-1px);
    }

    .filter-btn.active {
        background: #000;
        color: #fff;
        border-color: #000;
    }

    .filter-header {
        font-size: 12px;
        letter-spacing: .12em;
        text-transform: uppercase;
        color: #6b7280;
        margin-bottom: 10px;
        text-align: center;
    }

    /* ================= CARDS ================= */
    #gallery {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(280px, 1fr));
        gap: 24px;
    }

    .project-card {
        height: 360px;
        overflow: hidden;
        position: relative;
        transition: .4s ease;
    }

    .project-card:hover {
        transform: translateY(-8px);
    }

    .project-card img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    .overlay {
        position: absolute;
        inset: 0;
        background: linear-gradient(to top, rgba(0, 0, 0, .85), transparent 70%);
        display: flex;
        align-items: flex-end;
        padding: 24px;
        color: #fff;
        opacity: 0;
        transition: .4s;
    }

    .project-card:hover .overlay {
        opacity: 1;
    }
</style>
</head>



<!-- ================= FILTER UI ================= -->
<div class="mb-14" style="max-width:700px;margin:0 auto 40px;">

    <!-- MAIN TITLE -->
    <h2 class="section-title">
        Explore Our <span class="text-[#1434A4]">Projects</span>
    </h2>

    <!-- SPACE TYPE -->
    <div style="margin-bottom:28px;">
        <!-- <div class="filter-header">Space Type</div> -->
        <div style="display:flex;gap:12px;flex-wrap:wrap;justify-content:center;">
            <button class="filter-btn active" data-space="all">All</button>
            <button class="filter-btn" data-space="living">Living</button>
            <button class="filter-btn" data-space="bedroom">Bedroom</button>
            <button class="filter-btn" data-space="kitchen">Kitchen</button>
            <button class="filter-btn" data-space="office">Office</button>
        </div>
    </div>

    <!-- HOME TYPE -->
    <div>
        <div style="display:flex;gap:12px;flex-wrap:wrap;justify-content:center;">
            <button class="filter-btn active" data-home="all">All</button>
            <button class="filter-btn" data-home="1bhk">1 BHK</button>
            <button class="filter-btn" data-home="2bhk">2 BHK</button>
            <button class="filter-btn" data-home="3bhk">3 BHK</button>
            <button class="filter-btn" data-home="villa">Villa</button>
        </div>
    </div>

</div>

<!-- ================= GALLERY ================= -->
<div id="gallery"></div>

<script>
    /* ================= DATA (MINI BACKEND) ================= */
    const projects = [{
            title: "Urban Living",
            space: "living",

            img: "/images/com.jpg"
        },
        {
            title: "Minimal Bedroom",
            space: "bedroom",

            img: "/images/hero-section.avif"
        },
        {
            title: "Open Kitchen",
            space: "kitchen",

            img: "/images/inter.jpg"
        },
        {
            title: "Work From Home",
            space: "office",

            img: "/images/kit.jpg"
        },
        {
            title: "Work From Home",
            space: "office",

            img: "/images/pla.avif"
        }
    ];

    /* ================= STATE ================= */
    let activeSpace = "all";
    let activeHome = "all";

    const gallery = document.getElementById("gallery");

    /* ================= RENDER ================= */
    function renderProjects(list) {
        gallery.innerHTML = "";

        list.forEach(p => {
            gallery.innerHTML += `
            <div class="project-card">
                <img src="${p.img}">
                <div class="overlay">
                    <div>
                        <h3>${p.title}</h3>
                        <span>${p.space} · ${p.home}</span>
                    </div>
                </div>
            </div>
        `;
        });
    }

    /* ================= FILTER ================= */
    function applyFilter() {
        const filtered = projects.filter(p => {
            const s = activeSpace === "all" || p.space === activeSpace;
            const h = activeHome === "all" || p.home === activeHome;
            return s && h;
        });

        renderProjects(filtered);
    }

    /* ================= EVENTS ================= */
    document.querySelectorAll("[data-space]").forEach(btn => {
        btn.onclick = () => {
            document.querySelectorAll("[data-space]").forEach(b => b.classList.remove("active"));
            btn.classList.add("active");
            activeSpace = btn.dataset.space;
            applyFilter();
        };
    });

    document.querySelectorAll("[data-home]").forEach(btn => {
        btn.onclick = () => {
            document.querySelectorAll("[data-home]").forEach(b => b.classList.remove("active"));
            btn.classList.add("active");
            activeHome = btn.dataset.home;
            applyFilter();
        };
    });

    /* ================= INIT ================= */
    renderProjects(projects);
</script>

</body>

</html>