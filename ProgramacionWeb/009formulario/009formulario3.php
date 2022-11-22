<?php

    session_start();
    if(isset($_POST['nConviviente'])){
        $_SESSION['nConviviente'] = $_POST['nConviviente'];
    }
    if(isset($_POST['aficion'])){
        $_SESSION['aficion'] = $_POST['aficion'];
    }
    if(isset($_POST['menu'])){
        $_SESSION['menu'] = $_POST['menu'];
    }


?>

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

    <title>009formulario3</title>
</head>
<body>
    <!-- Encabezado -->
    <header>
        <nav class="navbar navbar-light bg-light">
            <a class="navbar-brand fs-3 mx-5 my-2" href="./009formulario3.php">
                <i class="bi bi-filetype-php mx-3 p-2">009formulario3.php</i>
            </a>
        </nav>
    </header>
    <div class="container my-5"></div>
    <table class="table table-dark">
  <thead>
    <tr>
      <th scope="col">Nombre</th>
      <th scope="col">Apellidos</th>
      <th scope="col">Mail</th>
      <th scope="col">Url</th>
      <th scope="col">Sexo</th>
      <th scope="col">Nº convivientes</th>
      <th scope="col">Aficiones</th>
      <th scope="col">Menú</th>
    </tr>
  </thead>
  <tbody>
    <tr>
        <td><?php if(isset($_SESSION['firstName'])) echo $_SESSION['firstName'] ?></td>
        <td><?php if(isset($_SESSION['lastName'])) echo $_SESSION['lastName'] ?></td>
        <td><?php if(isset($_SESSION['mail'])) echo $_SESSION['mail'] ?></td>
        <td><?php if(isset($_SESSION['urlPersonal'])) echo $_SESSION['urlPersonal'] ?></td>
        <td><?php if(isset($_SESSION['sex'])) echo $_SESSION['sex'] ?></td>
        <td><?php if(isset($_SESSION['nConviviente'])) echo $_SESSION['nConviviente'] ?></td>
        <td><?php
                if(!empty($_SESSION['aficion'])) {
                    foreach ($_SESSION['aficion'] as $value) {
                        echo $value."</br>";
                    }
                } ?>
        </td>
        <td><?php
                if(!empty($_SESSION['menu'])) {
                    foreach ($_SESSION['menu'] as $value) {
                        echo $value."</br>";
                    }
                } ?>
        </td>
      
    </tr>
  </tbody>
</table>
</body>
</html>

