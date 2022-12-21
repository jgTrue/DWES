

function showPrompt(text, callback){
    
    blurDiv();
    
    document.addEventListener('keydown', function(event) {
    
        if (event.code == 'Escape') {
            cancelar();
        }
      });

    let form = document.getElementById('formD');
    form.classList.remove('hide');

    let span = document.getElementById('text');
    span.innerHTML = text;

    form.onsubmit = function() {
        let value = document.getElementById('inp');
        if (value.value == ''){
            borrar();
             return false; 
        }

        alert(value.value);
        return true;
      };
}

function borrar(){
    let value = document.getElementById('inp');
    value.value = '';
}

function blurDiv(){
    let blur = document.createElement('div');
    blur.id = 'cover-div'
    document.body.append(blur);
    let boton = document.getElementById('boton');
    boton.disabled = true;
}

function removeBlue(){
    let blur = document.getElementById('cover-div');
    blur.remove();
}

document.getElementById('button').onclick = function (){
    cancelar()
};

function cancelar(){
    let form = document.getElementById('formD');
    form.classList.add('hide');
    let boton = document.getElementById('boton');
    boton.disabled = false;
    removeBlue()
    alert(null);
    borrar();
    return false;
};

document.getElementById('boton').onclick = function (){
    showPrompt("Escribe algo<br>...inteligente :)", function(value) {
        alert(value);
    });
};
