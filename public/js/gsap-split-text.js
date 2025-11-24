document.fonts.ready.then(() => {
    gsap.registerPlugin(ScrollTrigger, SplitText);

    const paragraphs = document.querySelectorAll(".split");

    function initSplitText() {
        paragraphs.forEach((p) => {
            if (p._split) p._split.revert();

            p.textContent = p.textContent.replace(/\s+/g, " ").trim();

            const split = new SplitText(p, {
                type: "lines",
                linesClass: "line",
            });

            p._split = split;

            gsap.set(split.lines, { yPercent: 100, opacity: 0 });

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
    }

    // init awal
    initSplitText();

    // animate list
    gsap.utils.toArray(".li-item").forEach((item) => {
        gsap.fromTo(
            item,
            { opacity: 0, y: 20 },
            {
                opacity: 1,
                y: 0,
                duration: 0.3,
                ease: "power2.out",
                scrollTrigger: {
                    trigger: item,
                    start: "top 90%",
                    end: "bottom 18%",
                    toggleActions: "play reverse play reverse",
                },
            }
        );
    });

    // Re-init saat resize
    let t;
    window.addEventListener("resize", () => {
        clearTimeout(t);
        t = setTimeout(() => {
            initSplitText();
            ScrollTrigger.refresh(true);
        }, 250);
    });
});
