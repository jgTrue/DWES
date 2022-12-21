"use strict";

let link = document.querySelectorAll('a');
for (const iterator of link) {
    let attribute = iterator.getAttribute('href');
    if(attribute && attribute.includes('://') && !attribute.startsWith('http://internal.com')){
        iterator.style.color = 'purple';
    }
}