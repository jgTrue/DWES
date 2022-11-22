<!-- A partir del formulario anterior, introduce validaciones en HTML 
mediante el atributo required de los campos (uso los tipos adecuados para cada 
campo), y en comprueba los tipos de los datos y que cumplen los valores esperados 
(por ejemplo, en los checkboxes que los valores recogidos forman parte de todos los 
posibles). Puedes probar a pasarle datos erróneos vía URL y comprobar su 
comportamiento. Tip: Investiga el uso de la función filter_var. -->

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

    <title>003formulario</title>
</head>
<body>
    <!-- Encabezado -->
    <header>
        <nav class="navbar navbar-light bg-light">
            <a class="navbar-brand fs-3 mx-5 my-2" href="01post.html">
                <i class="bi bi-filetype-php mx-3 p-2">003formulario.php</i>
            </a>
        </nav>
    </header>
    <?php
        $valido = true; // Check formulario válido
        $textCheck = "/^[a-zA-ZáéíóúÁÉÍÓÚäëïöüÄËÏÖÜàèìòùÀÈÌÒÙ\s]+$/"; //Patron comprobación textos
        
        if (!empty($_GET)) {
            // Si las variables recogidas no están 'seteadas' se igualan a nulo, 1, o array vacio.
            $nombre = $_GET['firstName'] ?? ''; 
            $apellidos = $_GET['lastName'] ?? '';
            $email = $_GET['mail'] ?? '';
            $url = $_GET['urlPersonal'] ?? '';
            $sexoList = $_GET['sex'] ?? '';
            $nConviviente = $_GET['nConviviente'] ?? 0;
            $aficiones = $_GET['aficion'] ?? [];
            $menuList = $_GET["menu"] ?? [];

            // Check nombre
            if($nombre === "" || gettype($nombre) != 'string' || !preg_match($textCheck, $nombre) || ((strlen($nombre) > 20) && strlen($nombre) < 2)){
                $nombre = '';
                $valido = false;

            }
            // Check apellidos
            if($apellidos === "" || gettype($apellidos) != 'string' || !preg_match($textCheck, $apellidos) || ((strlen($apellidos) > 40) && strlen($apellidos) < 2)){
                $apellidos = '';
                $valido = false;
            }
            // Check email
            if($email === "" || gettype($email) != 'string' || !filter_var($email, FILTER_VALIDATE_EMAIL)){
                $email = '';
                $valido = false;
            }
            // Check url
            if($url === "" || gettype($url) != 'string' || !filter_var($url, FILTER_VALIDATE_URL)){
                $url = '';
                $valido = false;
            }
            // Check sexo
            if($sexoList === '' || ($sexoList != 'hombre' &&  $sexoList !='mujer')){
                $sexoList = '';
                $valido = false;
            }
            // Check númemeno de convivientes
            if($nConviviente === 0  || !filter_var(intval($nConviviente),FILTER_VALIDATE_INT, intval($nConviviente) > 0)){
                $nConviviente = 1;
                $valido = false;
            }
            // Check aficiones
            if(count($aficiones) < 5 || count($aficiones) > 0){
                foreach ($aficiones as $key => $value) {
                    if ($value != 'programación' && $value != 'videojuegos' && $value != 'deportes' && $value != 'festivales'){
                        $aficiones = [];
                        $valido = false;
                    }
                }
            }
            // Check menú
            if(count($menuList) < 5 || count($menuList) > 0){
                foreach ($menuList as $key => $value) {
                    if ($value != 'arroz' && $value != 'adobo' && $value != 'serranito' && $value != 'solomillo'){
                        $menuList = [];
                        $valido = false;
                    }
                }
            }
        }
        if($valido && !empty($_GET)){ //  Si es válido se muestra texto y no formulario
            echo('<h1 class="text-center my-5 p-3">El formulario ha sido enviado con éxito.</h1>');
        }else{


        
    ?> 
    <!-- Formulario -->
    <div class="container my-5 justify-content-center">
            <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="get">
            
            <!-- Título -->
            <h3>Formulario</h3>

            <!-- Nombre input -->
            <div class="form-outline mb-4">
                <label class="form-label" for="firstName">Nombre:</label>
                <input type="text" id="firstName" class="form-control" name="firstName" value="<?php if(isset($nombre)){echo $nombre;} ?>" required/>
            </div>
            
            <!-- Apellidos input -->
            <div class="form-outline mb-4">
                <label class="form-label" for="lastName">Apellidos:</label>
                <input type="text" id="lastName" class="form-control" name="lastName" value="<?php if(isset($apellidos)){echo $apellidos;} ?>" required/>
            </div>

            <!-- Email input -->
            <div class="form-outline mb-4">
                <label class="form-label" for="mail">Direccion e-mail:</label>
                <input type="email" id="mail" class="form-control" name="mail" value="<?php if(isset($email)){echo $email;} ?>" required/>
            </div>

            <!-- Url input -->
            <div class="form-outline mb-4">
                <label class="form-label" for="urlPersonal">Url página personal:</label>
                <input type="url" id="urlPersonal" class="form-control" name="urlPersonal" value="<?php if(isset($url)){echo $url;} ?>" required/>
            </div>

            <hr> <!-- Separador -->

            <!-- Sex input -->
            <p class="form-label my-1">Sexo:</p>
            <section class="mx-5 mb-4">
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="sex" value="hombre" <?php if(isset($sexoList) && ($sexoList == "hombre")) echo 'checked'; ?>>
                    <label class="form-check-label" for="hSex">
                    Hombre.
                    </label>
                </div>
                <div class="form-check">
                <input class="form-check-input" type="radio" name="sex" value="mujer" <?php if(isset($sexoList) && ($sexoList == "mujer")) echo 'checked'; ?>>
                    <label class="form-check-label" for="fSex">
                    Mujer.
                    </label>
                </div>
            </section>

            <!-- Nº convivientes -->
            <div class="form-outline mb-4">
                <label class="form-label" for="nConviviente">Número de convivientes en el domicilio:</label>
                <input min=1 type="number" id="nConviviente" class="form-control" name="nConviviente" value="<?php if(isset($nConviviente)){ echo $nConviviente;}?>" required/>
            </div>

            <!-- Aficiones input -->
            <p class="form-label my-1">Aficiones:</p>
            <section class="mx-5 mb-4">
                <div class="form-check-inline">
                    <input class="form-check-input" type="checkbox" value="programación" id="aficion1" name="aficion[]" <?php if(isset($aficiones)){if(in_array("programación",$aficiones)){echo('checked = "checked"');}} ?>>
                    <label class="form-check-label" for="aficion1">
                    Programación
                    </label>
                </div>
                <div class="form-check-inline">
                    <input class="form-check-input" type="checkbox" value="videojuegos" id="aficion2" name="aficion[]" <?php if(isset($aficiones)){if(in_array("videojuegos",$aficiones)){echo('checked = "checked"');}} ?>>
                    <label class="form-check-label" for="aficion2">
                    Videojuegos
                    </label>
                </div>
                <div class="form-check-inline">
                    <input class="form-check-input" type="checkbox" value="deportes" id="aficion3" name="aficion[]" <?php if(isset($aficiones)){if(in_array("deportes",$aficiones)){echo('checked = "checked"');}} ?>>
                    <label class="form-check-label" for="aficion3">
                    Deportes
                    </label>
                </div>
                <div class="form-check-inline">
                    <input class="form-check-input" type="checkbox" value="festivales" id="aficion4" name="aficion[]" <?php if(isset($aficiones)){if(in_array("festivales",$aficiones)){echo('checked = "checked"');}} ?>>
                    <label class="form-check-label" for="aficion4">
                    Festivales
                    </label>
                </div>
            </section>

            <!-- Menú favorito -->
            <p class="form-label my-1">Menú favorito:</p>
            <section>
                <select class="form-select mx-5 mb-4" multiple="true" id="menulist" name="menu[]">
                    <option id="arroz" value="arroz" <?php if(isset($menuList)){if(in_array("arroz",$menuList)){ echo('selected = "selected"');}} ?>>Arroz</option>
                    <option id="adobo" value="adobo" <?php if(isset($menuList)){if(in_array("adobo",$menuList)){ echo('selected = "selected"');}} ?>>Adobo</option>
                    <option id="serranito" value="serranito" <?php if(isset($menuList)){if(in_array("serranito",$menuList)){ echo('selected = "selected"');}} ?>>Serranito</option>
                    <option id="solomillo" value="solomillo" <?php if(isset($menuList)){if(in_array("solomillo",$menuList)){ echo('selected = "selected"');}} ?>>Solomillo</option>
                </select>
            </section>
            <hr> <!-- Separador -->

            <!-- Submit button -->
            <button type="submit" class="btn btn-primary btn-block">Enviar</button>
            </form>
        </div>
    <?php } ?>
</body>
</html>