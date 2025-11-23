document.fonts.ready.then(() => {
    gsap.registerPlugin(ScrollTrigger, SplitText);

    const paragraphs = document.querySelectorAll(".split");

    function init() {
        paragraphs.forEach((p) => {
            // Revert split sebelumnya (kalau ada)
            if (p._split) {
                p._split.revert();
            }

            // Bersihin whitespace
            p.textContent = p.textContent.replace(/\s+/g, " ").trim();

            // Bikin split baru
            const split = new SplitText(p, {
                type: "lines",
                linesClass: "line",
            });

            p._split = split;

            // Initial states
            gsap.set(split.lines, {
                yPercent: 100,
                opacity: 0,
            });

            // Fade-in
            gsap.timeline({
                scrollTrigger: {
                    trigger: p,
                    start: "top 95%",
                    end: "top 70%",
                    scrub: true,
                },
            }).to(split.lines, {
                yPercent: 0,
                opacity: 1,
                ease: "power1.in",
                stagger: 0.12,
            });

            // Fade-out
            gsap.timeline({
                scrollTrigger: {
                    trigger: p,
                    start: "bottom 25%",
                    end: "bottom 8%",
                    scrub: true,
                },
            }).to(split.lines, {
                yPercent: -50,
                opacity: 0,
                ease: "power1.out",
                stagger: 0.07,
            });
        });

        // Safe refresh
        ScrollTrigger.refresh(true);
    }

    // Jalankan awal
    init();

    // Re-init saat resize
    let t;
    window.addEventListener("resize", () => {
        clearTimeout(t);
        t = setTimeout(() => {
            init();
        }, 250);
    });
});
