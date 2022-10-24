<!-- 22. 022generaPass.php: Crea una función que, a partir de un tamaño, genere 
una contraseña aleatoria compuesta de letras y dígitos de manera aleatoria. -->

<?php 

    // Si no se ha recogido ningún tamaño valdrá 12 por defecto.
    $tamanio = $_GET['tamanio'] ?? 12;
    function generaPass($tamanio){
        
        $longitud = $tamanio;

        $letraDigitos = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890';
        $newPassword = array(); 

        for ($i = 0; $i < $longitud; $i++) {
            $pos = rand(0, (strlen($letraDigitos) - 1));
            $newPassword[$i] = $letraDigitos[$pos];
        }
        return implode($newPassword);
    }

    echo generaPass($tamanio);
?>