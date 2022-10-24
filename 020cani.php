<!-- 20. 020cani.php: EsCrIbE uNa FuNcIóN qUe TrAnSfOrMe UnA cAdEnA eN cAnI. -->

<?php 
    $frase = "escribe una función que transforme una cadena en cani, hecho.";

    function cadenaCani(string $frase) : string{
        $arrayFrase = str_split($frase);
        $newFrase ="";
        
        for ($i=0; $i < count($arrayFrase); $i++) { 

            if(64 < ord($arrayFrase[$i]) && ord($arrayFrase[$i]) < 91 && ($i % 2) != 0 && $arrayFrase[$i] != null){
                //Comprueba que sea mayúscula en una posición impar, además que no este vacia la posición.
                $arrayFrase[$i] = strtolower($arrayFrase[$i]);
            }
            else if((96 < ord($arrayFrase[$i]) && ord($arrayFrase[$i]) < 123 && ($i % 2) == 0 && $arrayFrase[$i] != null)){
                //Comprueba que sea minúscula en una posición par, además que no este vacia la posición.
                $arrayFrase[$i] = strtoupper($arrayFrase[$i]);

            }
        }
        // reconstruye la frase
        foreach ($arrayFrase as $posletter => $letter) {
            ($letter != null) ? $newFrase .= $letter : $newFrase .= " ";
        }
        
        return $newFrase;  
    }

    echo cadenaCani($frase);
        


?>