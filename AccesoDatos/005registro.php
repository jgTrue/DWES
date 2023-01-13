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

    <title>Document</title>
</head>
<body>

    <div class="row col-12 d-flex justify-content-center">
        <h1 class="p-3 text-center mt-3">Resgistro</h1>
        <form class="p-5 col-6" method="Post" action="./006nuevoUsuario.php">
        <?php if($_GET){?>
    
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong>Error!</strong> El formulario no fue completado de manera correcta.
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        <?php 
        }?>
        <div class="mb-3">
            <label for="name" class="form-label">Nombre</label>
            <input name='name' type="text" class="form-control" id="name" aria-describedby="name" required>
        </div>
        <div class="mb-3">
            <label for="username" class="form-label">Nombre de usuario</label>
            <input name='username' type="text" class="form-control" id="username" aria-describedby="username" required>
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Contraseña</label>
            <input name='password' type="password" class="form-control" id="password" required>
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">E-mail</label>
            <input name='email' type="email" class="form-control" id="email" aria-describedby="email" required>
        </div>
        <button type="submit" class="btn bg-warning fs-6 text-decoration-none m-0 rounded-0">Crear usuario</button>
        <a href="indexlogin.php" class="btn bg-dark fs-6 text-decoration-none m-0 rounded-0 text-white">Ya tengo una cuenta</a>
        </form>

    </div>

</body>
</html>