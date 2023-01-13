<?php

include_once './conexion.php';

if ($_POST) {

    $username = $_POST['username'] ?? '';
    $password = $_POST['password'] ?? '';

    $conexion = null;

    if ($username != '' && $password != '') {
        try{
            $conexion = new PDO(DNS, USUARIO, PASS);
            $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            $sql = "SELECT * FROM user WHERE `username` = ?";
    
            $sentence = $conexion->prepare($sql);
            $sentence->execute([$username]);

            $usuario = $sentence->fetch();

            if($usuario && password_verify($password, $usuario['password'])){

                header('location:./003campeones.php');
            }else{
                header('location:./indexlogin.php?err=login');
            }

        }catch(PDOException $e){
            echo ("No se ha podido conectar con la base de datos: " . $e->getMessage());
        }
        
        $conexion = null;
    }else{
        header('location:./indexlogin.php?err=login');
    }
}


?>