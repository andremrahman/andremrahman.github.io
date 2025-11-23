document.fonts.ready.then(() => {
    gsap.registerPlugin(SplitText, ScrollTrigger);

    // Split paragraf
    let split = SplitText.create(".title-anim", {
        type: "chars, words, lines",
        mask: "lines",
    });

    let tl = gsap.timeline({
        scrollTrigger: {
            trigger: ".title-anim",
            start: "top 60%",
            end: "top 62%",
            scrub: 1.2,
            // markers: true,
        },
    });

    // Animasi huruf masuk
    tl.from(split.chars, {
        yPercent: "random([-100, 100])",
        // rotation: "random(-30, 30)",
        autoAlpha: 0,
        ease: "power1.in",
        duration: 0.3,
        stagger: {
            amount: 0.6,
            from: "random",
        },
    });
});
