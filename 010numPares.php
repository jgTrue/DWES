<!-- 10. 010numPares.php: A partir del anterior, refactorizar para que funcione con 
inicio y fin. -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>010numPares.php</title>
</head>
<body>
    
    <ul>
        <?php 
            echo('Introduce un número para inicio y otro de fin');
            $numInicio = $_GET['inicio'];
            $numFin = $_GET['fin'];

            for($i = $numInicio; $i <= $numFin; $i++){
                if($i % 2 == 0){
                    echo("<li>${i}</li>");
                }
            }
        ?>
    </ul>

</body>
</html>