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
let switchFil = document.querySelectorAll(".categories .category-filter li");
let imgs = document.querySelectorAll(".categories .all");

switchFil.forEach((li) => {
  li.addEventListener("click", removeActive);
  li.addEventListener("click", manaCategory);
});

function removeActive() {
  switchFil.forEach((li) => {
    li.classList.remove("active");
    this.classList.add("active");
  });
}

function manaCategory() {
  imgs.forEach((img) => {
    img.style.display = "none";
  });
  document.querySelectorAll(this.dataset.category).forEach((el) => {
    el.style.display = "block";
  });
}

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
