<div style="text-align: center;"><div style="text-align: center;">
    <?php
        if($_POST){
            $tarifa = $_POST['tarifa'];
            $dias = $_POST['dias'];
            $importe_bruto = $tarifa * $dias;
            $descuento = $importe_bruto * 0.15;
            $importe_neto = $importe_bruto - $descuento;
            $lapiceros = $dias * 3;
            echo "<h2>Resultados:</h2>";
            echo "<p>Tarifa diaria de alquiler: S/ $tarifa</p>";
            echo "<p>Número de días de alquiler: $dias</p>";
            echo "<p>Importe bruto: S/ $importe_bruto</p>";
            echo "<p>Importe del descuento: S/ $descuento</p>";
            echo "<p>Importe neto a pagar: S/ $importe_neto</p>";
            echo "<p>Cantidad de lapiceros de obsequio: $lapiceros</p>";
        }
    ?>
	<a href="http://localhost:3000/ejercicio4.html">Calculadora de descuentos en conos de CD</a>
</div>
