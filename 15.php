<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
	<title>Ejercicio 15 - Pedido de Pizzas</title>
</head>

<body>

	<h2>Pedido de Pizzas</h2>

	<form method="post" action="">
		Nombre: <input type="text" name="nombre" required><br><br>
		Dirección: <input type="text" name="direccion" required><br><br>

		<label><input type="checkbox" name="pizzas[]" value="Jamon y Queso"> Jamón y Queso</label>
		Cantidad: <input type="number" name="cant_jyq" min="0" value="0"><br><br>

		<label><input type="checkbox" name="pizzas[]" value="Napolitana"> Napolitana</label>
		Cantidad: <input type="number" name="cant_napo" min="0" value="0"><br><br>

		<label><input type="checkbox" name="pizzas[]" value="Muzzarella"> Muzzarella</label>
		Cantidad: <input type="number" name="cant_muzza" min="0" value="0"><br><br>

		<input type="submit" value="Confirmar pedido">
	</form>

	<?php
	if ($_SERVER['REQUEST_METHOD'] == 'POST') {
		$nombre = $_POST['nombre'];
		$direccion = $_POST['direccion'];
		$pizzas = isset($_POST['pizzas']) ? $_POST['pizzas'] : [];

		$pedido = "Nombre: $nombre\n";
		$pedido .= "Dirección: $direccion\n";
		$pedido .= "Pizzas pedidas:\n";

		foreach ($pizzas as $pizza) {
			if ($pizza == "Jamon y Queso") {
				$pedido .= "- Jamón y Queso: " . $_POST['cant_jyq'] . "\n";
			} elseif ($pizza == "Napolitana") {
				$pedido .= "- Napolitana: " . $_POST['cant_napo'] . "\n";
			} elseif ($pizza == "Muzzarella") {
				$pedido .= "- Muzzarella: " . $_POST['cant_muzza'] . "\n";
			}
		}

		$pedido .= "------------------------------\n";

		// Guardar en el archivo pedidos.txt
		$archivo = fopen("pedidos.txt", "a");
		fwrite($archivo, $pedido);
		fclose($archivo);

		echo "<h3>Pedido confirmado ✅</h3>";
		echo nl2br($pedido);
	}
	?>

</body>

</html>