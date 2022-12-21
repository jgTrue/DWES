"use strict";

createCalendar(content, 2012, 9);

function createCalendar(elem, year, month) {

    let mes = --month; 
    let dia = new Date(year, mes);

    let table = '<table><tr><th>MO</th><th>TU</th><th>WE</th><th>TH</th><th>FR</th><th>SA</th><th>SU</th></tr><tr>';

    for (let i = 0; i < getDay(dia); i++) {
      table += '<td></td>';
    }

    while (dia.getMonth() == mes) {
      table += '<td>' + dia.getDate() + '</td>';

      if (getDay(dia) % 7 == 6) { 
        table += '</tr><tr>';
      }

      dia.setDate(dia.getDate() + 1);
    }

    if (getDay(dia) != 0) {
      for (let i = getDay(dia); i < 7; i++) {
        table += '<td></td>';
      }
    }

    table += '</tr></table>';

    elem.innerHTML = table;
}
  
  function getDay(date) { 
    let dia = date.getDay();
    if (dia === 0) dia = 7; 
    return --dia;
  }

 