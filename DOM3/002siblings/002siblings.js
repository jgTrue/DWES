// Si elem – es un elemento nodo arbitrario del DOM...
//? ¿Es cierto que elem.lastChild.nextSibling siempre es null?
//* No funcionará pues si es el último elemento no puede tener un siguiente hermano, será null.
console.log(document.body.children[1].lastElementChild.nextElementSibling);
//? ¿Es cierto que elem.children[0].previousSibling siempre es null ?
//* Será null ya que si es el primer hijo no puede existir uno antes que el, el resto serán siguientes a el.
console.log(document.body.children[0].previousElementSibling);

// Demúestralo.