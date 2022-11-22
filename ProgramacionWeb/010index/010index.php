<!-- formulario de inicio de sesión -->

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

    <title>10index</title>

    <?php
    if ($_GET) {
        $session = $_GET['session'];
    }
    ?>

</head>

<body>
    <header>
        <nav class="navbar navbar-light bg-light">
            <a class="navbar-brand fs-3 mx-5 my-2" href="./010index.php">
                <i class="bi bi-filetype-php mx-3 p-2">10index.php</i>
            </a>
        </nav>
    </header>

    <div class="my-5 d-flex justify-content-center align-items-center">
        <div class="my-5 col-md-4 p-5 shadow-sm border rounded-3">
            <h2 class="text-center mb-4 text-primary text-dark">Inicio de sesión</h2>
            <form action="011login.php" method="POST">
                <div class="mb-3">
                    <label for="userName" class="form-label">Usuario</label>
                    <input type="text" class="form-control border border-primary <?php echo (isset($session)) ? "border-danger" : "border-dark" ?>" name="user" id="userName" required>
                </div>
                <div class="mb-3">
                    <label for="userPass" class="form-label">Contraseña</label>
                    <input type="password" class="form-control border border-primary <?php echo (isset($session)) ? "border-danger" : "border-dark" ?>" name="pass" id="userPass" required>
                </div>
                <p class="small">No digas tu contraseña a nadie</p>
                <div class="d-grid">
                    <button class="btn btn-primary bg-danger border-dark" type="submit">Login</button>
                </div>
            </form>
            <div class="mt-3 text-center">
                <i class="bi bi-emoji-dizzy-fill fs-2"></i>
            </div>
        </div>
    </div>
</body>

</html>