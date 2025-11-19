gsap.defaults({ ease: "power3.inOut" });

var master = gsap.timeline({ delay: 0.5, repeat: -1, repeatDelay: 0.5 });
// var mt = 0.85;
var but = document.querySelector("#masterControl");
var es = "power2.out";

gsap.set("#demo", { autoAlpha: 1 });
gsap.set(".bottomFighter", {
    rotation: 180,
    y: 758,
    transformOrigin: "center center",
});
// gsap.set("#stage, #luke, #darth, #chewie, #r2d2", { autoAlpha: 0 });

function flyBy() {
    var tl = gsap.timeline({ defaults: { duration: 2 } });
    tl.add("fighter");
    tl.from(
        ".bottomFighter, .topFighter",
        { duration: 0.1, autoAlpha: 0 },
        "fighter"
    );
    tl.fromTo(
        ".topFighter",
        { x: -1000 },
        { x: 2500, ease: "none" },
        "fighter"
    );
    tl.fromTo(
        ".bottomFighter",
        { x: 2500 },
        { x: -1000, ease: "none" },
        "fighter"
    );
    tl.to(".topLine", { attr: { x2: 2500 }, ease: "none" }, "fighter");
    tl.to(".bottomLine", { attr: { x1: -1000 }, ease: "none" }, "fighter");
    tl.to(
        ".bottomFighter, .topFighter",
        { duration: 0.1, autoAlpha: 0 },
        "-=0.1"
    );
    tl.to(".topCut", { y: 418, ease: es }, "vanish");
    tl.to(".bottomCut", { y: -341, ease: es }, "vanish");
    tl.to(".smallLine", { duration: 1, attr: { x1: 749, x2: 751 }, ease: es });
    return tl;
}

master.from("#name", 2, { autoAlpha: 0, ease: "none" });
master.add(flyBy());

// but.addEventListener("click", function () {
//     if (master.paused()) {
//         master.play();
//         but.innerHTML = "Pause";
//     } else {
//         master.pause();
//         but.innerHTML = "Play";
//     }
// });
