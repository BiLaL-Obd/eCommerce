// Windows Scroll
$(document).ready(function () {
  $(window).scroll(function () {
    if ($(window).scrollTop() >= 500) {
      $(".scroll").css({ right: "10px" });
    } else if ($(window).scrollTop() < 500) {
      $(".scroll").css({ right: "-200%" });
    }
  });
});

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
      spaceBetween: 30,
    },
    1024: {
      slidesPerView: 3,
      spaceBetween: 20,
    },
  },
});
