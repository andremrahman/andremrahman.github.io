(function () {
    const preloaderWrapper = document.getElementById("preloader-wrapper");
    const preloaderContent = document.getElementById("preloader-content");
    const swipeElements = gsap.utils.toArray(".anim-swipe");

    if (typeof gsap === "undefined" || !preloaderWrapper) {
        console.error(
            "GSAP atau elemen preloader tidak ditemukan. Menggunakan fallback."
        );
        document.body.classList.remove("no-scroll");
        preloaderWrapper && (preloaderWrapper.style.display = "none");
        return;
    }

    // Durasi yang disarankan
    const MIN_DURATION_MS = 1000;
    const MAX_DURATION_MS = 4000;

    // --- 1. INITIAL SETUP/RESET ---
    gsap.set(swipeElements, { yPercent: 100 }); // Tirai swipe disetel yPercent: 100 (di bawah)
    gsap.set(preloaderContent, { opacity: 0 });

    // --- 2. INTRO Timeline: Swipe Up -> Logo/Spinner In ---
    const tl_intro = gsap.timeline({
        paused: true,
        onComplete: () => {
            // Tunggu sampai semua resource dimuat DAN waktu minimum tercapai
            Promise.all([loadPromise, minimumTimePromise]).then(() => {
                tl_exit.play();
            });
        },
    });

    // 1. Tirai Gelap (Biru) Meluncur KE ATAS menutupi latar Putih
    tl_intro.to(
        swipeElements,
        {
            yPercent: 0,
            duration: 1.0,
            stagger: { from: "random", each: 0.15 },
            ease: "power4.inOut",
        },
        0
    );

    // 2. Logo/Spinner Fade In (muncul di atas tirai biru)
    tl_intro.to(
        preloaderContent,
        {
            opacity: 1,
            duration: 0.6,
            ease: "power2.out",
        },
        0.5
    );

    tl_intro.play();

    // --- 3. PROMISE LOADING ---
    // Simulasikan waktu loading minimum dan tunggu window load
    const loadPromise = new Promise((resolve) => {
        const maxDurationTimeout = setTimeout(() => {
            console.warn(
                "Durasi Maksimal tercapai. Memaksa preloader ditutup."
            );
            resolve();
        }, MAX_DURATION_MS);

        window.addEventListener("load", () => {
            clearTimeout(maxDurationTimeout);
            resolve();
        });
    });
    const minimumTimePromise = new Promise((resolve) => {
        setTimeout(resolve, MIN_DURATION_MS);
    });

    // --- 4. EXIT Timeline: Logo Fade Out -> Swipe Down -> Wrapper Hide ---
    const tl_exit = gsap.timeline({
        paused: true,
        onComplete: () => {
            // Setelah semua animasi selesai:
            document.body.classList.remove("no-scroll");
            // Menyembunyikan preloader wrapper secara total
            gsap.set(preloaderWrapper, { display: "none" });
        },
    });

    // 1. Logo dan Spinner Fade Out
    tl_exit.to(
        preloaderContent,
        {
            opacity: 0,
            yPercent: -50,
            duration: 0.5,
            ease: "power2.in",
        },
        0
    );

    // 2. The Great Reveal: Tirai Gelap Meluncur KE BAWAH (Mengungkap background body)
    tl_exit.to(
        swipeElements,
        {
            yPercent: 300,
            duration: 1.5,
            stagger: {
                from: "random",
                each: 0.15,
            },
            ease: "power4.inOut",
        },
        0.2
    );

    // 3. SELURUH PRELOADER WRAPPER DIHILANGKAN
    tl_exit.to(
        preloaderWrapper,
        {
            opacity: 0,
            duration: 0.5,
            ease: "power1.out",
        },
        "-=0.7"
    );
})();
