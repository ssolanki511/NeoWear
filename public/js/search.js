const filter_open_btn = document.querySelector('.filter-open');
const filter_close_btn = document.querySelector('.close-icon');
const filter_box = document.querySelector('.filter-box');
filter_open_btn.addEventListener('click', () => {
    filter_box.style.transform = 'translateX(0%)';
})
filter_close_btn.addEventListener('click', () => {
    filter_box.style.transform = 'translateX(100%)';
})