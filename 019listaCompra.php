<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>019listaCompra.php</title>
    <?php 
    $cantidadCamiseta = $_GET['camiseta'];
    $cantidadPantalon = $_GET['pantalon'];
    $cantidadGorra = $_GET['gorra'];
    
    $pedidoProductos = array (
        array("Camiseta Nike",$cantidadCamiseta, 15, 0, 0), 
        array("Pantalon Adidas", $cantidadPantalon, 30, 0, 0), 
        array("Gorra Puma",$cantidadGorra, 9.90, 0, 0));

        // Función reutilizada para registrar el pedido
        include_once ('018Funciones.php');
        $recogerPedido = "calcularPrecios";

        // Función para crear la lista de productos
        function listarProducto($pedidoProductos){
            $totalEuros = 0;
            $totalPesetas = 0;
            for($i = 0; $i < count($pedidoProductos); $i++){
                echo "<ul> Producto ".$i+1;
                
                echo "<li>Nombre: ".$pedidoProductos[$i][0]."</li>";
                echo "<li>Cantidad: : ".$pedidoProductos[$i][1]."</li>";
                echo "<li>Precio ud: ".$pedidoProductos[$i][2]." €</li>";
                echo "<li>Precio: ".$pedidoProductos[$i][3]." €</li>";
                echo "<li>Precio: ".$pedidoProductos[$i][4]." Pts</li>";
                
                echo "</ul>";
                $totalEuros += $pedidoProductos[$i][3];
                $totalPesetas += $pedidoProductos[$i][4];
            }
            echo "<ul><li>Total Euros: ${totalEuros} €</li><li>Total Pesetas: ${totalPesetas} Pts</li></ul>";
        }
    ?>
</head>
<body>
    
   <?php
        include_once ('019encabezado.php');
        
        $pedido = $recogerPedido($pedidoProductos);
        listarProducto($pedido);

        include_once ('019footer.php');
   ?>

    
</body>
</html>