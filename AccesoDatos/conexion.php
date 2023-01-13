
<?php
// MSQLI BBDD conection
function conectar(){
    $conexion = mysqli_connect('localhost', 'root', '', 'leagueoflegends');
    
    if(mysqli_connect_errno()){
        echo ("No se ha podido conectar con la base de datos: ". mysqli_connect_error());
        exit();
    }
    
    return $conexion;

}

// PDO BBDD conection

    const DNS = 'mysql:dbname=leagueoflegends;host=localhost';
    const USUARIO = 'root';
    const PASS = '';

// function conectarPDO(){
//     $dns ='mysql:dbname=leagueoflegends;host=localhost';
//     $usuario='root';
//     $pass='';

//     try{
//         $mdb = new PDO($dns, $usuario, $pass) ;
//         $mdb->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//     }catch(PDOException $e){
//         echo ("No se ha podido conectar con la base de datos: " . $e->getMessage());
//     }
// }
?>