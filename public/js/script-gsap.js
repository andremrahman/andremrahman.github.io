gsap.registerPlugin(ScrollTrigger, ScrollToPlugin);

const tl = gsap.timeline({
    scrollTrigger: {
        trigger: "#timeline",
        start: "top top",
        end: "+=400%",
        scrub: 1,
        pin: true,
    },
});

// add a label indicating the spot in the timeline where the red, blue, aqua and green are fully visible.
tl.to("#red", { yPercent: -100, duration: 1 }, "red")
    .to("#blue", { yPercent: -100, duration: 1 }, "blue")
    .to("#aqua", { yPercent: -100, duration: 1 }, "aqua")
    .add("green");
