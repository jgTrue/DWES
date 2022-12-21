"use strict";
let texts = document.querySelectorAll('.text');

    for(let text of texts) {
        text.insertAdjacentHTML("afterbegin", '<input type="button" class="delete" value="[X]" />');
        text.firstChild.onclick = () => text.remove();
    }