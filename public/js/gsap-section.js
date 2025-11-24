gsap.registerPlugin(ScrollTrigger);

let sec = document.querySelector(".anim1-wrapper");
let secHeight = () => sec.offsetHeight;
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

const dropSpeed = 0.8;

// 1) Titik → melebar dulu (scaleX)
tl.to(line, {
    scaleX: 1,
    duration: 0.35,
    ease: "power2.out",
});

// 2) Setelah GARIS FULL → garis turun (translateY)
tl.to(line, {
    y: secHeight,
    duration: dropSpeed,
    ease: "power2.inOut",
});

// 3) Cover turun bersamaan dengan garis
tl.to(
    cover,
    {
        y: secHeight,
        duration: dropSpeed,
        ease: "power2.inOut",
    },
    "<"
); // tetap bersamaan dengan animasi garis turun

// 4) cover hilang
tl.to(cover, {
    opacity: 0,
    duration: 0.1,
    pointerEvents: "none",
});

// 5) Hilangin garis
tl.to(line, {
    opacity: 0,
    duration: 0.3,
});
