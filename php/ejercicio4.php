<div style="text-align: center;">
    <?php
    if($_POST){
        $precio = $_POST['precio'];
        $cantidad = $_POST['cantidad'];
        $importe_bruto = $precio * $cantidad;
        $descuento1 = $importe_bruto * 0.05;
        $importe_descuento1 = $importe_bruto - $descuento1;
        $descuento2 = $importe_descuento1 * 0.05;
        $importe_neto = $importe_descuento1 - $descuento2;
        $descuento_total = $descuento1 + $descuento2;
        echo "<h2>Resultados:</h2>";
        echo "<p>Precio del cono de CD: S/ $precio</p>";
        echo "<p>Cantidad de conos de CD adquiridos: $cantidad</p>";
        echo "<p>Importe de la compra: S/ $importe_bruto</p>";
        echo "<p>Importe del primer descuento (5%): S/ $descuento1</p>";
        echo "<p>Importe del segundo descuento (5%): S/ $descuento2</p>";
        echo "<p>Descuento total: S/ $descuento_total</p>";
        echo "<p>Importe a pagar: S/ $importe_neto</p>";
    }
    ?>


