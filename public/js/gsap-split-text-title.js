document.fonts.ready.then(() => {
    gsap.registerPlugin(SplitText, ScrollTrigger);

    // Split paragraf
    let split = SplitText.create(".title-anim", {
        type: "chars, words, lines",
        mask: "lines",
    });

    // Bikin timeline yg dikontrol scroll
    let tl = gsap.timeline({
        scrollTrigger: {
            trigger: ".title-anim",
            start: "top 80%",
            end: "top 20%",
            scrub: 1.2,
            // markers: true,
        },
    });

    // Animasi huruf masuk
    tl.from(split.chars, {
        yPercent: "random([-100, 100])",
        rotation: "random(-30, 30)",
        autoAlpha: 0,
        ease: "back.out",
        duration: 1,
        stagger: {
            amount: 0.6,
            from: "random",
        },
    });
});
