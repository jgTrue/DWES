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

<?php
include_once './conexion.php';

if ($_POST) {
    $name = $_POST['name'] ?? '';
    $username = $_POST['username'] ?? '';
    $password = $_POST['password'] ?? '';
    $email = $_POST['email'] ?? '';

    $conexion = null;

    if ($name != '' && $username != '' && $password != '' && $email != '' ) {
        try{
            $conexion = new PDO(DNS, USUARIO, PASS);
            $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            $sql = "INSERT INTO user(`name`, `username`, `password`, `email`) VALUES (:name, :username, :password, :email)";
    
            $sentence = $conexion->prepare($sql);
            $sentence->execute([
                "name"=> $name,
                "username"=> $username,
                "password"=> password_hash($password, PASSWORD_DEFAULT),
                "email"=> $email
            ]);

            echo '
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                El usuario '. $name .' ha sido introducido en el sistema con la contraseña '. $password .'.<strong>Cierra la ventana emergente para continuar</strong>.
                <a href="./indexlogin.php"><button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></a>
                </div>
            ';
            header('refresh:5;./005registro.php');

        }catch(PDOException $e){
            echo ("No se ha podido conectar con la base de datos: " . $e->getMessage());
            header('refresh:3;./005registro.php?success=false');
        }
        
        $conexion = null;

    } else {
        header('location:./005registro.php?success=false');
    }
}
?>        

</body>
    
</body>
</html>

