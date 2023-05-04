<div style="text-align: center;">
    <?php
    if($_POST){
        $precio = $_POST['precio'];
        $cantidad = $_POST['cantidad'];
        $nuevo_precio = $precio * 0.95;
        $importe = $nuevo_precio * $cantidad;
        $descuento = $importe * 0.07;
        $importe_a_pagar = $importe - $descuento;
        $obsequio = $cantidad * 2;
        echo "<h2>Resultados:</h2>";
        echo "<p>Precio actual de la gaseosa de 3 litros: S/ $precio</p>";
        echo "<p>Nuevo precio de la gaseosa de 3 litros: S/ $nuevo_precio</p>";
        echo "<p>Importe de la compra: S/ $importe</p>";
        echo "<p>Importe del descuento: S/ $descuento</p>";
        echo "<p>Importe a pagar: S/ $importe_a_pagar</p>";
        echo "<p>Obsequio: $obsequio caramelos</p>";
    }
    ?>
	<a href="http://localhost:3000/ejercicio3.html">Calculadora de alquiler de automóviles</a>
</div>