<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 12 - Formulario con Select</title>
</head>
<body>
    <h2>Formulario con Select</h2>
    <form method="POST" action="">
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre" required>
        <br><br>
        
        <label for="ingresos">Ingresos Mensuales:</label>
        <select id="ingresos" name="ingresos" required>
            <option value="">Seleccione</option>
            <option value="1000">1-1000</option>
            <option value="3000">1001-3000</option>
            <option value="mas3000">>3000</option>
        </select>
        <br><br>
        
        <input type="submit" value="Enviar">
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $nombre = htmlspecialchars($_POST['nombre']);
        $ingresos = $_POST['ingresos'];
        
        echo "<h3>Resultado:</h3>";
        echo "<p>Nombre: $nombre</p>";
        
        if ($ingresos === 'mas3000') {
            echo "<p>Debe pagar impuestos a las ganancias.</p>";
        } else {
            echo "<p>No debe pagar impuestos a las ganancias.</p>";
        }
    }
    ?>
</body>
</html>