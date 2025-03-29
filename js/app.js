import MainClass from "./classes/main-classes.js";
import { initHeader } from "./header/index.js";
import "./animation.js";

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

