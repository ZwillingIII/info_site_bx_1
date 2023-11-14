/******/ (() => { // webpackBootstrap
/******/ 	"use strict";
var __webpack_exports__ = {};


document.addEventListener("DOMContentLoaded", () => {
  const sectionSliderThumbs = new Swiper(
    ".sections-list-slider .sections-list-slider__thumbs .swiper",
    {
      slidesPerView: 1,
      watchSlidesProgress: true,
    }
  );

  const sectionSlider = new Swiper(
    ".sections-list-slider .sections-list-slider__main .swiper",
    {
      rewind: true,
      navigation: {
        prevEl: ".sections-list-slider .slider-arrow.icon-arrow--left",
        nextEl: ".sections-list-slider .slider-arrow.icon-arrow--right",
      },
      watchSlidesProgress: true,
      thumbs: {
        swiper: sectionSliderThumbs,
      },
    }
  );

  sectionSliderThumbs.on("slideChange", function () {
    sectionSlider.slideTo(sectionSliderThumbs.activeIndex);
  });

  if (window.innerWidth < 767) {
    const cardsSlider = new Swiper(".cards-list-slider .swiper", {
      slidesPerView: 2,
      spaceBetween: 20,
      // centeredSlides: true,
      freeMode: true,
      rewind: true,
    });
  }

  const monthSliderThumbs = new Swiper(
    ".month-list-slider .month-list-slider__thumbs .swiper",
    {
      slidesPerView: 1,
      watchSlidesProgress: true,
    }
  );

  const monthSlider = new Swiper(
    ".month-list-slider .month-list-slider__main .swiper",
    {
      rewind: true,
      navigation: {
        prevEl: ".month-list-slider .slider-arrow.icon-arrow--left",
        nextEl: ".month-list-slider .slider-arrow.icon-arrow--right",
      },
      watchSlidesProgress: true,
      thumbs: {
        swiper: monthSliderThumbs,
      },
    }
  );

  const eventSlider = new Swiper(".event-slider .swiper", {
    slidesPerView: 1,
    navigation: {
      prevEl: ".event-slider .slider-arrow.icon-arrow--left",
      nextEl: ".event-slider .slider-arrow.icon-arrow--right",
    },
    pagination: {
      el: ".swiper-pagination",
    },
  });
});

/******/ })()
;