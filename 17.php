<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
	<title>  17 - Vectores (asociativos)</title>
</head>
<body> 

	<?php
$usuarios = array(
	"rami" => "clave123",
	"maria" => "12324324",
	"daniela" => "celu13",
	"juan" => "tateti",
	"facu" => "abc321"
);

// Mostrar todo el vector (opcional)
echo "<h3>Listado de usuarios y claves:</h3>";
foreach ($usuarios as $nombre => $clave) {
	echo "Usuario: $nombre → Clave: $clave<br>";
}

// Acceder a una componente específica
echo "<hr>";
echo "<strong>Clave del usuario 'maria':</strong> " . $usuarios["juan"];
?>


</body>
</html>