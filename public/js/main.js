document.addEventListener("DOMContentLoaded", function () {

    /* -------------------------------------------
       Tab Switching Function
    ------------------------------------------- */
    function changeTab(event, tabName) {
        event.preventDefault();

        // Hide all tab contents
        const tabContents = document.querySelectorAll('[role="tabpanel"]');
        tabContents.forEach(content => {
            content.classList.add('hidden', 'opacity-0');
        });

        // Deactivate all tabs
        const tabs = document.querySelectorAll('[role="tab"]');
        tabs.forEach(tab => {
            tab.setAttribute('aria-selected', 'false');
            tab.classList.remove('bg-sky-900', 'text-slate-300');
            tab.classList.add('bg-inherit', 'text-slate-300');
        });

        // Show the selected tab content
        const activeTabContent = document.getElementById(tabName);
        activeTabContent.classList.remove('hidden', 'opacity-0');
        activeTabContent.classList.add('block', 'opacity-100');

        // Activate the clicked tab
        const activeTab = event.currentTarget;
        activeTab.setAttribute('aria-selected', 'true');
        activeTab.classList.add('bg-sky-900', 'text-slate-300');
        activeTab.classList.remove('bg-inherit');
    }

    // Make the function accessible globally
    window.changeTab = changeTab;


    // Navbar color change on scroll
    const navbar = document.getElementById('navbar');
    if (navbar) {
        window.addEventListener('scroll', function() {
            if (window.scrollY > 400) {
                navbar.classList.add('scrolled');
            } else {
                navbar.classList.remove('scrolled');
            }
        });
    }

    // Counter animation
    function animateCounter(counter) {
        const target = +counter.getAttribute("data-target");
        const suffix = counter.getAttribute("data-suffix") || "";
        const hasPlus = counter.textContent.includes("+");
        const duration = 2000;
        const stepTime = 20;
        const step = target / (duration / stepTime);
        let current = 0;

        const updateCounter = () => {
            current += step;
            if (current < target) {
                counter.textContent = Math.floor(current) + (hasPlus ? "+" : "") + suffix;
                setTimeout(updateCounter, stepTime);
            } else {
                counter.textContent = target + (hasPlus ? "+" : "") + suffix;
            }
        };

        updateCounter();
    }

    // Intersection Observer (counter + animations)
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                const counters = entry.target.querySelectorAll(".counter");
                counters.forEach(counter => animateCounter(counter));

                if (entry.target.dataset.animate) {
                    entry.target.classList.add(entry.target.dataset.animate);
                }
                observer.unobserve(entry.target);
            }
        });
    }, { threshold: 0.4 });

    const statsSection = document.querySelector("#stats-section");
    if (statsSection) observer.observe(statsSection);

    document.querySelectorAll("[data-animate]").forEach(el => observer.observe(el));

    // Swiper Initialization
    if (typeof Swiper !== "undefined") {
        new Swiper(".swiper-recognized-by", {
            slidesPerView: 1,
            spaceBetween: 16,
            loop: true,
            autoplay: { delay: 3000, disableOnInteraction: false },
            pagination: { el: ".swiper-pagination-recognized-by", clickable: true },
            navigation: { nextEl: "#button-right", prevEl: "#button-left" },
        });

        new Swiper(".swiper-testimonials", {
            slidesPerView: 1,
            spaceBetween: 30,
            loop: true,
            autoplay: { delay: 3000, disableOnInteraction: false },
            breakpoints: { 640: { slidesPerView: 1 }, 768: { slidesPerView: 2 }, 1024: { slidesPerView: 3 } },
            pagination: { el: ".swiper-pagination", clickable: true },
            navigation: { nextEl: "#button-right1", prevEl: "#button-left1" },
        });
    } else {
        console.error("Swiper JS not loaded!");
    }
});
