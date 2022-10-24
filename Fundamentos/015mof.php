<!-- 15. 015mof.php: Rellena un array de 100 elementos de manera aleatoria con 
valores M o F (por ejemplo ["M", "M", "F", "M", ...]). Una vez completado, 
vuelve a recorrerlo y calcula cuantos elementos hay de cada uno de los 
valores almacenando el resultado en un array asociativo ['M' => 44, 'F' => 
66] (no utilices variables para contar las M o las F). Finalmente, muestra el 
resultado por pantalla. -->

<?php

    $elementosMF = array();
    $numElementosMF = array("M" => 0, "F" => 0);
    
    for($i=0; $i < 100; $i++){
        (rand(1,2) == 1) ? array_push($elementosMF, "M") : array_push($elementosMF, "F");
    };

    foreach($elementosMF as $elementoX){
        ($elementoX == "M") ? $numElementosMF["M"]++: $numElementosMF["F"]++;
    }

    print_r($numElementosMF);

?>