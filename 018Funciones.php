<?php 
function calcularPrecios($pedidoProductos){
    $valorPeseta = 166.386; // 166,386, Valor 1 € en peseta.
    for($i = 0; $i < count($pedidoProductos); $i++){
        if($pedidoProductos[$i][1] != null || $pedidoProductos[$i][1] != 0){

            //Calculo de los precios según cantidad
            $precioEuro = $pedidoProductos[$i][1] * $pedidoProductos[$i][2];
            $precioPeseta = $precioEuro * $valorPeseta;

            //Guardado de precios
            $pedidoProductos[$i][3] = $precioEuro;
            $pedidoProductos[$i][4] = $precioPeseta;
        }
    }
    return $pedidoProductos;
}
// Función para mostrar la tabla con los datos del pedido
function mostrarProducto($pedidoProductos){
    $totalEuros = 0;
    $totalPesetas = 0;
    for($i = 0; $i < count($pedidoProductos); $i++){
        echo "<tr>";
        for ($j=0; $j < 5; $j++) { 
            echo "<td>".$pedidoProductos[$i][$j]."</td>";
        }
        echo "</tr>";
        $totalEuros += $pedidoProductos[$i][3];
        $totalPesetas += $pedidoProductos[$i][4];
    }
    echo "<tr><td>Total Euros: </td><td>${totalEuros}</td><td>Total Pesetas:</td><td>${totalPesetas}</td></tr>";
}
?>