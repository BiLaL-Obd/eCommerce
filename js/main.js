// Windows Scroll
$(document).ready(function () {
  $(window).scroll(function () {
    if ($(window).scrollTop() >= 400) {
      $(".scroll").css({ right: "10px" });
    } else if ($(window).scrollTop() < 500) {
      $(".scroll").css({ right: "-200%" });
    }
  });
});

// Swiper
var swiper = new Swiper(".myFeatures", {
  slidesPerView: 1,
  spaceBetween: 10,
  autoplay: {
    delay: 4000,
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
    1200: {
      slidesPerView: 4,
      spaceBetween: 0,
    },
    1650: {
      slidesPerView: 5,
      spaceBetween: 0,
    },
  },
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
});
