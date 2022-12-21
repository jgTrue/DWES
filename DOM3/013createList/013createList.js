createList();
function createList(){
    
     let lista = document.createElement('ul');
     document.body.append(lista);
     let inputElement;

    do {
        inputElement = prompt('Agrega un elemento nuevo');
        if(inputElement != null){
            let li = document.createElement('li');
            li.innerHTML = inputElement;
            lista.append(li);
        }
    } while (inputElement != null && inputElement);
}