<!-- vista que muestra como título "Listado de Películas", y una lista 
desordenada con tres películas. -->

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

    <title>12peliculas</title>

</head>
<body>
<?php 
        session_start();
        $nombreUsuario = $_SESSION['usuario'] ?? ''; // asigna el nombre del usuario
        $peliculasUsuario = $_SESSION['peliculas'] ?? []; //asigna el array del usuario
        
        if($nombreUsuario === 'usuario'){ //Comprueba que sea el usuario logado tenga permiso permiso y muestra el contenido
    ?>
    <header>
        <nav class="navbar navbar-light bg-light">
            <a class="navbar-brand fs-3 mx-5 my-2" href="./010index.php">
                <i class="bi bi-filetype-php mx-3 p-2">12peliculas.php</i>
            </a>
            <div>
                <a href="014series.php" class="btn btn-primary my-2 mx-5 bg-dark border-1 border-danger">Series<i class="bi bi-arrow-right-short mx-2 text-white"></i></a>
                <a href="013logout.php" class="btn btn-primary my-2 mx-5 bg-danger border-1 border-dark">Logout <i class="bi bi-door-closed mx-2"></i></a>
            </div>
        </nav>
    </header>

    <div class="col-lg-6 col-md-8 mx-auto text-center my-3">
        <h1 class="fw-light">Listado de películas</h1>
        <p class="lead text-muted"><i class="bi bi-camera-reels-fill fs-1"></i></p>
        
    </div>
    <ul class="list-group">
        <?php foreach ($peliculasUsuario as $value) { //Genera la lista de peliculas
            echo '<li class="list-group-item">'.$value.'</li>';
        } ?>
    </ul>

    <?php }else{ ?> <!-- Muestra un contenido alternativo -->
        <header> 
        <nav class="navbar navbar-light bg-light">
            <a class="navbar-brand fs-3 mx-5 my-2" href="10index.php">
                <i class="bi bi-filetype-php mx-3 p-2">12peliculas.php</i>
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