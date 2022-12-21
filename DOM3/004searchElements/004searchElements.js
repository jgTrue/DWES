"use strict";

// Aquí está el documento con la tabla y el formulario.
// ¿Cómo encontrar?...
// La tabla con id="age-table".
console.log(document.getElementById('age-table'));
// Todos los elementos labeldentro de la tabla (debería haber 3).
console.log(document.querySelectorAll('#age-table label'));
// El primer td en la tabla (con la palabra “Age”).
console.log(document.getElementById('age-table').rows[0].cells[0]);
// El form con name="search".
console.log(document.getElementsByName('search')[0]);
// El primer input en ese formulario.
console.log(document.getElementsByTagName('input')[0]);
// El último input en ese formulario.
//*Formulario en la variable
let form = document.getElementsByName('search')[0];
//*Variable array de los elementos input del formulario
let element = form.querySelectorAll('input');

console.log(element[element.length-1]);

// Abra la página index.html en una ventana separada y haga uso de las herramientas del 
// navegador.