let menu = document.querySelector("#menu");
let navbar = document.querySelector(".navbar");
var imgX = document.createElement("img");
imgX = "/img/bx-x.svg";
menu.onclick = () => {
    menu.classList.toggle("imgX");
    navbar.classList.toggle("open");
};


