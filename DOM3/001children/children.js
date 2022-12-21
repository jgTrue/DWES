// Para cada una de las siguientes preguntas, da al menos una forma de cómo acceder a 
// ellos:

"use strict";
//? ¿El nodo <div> del DOM?
console.log(document.body.firstElementChild);
//? ¿El nodo <ul> del DOM?
console.log(document.body.children[1]);
//? El segundo <li> (con Peter Parker)?
console.log(document.body.children[1].lastElementChild);