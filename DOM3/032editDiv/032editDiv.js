"use strict";

let div = document.getElementById('mainDiv');
let area;

document.getElementById('mainDiv').onclick = function (){
    
    area = document.createElement('textarea');
    area.id = 'textArea'
    area.value = div.innerHTML;
    div.replaceWith(area);
    area.focus();

    area.onkeydown = function(event) {
        if(event.key == 'Enter'){
            input();
        }
      };

    area.onblur = function(){
        input();
    };

};

function input(){
    div.innerHTML = area.value;
    area.replaceWith(div);
}
