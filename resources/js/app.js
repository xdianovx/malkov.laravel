// import "./bootstrap";
import "swiper/css/bundle";
import MicroModal from "micromodal";
import Swiper from "swiper/bundle";
import { Fancybox } from "@fancyapps/ui";
import "@fancyapps/ui/dist/fancybox/fancybox.css";
import { accordition } from "./modules/accordition";
import { mask } from "@/modules/mask";

accordition();
mask();

MicroModal.init({ disableScroll: true });

const burger = document.querySelector(".burger");
const navigation = document.querySelector(".navigation");

Fancybox.bind("[data-fancybox]", {
  // Your custom options
});

burger.addEventListener("click", () => {
  if (navigation.classList.contains("active")) {
    navigation.classList.remove("active");
    burger.classList.remove("active");
    document.body.style.overflow = "";
  } else {
    navigation.classList.add("active");
    burger.classList.add("active");
    document.body.style.overflow = "hidden";
  }
});

const swiper = new Swiper(".stock-slider", {
  spaceBetween: 32,
  loop: true,
  navigation: {
    nextEl: ".btn-arrow-next",
    prevEl: ".btn-arrow-prev",
  },
});

const newsSlider = new Swiper(".news-slider", {
  spaceBetween: 16,
  slidesPerView: 4,
  navigation: {
    nextEl: ".btn-arrow-next",
    prevEl: ".btn-arrow-prev",
  },

  breakpoints: {
    320: {
      slidesPerView: 1,
    },
    768: {
      slidesPerView: 2,
    },
    1201: {
      slidesPerView: 4,
    },
  },
});

const swiperReviews = new Swiper(".reviews-slider", {
  spaceBetween: 16,
  autoplay: true,
  speed: 300,
  navigation: {
    nextEl: ".btn-arrow-next",
    prevEl: ".btn-arrow-prev",
  },
  breakpoints: {
    320: {
      slidesPerView: 1,
    },
    1200: {
      slidesPerView: 2,
    },
  },
});
const doctorDocsSlider = new Swiper(".doctor-docs-slider", {
  spaceBetween: 16,
  autoplay: true,
  speed: 300,
  navigation: {
    nextEl: ".btn-arrow-next",
    prevEl: ".btn-arrow-prev",
  },
  breakpoints: {
    320: {
      slidesPerView: 1,
    },
    768: {
      slidesPerView: 2,
    },
    1200: {
      slidesPerView: 4,
    },
  },
});
