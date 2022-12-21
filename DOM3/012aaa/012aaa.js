alert(table); // la tabla, tal como debería ser
table.remove();
  // ¿Por qué aún está "aaa" en el documento?
//* Porque la estructura html es incorrecta, si se inspecciona con el navegador, este interpreta que 'aaa' se encuentra por encima de la tabla, fuera de la misma 