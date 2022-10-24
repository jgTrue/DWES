<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>018imprimeTique</title>
    <?php 
    $cantidadCamiseta = $_GET['camiseta'];
    $cantidadPantalon = $_GET['pantalon'];
    $cantidadGorra = $_GET['gorra'];
    
    $pedidoProductos = array (
        array("Camiseta Nike",$cantidadCamiseta, 15, 0, 0), 
        array("Pantalon Adidas", $cantidadPantalon, 30, 0, 0), 
        array("Gorra Puma",$cantidadGorra, 9.90, 0, 0));

    //Función para registrar los datos del pedido 
        include_once ('018Funciones.php')
    ?>
</head>
<body>
    <table border="solid 1px">
        <thead>
            <th>Producto</th><th>Cantidad</th><th>Precio unidad</th><th>Precio €</th><th>Precio Pts</th>
        </thead>
        <tbody>

            <?php 
                // Actualiza la lista de pedido
                $pedidoProductos = calcularPrecios($pedidoProductos);

                // Función que pinta la tabla de productos
                mostrarProducto($pedidoProductos);
            ?>

        </tbody>

    </table>

    
</body>
</html>