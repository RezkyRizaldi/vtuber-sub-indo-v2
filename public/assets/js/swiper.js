const swiper = new Swiper(".swiper-container", {
  effect: "coverflow",
  grabCursor: true,
  centeredSlides: true,
  slidesPerView: "auto",
  loop: false,
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
  coverflowEffect: {
    rotate: 0,
    stretch: 0,
    depth: 100,
    modifier: 2,
    slideShadows: true,
  },
  breakpoints: {
    320: {
      slidesPerView: 1,
      loop: true,
    },
    480: {
      slidesPerView: 1,
      loop: true,
    },
    576: {
      slidesPerView: 1,
      loop: true,
    },
    640: {
      slidesPerView: 3,
      loop: false,
    },
    768: {
      slidesPerView: 3,
      loop: false,
    },
    992: {
      slidesPerView: 3,
      loop: false,
    },
    1024: {
      slidesPerView: 3,
      loop: false,
    },
  },
  // pagination: {
  //   el: ".swiper-pagination",
  //   clickable: true,
  // },
  // scrollbar: {
  //   el: ".swiper-scrollbar",
  // },
});
