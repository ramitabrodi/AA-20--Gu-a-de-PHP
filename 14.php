<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
	<title>Ejercicio 14 - Vectores</title>
</head>

<body>

	<?php
	// Definir el vector con los días de la semana
	$dias = array("Lunes", "Martes", "Miércoles", "Jueves", "Viernes", "Sábado", "Domingo");

	// Mostrar el primer y el último elemento
	echo "<h3>Días de la semana:</h3>";
	echo "Primer día: " . $dias[0] . "<br>";
	echo "Último día: " . $dias[count($dias) - 1];
	?>

</body>

</html>