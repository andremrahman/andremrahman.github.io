function makeImagesSquare() {
  const images = document.querySelectorAll(".img-size");
  images.forEach((img) => {
    img.style.height = `${img.offsetWidth}px`;
  });
}

// Adjust images when the window is resized
window.addEventListener("resize", makeImagesSquare);

// Initial adjustment
makeImagesSquare();
