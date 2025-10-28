<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Ejercicio 9</title>
</head>
<body>

<h2>Formulario de datos personales</h2>

<form method="post" action="">
	Ingrese su Nombre: 
	<input type="text" name="nombre" required><br><br>

	Ingrese su Edad: 
	<input type="number" name="edad" required><br><br>

	<input type="submit" value="Enviar">
</form>

<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	$nombre = $_POST['nombre'];
	$edad = $_POST['edad'];

	echo "<h3>Resultados:</h3>";
	echo "El nombre ingresado es: $nombre <br>";
	echo "La edad ingresada es: $edad";
}
?>

</body>
</html>
