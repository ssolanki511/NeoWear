var swiper = new Swiper(".mySwiper", {
  watchSlidesProgress: true,
  freeMode: false,
  loop:true,
  direction: "vertical",
  spaceBetween: 10,
  slidesPerView: 4,
});
var swiper2 = new Swiper(".mySwiper2", {
  spaceBetween: 10,
  thumbs: {
    swiper: swiper,
  },
  effect: "fade",
});

document.querySelectorAll(".mySwiper .swiper-slide").forEach((thumb, index) => {
  thumb.addEventListener("click", () => {
    swiper.slideToLoop(index);
  });
});