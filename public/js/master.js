const lenis = new Lenis({
  smooth: true,
  lerp:0.1,
});
function raf(time) {
  lenis.raf(time);
  requestAnimationFrame(raf);
}
requestAnimationFrame(raf);

const body = document.querySelector('body');

const menu_container = document.querySelector('.container .menu-container');
const menu_btn = document.querySelector('.menu .menu_open');
const menu_close = document.querySelector('.menu .menu_close');
const main = document.querySelector('body main');

menu_btn.addEventListener('click', () => {
  gsap.to(menu_container, {
    left: 0,
    duration: 0.2,
  });
  gsap.to(menu_btn,{
    display:'none',
    y:10,
    opacity:0,
  });
  gsap.to(menu_close,{
    display:'block',
    delay:0.5,
    opacity:1,
    y:0,
  });
});
menu_close.addEventListener('click', () => {
  gsap.to(menu_container, {
    left: '-120%',
    duration: 0.2,
  });
  gsap.to(menu_close,{
    display:'none',
    y:10,
    opacity:0,
  })
  gsap.to(menu_btn,{
    display:'block',
    delay:0.5,
    opacity:1,
    y:0,
  })
})