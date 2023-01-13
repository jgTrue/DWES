<!-- Crea el archivo 001campeones.php donde listes todos los campeones del LOL que has metido 
en tu base de datos. Acuérdate que para ello deberás hacer una conexión con la base de datos 
y un foreach para cada campeón que tengas albergado en la tabla champ. -->
<?php include_once('conexion.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="./css/bootstrap.css">
    <link rel="stylesheet" href="./css/custom.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">

    <script defer src="./js/bootstrap.bundle.js"></script>
    <script defer src="./js/custom.js"></script>

    <title>Document</title>
</head>
<body>
        <table class="table-bordered">
            <thead>
                <tr>
                    <th scope="col">ID
                    <a href="003campeones.php?order=down&orderby=id"><input type="button" class="btn" value="↓"></a>
                    <a href="003campeones.php?order=up&orderby=id"><input type="button" class="btn" value="↑"></a>
                    </th>
                    <th scope="col">Name
                    <a href="003campeones.php?order=down&orderby=name"><input type="button" class="btn" value="↓"></a>
                    <a href="003campeones.php?order=up&orderby=name"><input type="button" class="btn" value="↑"></a>
                    </th>
                    <th scope="col">Rol
                    <a href="003campeones.php?order=down&orderby=rol"><input type="button" class="btn" value="↓"></a>
                    <a href="003campeones.php?order=up&orderby=rol"><input type="button" class="btn" value="↑"></a>
                    </th>
                    <th scope="col">Difficulty
                    <a href="003campeones.php?order=down&orderby=difficulty"><input type="button" class="btn" value="↓"></a>
                    <a href="003campeones.php?order=up&orderby=difficulty"><input type="button" class="btn" value="↑"></a>
                    </th>
                    <th class="col-8"  scope="col">Description
                    <a href="003campeones.php?order=down&orderby=description"><input type="button" class="btn" value="↓"></a>
                    <a href="003campeones.php?order=up&orderby=description"><input type="button" class="btn" value="↑"></a>
                    </th>
                    
                </tr>
            </thead>
            <tbody class="table-group-divider">
    <?php
    if($_GET){
        $orderby = $_GET['orderby'];
        if ($_GET['order'] == 'up') $consulta = "SELECT * FROM `champ` ORDER BY `$orderby` DESC;";
        if ($_GET['order'] == 'down') $consulta = "SELECT * FROM `champ` ORDER BY `$orderby` ASC;";

    }else{
         $consulta = "SELECT * FROM `champ`;";
    }

    $champs = mysqli_query(conectar(), $consulta);

    if($champs){ ?>
        

    <?php
            foreach ($champs as $value) {
                echo "<tr><th scope='row'>$value[id]</th>
                <td>$value[name]</td>
                <td>$value[rol]</td>
                <td>$value[difficulty]</td>
                <td>$value[description]</td></tr>" ;
            }
        }
    ?>
        
        </tbody>
    </table>

</body>
</html>