<!-- A partir de una edad muestra por pantalla:bebé si tiene menos de 3 años
niño si tiene entre 3 y 12 años
adolescente entre 13 y 17 años
adulto entre 18 y 66
jubilado a partir de 67 -->

<?php 
    $edad = $_GET['edad'] ?: 0;

    switch($edad){
        case $edad<3 && $edad>0:
            echo("bebé");
            break;
        case $edad<=12 && $edad>0:
            echo("niño");
            break;
        case $edad<=17 && $edad>0:
            echo("adolescente");
            break;
        case $edad<=66 && $edad>0:
            echo("adulto");
            break;
        case $edad>66 && $edad>0:
            echo("Jubilado");
            break;
        default:
            echo("Introduce una edad válida");
            break;
        }
?>
