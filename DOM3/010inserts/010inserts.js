"use strict";
let elem = document.body.firstElementChild;
let elem2 = elem.nextElementSibling;
let elem3 = elem2.nextElementSibling;
let text = "Hola";

elem.append(document.createTextNode(text));
elem2.innerHTML = text;
elem3.textContent = text;

//* Los tres comandos arrojan el mismo resultado 