<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


$nombre = '';
$estudios = '';
$resultado = '';


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['nombre']) && isset($_POST['estudios'])) {
        // Saneamiento básico de datos
        $nombre = htmlspecialchars(trim($_POST['nombre']));
        $estudios = htmlspecialchars($_POST['estudios']);


        $nivel_estudios = '';


        // Lógica para determinar el mensaje
        if ($estudios === 'ninguno') {
            $nivel_estudios = 'no tiene estudios';
        } elseif ($estudios === 'primarios') {
            $nivel_estudios = 'tiene estudios primarios';
        } elseif ($estudios === 'secundarios') {
            $nivel_estudios = 'tiene estudios secundarios';
        }


        // Generación del mensaje de resultado
        if (!empty($nombre)) {
            $resultado = "La persona de nombre <strong>$nombre</strong> $nivel_estudios.";
        } else {
            $resultado = "Por favor, ingrese el nombre de la persona.";
        }
    } else {
        $resultado = "Faltó seleccionar un nivel de estudios.";
    }
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>10 - FORMULARIO (control radio)</title>
</head>
<body>


    <h2>10 - FORMULARIO (control radio)</h2>


    <form method="POST" action="">
        <label for="nombre">Nombre de la persona:</label>
        <input type="text" id="nombre" name="nombre" value="<?php echo htmlspecialchars($nombre); ?>" required>
        <br><br>


        <label>Nivel de Estudios:</label>
        <br>
       
        <input type="radio" id="ninguno" name="estudios" value="ninguno" required
            <?php if ($estudios === 'ninguno') echo 'checked'; ?>>
        <label for="ninguno">1 - No tiene estudios</label>
        <br>


        <input type="radio" id="primarios" name="estudios" value="primarios"
            <?php if ($estudios === 'primarios') echo 'checked'; ?>>
        <label for="primarios">2 - Estudios primarios</label>
        <br>


        <input type="radio" id="secundarios" name="estudios" value="secundarios"
            <?php if ($estudios === 'secundarios') echo 'checked'; ?>>
        <label for="secundarios">3 - Estudios secundarios</label>
        <br><br>


        <input type="submit" value="Mostrar Resultado">
    </form>


    <?php if ($resultado): ?>
        <hr>
        <h3>Resultado</h3>
        <p><?php echo $resultado; ?></p>
    <?php endif; ?>


</body>
</html>