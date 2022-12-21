"use strict";

// ¿Cuál es el texto dentro de él (sin el subárbol)?
// El número de <li> anidados: todos los descendientes, incluidos los profundamente 
// anidados.

let elements = document.querySelectorAll('li');

for (const iterator of elements) {
    let datos = iterator.firstChild.data;
    let anidados = iterator.getElementsByTagName('li').length;
    datos = datos.trim();
    
    console.log(datos + "(Número de <li> anidados " + anidados + ")");
}

