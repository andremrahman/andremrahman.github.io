document.fonts.ready.then(() => {
    gsap.registerPlugin(SplitText, ScrollTrigger);

    function initSplit() {
        // bersihin instance lama dulu
        document.querySelectorAll(".title-anim").forEach((el) => {
            if (el.splitInstance) {
                el.splitInstance.revert();
            }
        });

        document.querySelectorAll(".title-anim").forEach((el) => {
            const start = el.dataset.start || "top 90%";
            const end = el.dataset.end || "top 80%";
            // use <p data-start="top 75%" data-end="top 85%"></p> for a custom trigger position

            // split ulang
            let split = new SplitText(el, {
                type: "chars, words, lines",
                mask: "lines",
            });
            el.splitInstance = split; // simpan utk revert

            gsap.timeline({
                scrollTrigger: {
                    trigger: el,
                    start,
                    end,
                    scrub: 1.2,
                    // markers: true,
                },
            }).from(split.chars, {
                yPercent: "random([-100,100])",
                autoAlpha: 0,
                ease: "power1.out",
                duration: 0.3,
                stagger: { amount: 0.6, from: "random" },
            });
        });

        ScrollTrigger.refresh(true);
    }

    // initial
    initSplit();

    // on resize
    let resizeTimer;
    window.addEventListener("resize", () => {
        clearTimeout(resizeTimer);
        resizeTimer = setTimeout(() => {
            initSplit();
        }, 200); // debounce kecil biar gak spam
    });
});
