document.addEventListener("DOMContentLoaded", () => {
    // Memilih elemen
    const slides = document.querySelectorAll(".slide");
    const totalSlides = slides.length;
    const prevBtn = document.getElementById("prevBtn");
    const nextBtn = document.getElementById("nextBtn");
    const sliderContainer = document.getElementById("slider-container"); // Tambahkan pemilihan container

    // Daftarkan ScrollTrigger
    gsap.registerPlugin(ScrollTrigger);

    let currentIndex = 0; // Slide yang sedang berada di depan
    let isAnimating = false; // Status untuk mencegah klik ganda/cepat

    // --- Konfigurasi Autoplay ---
    let autoplayInterval = null;
    let sliderInViewport = false; // Flag untuk melacak visibilitas
    const autoplayDelay = 4000; // Jeda 4 detik (4000ms) - Jeda yang terbaik untuk UX umum
    // --------------------------

    // Ubah maxVisibleStack untuk tampilan yang lebih jelas
    const maxVisibleStack = 4; // Jumlah kartu yang terlihat di tumpukan (selain yang di depan)
    // Durasi animasi dipercepat menjadi 0.4s
    const animationDuration = 0.4; // Durasi animasi dalam detik

    // Atur parameter tampilan tumpukan Vertikal/Tab
    const scaleStep = 0.05; // Pengurangan skala per kartu di belakang
    // Ditingkatkan menjadi -20 agar kartu lebih tinggi di tumpukan
    const yOffsetStep = -20;
    // Dipertahankan di -3 untuk mengurangi pergeseran horizontal (lebih tegak lurus)
    const xOffsetStep = -3;

    // Fungsi untuk memulai autoplay
    function startAutoplay() {
        if (autoplayInterval) return; // Mencegah interval ganda
        autoplayInterval = setInterval(() => {
            goToNext();
        }, autoplayDelay);
    }

    // Fungsi untuk menghentikan autoplay
    function stopAutoplay() {
        if (autoplayInterval) {
            clearInterval(autoplayInterval);
            autoplayInterval = null;
        }
    }

    // Fungsi untuk memulai/menghentikan ulang autoplay setelah interaksi pengguna
    function restartAutoplay() {
        stopAutoplay();
        // Beri jeda sebentar (1.5x durasi animasi) sebelum memulai lagi
        // untuk memberi waktu bagi pengguna untuk melihat hasil klik.
        setTimeout(startAutoplay, animationDuration * 1.5 * 1000);
    }

    // Fungsi untuk menerapkan properti tumpukan
    function updateStack() {
        const tl = gsap.timeline();

        slides.forEach((slide, i) => {
            // Hitung indeks relatif terhadap kartu depan (currentIndex)
            let relativeIndex = (i - currentIndex + totalSlides) % totalSlides;
            let zIndex = totalSlides - relativeIndex;

            let targetScale = 1;
            let targetY = 0;
            let targetX = 0;
            let targetOpacity = 1;

            // Gunakan Math.min agar kartu yang lebih dari maxVisibleStack mendapatkan style yang sama
            // ini menciptakan tampilan 'tab' dengan jumlah tetap
            let visibleStackIndex = Math.min(relativeIndex, maxVisibleStack);

            if (relativeIndex === 0) {
                // Kartu paling depan: Penuh dan di tengah
                targetScale = 1;
                targetY = 0;
                targetX = 0;
                targetOpacity = 1;
            } else if (relativeIndex > 0 && relativeIndex <= maxVisibleStack) {
                // Kartu di belakang (Stack/Tab)
                targetScale = 1 - visibleStackIndex * scaleStep;
                targetY = visibleStackIndex * yOffsetStep; // Dorong ke atas (nilai negatif)
                targetX = visibleStackIndex * xOffsetStep; // Dorong ke kiri (nilai negatif)
                targetOpacity = 1;
            } else {
                // Kartu yang jauh di belakang (Sembunyikan)
                // Posisikan seperti kartu terjauh di stack tapi sembunyikan (opacity 0)
                targetScale = 1 - maxVisibleStack * scaleStep;
                targetY = maxVisibleStack * yOffsetStep;
                targetX = maxVisibleStack * xOffsetStep;
                targetOpacity = 0;
            }

            // Animasi properti
            tl.to(
                slide,
                {
                    scale: targetScale,
                    y: targetY,
                    x: targetX, // Tambahkan X translation
                    opacity: targetOpacity,
                    zIndex: zIndex,
                    duration: animationDuration,
                    ease: "power2.out",
                },
                0
            );
        });
    }

    // Fungsi untuk transisi ke slide berikutnya (Bergeser ke KIRI)
    function goToNext() {
        // Blokir klik saat animasi berjalan
        if (isAnimating) return;

        // Hentikan autoplay sementara saat ada transisi (kecuali jika dipicu oleh autoplay itu sendiri)
        // Namun, karena Autoplay di handle oleh setInterval yang memanggil goToNext, kita tidak perlu stop/restart di sini
        // Hanya perlu restart Autoplay setelah interaksi manual (tombol prev/next)

        isAnimating = true; // Set status animasi aktif

        const currentSlide = slides[currentIndex];
        // Hitung indeks berikutnya
        const nextIndex = (currentIndex + 1) % totalSlides;

        // Timeline utama untuk transisi
        const tl = gsap.timeline({
            onComplete: () => {
                // Setelah selesai, update currentIndex dan update stack
                currentIndex = nextIndex;
                updateStack();
                isAnimating = false; // Set status animasi selesai
                // Tidak perlu restart autoplay di sini karena autoplay akan melakukannya lagi
            },
        });

        // 1. Geser kartu saat ini keluar dari tampilan (ke kiri)
        tl.to(
            currentSlide,
            {
                x: -300,
                scale: 0.8,
                opacity: 0,
                duration: animationDuration,
                ease: "power2.in",
            },
            0
        );

        // 2. Animasi semua kartu lainnya bergerak maju (ditarik ke depan)
        tl.call(updateStack, [], 0);
    }

    // Fungsi untuk transisi ke slide sebelumnya (Bergeser ke KANAN)
    function goToPrev() {
        // Blokir klik saat animasi berjalan
        if (isAnimating) return;
        stopAutoplay(); // Hentikan autoplay sementara saat ada interaksi/transisi
        isAnimating = true; // Set status animasi aktif

        const prevIndex = (currentIndex - 1 + totalSlides) % totalSlides;
        const prevSlide = slides[prevIndex];

        // Timeline utama untuk transisi
        const tl = gsap.timeline({
            onStart: () => {
                // Atur kartu yang akan datang ke posisi DI KANAN (x: 300) dan sembunyi
                gsap.set(prevSlide, {
                    x: 300, // Posisikan di luar layar KANAN
                    scale: 0.8,
                    opacity: 0,
                    zIndex: totalSlides + 1, // Z-index tertinggi agar di atas kartu lain
                });

                currentIndex = prevIndex; // Update currentIndex terlebih dahulu
                updateStack(); // Animasi semua kartu ke posisi baru (ke belakang)
            },
            onComplete: () => {
                isAnimating = false; // Set status animasi selesai
                // Restart autoplay setelah animasi selesai (Hanya jika slider terlihat)
                if (sliderInViewport) {
                    restartAutoplay();
                }
            },
        });

        // 1. Geser kartu baru (yang sekarang menjadi currentIndex) masuk dari KANAN ke tengah
        tl.to(
            prevSlide,
            {
                x: 0,
                scale: 1,
                opacity: 1,
                duration: animationDuration,
                ease: "power2.out",
            },
            0
        );
    }

    // ScrollTrigger untuk Autoplay (Hanya saat di Viewport)
    ScrollTrigger.create({
        trigger: "#slider-container",
        start: "top bottom", // Mulai saat bagian atas container masuk dari bawah viewport
        end: "bottom top", // Berakhir saat bagian bawah container keluar dari atas viewport

        // Saat container masuk viewport
        onEnter: () => {
            sliderInViewport = true;
            // Hanya mulai autoplay jika tidak sedang di-hover
            if (!sliderContainer.matches(":hover")) {
                startAutoplay();
            }
        },
        onEnterBack: () => {
            sliderInViewport = true;
            // Hanya mulai autoplay jika tidak sedang di-hover
            if (!sliderContainer.matches(":hover")) {
                startAutoplay();
            }
        },
        // Saat container keluar viewport
        onLeave: () => {
            sliderInViewport = false;
            stopAutoplay();
        },
        onLeaveBack: () => {
            sliderInViewport = false;
            stopAutoplay();
        },
    });

    // Event Listeners (Tetap diperlukan untuk interaksi manual)
    nextBtn.addEventListener("click", goToNext);
    prevBtn.addEventListener("click", goToPrev);

    // --- Event Listeners untuk Pause/Resume saat Hover (sesuai permintaan user) ---
    sliderContainer.addEventListener("mouseenter", () => {
        // Hentikan autoplay saat cursor masuk (hover)
        stopAutoplay();
    });

    sliderContainer.addEventListener("mouseleave", () => {
        // Lanjutkan autoplay saat cursor keluar, HANYA jika slider masih di dalam viewport
        if (sliderInViewport) {
            startAutoplay();
        }
    });
    // -----------------------------------------------------------------------------

    // Inisialisasi tampilan awal
    updateStack();
});
