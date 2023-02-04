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
    delay: 3000,
    disableOnInteraction: false,
  },
  pagination: {
    el: ".swiper-pagination",
    clickable: true,
  },
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
});
