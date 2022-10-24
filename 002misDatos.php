<!-- Escribe un programa que almacene en variables tu 
nombre, primer apellido, segundo apellido, email, año en el que naciste y 
móvil. Luego muéstralos por pantalla dentro de una tabla. -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>002misDatos.php</title>
    <?php 
        $nombre = "Jairo";
        $primer_apellido = "García";
        $segundo_apellido = "Barrera";
        $email = "jgb@gmail.com";
        $anio = "1996";
        $movil = "666 555 444";
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