"use strict";

content.onclick = function (event) {
    
    let li = event.target.closest('li');

    if (event.ctrlKey || event.metaKey) {
        multiSelect(li);
      } else {
        select(li);
      }
  };

  function select(li) {
    let arrayLi = content.querySelectorAll('.select')
    arrayLi.forEach(element => {
        element.classList.remove('select');
    });
    li.classList.toggle('select');
  }

  function multiSelect(li){
    li.classList.toggle('select');
  }