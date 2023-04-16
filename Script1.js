// JavaScript source code
let menuBtn = document.querySelector('#menu-btn');
let navbar = document.querySelector('.navba');

menuBtn.onclick = () =>{
    menuBtn.classList.toggle('fa-times');
    navbar.classList.toggle('active');
}

