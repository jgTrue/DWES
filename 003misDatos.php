<!-- 3. 003misDatos.html y 003misDatos.php: Es el mismo ejercicio anterior, pero 
separando la lógica. En el html crearemos el formulario para introducir los 
datos, y luego recogemos los datos y generamos la tabla en el segundo 
archivo. -->



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>003misDatos.php</title>
    <?php 
        $nombre = $_GET['nombre'];
        $primer_apellido = $_GET["primer_apellido"];
        $segundo_apellido = $_GET["segundo_apellido"];
        $email = $_GET['email'];
        $anio = $_GET['anio'];
        $movil = $_GET['movil'];
    ?>
</head>
<body>
    <table border="1px solid">
        <thead>
            <tr>    
                <th>Nombre</th>
                <th>1º Apellido</th>
                <th>2º Apellido</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><?=$nombre?></td>
                <td><?=$primer_apellido?></td>
                <td><?=$segundo_apellido?></td>
            </tr>
            <tr>
                    <th>Email</th>
                    <th>Año Nacimiento</th>
                    <th>Móvil</th>
            </tr>
            <tr>
                <td><?=$email?></td>
                <td><?=$anio?></td>
                <td><?=$movil?></td>
            </tr>
        </tbody>
    </table>
</body>
</html>