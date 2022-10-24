<!-- 13. 013formulario.html y 013cuadrada.php: Basándote en el ejercicio anterior, 
rellena la tabla de manera que solo los bordes tengan contenido, 
quedándose el resto de las celdas vacías. -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>013cuadrada.php</title>
    <?php
        $filas = $_GET['filas'];
        $columnas = $_GET["columnas"];
    ?>
</head>
<body>
    <table border="1px solid">
        <?php 
         for($i = 1; $i <= $filas; $i++){
            $strColumnas = "";
            for($j = 1; $j <= $columnas; $j++){
                $comprobacion = ($i == 1 || $i == $filas || $j == 1 || $j == $columnas) ? "${i},${j}" : null;
                $strColumnas = $strColumnas."<td>$comprobacion</td>";
            }
            echo    "<tr>
                        ${strColumnas}
                    </tr>";
         }
        ?>
    </table>
</body>
</html>