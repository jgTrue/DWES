<!-- Crea un programa que resuelva una ecuación de 2º 
grado del tipo ax² + bx + c = 0. Ten en cuenta que puede tener 2, 1 o no 
tener solución dependiendo del valor del discriminante b²-4ac.Tip: Para 
calcular la raíz cuadrada deberás utilizar la función sqrt() -->

<?php
    $a = $_GET['a'];
    $b = $_GET['b'];
    $c = $_GET['c'];

    $discriminante = $b ** 2 - 4 * $a * $c;
    
    switch($discriminante){

        case $discriminante < 0:{
            echo("La ecuación no se puede resolver, ya que no existen raices negativas.");
            break;
        }

        case $discriminante == 0:{
            $resultado = (-$b + sqrt($discriminante)) / ($a*2);  
            echo("El resultado de ".$a."x² + ".$b."x + ".$c."= 0 es ".$resultado);
            break;
        }

        case $discriminante > 0:{
            $resultado = (-$b + sqrt($discriminante)) / ($a*2);  
            echo("Los resultados de ".$a."x² + ".$b."x + ".$c."= 0 son:<br>".$resultado);
            $resultado = (-$b - sqrt($discriminante)) / ($a*2);  
            echo("<br>".$resultado);
            break;
        }
    }
 ?>