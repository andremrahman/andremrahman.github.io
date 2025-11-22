document.fonts.ready.then(() => {
    // baru SplitText supaya text gak loncat karena font belum loaded
    gsap.registerPlugin(ScrollTrigger, SplitText);

    document.fonts.ready.then(() => {
        const paragraphs = document.querySelectorAll(".split");

        paragraphs.forEach((p) => {
            // Split by lines
            const split = new SplitText(p, {
                type: "lines",
                linesClass: "line",
            });

            // Initial states
            gsap.set(split.lines, {
                yPercent: 100,
                opacity: 0,
            });

            // ===========================
            //  FADE-IN + SLIDE-IN (scroll up ke start)
            // ===========================
            gsap.timeline({
                scrollTrigger: {
                    trigger: p,
                    start: "top 95%", // mulai muncul
                    end: "top 70%", // selesai muncul
                    scrub: true,
                    markers: true,
                },
            }).to(split.lines, {
                yPercent: 0,
                opacity: 1,
                ease: "power1.in",
                stagger: 0.12,
            });

            // ===========================
            //  FADE-OUT + SLIDE-UP (scroll naik lewat end)
            // ===========================
            gsap.timeline({
                scrollTrigger: {
                    trigger: p,
                    start: "bottom 25%", // mulai hilang
                    end: "bottom 15%", // selesai hilang
                    scrub: true,
                    // markers: true,
                },
            }).to(split.lines, {
                yPercent: -50,
                opacity: 0,
                ease: "power1.out",
                stagger: 0.07,
            });
        });
    });
});
