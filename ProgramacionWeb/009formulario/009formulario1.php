<!-- 009formulario1.php envía los datos (nombre y apellidos, email, url y sexo) a 
009formulario2.php.
009formulario2.php lee los datos y los mete en la sesión. A continuación, muestra el 
resto de los campos del formulario a rellenar (convivientes, aficiones y menú). Envía 
estos datos a 009formulario3.php.
009formulario3.php recoge los datos enviados en el paso anterior y junto a los que ya 
estaban en la sesión, se muestran todos los datos en una tabla/lista desordenada. -->


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

    <title>009formulario1</title>
</head>
<body>
    <!-- Encabezado -->
    <header>
        <nav class="navbar navbar-light bg-light">
            <a class="navbar-brand fs-3 mx-5 my-2" href="./009formulario1.php">
                <i class="bi bi-filetype-php mx-3 p-2">009formulario1.html</i>
            </a>
        </nav>
        <!-- Formulario -->
        <div class="container my-5 justify-content-center">
            <form action="./009formulario2.php" method="post">
            
            <!-- Título -->
            <h3>Formulario</h3>

            <!-- Nombre input -->
            <div class="form-outline mb-4">
                <label class="form-label" for="firstName">Nombre:</label>
                <input type="text" id="firstName" class="form-control" name="firstName" required/>
            </div>
            
            <!-- Apellidos input -->
            <div class="form-outline mb-4">
                <label class="form-label" for="lastName">Apellidos:</label>
                <input type="text" id="lastName" class="form-control" name="lastName" required/>
            </div>

            <!-- Email input -->
            <div class="form-outline mb-4">
                <label class="form-label" for="mail">Direccion e-mail:</label>
                <input type="email" id="mail" class="form-control" name="mail" required/>
            </div>

            <!-- Url input -->
            <div class="form-outline mb-4">
                <label class="form-label" for="urlPersonal">Url página personal:</label>
                <input type="url" id="urlPersonal" class="form-control" name="urlPersonal" required/>
            </div>

            <hr> <!-- Separador -->

            <!-- Sex input -->
            <p class="form-label my-1">Sexo:</p>
            <section class="mx-5 mb-4">
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="sex" id="hSex" value="hombre" checked>
                    <label class="form-check-label" for="hSex">
                    Hombre.
                    </label>
                </div>
                <div class="form-check">
                <input class="form-check-input" type="radio" name="sex" id="fSex" value="mujer">
                    <label class="form-check-label" for="fSex">
                    Mujer.
                    </label>
                </div>
            </section>

            <hr> <!-- Separador -->

            <!-- Submit button -->
            <a href="./009formulario2.php"><button type="submit" class="btn btn-primary btn-block">Enviar</button></a>
            </form>
        </div>
    </header>
</body>
</html>