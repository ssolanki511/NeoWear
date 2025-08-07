const edit_btn = document.querySelector('.profile-main-container .edit-btn');
const edit_input_tags = document.querySelectorAll('.profile-main-container .edit-input-field')
const edit_form_btn_box = document.querySelector('.profile-box .edit-form-submit-btns');
const edit_close_btn = document.querySelector('.edit-form-btns .edit-close-btn');
const edit_form_timeline = gsap.timeline();

edit_btn.addEventListener('click', (e) => {
    e.preventDefault();
    edit_input_tags.forEach((input_tag) => {
        input_tag.style.borderBottom = '1px solid #6B7280';
        input_tag.style.pointerEvents = 'all';
    })
    edit_form_timeline.to(edit_btn,{
        position:'relative',
        left:'100%',
        opacity:0,
        duration: 0.2
    })
    edit_form_timeline.to(edit_form_btn_box,{
        left: 0,
        opacity:1,
        duration: 0.2,
        position:'abosule',
        delay:0.1
    })
});
edit_close_btn.addEventListener('click', (e) => {
    e.preventDefault();
    edit_input_tags.forEach((input_tag) => {
        input_tag.style.borderBottom = 'none';
        input_tag.style.pointerEvents = 'none';
    })
    edit_form_timeline.to(edit_form_btn_box,{
        left:'-100%',
        opacity:0,
        duration: 0.2,
        position:'absolute',
    })
    edit_form_timeline.to(edit_btn,{
        left:0,
        opacity:1,
        duration: 0,
    })
})