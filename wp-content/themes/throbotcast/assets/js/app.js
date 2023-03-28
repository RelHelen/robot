// let moveTextTo = document.querySelectorAll('.f3-h1-anim');
// let moveTextFrom = document.querySelectorAll('.f3-h3-anim');
let moveTextTo = document.querySelectorAll('.anim-left');
let moveTextFrom = document.querySelectorAll('.anim-right');
let imgRoutered = document.querySelectorAll('.img_router_red');
let imgRouter = document.querySelectorAll('.img_router');
let imgRoutPers = document.querySelectorAll('.anim_route');
let hambMenu = document.querySelector('#hamb-menu');
let navHeader = document.querySelector('#nav-header');

hambMenu.addEventListener('click', function() {
    navHeader.classList.toggle('on-menu');
    hambMenu.classList.toggle('active');

})

// navbar toggler

moveTextTo.forEach(e => e.classList.add('anim__moveto'));
moveTextFrom.forEach(e => e.classList.add('anim__movefrom'));
imgRouter.forEach(e => e.classList.add('anim__route'));
imgRoutered.forEach(e => e.classList.add('anim__route'));
imgRoutPers.forEach(e => {
    let parentRoutPers = e.closest('div.e-con-inner');
    parentRoutPers.classList.add('anim_route_perspect');
});


window.addEventListener('scroll', e => {
    document.body.style.setProperty('--scrollTop', `${this.scrollY}px`) // Update method
    document.body.style.setProperty('--scrollRout', `${this.scrollY}deg`) // Update method

})

let scrollSpeed = window.pageYOffset / 2;
// let scrollObject = document.getElementById("scrollObject");

// window.addEventListener("scroll", () => {
//     scrollObject.style.transform = "rotate("
//     `${scrollSpeed}`
//     "deg)";
// });

gsap.registerPlugin(ScrollTrigger, ScrollSmoother);
ScrollSmoother.create({
    wrapper: '.wrapper',
    content: '.content'
})


//для паралакса
var image = document.getElementsByClassName('thumbnail');
new simpleParallax(image);
//