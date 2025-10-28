<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
	<title> 18 - Funciones en PHP </title>
</head>

<body>

	<h2>Registro de usuario</h2>

	<form method="post" action="">
		Nombre de usuario: <input type="text" name="usuario" required><br><br>
		Clave: <input type="password" name="clave1" required><br><br>
		Repetir clave: <input type="password" name="clave2" required><br><br>
		<input type="submit" value="Registrar">
	</form>

	<?php
	// Función para verificar si las claves coinciden
	function verificarClaves($clave1, $clave2)
	{
		if ($clave1 !== $clave2) {
			echo "<p style='color:red;'><strong>Error:</strong> Las claves ingresadas son distintas.</p>";
		} else {
			echo "<p style='color:green;'><strong>Registro exitoso ✅</strong></p>";
		}
	}

	// Procesar formulario
	if ($_SERVER['REQUEST_METHOD'] == 'POST') {
		$usuario = $_POST['usuario'];
		$clave1 = $_POST['clave1'];
		$clave2 = $_POST['clave2'];

		echo "<h3>Usuario: $usuario</h3>";
		verificarClaves($clave1, $clave2);
	}
	?>







</body>

</html>