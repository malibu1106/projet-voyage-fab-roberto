

let iconeMenuBurger = document.getElementById('burger-button');
iconeMenuBurger.addEventListener("click", showOrHideBurgerMenu);

let menuBurger = document.getElementById('menu-petit');

function showOrHideBurgerMenu() {
    document.body.className = "";

    if (menuBurger.classList == "menu-petit-cache") {
        menuBurger.classList.replace("menu-petit-cache", "menu-petit-visible");
        iconeMenuBurger.style.transform = "rotate(90deg)";
        iconeMenuBurger.style.fontSize = "35px";
        document.getElementsByTagName('header')[0].style.height = "auto";
    }
    else {
        document.getElementsByTagName('header')[0].style.height = "150px";
        menuBurger.classList.replace("menu-petit-visible", "menu-petit-cache");
        iconeMenuBurger.style.transform = "rotate(0deg)";
        iconeMenuBurger.style.fontSize = "25px";
    }

}