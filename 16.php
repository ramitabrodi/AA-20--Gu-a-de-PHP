<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
	<title>Ejercicio 16 - Lectura de pedidos</title>
</head>

<body>

	<h2>Listado de pedidos de pizzas</h2>

	<?php
	$archivo = "pedidos.txt";

	// Verificar si el archivo existe
	if (file_exists($archivo)) {
		// Abrir y leer el contenido
		$contenido = file_get_contents($archivo);

		// Mostrar el contenido con saltos de línea
		echo "<pre>" . htmlspecialchars($contenido) . "</pre>";
	} else {
		echo "<p>No se encontró el archivo <strong>pedidos.txt</strong>. Asegúrese de haber realizado al menos un pedido.</p>";
	}
	?>

</body>

</html>