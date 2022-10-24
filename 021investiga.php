<!-- 21. 021investiga.php: Investiga las siguientes funciones de cadena (explica para 
qué sirven mediante comentarios, y programa un pequeño ejemplo de cada 
una de ellas): ucwords, strrev, str_repeat y md5. -->

<?php 

// ucwords: Transforma el primer caracter de cada palabra de un String en mayúscula.
echo ucwords("esto es un ejemplo de como funcionaría ucwords.");

// strrev: Revierte el orden de un String, de manera que se muestra alrevés.
echo "<br><br>";
echo strrev("La cadena ahora se muestra en reversa.");

// str_repeat: Retirá un string el número de veces que se le indique.
echo "<br><br>";
echo str_repeat("Me repito con str_repeat. ",5);

// md5: utiliza el algoritmo MD5 y retorna un String en forma de hash, de manera codificada en numeros hexadecimales de 32 caracteres.
echo "<br><br>";
echo md5("Información delicada.");
?>