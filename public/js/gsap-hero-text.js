document.fonts.ready.then(() => {
    gsap.from(".hero-text", {
        y: 30,
        autoAlpha: 0,
        duration: 0.8,
        ease: "power1.out",
    });
});
