document.querySelectorAll(".hamburger").forEach((btn) => {
    btn.addEventListener("click", (e) => {
        btn.classList.toggle("active");
    });
});

const hamburger = document.getElementById("btn-hamburger");
const mobileMenu = document.getElementById("mobile-menu");

hamburger.addEventListener("click", () => {
    if (mobileMenu.classList.contains("max-h-0")) {
        mobileMenu.classList.remove("max-h-0");
        mobileMenu.classList.add("max-h-96"); // sesuaikan tinggi maksimal menu
    } else {
        mobileMenu.classList.add("max-h-0");
        mobileMenu.classList.remove("max-h-96");
    }
});
