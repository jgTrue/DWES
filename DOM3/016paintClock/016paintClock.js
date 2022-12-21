"use strict";

let temp;

function update() {
    let date = new Date();
    let clock = document.getElementById('content');

    let hh = date.getHours();
    if (hh < 10) hh = '0' + hh;
    clock.children[0].innerHTML = hh;

    let mm = date.getMinutes();
    if (mm < 10) mm = '0' + mm;
    clock.children[1].innerHTML = mm;

    let ss = date.getSeconds();
    if (ss < 10) ss = '0' + ss;
    clock.children[2].innerHTML = ss;
}

function clockStart() {

    if (!temp) {
        temp = setInterval(update, 1000);
    }
    update(); 
}

function clockStop() {
    clearInterval(temp);
    temp = null;
}