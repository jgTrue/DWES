<!-- Investiga para qué sirve la instrucción match(), disponible desde PHP8 
(https://www.php.net/manual/es/control-structures.match.php). Explica 
con un par de l√≠neas su propósito y mediante código demuestra su uso. -->

<!-- Es una comprobación de identidad, se comporta como un switch pero más estricto, con la diferencia de que retorna un valor
y no comprueba casos anteriores. Ejemplo: Clasificación en una carrera -->

<?php 
    $posicion = "2";

    $result = match($posicion){
        1, 2, 3 => 'Clasificado para el podio',
        default => 'Desclasificado' 
    };
    echo($result);
?>

<!-- Al no ser idéntico ( === ) se ejecutará el patrón default.  -->