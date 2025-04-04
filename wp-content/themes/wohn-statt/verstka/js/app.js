import MainClass from "./classes/main-classes.js";
import { initHeader } from "./header/index.js";
import "./animation.js";
import "./components/spollers.js";

const app = new MainClass();

initHeader(app);

// Swipers
new Swiper(".portfolio__swiper", {
  spaceBetween: 20,
  slidesPerView: "auto",
  navigation: {
    nextEl: ".portfolio__swiper_next",
    prevEl: ".portfolio__swiper_prev",
  },
});

new Swiper(".testimonials__swiper", {
  spaceBetween: 20,
  slidesPerView: "auto",
  navigation: {
    nextEl: ".testimonials__arrow-next",
    prevEl: ".testimonials__arrow-prev",
  },
});

new Swiper(".media-videos__swiper", {
  spaceBetween: 20,
  slidesPerView: 3,
  navigation: {
    nextEl: ".media-videos__arrow-next",
    prevEl: ".media-videos__arrow-prev",
  },
  breakpoints: {
    320: {
      slidesPerView: 1,
    },
    700: {
      slidesPerView: 2,
    },
    1000: {
      slidesPerView: 3,
    },
  },
});

document.addEventListener("DOMContentLoaded", function () {
  const mediaWrap = document.querySelector(".media-images__items");
  if (!mediaWrap) return;
  const mediaItems = mediaWrap.querySelectorAll(".media-images__item");
  mediaItems.forEach((item) => {
    item.setAttribute("data-fancybox", "gallery");
  });

  Fancybox.bind(mediaWrap);
});

document.addEventListener("DOMContentLoaded", function () {
  const showVideos = document.querySelectorAll("[data-show-video]");
  const showImages = document.querySelectorAll("[data-show-image]");

  console.log("showVideos", showVideos);

  showImages.forEach((item) => {
    const key = item.getAttribute("data-show-image");
    const video = showVideos[key];
    item.addEventListener("click", () => {
      console.log("click", video);
      item.style.display = "none";
      video.setAttribute("src", video.getAttribute("data-src"));
    });
  });
});
