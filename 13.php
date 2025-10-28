<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
	<title>Ejercicio 13 - Contrato</title>
</head>

<body>

	<h2>Contrato laboral</h2>

	<form method="post" action="">
		<textarea name="contrato" rows="10" cols="80"><?php
														echo "En la ciudad de [........], se acuerda entre la Empresa [..........] 
representada por el Sr. [..............] en su carácter de Apoderado,
con domicilio en la calle [..............] y el Sr. [..............],
futuro empleado con domicilio en [..............], celebrar el presente 
contrato a Plazo Fijo, de acuerdo a la normativa vigente de los
artículos 90,92,93,94,95 y concordantes de la Ley de Contrato de Trabajo N° 20.744.";
														?></textarea><br><br>

		<input type="submit" value="Aceptar contrato">
	</form>

	<?php
	if ($_SERVER['REQUEST_METHOD'] == 'POST') {
		$texto = nl2br(htmlspecialchars($_POST['contrato']));
		echo "<h3>Contrato final:</h3>";
		echo "<div style='border:1px solid #000; padding:10px; width:700px;'>$texto</div>";
	}
	?>

</body>

</html>