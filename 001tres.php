<!-- php: muestra 3 frases cada una en un párrafo utilizando las tres posibilidades que existen de mostrar contenido.
 Tras ello, introduce dos comentarios, uno de bloque y otro de una línea. -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>001tres.php</title>
</head>
<body>
    <p> <?php echo("Primera frase");?> </p>
    <p> <?php print("Segunda frase");?> </p>
    <p> <?= "Tercera frase" ?> </p>
    <?php 
        /*
        Esto
        es un comentario
        en bloque.
        */

        // Esto es un comentario de una línea. 
    ?>
    
</body>
</html>
