// NAVBAR SCROLL EFFECT /////////////////////////////////
var navbar = document.querySelector(".site-header");

window.addEventListener("scroll", change);

function change() {
    var topOfPage = window.scrollY;
    
    if(topOfPage >= 100) {
        navbar.classList.add("navbar-container--scrolled");
    }

    
    else {
        navbar.classList.remove("navbar-container--scrolled");
    }
}
// NAVBAR SCROLL EFFECT /////////////////////////////////





console.log("If you see this in the console, JS is working!");