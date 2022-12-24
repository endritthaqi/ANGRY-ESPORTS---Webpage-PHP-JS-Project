let menu = document.querySelector('#menu');
let navbar = document.querySelector('.navbar');
var imgX = document.createElement("img");
imgX = "/img/bx-x.svg";
menu.onclick= ()  => {
    menu.classList.toggle('imgX');
    navbar.classList.toggle('open');
}


//SCRIPTA per IMGslider
var varguImg = [
    'img/banner.png',
    'img/1angry.png',
    'img/turnuva111.png'
];

var index = 0;
const koha = 5000;

function krijoSlider(){
    document.getElementById('imazhi').src = varguImg[index];
    index++;

    if(index == varguImg.length){
        index = 0;
    }

    setTimeout("krijoSlider()", koha);
}

krijoSlider();

