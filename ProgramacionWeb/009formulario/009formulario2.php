<?php

    session_start();
    if(isset($_POST['firstName'])){
        $_SESSION['firstName'] = $_POST['firstName'];
    }
    if(isset($_POST['lastName'])){
        $_SESSION['lastName'] = $_POST['lastName'];
    }
    if(isset($_POST['mail'])){
        $_SESSION['mail'] = $_POST['mail'];
    }
    if(isset($_POST['urlPersonal'])){
        $_SESSION['urlPersonal'] = $_POST['urlPersonal'];
    }
    if(isset($_POST['sex'])){
        $_SESSION['sex'] = $_POST['sex'];
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

    <title>009formulario2</title>
</head>
<body>
    <!-- Encabezado -->
    <header>
        <nav class="navbar navbar-light bg-light">
            <a class="navbar-brand fs-3 mx-5 my-2" href="./009formulario2.php">
                <i class="bi bi-filetype-php mx-3 p-2">009formulario2.php</i>
            </a>
        </nav>
    </header>
            <!-- Formulario -->
            <div class="container my-5 justify-content-center">
            <form action="009formulario3.php" method="post">
            
            <!-- Título -->
            <h3>Formulario</h3>

            <!-- Nº convivientes -->
            <div class="form-outline mb-4">
                <label class="form-label" for="nConviviente">Número de convivientes en el domicilio:</label>
                <input min=1 type="number" id="nConviviente" class="form-control" name="nConviviente" required/>
            </div>

            <!-- Aficiones input -->
            <p class="form-label my-1">Aficiones:</p>
            <section class="mx-5 mb-4">
                <div class="form-check-inline">
                    <input class="form-check-input" type="checkbox" value="programación" id="aficion1" name="aficion[]">
                    <label class="form-check-label" for="aficion1">
                    Programación
                    </label>
                </div>
                <div class="form-check-inline">
                    <input class="form-check-input" type="checkbox" value="videojuegos" id="aficion2" name="aficion[]">
                    <label class="form-check-label" for="aficion2">
                    Videojuegos
                    </label>
                </div>
                <div class="form-check-inline">
                    <input class="form-check-input" type="checkbox" value="deportes" id="aficion3" name="aficion[]">
                    <label class="form-check-label" for="aficion3">
                    Deportes
                    </label>
                </div>
                <div class="form-check-inline">
                    <input class="form-check-input" type="checkbox" value="festivales" id="aficion4" name="aficion[]">
                    <label class="form-check-label" for="aficion4">
                    Festivales
                    </label>
                </div>
            </section>

            <!-- Menú favorito -->
            <p class="form-label my-1">Menú favorito:</p>
            <section>
                <select class="form-select mx-5 mb-4" multiple="true" id="menulist" name="menu[]">
                    <option id="arroz" value="arroz">Arroz</option>
                    <option id="adobo" value="adobo">Adobo</option>
                    <option id="serranito" value="serranito">Serranito</option>
                    <option id="Solomillo" value="solomillo">Solomillo</option>
                </select>
            </section>
            <hr> <!-- Separador -->

            <!-- Submit button -->
            <a href="./009formulario3.php"><button type="submit" class="btn btn-primary btn-block">Enviar</button></a>
            </form>
        </div>
</body>
</html>