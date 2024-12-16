window.onscroll = () => {
    document.querySelector('#toggle').checked = false;
    document.querySelector('#search_checkbox').checked = false;
}

let faqbox = document.querySelectorAll('.faq .box');
faqbox.forEach(faq => {
    faq.addEventListener("click", () => {
        faq.classList.toggle('active');
    })
})

let swiperCheck = document.querySelector('.mySwiper');
if (swiperCheck) {
    var swiper = new Swiper(".mySwiper", {
        loop: true,
        autoplay: true,
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
    });


}
