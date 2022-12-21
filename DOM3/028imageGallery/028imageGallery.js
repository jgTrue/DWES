"use strict";

content.onclick = function (event) {
    
    let img = event.target.closest('img');

    imageURL(img.src);
  };

function imageURL(url){
    if(view.src != url){
        view.src = url;
    }
}