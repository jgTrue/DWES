// Seleccionar todas las celdas diagonales Escribe el código para 
// pintar todas las celdas diagonales de rojo. Necesitarás obtener todas las <td> de la 
// <table> y pintarlas usando el código:
// td debe ser la referencia a la celda de la tabla
// td.style.backgroundColor = 'red'; El resultado debe ser: 

let table = document.body.firstElementChild;

for (let index = 0; index < table.rows.length; index++) {
    let ele = table.rows[index].cells[index];
    ele.style.backgroundColor = 'red';
    
    
}


