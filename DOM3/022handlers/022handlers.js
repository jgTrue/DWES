"use strict";
let button = document.getElementById('boton');
// * No funcionará por que son funciones independientes a pesar de tener el mismo código.
// button.addEventListener("click", () => alert("1"));
// button.removeEventListener("click", () => alert("1"));

// * Onclick si funcionaría, es independiente a eventos anteriores.
button.onclick = () => alert(2);