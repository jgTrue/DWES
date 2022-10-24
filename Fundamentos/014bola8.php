<!-- 14. 014bola8.html: Prepara un formulario con una caja de texto que realice a 
una pregunta al usuario. 014bola8.php: A partir del anterior, crea un 
programa que muestre la pregunta recibida y genere una respuesta de 
manera aleatoria entre un conjunto de respuestas predefinidas, 
almacenadas en un array: Sí, no, quizás, claro que sí, por supuesto que no, 
no lo tengo claro, seguro, yo diría que sí, ni de coña, etc...
Este ejercicio se basa en el juego de la Bola 8 mágica. -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>014bola8.php</title>
    <?php 
        $pregunta = $_GET['pregunta'];
        $respuestas = array("Sí", "No", "Quizás", "Claro que sí", "Por supuesto que no", 
        "No lo tengo claro", "Seguro", "Yo diría que sí", "Ni de coña");
    ?>
</head>
<body>
    <h1>Pregunta:</h1>
    <h2><?=$pregunta?></h2>
    <h1>Respuesta:</h1>
    <h2><?=$respuestas[rand(0,8)]?></h2>
</body>
</html>