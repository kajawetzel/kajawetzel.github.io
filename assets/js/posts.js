document.addEventListener("DOMContentLoaded", function () {
    const images = [
      "/assets/images/post-1-img/kornhaus-1.webp",
      "/assets/images/post-1-img/kornhaus-2.webp",
      "/assets/images/post-1-img/kornhaus-3.webp",
      "/assets/images/post-1-img/kornhaus-4.webp",
      "/assets/images/post-1-img/kornhaus-5.webp",
      "/assets/images/post-1-img/kornhaus-6.webp",
      "/assets/images/post-1-img/kornhaus-7.webp",
      "/assets/images/post-1-img/kornhaus-8.webp",
      "/assets/images/post-1-img/kornhaus-9.webp",
      "/assets/images/post-1-img/kornhaus-10.webp",
    ];

    let currentIndex = 0; // Start with the first set of images
    const visibleImages = 3; // Number of images to show at once
    const container = document.querySelector(".container-img-posts");

    // Function to render images
    function renderImages() {
      container.innerHTML = ""; // Clear existing images
      for (let i = 0; i < visibleImages; i++) {
        const img = document.createElement("img");
        img.className = "img-posts";
        img.src = images[(currentIndex + i) % images.length]; // Loop to start
        container.appendChild(img);
      }
    }

    // Event listeners for buttons
    document.querySelector(".btn-left").addEventListener("click", () => {
      currentIndex = (currentIndex - 1 + images.length) % images.length; // Move left
      renderImages();
    });

    document.querySelector(".btn-right").addEventListener("click", () => {
      currentIndex = (currentIndex + 1) % images.length; // Move right
      renderImages();
    });

    // Initial render
    renderImages();
});
