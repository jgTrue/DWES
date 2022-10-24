<!-- 16. 016mates.php: Genera un array aleatorio de 33 elementos con números 
comprendidos entre el 0 y 100 y calcula: El mayor, el menor y la media. -->
<?php 

    $elementos = array();

    for($i = 0; $i < 33; $i++){
        array_push($elementos, rand(0,100));
    }

    $elementoMayor = max($elementos);
    $elementoMenor = min($elementos);
    $media = 0;

    foreach($elementos as $elementoX){
        $media += $elementoX;
    }

    $media = $media / 33;
    echo ("Número mayor: ${elementoMayor}<br>Número menor: ${elementoMenor}<br>Media: ${media}");
   
?>