<!--
Crea un formulario que permita subir un archivo al servidor. 
Además del fichero, debe pedir en el mismo formulario dos campos numéricos que 
soliciten la anchura y la altura. Comprueba que tanto el fichero como los datos llegan 
correctamente.
    
Modifica el ejercicio anterior para que únicamente permita 
subir imágenes (comprueba la propiedad type del archivo subido). Si el usuario 
selecciona otro tipo de archivos, se le debe informar del error y permitir que suba un 
nuevo archivo.
En el caso de subir el tipo correcto, visualizar la imagen con el tamaño de anchura y 
altura recibido como parámetro. -->

<?php
    if($_POST){
        
        $widthImage = $_POST['widthFile'] ?? 0;
        $heightImage = $_POST['heightFile'] ?? 0;
        
        if($widthImage === 0  || !filter_var(intval($widthImage),FILTER_VALIDATE_INT, intval($widthImage) > 0)){
            $widthImage = 0;
            $errors[]="El ancho de la imagen no puede ser 0.";
        }
        if($heightImage === 0  || !filter_var(intval($heightImage),FILTER_VALIDATE_INT, intval($heightImage) > 0)){
            $heightImage = 0;
            $errors[]="La altura de la imagen no puede ser 0.";
        }

        if(isset($_FILES['image'])){
            $errors= array();
            $file_name = $_FILES['image']['name'];
            $file_size = $_FILES['image']['size'];
            $file_tmp = $_FILES['image']['tmp_name'];
            $file_type = $_FILES['image']['type'];
            $file_ext=strtolower(pathinfo($file_name, PATHINFO_EXTENSION));
            $extensions= array("jpeg","jpg","png");
            if(in_array($file_ext,$extensions)=== false){
                $errors[]="Estensión no permitida. Prueba con imágenes jpeg,jpng o png.";
            }
            if($file_size > 2097152) {
                $errors[]='El archivo no puede pesar más de 2MB';
            }
            if(empty($errors)==true) {
                move_uploaded_file($file_tmp,"./imgFolder/".$file_name);
                $recentPath = "./imgFolder/".$file_name;
                echo "La imagen se ha guardado correctamente";
            }else{
                print_r($errors);
            }
        }
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

    <title>004Subida & 005subidaImagen</title>
</head>
<body>
    <header>
        <nav class="navbar navbar-light bg-light">
            <a class="navbar-brand fs-3 mx-5 my-2" href="004subida_005subidaImagen.php">
                <i class="bi bi-filetype-php mx-3 p-2">004Subida & 005subidaImagen</i>
            </a>
        </nav>
    </header>
    <div class="container">
        <h3 class="my-5">Subir archivo</h3>
        <form enctype="multipart/form-data" class="row" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
            <div class="col-6 position-relative">
                <label class="form-label" for="customFile">Altura</label>
                <input type="number" class="form-control" id="widthFile" name="widthFile" required />
            </div>
            <div class="col-6 position-relative">
                <label class="form-label" for="customFile">Ancho</label>
                <input type="number" class="form-control" id="heightFile" name="heightFile" required />
            </div>
            <div class="col-12 position-relative">
                <label class="form-label" for="customFile"></label>
                <input type="file" class="form-control" id="customFile" name="image" required/>
            </div>
            <div class="col-4 pt-2 my-3">
                <input class="btn btn-primary" type="submit"></input>
              </div>
        </form>
    </div>
    <?php if($_POST){ ?>
    <section class="container text-center">
        <img src="<?php if(empty($errors)) echo $recentPath.'"; style="whidth:'.$widthImage.'px; height:'.$heightImage.'px;"' ?>"  alt="" srcset="">
        <p><?php if(empty($errors)) echo $recentPath; ?></p>
    </section>
    <?php } ?>
</body>
</html>