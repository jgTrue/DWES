<!-- Mediante el uso de cookies, informa al usuario de si es su 
primera visita, o si no lo es, muestre su valor (valor de un contador). Además, debes 
permitir que el usuario reinicialice su contador de visitas. -->


<?php

if (isset($_COOKIE['visitas'])) {
    $accesosPagina = $_COOKIE['visitas'];
    setcookie('visitas', ++$accesosPagina);
    $message = "<h1>Número de accesos a la página: " . $accesosPagina . "</h1>";
} else {
    setcookie("visitas", 1, strtotime('+30 days'));
    $message = "<h1>Esta es tu primera vez en la página</h1>";
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

    <title>006contadorVisitas.php</title>
</head>

<body>
    <header>
        <nav class="navbar navbar-light bg-light">
            <a class="navbar-brand fs-3 mx-5 my-2" href="006contadorVisitas.php">
                <i class="bi bi-filetype-php mx-3 p-2">006contadorVisitas.php</i>
            </a>
        </nav>
    </header>
    <section class="container justify-content-center text-center">

        <blockquote class="blockquote border border-2 border-3 p-5 my-5">
            <p><?= $message ?></p>
        </blockquote>
        <figcaption class=" mb-0 text-white border-bottom p-3">
            <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="GET"">
                <button type=" submit" class="btn btn-lg bd-btn-lg btn-outline-secondary bg-warning"><a href="006redirect.php" class="text-white text-decoration-none"> Borrar cockies </a></button>
            </form>
        </figcaption>

    </section>

</body>

</html>