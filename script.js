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

//! contact form & modal behavior
const scriptURL = "https://script.google.com/macros/s/AKfycbwr-vovsSiAF6xwufeYMZsRGyWlozC1h-wyVBCQvP6nPIblve3U63VNdE9pN5pFt6kG/exec";
const form = document.forms["contact-form"];

// btn send , btn loading, and modal
const btnSend = document.querySelector(".btn-send");
const btnLoading = document.querySelector(".btn-loading");
const myModal = new bootstrap.Modal(document.getElementById("myModal"));

form.addEventListener("submit", (e) => {
  e.preventDefault();
  //! change send to loading
  btnSend.classList.toggle("d-none");
  btnLoading.classList.toggle("d-none");
  fetch(scriptURL, { method: "POST", body: new FormData(form) })
    .then((response) => {
      // Open modal after form submission
      myModal.show();
      //! change from loading to send again with timeout
      setTimeout(() => {
        btnSend.classList.toggle("d-none");
        btnLoading.classList.toggle("d-none");
      }, 2000);
      // reset form
      form.reset();
      // success message at console
      console.log("Success!", response);
    })
    .catch((error) => console.error("Error!", error.message));
});
