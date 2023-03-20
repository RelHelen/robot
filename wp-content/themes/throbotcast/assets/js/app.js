// let moveTextTo = document.querySelectorAll('.f3-h1-anim');
// let moveTextFrom = document.querySelectorAll('.f3-h3-anim');
let moveTextTo = document.querySelectorAll('.anim-left');
let moveTextFrom = document.querySelectorAll('.anim-right');
let imgRoutered = document.querySelectorAll('.img_router_red');
let imgRouter = document.querySelectorAll('.img_router');

moveTextTo.forEach(e => e.classList.add('anim__moveto'));
moveTextFrom.forEach(e => e.classList.add('anim__movefrom'));
imgRouter.forEach(e => e.classList.add('anim__route'));
imgRoutered.forEach(e => e.classList.add('anim__route'));

window.addEventListener('scroll', e => {
    document.body.style.setProperty('--scrollTop', `${this.scrollY}px`) // Update method
    document.body.style.setProperty('--scrollRout', `${this.scrollY}deg`) // Update method

})

let scrollSpeed = window.pageYOffset / 2;

let scrollObject = document.getElementById("scrollObject");
if (scrollObject) {
    window.addEventListener("scroll", () => {
        scrollObject.style.transform = "rotate("
        `${scrollSpeed}`
        "deg)";
    });
}

gsap.registerPlugin(ScrollTrigger, ScrollSmoother)
ScrollSmoother.create({
    wrapper: '.wrapper',
    content: '.content'
})


//для паралакса
var image = document.getElementsByClassName('thumbnail');
new simpleParallax(image);
//