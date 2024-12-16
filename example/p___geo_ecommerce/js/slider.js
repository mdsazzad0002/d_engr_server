

// slide next and prev
let slide_container = document.querySelector('.home');
let slide = document.querySelectorAll('.home .slides-container .slide');
let index = 0;
let intervalId;
function next() {
    slide[index].classList.remove('active');
    index = (index + 1) % slide.length;
    // console.log(index)
    slide[index].classList.add('active');
}
function prev() {
    slide[index].classList.remove('active');
    index = (index - 1 + slide.length) % slide.length;
    // console.log(index)
    slide[index].classList.add('active');
}

function autoSlide() {
    intervalId = setInterval(() => next(), 3000)
}

autoSlide()
slide_container.addEventListener('mouseenter', () => clearInterval(intervalId));
slide_container.addEventListener('mouseleave', () => autoSlide())
