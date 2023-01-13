<!-- Crea el archivo 001campeones.php donde listes todos los campeones del LOL que has metido 
en tu base de datos. Acuérdate que para ello deberás hacer una conexión con la base de datos 
y un foreach para cada campeón que tengas albergado en la tabla champ. -->

<?php
include_once('conexion.php');

$consulta = "SELECT * FROM `champ`;";

$champs = mysqli_query(conectar(), $consulta);

if($champs){
    foreach ($champs as $value) {
        echo "Identificador: $value[id]<br>
        Nombre: $value[name]<br>
        Rol: $value[rol]<br>
        Dificultad: $value[difficulty]<br>
        Descripcion: $value[description] <br><br>" ;
    }
}



?>