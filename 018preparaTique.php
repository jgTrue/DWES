<!-- 18. 018preparaTique.php: A partir de una cantidad de productos, leer el 
nombre y coste de la cantidad de productos indicados (la cantidad, se 
recibe mediante un parámetro GET vía URL).
 -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>018preparaTique.php</title>
</head>
<body>
    <form action="018imprimeTique.php" method="get">
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
</body>
</html>