<?php

include_once './conexion.php';

function crearCuenta($name,$username,$password, $email){
    
    $conexion = null;
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
    
    }catch(PDOException $e){
        echo ("No se ha podido conectar con la base de datos: " . $e->getMessage());
    }
    
    $conexion = null;

}


//* Introduce en la base de datos al menos 3 usuarios diferentes con sus contraseñas distintas. 

crearCuenta('admin', 'admin', 'admin', 'admin@gmail.com');
crearCuenta('user', 'user', 'user', 'user@gmail.com');
crearCuenta('Olga', 'olga', '123456', 'Olga@gmail.com');

echo '<h1>Se han creado tres cuentas.</h1>';
