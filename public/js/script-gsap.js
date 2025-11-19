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
        scrub: 1.2, // markers: true
    },
});
const dropSpeed = 0.8;
// titik → melebar (scaleX bukan width)
tl.to(line, { scaleX: 1, duration: 0.3, ease: "power2.out" }); // garis turun (translateY, no CLS)
tl.to(line, { y: "100vh", duration: dropSpeed, ease: "power2.inOut" }, "<"); // cover turun bareng garis (no CLS)
tl.to(cover, { y: "100%", duration: dropSpeed, ease: "power2.inOut" }, "<"); // garis hilang
tl.to(line, { opacity: 0, duration: 0.3 }); // konten muncul
tl.to(content, { opacity: 1, duration: 0.5, ease: "power1.out" });
