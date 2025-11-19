gsap.registerPlugin(ScrollTrigger);

let sec = document.querySelector(".section");
let line = sec.querySelector(".reveal-line");
let cover = sec.querySelector(".cover");
let content = sec.querySelector(".content");

let tl = gsap.timeline({
    scrollTrigger: {
        trigger: sec,
        start: "top 80%",
        end: "top 20%",
        scrub: 1.2,
        // markers: true
    },
});

// 1) Titik → melebar
tl.to(line, {
    width: "100%",
    duration: 0.3,
    ease: "power2.out",
});

// DURASI & WAKTU SAMA PERSIS
const dropSpeed = 0.8;

// 2) Garis turun bareng cover
tl.to(line, {
    top: "100%",
    duration: dropSpeed,
    ease: "power2.inOut",
});

// 3) Cover turun bareng garis (tanpa overlap negatif)
tl.to(
    cover,
    {
        top: "100%",
        duration: dropSpeed,
        ease: "power2.inOut",
    },
    "<"
); // < = MULAI PERSIS BERSAMA ANIMASI SEBELUMNYA

// 4) Garis hilang
tl.to(line, {
    opacity: 0,
    duration: 0.3,
});

// 5) Konten fade muncul belakangan
tl.to(content, {
    opacity: 1,
    duration: 0.5,
    ease: "power1.out",
});
