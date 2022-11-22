<?php

$color = $_GET['color'];

setcookie('color', $color, time() + (3600*24));

header("location:007fondo.php")
?>