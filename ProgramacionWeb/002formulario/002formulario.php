<!-- 002formulario.html/.php:
Crea un formulario que solicite:
Nombre y apellidos. Email. URL página personal. Sexo (radio). Número de convivientes 
en el domicilio. Aficiones (checkboxes) – poner mínimo 4 valores.
Menú favorito (lista selección múltiple) – poner mínimo 4 valores.
Muestra los valores cargados en una tabla-resumen. -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="../css/custom.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">

    <script defer src="../js/bootstrap.bundle.js"></script>
    <script defer src="../js/bootstrap.js"></script>
    <script defer src="../js/custom.js"></script>

    <title>Resultado</title>

    <?php
        $nombre = $_POST['firstName'] ?? '';
        $apellidos = $_POST['lastName'] ?? '';
        $email = $_POST['mail'] ?? '';
        $url = $_POST['urlPersonal'] ?? '';
        $sexo = $_POST['sex'] ?? '';
        $nConviviente = $_POST['nConviviente'] ?? '';
        $aficiones = array($_POST['aficion1'] ?? null,$_POST['aficion2'] ?? null,$_POST['aficion3'] ?? null,$_POST['aficion4'] ?? null);
        $menuList = $_POST["menu"] ?? null;

    ?>
</head>
<body>
    <!-- Encabezado -->
    <header>
        <nav class="navbar navbar-light bg-light">
            <a class="navbar-brand fs-3 mx-5 my-2" href="002formulario.html">
                <i class="bi bi-filetype-php mx-3 p-2">002formulario.php</i>
            </a>
        </nav>
    </header>
    <!-- Tabla resultado -->
    <div class="container my-5 p-4 justify-content-center">
        <h2 class="my-3 text-center">Tabla - Resultado</h2>
        <table class="table border border-3 border-black text-center">
            <thead>
            <tr>
                <th scope="col">Nombre</th>
                <th scope="col">Apellido</th>
                <th scope="col">Email</th>
                <th scope="col">Url</th>
                <th scope="col">Sexo</th>
                <th scope="col">Nº convivientes</th>
                <th scope="col">Aficiones</th>
                <th scope="col">Menú favorito</th>
            </tr>
            </thead>
            <tbody class="border border-2">
            <tr>
                <td class="border border-2 border-black"><?=ucfirst($nombre)?></td>
                <td class="border border-2 border-black"><?=ucfirst($apellidos)?></td>
                <td class="border border-2 border-black"><?=$email?></td>
                <td class="border border-2 border-black"><?='<a href="'.$url.'">'.$url.'</a>'?></td>
                <td class="border border-2 border-black"><?=ucfirst($sexo)?></td>
                <td class="border border-2 border-black"><?=(int)$nConviviente?></td>
                <td class="border border-2 border-black">
                    <?php 
                        echo('<ul>');
                        foreach ($aficiones as $key => $value) {
                            if ($value != null) { echo('<li>'.ucfirst($value).'</li>'); }
                        } 
                        echo('</ul>');
                    ?>
                </td>
                <td class="border border-2 border-black">
                    <?php 
                        echo('<ul>');
                        if($menuList == null) {
                            echo(''); 
                        }else{
                        foreach ($menuList as $key => $value) {
                            
                            echo('<li>'.ucfirst($value).'</li>');
                        }
                        echo('</ul>');
                        }
                    ?>
                </td>
            </tr>
            
            </tbody>
        </table>
      </div>
</body>
</html>