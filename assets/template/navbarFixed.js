window.onscroll = function () {
    navbarFix();
}
var navbar = document.getElementById('navbar');
console.log(navbar);
var sticky = navbar.offsetTop;
// navbar.offsetTop = 1;


function navbarFix() {
    console.log('checking');
    console.log(sticky);
    console.log('window offset y' + window.pageYOffset);
    if(window.pageYOffset >= sticky) {
        navbar.classList.add('sticky');
    } else {
        navbar.classList.remove('sticky');
    }
}