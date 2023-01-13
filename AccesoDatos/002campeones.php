<!-- Modifica el archivo 001campeones.php y guárdalo como 002campeones.php pero pon al lado 
de cada uno de los campeones listados un botón para editar y otro para borrar. Cada uno de 
esos botones hará la correspondiente función dependiendo del id del campeón seleccionado. -->
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

    <title>002campeones</title>
</head>
<body>
    <div class="container-fluid p-2">
    <?php

    $consulta = "SELECT * FROM `champ`;";

    $champs = mysqli_query(conectar(), $consulta);

    if ($champs) {
        foreach ($champs as $value) {
            echo "
            Nombre: $value[name]<br>
            Rol: $value[rol]<br>
            Dificultad: $value[difficulty]<br>
            Descripcion: $value[description] <br><br>";
            echo "
            <section class='container-fluid row flex-nowrap p-2 pb-3 '>
                <div class='col-2'>
                <a href='003editando.php?edit=$value[id]'><button type='button' class='btn bg-warning fs-6 text-decoration-none m-0 rounded-0'>Editar</button></a>
                <a data-bs-toggle='modal' data-bs-target='#eraseM$value[id]'><button type='button' class='btn bg-dark fs-6 text-decoration-none m-0 rounded-0 text-white'>Borrar</button></a>
                </div>
            </section>
            <hr>
            ";
    ?>
            <div class="modal fade" id="eraseM<?=$value['id']?>" tabindex="-1" aria-labelledby="eraseModal" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="eraseModal">Borrando...</h1>
                    
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <h2 class="modal-title fs-6">¿Estás seguro?</h2>
                    <h2 class="modal-title fs-6">Nombre: <?=$value['name']?></h2>
                    <h2 class="modal-title fs-6">Si confirmas, la acción será definitiva.</h2>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn bg-dark fs-6 text-decoration-none m-0 rounded-0 text-white mx-5" data-bs-dismiss="modal">Cancelar</button>
                    <a href="erasingCampeones.php?action=<?=$value['id']?>"><button type="button" class="btn bg-danger fs-6 text-decoration-none m-0 rounded-0 text-white">Borrar</button></a>
                </div>
                </div>
            </div>
            </div>
  
    <?php
        }
    }
    ?>
    </div>


</body>
</html>