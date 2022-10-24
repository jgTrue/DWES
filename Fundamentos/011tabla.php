<!-- 11. Muestra dentro de una tabla HTML la tabla de multiplicar del 
número que reciba como parámetro. Utiliza <thead> con sus respectivos 
<th> y <tbody> para dibujar la tabla.  -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>011tabla.php</title>
</head>
<body>
    <table>
        <?php
            $num = $_GET['numero'];

            echo    "<thead>
                        <th>A</th> <th>*</th> <th>B</th> <th>=</th> <th>A*B</th>
                    </thead>";
            for($i = 0; $i <= 10; $i++){
                $resultado = $num * $i;
                echo    "<tbody>
                            <tr>
                                <td>${num}</td> <td>*</td> <td>${i}</td> <td>=</td> <td>${resultado}</td>
                            </tr>
                        </tbody>";
            }
           
        ?>
    </table>
</body>
</html>