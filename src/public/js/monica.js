/* ===================================================================
   Monica - Main JavaScript
   =================================================================== */
(function () {
    "use strict";

    /* ---------------------------------------------------------------
       Header scroll effect
    --------------------------------------------------------------- */
    const header = document.querySelector(".s-header");

    window.addEventListener(
        "scroll",
        function () {
            if (window.scrollY > 80) {
                header && header.classList.add("scrolled");
            } else {
                header && header.classList.remove("scrolled");
            }
        },
        { passive: true },
    );

    /* ---------------------------------------------------------------
       Mobile menu toggle
    --------------------------------------------------------------- */
    const toggle = document.querySelector(".header-menu-toggle");
    const nav = document.querySelector(".header-nav");

    if (toggle && nav) {
        toggle.addEventListener("click", function () {
            nav.classList.toggle("open");
            document.body.style.overflow = nav.classList.contains("open")
                ? "hidden"
                : "";
        });

        // Close on nav link click
        nav.querySelectorAll("a").forEach(function (link) {
            link.addEventListener("click", function () {
                nav.classList.remove("open");
                document.body.style.overflow = "";
            });
        });
    }

    /* ---------------------------------------------------------------
       Testimonial slider
    --------------------------------------------------------------- */
    const slides = document.querySelectorAll(".testimonial-slide");
    const navBtns = document.querySelectorAll(".testimonials-nav button");
    let current = 0;
    let autoTimer = null;

    function goTo(index) {
        slides[current].classList.remove("active");
        navBtns[current].classList.remove("active");
        current = (index + slides.length) % slides.length;
        slides[current].classList.add("active");
        navBtns[current].classList.add("active");
    }

    if (slides.length > 0) {
        slides[0].classList.add("active");
        navBtns.length && navBtns[0].classList.add("active");

        navBtns.forEach(function (btn, i) {
            btn.addEventListener("click", function () {
                goTo(i);
                clearInterval(autoTimer);
                startAuto();
            });
        });

        function startAuto() {
            autoTimer = setInterval(function () {
                goTo(current + 1);
            }, 5000);
        }
        startAuto();
    }

    /* ---------------------------------------------------------------
       Reveal on scroll (Intersection Observer)
    --------------------------------------------------------------- */
    const revealEls = document.querySelectorAll(".reveal");

    if ("IntersectionObserver" in window && revealEls.length) {
        const observer = new IntersectionObserver(
            function (entries) {
                entries.forEach(function (entry) {
                    if (entry.isIntersecting) {
                        entry.target.classList.add("revealed");
                        observer.unobserve(entry.target);
                    }
                });
            },
            { threshold: 0.15 },
        );

        revealEls.forEach(function (el) {
            observer.observe(el);
        });
    } else {
        // Fallback — just show everything
        revealEls.forEach(function (el) {
            el.classList.add("revealed");
        });
    }

    /* ---------------------------------------------------------------
       Back to top
    --------------------------------------------------------------- */
    const backTop = document.querySelector(".back-to-top");

    if (backTop) {
        window.addEventListener(
            "scroll",
            function () {
                if (window.scrollY > 500) {
                    backTop.classList.add("visible");
                } else {
                    backTop.classList.remove("visible");
                }
            },
            { passive: true },
        );

        backTop.addEventListener("click", function (e) {
            e.preventDefault();
            window.scrollTo({ top: 0, behavior: "smooth" });
        });
    }

    /* ---------------------------------------------------------------
       Smooth scroll for anchor links
    --------------------------------------------------------------- */
    document.querySelectorAll('a[href^="#"]').forEach(function (anchor) {
        anchor.addEventListener("click", function (e) {
            const target = document.querySelector(this.getAttribute("href"));
            if (target) {
                e.preventDefault();
                target.scrollIntoView({ behavior: "smooth" });
            }
        });
    });
})();
