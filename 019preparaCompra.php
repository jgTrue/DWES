<!-- 19. A partir de los archivos creados en el ejercicio anterior, crea una plantilla 
mediante includes: 019preparaCompra.php: similar a 019preparaTique.php, 
pero separando el encabezado (Supermercado Lodi en h1) y el pie (Tu 
supermercado de confianza) en ficheros externos y referenciando a ellos 
mediante include.
019listaCompra.php: recibe los datos del anterior, y reutiliza parte de 
019imprimeTiquetCompra.php cambiando la tabla por una lista 
desordenada de los productos junto a su precio. -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>019preparaCompra.php</title>
</head>
<body>
    <!-- Encabezado h1 mediante include -->
    <?php include_once ('019encabezado.php') ?> 

    <form action="019listaCompra.php" method="get">
            <table>
                <thead>
                    <tr>
                        <th>Producto</th>
                        <th>Cantidad</th>
                        <th>Precio</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
                            <label for="producto_1">Camiseta Nike: </label>
                        </td>
                        <td>
                            <input type="number" name="camiseta" id="camiseta">
                        </td>
                        <td>
                            <p>15€ / ud</p>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="producto_2">Pantalón Adidas: </label>
                        </td>
                        <td>
                            <input type="number" name="pantalon" id="pantalon">
                        </td>
                        <td>
                            <p>30€ / ud</p>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="producto_3">Gorra Puma: </label>
                        </td>
                        <td>
                            <input type="number" name="gorra" id="gorra">
                        </td>
                        <td>
                            <p>9.90€ / ud</p>
                        </td>
                    </tr>
                </tbody>
            </table>
            
            <input type="submit" value="comprar">
   
    </form>
    <?php include_once ('019footer.php') ?>
</body>
</html>