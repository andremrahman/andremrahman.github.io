gsap.registerPlugin(ScrollTrigger);

let sec = document.querySelector(".section");
let line = sec.querySelector(".reveal-line");
let cover = sec.querySelector(".cover");
let content = sec.querySelector(".content");

// TIMELINE PANJANG (biar animasi lebih cepat dari scroll)
let tl = gsap.timeline({
    scrollTrigger: {
        trigger: sec,
        start: "top 80%", // masuk 20% layar
        end: "top 20%", // sampai agak atas
        scrub: 1.2, // <-- ini bikin animasi TELAT DIKIT sehingga terlihat LEBIH CEPAT
        // markers: true
    },
});

// 1) titik -> melebar hampir penuh
tl.to(line, {
    width: "100%",
    duration: 0.3,
    ease: "power2.out",
});

// 2) garis turun membuka layar
tl.to(
    line,
    {
        top: "100%",
        duration: 0.8,
        ease: "power2.inOut",
    },
    "-=0.1"
);

// 3) cover ke-angkat ditarik garis
tl.to(
    cover,
    {
        height: 0,
        duration: 0.8,
        ease: "power2.inOut",
    },
    "-=0.75"
);

// 4) garis hilang pelan
tl.to(line, {
    opacity: 0,
    duration: 0.3,
});

// 5) konten muncul
tl.to(content, {
    opacity: 1,
    duration: 0.5,
    ease: "power1.out",
});
