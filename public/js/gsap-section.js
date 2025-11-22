gsap.registerPlugin(ScrollTrigger);

let sec = document.querySelector(".anim1-wrapper");
let secHeight = sec.offsetHeight;
let line = sec.querySelector(".reveal-line");
let cover = sec.querySelector(".cover");
let content = sec.querySelector(".content");

let tl = gsap.timeline({
    scrollTrigger: {
        trigger: sec,
        start: "top 80%",
        end: "top 20%",
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
        y: "100%",
        duration: dropSpeed,
        ease: "power2.inOut",
    },
    "<"
); // tetap bersamaan dengan animasi garis turun

// 4) Hilangin garis
tl.to(line, {
    opacity: 0,
    duration: 0.3,
});

// 5) Konten muncul
tl.to(content, {
    opacity: 1,
    duration: 0.5,
    ease: "power1.out",
});
