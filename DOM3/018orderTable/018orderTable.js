"use strict";

let order = Array.from(content.tBodies[0].rows)
    .sort((fRow, sRow) => fRow.cells[0].innerHTML.localeCompare(sRow.cells[0].innerHTML));

    content.tBodies[0].append(...order);