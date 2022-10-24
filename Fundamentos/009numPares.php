<!-- 9. Escribe un programa que muestre los números pares del 
0 al 50 (dentro de una lista desordenada). -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>009numPares.php</title>
</head>
<body>

    <ul>
        <?php 
            for($i = 0; $i <=50; $i++){
                if($i % 2 == 0){
                    echo("<li>${i}</li>");
                }
            }
        ?>
    </ul>

</body>
</html>