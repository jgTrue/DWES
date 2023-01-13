<!-- Al pinchar en editar, el usuario será redirigido al archivo 003editando.php donde mostrará un 
formulario con los campos rellenos por los datos del campeón seleccionado. Al darle al botón 
de guardar los datos se guardarán en la base de datos y el usuario será redirigido a la lista de 
champs para poder ver los cambios. -->

<?php
include_once('conexion.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/custom.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">

    <script defer src="./js/bootstrap.bundle.js"></script>
    <script defer src="./js/custom.js"></script>

    <title>003editando</title>
</head>
<body>
    <div class="container-fluid p-5">
        <?php

        $id = $_GET["edit"];
        $consulta = "SELECT * FROM `champ` WHERE id=$id;";

        $champs = mysqli_query(conectar(), $consulta);

        if($champs){
            foreach ($champs as $value) {
                $name = $value['name'];
                $rol = $value['rol'];
                $difficulty = $value['difficulty'];
                $description = $value['description'];
            }
        }
        ?>
        <h3>Editando...</h3>
        <form method="post" action="editCampeones.php" class="container-fluid p-2">
            <div class="row">
            
                <div class="col-2">

                    <div class="form-outline">
                        <input type="text" id="form8Example2" class="form-control" value="<?=$name?>"  name="name" required/>
                        <label class="form-label" for="form8Example2">Nombre</label>
                    </div>
                </div>
                <div class="col-2">
                        <div class="form-outline">
                        <select id="disabledSelect" class="form-select" name="rol" required>
                            <option <?php if($rol == "Asesino") echo 'selected' ?> >Asesino</option>
                            <option <?php if($rol == "Luchador") echo 'selected' ?> >Luchador</option>
                            <option <?php if($rol == "Mago") echo 'selected' ?> >Mago</option>
                            <option <?php if($rol == "Tirador") echo 'selected' ?> >Tirador</option>
                            <option <?php if($rol == "Apoyo") echo 'selected' ?> >Apoyo</option>
                            <option <?php if($rol == "Tanque") echo 'selected' ?> >Tanque</option>
                        </select>
                        <label class="form-label" for="form8Example3">Rol</label>
                    </div>
                </div>

            </div>
            <div class="row">
                <div class="col-2">

                    <div class="form-outline">
                        <textarea type="text" id="form8Example5" class="form-control" value="<?=$description?>" name="description" required><?=$description?></textarea>
                        <label class="form-label" for="form8Example5">Descripción</label>
                    </div>
                </div>
                <div class="col-2 mb-5">

                        <div class="form-outline">
                        <select id="disabledSelect" class="form-select" name="difficulty" required>
                            <option <?php if($difficulty == "Baja") echo 'selected' ?> >Baja</option>
                            <option <?php if($difficulty == "Media") echo 'selected' ?> >Media</option>
                            <option <?php if($difficulty     == "Alta") echo 'selected' ?> >Alta</option>
                        </select>
                        <label class="form-label" for="form8Example3">Dificultad</label>
                    </div>
                </div>
                
            </div>
            <input type="number" id="form8Example2" class="form-control" value="<?=$id?>" name="id" hidden required/>
            <div class='col-3 mt-5'>
                <input type='submit' class='btn bg-warning fs-6 text-decoration-none m-0 rounded-0' value="Guardar"></input>
            </div>

        </form>

        

    </div>
</body>
</html>