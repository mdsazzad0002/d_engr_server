// show and hide serch box
let searchForm = document.querySelector('.search-from');
let searchbtn = document.querySelector('#search-btn');


searchbtn.onclick = () => {
    allremove()
    searchForm.classList.toggle('active');
}


// show and hide cart items
let cart = document.querySelector('.shopping-cart');
let cartbtn = document.querySelector('#cart-btn');


cartbtn.onclick = () => {
    allremove()
    cart.classList.toggle('active');
}


// show and hide login form items
let login = document.querySelector('.login-form');
let loginbtn = document.querySelector('#login-btn');


loginbtn.onclick = () => {
    allremove()
    login.classList.toggle('active');
}

// show and hide navbar form items
let navbar = document.querySelector('.navbar');
let menubtn = document.querySelector('#menu-btn');


menubtn.onclick = () => {
    allremove()
    navbar.classList.toggle('active');
}


window.onscroll = () => {
    allremove();
}
function allremove() {
    searchForm.classList.remove('active');
    cart.classList.remove('active');
    login.classList.remove('active');
    navbar.classList.remove('active');
}

