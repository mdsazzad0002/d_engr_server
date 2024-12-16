// navbar
let navbar = document.querySelector('.navabar');
let navbarbutton = document.querySelector('#menubtn');
navbarbutton.addEventListener('click', () => {
    navbar.classList.toggle('active');
})


window.onscroll = () => {
    navbar.classList.remove('active');
}

// loding time
window.onload = () => {
    document.querySelector('.loder').classList.add('active');
}