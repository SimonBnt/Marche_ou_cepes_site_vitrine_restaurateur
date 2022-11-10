// ---- Menu Burger script ---- //

let burgerMenu = document.getElementById("burgerMenu")
let openBtn = document.getElementById("openBtn")
let closeBtn = document.getElementById("closeBtn")
let burgerMenuContainer = document.getElementById("burgerMenu_container")
let navbar = document.getElementById("navbar")

openBtn.onclick = openBurgerMenu
closeBtn.onclick = closeBurgerMenu

function openBurgerMenu() {
    burgerMenu.classList.add("active");
}
  
function closeBurgerMenu() {
    burgerMenu.classList.remove("active");
}

// ---- Bottom fixed Navbar script ---- //

let previousScrollPosition = window.pageYOffset;
let currentScrollPosition = window.pageYOffset;

window.onscroll = function() {
  if (previousScrollPosition > currentScrollPosition) {
    navbar.style.bottom = "-50px";
    }
    navbar.style.bottom = "0";
} 


// ---- Form validation script ---- //