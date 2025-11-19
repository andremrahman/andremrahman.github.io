gsap.registerPlugin(ScrollTrigger);

let tl = gsap.timeline({
    scrollTrigger: {
        trigger: "#section",
        start: "top center",
        end: "bottom center",
        scrub: true,
    },
});

// PHASE 1 — garis isi dulu
tl.to(".top-line", { width: "100%", ease: "none" }, 0);
tl.to(".bottom-line", { width: "100%", ease: "none" }, 0);

// PHASE 2 — garis & panel nutup BERSAMAAN
tl.to(
    ".top-line",
    {
        top: "50%", // garis turun
        ease: "power2.out",
    },
    1
);

tl.to(
    ".bottom-line",
    {
        bottom: "50%", // garis naik
        ease: "power2.out",
    },
    1
);

tl.to(
    ".top-panel",
    {
        top: "0%", // panel turun bareng
        ease: "power2.out",
    },
    1
);

tl.to(
    ".bottom-panel",
    {
        bottom: "0%", // panel naik bareng
        ease: "power2.out",
    },
    1
);

// PHASE 3 — setelah nutup → garis shrink ke tengah
tl.to(
    ".top-line, .bottom-line",
    {
        scaleX: 0,
        transformOrigin: "center center",
        ease: "power1.in",
    },
    1.5
);
