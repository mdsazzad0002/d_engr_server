var swiper = new Swiper(".swiper", {
    autoplay: true,
    slidesPerView: 1,
    spaceBetween: 30,
    loop: true,
    autoplay: {
        delay: 2500,
        disableOnInteraction: false,
    },
    pagination: {
        el: ".swiper-pagination",
    }
});


new PureCounter();

/*
* Easy way to select 
*/

const select = (el, all = false) => {
    el = el.trim();
    if (all) {
        return [...document.querySelectorAll(el)];
    } else {
        return document.querySelector(el);
    }
}

/**
 * Easy event listener function
 */
const on = (type, el, listener, all = false) => {
    let selectEl = select(el, all)
    if (selectEl) {
        if (all) {
            selectEl.forEach(e => e.addEventListener(type, listener))
        } else {
            selectEl.addEventListener(type, listener)
        }
    }
}

/**
 * Easy on scroll event listener 
 */
const onscroll = (el, listener) => {
    el.addEventListener('scroll', listener)
}



// if 300px upper navbar added sticky class for fixed top unless normal behebeir
let header = select('#header');
if (header) {
    const menu_sticky = () => {
        if (window.scrollY > 300) {
            header.classList.add('sticky')
        } else {
            header.classList.remove('sticky')
        }
    }

    // call function when screen scroll by client
    window.onscroll = () => {
        // sticky menu
        menu_sticky();

        // hide menu
        document.getElementById("toggle").checked = false;
    }

}



