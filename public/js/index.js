// wears section
const data_for_images = document.querySelectorAll('.wears-container ul li');
data_for_images.forEach((image) => {
    var arrow_icon = image.querySelector('p .arrow_icon');
    var image_text = image.querySelector('p');
    image.addEventListener('mouseenter', () => {
        gsap.to(arrow_icon,{
            display:'block',
            x:20,
            y:-25,
        })
        gsap.to(image_text, {
            x:30,
        })
    })

    image.addEventListener('mouseleave', () => {
        gsap.to(arrow_icon,{
            display:'none',
            x:0,
            y:0,
        })
        gsap.to(image_text, {
            x:0,
        })
    })
})

// swiper
var swiper = new Swiper(".mySwiper", {
    direction: "vertical",
    slidesPerView: 1,
    spaceBetween: 30,
    mousewheel: true,
    loop: true,
    autoplay: {
        delay: 3500,
        disableOnInteraction: false,
    },
});

// about section
gsap.to('.about-heading h1',{
    x:"-32%",
    scrollTrigger:{
        trigger:".about-heading",
        scroller:"body",
        start: "top 0%",
        end: "top -100%",
        scrub: 2,
        pin: true,
    }
})

// scrolling for about color
const nav_bar = document.querySelector('.nav-bar');
const menu_box = document.querySelector('.menu-container .menu-box');
const about_section = document.querySelector('.about-section');
window.addEventListener('scroll', () => {
    const aboutOffset = about_section.offsetTop;
    const scrollY = window.scrollY;

    if (scrollY >= aboutOffset - nav_bar.offsetHeight) {
        nav_bar.classList.add('nav-scroll-active');
        menu_box.classList.add('nav-scroll-active');
    } else {
        nav_bar.classList.remove('nav-scroll-active');
        menu_box.classList.remove('nav-scroll-active');
    }
});