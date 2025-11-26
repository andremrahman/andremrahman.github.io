gsap.registerPlugin(ScrollTrigger);

let sec = document.querySelector(".anim1-wrapper");
let line = sec.querySelector(".reveal-line");
let cover = sec.querySelector(".cover");

let tl = gsap.timeline({
    scrollTrigger: {
        trigger: sec,
        start: "top 80%",
        end: "top 30%",
        scrub: 1.2,
        // markers: true,
    },
});

// 1) Titik → melebar dulu (scaleX)
tl.to(line, {
    scaleX: 1,
    duration: 0.35,
    ease: "power2.out",
});

// 2) garis full
tl.to(line, {
    opacity: 0,
    duration: 0,
});

// 3) border gantiin garis
tl.set(cover, {
    borderTop: "7px solid oklch(92.2% 0 0)",
});

// 4) Cover turun
tl.to(cover, {
    scaleY: 0,
    duration: 0.8,
    ease: "none",
});

// 4) cover hilang
tl.to(cover, {
    opacity: 0,
    duration: 0.1,
    pointerEvents: "none",
});
