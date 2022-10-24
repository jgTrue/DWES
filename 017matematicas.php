<!-- 17. 017matematicas.php: A√±ade las siguientes funciones:
digitos(int $num): int ‚ devuelve la cantidad de d√≠gitos de un n√∫mero.
digitoN(int $num, int $pos): int ‚ devuelve el digito que ocupa, 
empezando por la izquierda, la posición $pos.
quitaPorDetras(int $num, int $cant): int ‚ le quita por detrás (derecha) 
$cant digitos.
quitaPorDelante(int $num, int $cant): int ‚le quita por delante (izquierda) 
$cant digitos.
Para probar las funciones, haz uso tanto de paso de argumentos 
posicionales como argumentos con nombre. -->

<?php 
    echo 'digitos(int $num): int ‚ => devuelve la cantidad de dígitos de un nú∫mero. Ej: 200 <br>Output: '.digitos(200).'<br>';
    
    echo '<br>digitoN(int $num, int $pos): int  ‚ => devuelve el digito que ocupa, 
            empezando por la izquierda, la posición $pos. EJ 1996 - 9 <br>Output: '.digitoN(1996, 9).'<br>';
    
    echo '<br>quitaPorDetras(int $num, int $cant): int ‚ => le quita por detrás (derecha) 
            $cant digitos. Ej 123456 - 2<br>Output: '.quitaPorDetras(123456, 2).'<br>';
    
    echo '<br>quitaPorDelante(int $num, int $cant): int ‚ => le quita por delante (izquierda) 
            $cant digitos. Ej: 123456 - 2<br>Output: '.quitaPorDelante(123456, 2).'<br>';
    
    function digitos(int $num) : int{

         $numlength = strlen((string)$num);
         return $numlength;
    }

    function digitoN(int $num, int $pos) : int{
        $numPos = strpos((string)$num, $pos);

        if ($numPos == false) {
            
         echo "[El número ${pos} no se encuentra en ${num}]" ;
         return -1;
        }
        else{
            return $numPos;
        }
    }

    function quitaPorDetras(int $num, int $cantidad) : int{

        $numArray = str_split((string)$num); 
        $result ="";
        

        for($i = 0; $i < $cantidad; $i++){
            
            array_pop($numArray);
        }
        

        foreach ($numArray as $numPostion => $numValue) {
            $result .= $numValue;

        }
        return (int)$result;

    }

    function quitaPorDelante(int $num, int $cantidad) : int{
        
        $numArray = str_split((string)$num); 
        $result ="";
        

        for($i = 0; $i < $cantidad; $i++){
            
            array_shift($numArray);
        }
        

        foreach ($numArray as $numPostion => $numValue) {
            $result .= $numValue;

        }
        return (int)$result;

    }
?>