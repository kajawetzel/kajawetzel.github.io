document.addEventListener("DOMContentLoaded", function () {
    const carousel = document.querySelector(".carousel");
    const items = Array.from(carousel.children);
  
    // Dupliziere die Elemente für eine endlose Galerie
    items.forEach((item) => {
      const clone = item.cloneNode(true);
      carousel.appendChild(clone); // Hänge sie ans Ende
    });
  
    // Option: Klone erneut, falls die Galerie sehr groß ist
    items.forEach((item) => {
      const clone = item.cloneNode(true);
      carousel.appendChild(clone); // Zweites Duplizieren für lange Listen
    });


  });


