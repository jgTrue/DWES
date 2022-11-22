<!-- Añade una nueva vista similar a 012peliculas.php que muestra un 
"Listado de Series" con una lista desordenada con tres series. Tanto 012peliculas.php 
como la vista recién creada, deben tener un pequeño menú que permita pasar de un 
listado a otro. Comprueba que, si se accede directamente a cualquiera de las vistas sin 
tener un usuario logado vía URL del navegador, no se muestra el listado.
Modifica tanto el controlador como las vistas para que:
los datos los obtenga el controlador (almacena en la sesión un array de películas y otro 
de series) coloque los datos en la sesión.
En las vistas, los datos se recuperan de la sesión y se pintan en la lista desordenada 
recorriendo el array correspondiente. -->

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

    <title>14series</title>

</head>
<body>
<?php 
        session_start();
        $nombreUsuario = $_SESSION['usuario'] ?? ''; // asigna el nombre del usuario
        $seriesUsuario = $_SESSION['series'] ?? []; //asigna el array del usuario
        if($nombreUsuario === 'usuario'){ //Comprueba que sea el usuario logado tenga permiso permiso y muestra el contenido
    ?>
    <header>
        <nav class="navbar navbar-light bg-light">
            <a class="navbar-brand fs-3 mx-5 my-2" href="./010index.php">
                <i class="bi bi-filetype-php mx-3 p-2">14series.php</i>
            </a>
            <div>
                <a href="012peliculas.php" class="btn btn-primary my-2 mx-5 bg-dark border-1 border-danger">Películas<i class="bi bi-arrow-right-short mx-2 text-white"></i></a>
                <a href="013logout.php" class="btn btn-primary my-2 mx-5 bg-danger border-1 border-dark">Logout <i class="bi bi-door-closed mx-2"></i></a>
            </div>
        </nav>
    </header>

    <div class="col-lg-6 col-md-8 mx-auto text-center my-3">
        <h1 class="fw-light">Listado de series</h1>
        <p class="lead text-muted"><i class="bi bi-camera-reels-fill fs-1"></i></p>
        
    </div>
    <ul class="list-group">
        <?php foreach ($seriesUsuario as $value) { //Genera la lista de peliculas
                echo '<li class="list-group-item">'.$value.'</li>';
            } ?>
    </ul>

    <?php }else{ ?> <!-- Muestra un contenido alternativo -->
        <header> 
        <nav class="navbar navbar-light bg-light">
            <a class="navbar-brand fs-3 mx-5 my-2" href="10index.php">
                <i class="bi bi-filetype-php mx-3 p-2">14series.php</i>
            </a>
        </nav>
    </header>
        <div class="container text-center my-5">
            <h2>Antes debes iniciar sesión</h2>
            <a href="./010index.php">Ir ahora</a>
        </div>
    <?php } ?>
</body>
</html>