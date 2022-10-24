<!-- Sabiendo la edad de una persona, mostrar la edad que 
tendrá dentro de 10 años y hace 10 años. Además, muestra qué año será en 
cada uno de los casos. Finalmente, muestra el año de jubilación suponiendo 
que trabajarás hasta los 67 años. En este caso, no hace falta que 
previamente crees un formulario, puedes probar el ejercicio vía URL: 
004edad.php?edad=33. Tip: $anyoActual = date("Y"); -->

<?php
    $edad = $_GET['edad'] ?: 0;
    $fechaActual = date('Y');

    echo("Edad dentro de 10 años: ".($edad + 10)."<br>");
    
    if($edad <= 10){
        echo("Hace 10 años no habías nacido<br>");
    }
    else{
        echo("Edad hace de 10 años: ".($edad - 10)."<br>");
    }

    if($edad >= 67){
        echo("Ya deberías haberte jubilado en: ".($fechaActual - ($edad - 67))."<br>");
    }
    else{
        echo("Año de jubilación: ".((67 - $edad) + $fechaActual)."<br>");
    }

?>