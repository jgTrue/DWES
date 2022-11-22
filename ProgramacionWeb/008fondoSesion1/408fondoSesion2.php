<!-- Modifica el ejercicio anterior para almacenar el color de fondo 
en la sesión y no emplear cookies. Además, debe contener un enlace al siguiente 
archivo. 408fondoSesion2.php: Debe mostrar el color y dar la posibilidad de:
Volver a la página anterior mediante un enlace, y mediante otro enlace, vaciar la 
sesión y volver a la página anterior. -->

<?php

    session_start();
    $color = '';
    
    $_SESSION['fondo'] = $_GET['color'] ?? 'white';

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

    <title>408fondoSesion2</title>
</head>

<body class= "<?php if(session_start()) echo 'fondo-'.$_SESSION['fondo'];?>">
    <header>
        <nav class="navbar navbar-light bg-light">
            <a class="navbar-brand fs-3 mx-5 my-2" href="./408fondoSesion2.php">
                <i class="bi bi-filetype-php mx-3 p-2">408fondoSesion2.php</i>
            </a>
        </nav>
    </header>
    <div class="container">
        <form action="./008fondoSesion1.php" method="post" class="row my-5 justify-content-center text-center">
            <div class="col-4 m-0">
                <a href="./008fondoSesion1.php"><button name="back" type="submit" class="btn btn-lg bd-btn-lg bg-info text-black text-decoration-none">Volver</button></a>
            </div>
            <div class="col-4 m-0">
                <a href="./008fondoSesion1.php"><button name="reset" type="submit" class="btn btn-lg bd-btn-lg bg-info text-white text-decoration-none">Vaciar sesión</button></a>
            </div>
        </form>
    </div>
</body>

</html>