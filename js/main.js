//Product
let products = document.querySelectorAll(".products .product-list li");
let productBox = document.querySelectorAll(".products .product-items .all");
products.forEach((li) => {
  li.addEventListener("click", activeClass);
  li.addEventListener("click", manageProduct);
});
function activeClass() {
  products.forEach((li) => {
    li.classList.remove("active");
    this.classList.add("active");
  });
}
function manageProduct() {
  productBox.forEach((product) => {
    product.style.display = "none";
  });
  document.querySelectorAll(this.dataset.product).forEach((ele) => {
    ele.style.display = "block";
  });
}

// Swiper
var swiper = new Swiper(".myLanding", {
  spaceBetween: 30,
  centeredSlides: true,
  loop: true,
  autoplay: {
    delay: 4000,
    disableOnInteraction: false,
  },
  pagination: {
    el: ".swiper-pagination",
    clickable: true,
  },
  grabCursor: true,
});

var swiper = new Swiper(".myOfferes", {
  slidesPerView: 1,
  spaceBetween: 10,
  autoplay: {
    delay: 3000,
    disableOnInteraction: false,
  },
  loop: true,
  breakpoints: {
    640: {
      slidesPerView: 1,
      spaceBetween: 20,
    },
    768: {
      slidesPerView: 2,
      spaceBetween: 40,
    },
    1024: {
      slidesPerView: 3,
      spaceBetween: 50,
    },
  },
});
