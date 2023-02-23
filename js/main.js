//Account Menu
$(".account-menu").click((e) => {
  $(".navbar .form").toggleClass("active");
  e.stopPropagation();
});
$(".navbar .form").click((e) => {
  e.stopPropagation();
});
$(document).click((e) => {
  if (e.target !== ".account-menu" && $(".navbar .form").hasClass("active")) {
    $(".navbar .form").removeClass("active");
  }
});

// Categories pg
$(".categories .list-filter .category-filter ").click(() => {
  $(".categories .menu-filter").addClass("active");
});
$(".categories .menu-filter .close ").click(() => {
  if ($(".categories .menu-filter").hasClass("active"))
    $(".categories .menu-filter").removeClass("active");
});
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

// Image Product
$(".products .box .click-image img").each((i, el) => {
  $(el).on("click", () => {
    let imgGetSrc = $(el).attr("src");
    $(el).parent().siblings(".show-image").children().attr("src", imgGetSrc);
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

var swiper = new Swiper(".myProducts", {
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
      slidesPerView: 1,
      spaceBetween: 30,
    },
    1024: {
      slidesPerView: 2,
      spaceBetween: 20,
    },
    1200: {
      slidesPerView: 3,
      spaceBetween: 10,
    },
  },
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
});
