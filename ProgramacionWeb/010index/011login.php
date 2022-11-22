<!-- hace de controlador, por lo que debe comprobar los datos recibidos 
(solo permite la entrada de usuario/usuario y si todo es correcto, ceder el control a la 
vista del siguiente ejercicio. No contiene código HTML. -->
<?php 

if($_POST){
    $valido = true;

    $user = $_POST['user'];
    $pass = $_POST['pass'];

    // Valida que sea el usuario correcto
    if($user === 'usuario' && $pass === 'usuario'){
        session_start();
        $_SESSION['usuario'] = $user; //Asigna nombre usuario
        $_SESSION['peliculas'] = ["Modelo 77","Black Adam","Black Panther: Wakanda forever"]; //Asigna array peliculas
        $_SESSION['series'] = ["Game of thrones","The house of the dragon","Vivir sin permiso"]; //Asigna array series
        header("location:./012peliculas.php");
    }else{
        header("location:010index.php?session=false");
    }
}

?>