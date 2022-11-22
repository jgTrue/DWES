<!-- Mediante el uso de cookies, crea una página con un desplegable con 
varios colores, de manera que el usuario pueda cambiar el color de fondo de la página. 
Al cerrar la página, ésta debe recordar, al menos durante 24h, el color elegido y la 
próxima vez que se cargue la página, lo haga con el último color seleccionado. -->

<?php
$color = '';

if (!isset($_COOKIE['color'])) {
    setcookie("color", '', time() + (3600 * 24)); 
} else {
    $color = $_COOKIE['color'];
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

    <title>007fondo</title>
</head>

<body class= "<?php if(isset($_COOKIE['color'])) echo 'fondo-'.$color;?>">
    <header>
        <nav class="navbar navbar-light bg-light">
            <a class="navbar-brand fs-3 mx-5 my-2" href="007fondo.php">
                <i class="bi bi-filetype-php mx-3 p-2">007fondo.php</i>
            </a>
        </nav>
    </header>
    <div class="container">
        <section class="row my-5 justify-content-center text-center">
            <div class="col-4 m-0 ">
                <button type=" submit" class="btn btn-lg bd-btn-lg btn-outline-secondary bg-warning"><a href="007redirect.php?color=yellow" class="text-white text-decoration-none"> Fondo amarillo </a></button>
            </div>
            <div class="col-4 m-0">
                <button type=" submit" class="btn btn-lg bd-btn-lg btn-outline-secondary bg-danger"><a href="007redirect.php?color=red" class="text-white text-decoration-none"> Fondo rojo </a></button>
            </div>
            <div class="col-4 m-0">
                <button type=" submit" class="btn btn-lg bd-btn-lg btn-outline-secondary bg-dark"><a href="007redirect.php?color=black" class="text-white text-decoration-none"> Fondo negro </a></button>
            </div>
        </section>
    </div>
</body>

</html>