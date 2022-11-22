<?php 
        session_start();
        unset($_SESSION['usuario']);
        unset($_SESSION['peliculas']);
        unset($_SESSION['series']);
        session_destroy();
        header("location:010index.php");
        
    ?>
  