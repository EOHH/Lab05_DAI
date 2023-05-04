<div style="text-align: center;">
	<?php
		if($_POST){
			$importe = $_POST['importe'];
			$hijos = $_POST['hijos'];
			$bonificacion = $hijos * 50;
			$comision = $importe * 0.075;
			$sueldo_bruto = 600 + $comision + $bonificacion;
			$descuento = $sueldo_bruto * 0.11;
			$sueldo_neto = $sueldo_bruto - $descuento;
			echo "<h2>Resultados:</h2>";
			echo "<p>Bonificación: S/ $bonificacion</p>";
			echo "<p>Comisión: S/ $comision</p>";
			echo "<p>Sueldo bruto: S/ $sueldo_bruto</p>";
			echo "<p>Descuento: S/ $descuento</p>";
			echo "<p>Sueldo neto: S/ $sueldo_neto</p>";
		}
	?>
	<a href="http://localhost:3000/ejercicio2.html">Calculadora de compra de gaseosas</a>
</div>
