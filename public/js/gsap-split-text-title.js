document.fonts.ready.then(() => {
    gsap.registerPlugin(SplitText, ScrollTrigger);

    document.querySelectorAll(".title-anim").forEach((el) => {
        // baca custom start/end
        const start = el.dataset.start || "top 85%";
        const end = el.dataset.end || "top 75%";

        // split text per element
        let split = new SplitText(el, {
            type: "chars, words, lines",
            mask: "lines",
        });

        let tl = gsap.timeline({
            scrollTrigger: {
                trigger: el,
                start: start,
                end: end,
                scrub: 1.2,
                // markers: true,
            },
        });

        tl.from(split.chars, {
            yPercent: "random([-100,100])",
            autoAlpha: 0,
            ease: "power1.in",
            duration: 0.3,
            stagger: { amount: 0.6, from: "random" },
        });
    });
});
