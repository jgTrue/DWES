"use strict";

grid.onclick = function (event) {
    
      let th = event.target;
      sort(th.cellIndex, th.dataset.type);
    };

function sort(i, type) {
    let tbody = grid.querySelector('tbody');

    let rowsArray = Array.from(tbody.rows);
    
    let compare;

    switch (type) {
    case 'number':
        compare = function(fRow, sRow) {
        return fRow.cells[i].innerHTML - sRow.cells[i].innerHTML;
        };
        break;
    case 'string':
        compare = function(fRow, sRow) {
        return fRow.cells[i].innerHTML > sRow.cells[i].innerHTML ? 1 : -1;
        };
        break;
    }

rowsArray.sort(compare);
tbody.append(...rowsArray);

    }