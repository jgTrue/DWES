"use strict";

let data = {
    "Fish": {
      "trout": {},
      "salmon": {}
    },
    "Tree": {
      "Huge": {
        "sequoia": {},
        "oak": {}
      },
      "Flowering": {
        "apple tree": {},
        "magnolia": {}
      }
    }
  };

//   InnerHTML
let container = document.getElementById('container');

// function createTree(container, obj) {
//     container.innerHTML = createContent(obj);
//   }

// function createContent(obj) {
//     let li = '';
//     let ul;
//     for (let key in obj) {
//         li += '<li>' + key + createContent(obj[key]) + '</li>';
//     }
//     if (li) {
//         ul = '<ul>' + li + '</ul>'
//     }
//     return ul || '';
// }


function createTree(container, obj) {
    container.append(createContent(obj));
}

function createContent(obj) {
    
    if (!Object.keys(obj).length) return;
    
    let ul = document.createElement('ul');
    
    for (let key in obj) {
        let li = document.createElement('li');
        li.innerHTML = key;
        
        let childrenUl = createContent(obj[key]);
        if (childrenUl) {
            li.append(childrenUl);
        }
        
        ul.append(li);
    }
    
    return ul;
}

createTree(container, data);