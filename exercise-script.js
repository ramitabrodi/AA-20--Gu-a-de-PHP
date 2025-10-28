// Navegación suave
document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function(e) {
        e.preventDefault();
        
        const targetId = this.getAttribute('href');
        if (targetId === '#') return;
        
        const targetElement = document.querySelector(targetId);
        if (targetElement) {
            window.scrollTo({
                top: targetElement.offsetTop - 80,
                behavior: 'smooth'
            });
        }
    });
});

// Función para mostrar ejercicios
function showExercise(exerciseNumber) {
    const container = document.getElementById('exercise-container');
    
    // Ocultar todos los ejercicios primero
    const allExercises = document.querySelectorAll('.exercise-content');
    allExercises.forEach(exercise => {
        exercise.classList.remove('active');
    });
    
    // Crear el contenido del ejercicio seleccionado
    let exerciseHTML = '';
    
    switch(exerciseNumber) {
        case 4:
            exerciseHTML = `
                <div class="exercise-content active">
                    <h2>Ejercicio 4 - Número Aleatorio</h2>
                    <div class="code-container">
                        <div class="code-header">
                            <span>Código PHP</span>
                        </div>
                        <div class="code-content">
                            <pre><code>&lt;?php
$num = rand(1, 100);
echo "&lt;h2&gt;El número generado es: $num&lt;/h2&gt;";
if ($num <= 50) {
    echo "&lt;p&gt;El número es menor o igual a 50.&lt;/p&gt;";
} else {
    echo "&lt;p&gt;El número es mayor a 50.&lt;/p&gt;";
}
?&gt;</code></pre>
                        </div>
                    </div>
                    <div class="result-container">
                        <h3>Resultado:</h3>
                        <?php
                        $num = rand(1, 100);
                        echo "<p>El número generado es: <strong>$num</strong></p>";
                        if ($num <= 50) {
                            echo "<p>El número es menor o igual a 50.</p>";
                        } else {
                            echo "<p>El número es mayor a 50.</p>";
                        }
                        ?>
                    </div>
                    <button class="btn back-btn" onclick="hideExercise()">Volver a la lista</button>
                </div>
            `;
            break;
            
        case 5:
            exerciseHTML = `
                <div class="exercise-content active">
                    <h2>Ejercicio 5 - Tipos de Variables</h2>
                    <div class="code-container">
                        <div class="code-header">
                            <span>Código PHP</span>
                        </div>
                        <div class="code-content">
                            <pre><code>&lt;?php
$int = 10;
$double = 10.5;
$string = "String";
$boolean = true;

echo "&lt;p&gt;Variable Int: $int&lt;/p&gt;";
echo "&lt;p&gt;Variable Double: $double&lt;/p&gt;";
echo "&lt;p&gt;Variable String: $string&lt;/p&gt;";
echo "&lt;p&gt;Variable Boolean: $boolean&lt;/p&gt;";
?&gt;</code></pre>
                        </div>
                    </div>
                    <div class="result-container">
                        <h3>Resultado:</h3>
                        <?php
                        $int = 10;
                        $double = 10.5;
                        $string = "String";
                        $boolean = true;

                        echo "<p>Variable Int: $int</p>";
                        echo "<p>Variable Double: $double</p>";
                        echo "<p>Variable String: $string</p>";
                        echo "<p>Variable Boolean: " . ($boolean ? 'true' : 'false') . "</p>";
                        ?>
                    </div>
                    <button class="btn back-btn" onclick="hideExercise()">Volver a la lista</button>
                </div>
            `;
            break;
            
        case 6:
            exerciseHTML = `
                <div class="exercise-content active">
                    <h2>Ejercicio 6 - Variables de tipo string</h2>
                    <div class="code-container">
                        <div class="code-header">
                            <span>Código PHP</span>
                        </div>
                        <div class="code-content">
                            <pre><code>&lt;?php
$string1 = "Rojo";
$string2 = "Amarillo";
$string3 = "Verde";

echo "El semaforo tiene tres colores: $string1, $string2, $string3.";
?&gt;</code></pre>
                        </div>
                    </div>
                    <div class="result-container">
                        <h3>Resultado:</h3>
                        <?php
                        $string1 = "Rojo";
                        $string2 = "Amarillo";
                        $string3 = "Verde";

                        echo "<p>El semaforo tiene tres colores: $string1, $string2, $string3.</p>";
                        ?>
                    </div>
                    <button class="btn back-btn" onclick="hideExercise()">Volver a la lista</button>
                </div>
            `;
            break;
            
        case 7:
            exerciseHTML = `
                <div class="exercise-content active">
                    <h2>Ejercicio 7 - Estructura condicional (if)</h2>
                    <div class="code-container">
                        <div class="code-header">
                            <span>Código PHP</span>
                        </div>
                        <div class="code-content">
                            <pre><code>&lt;?php
$num = rand() % 3 + 1;

echo "El numero generado es: ";

switch ($num) {
    case 1:
        echo "uno";
        break;
    case 2:
        echo "dos";
        break;
    case 3:
        echo "tres";
        break;
}
?&gt;</code></pre>
                        </div>
                    </div>
                    <div class="result-container">
                        <h3>Resultado:</h3>
                        <?php
                        $num = rand() % 3 + 1;

                        echo "<p>El numero generado es: ";

                        switch ($num) {
                            case 1:
                                echo "uno";
                                break;
                            case 2:
                                echo "dos";
                                break;
                            case 3:
                                echo "tres";
                                break;
                        }
                        echo "</p>";
                        ?>
                    </div>
                    <button class="btn back-btn" onclick="hideExercise()">Volver a la lista</button>
                </div>
            `;
            break;
            
        case 8:
            exerciseHTML = `
                <div class="exercise-content active">
                    <h2>Ejercicio 8 - Estructuras repetitivas (for - while - do/while)</h2>
                    <div class="code-container">
                        <div class="code-header">
                            <span>Código PHP</span>
                        </div>
                        <div class="code-content">
                            <pre><code>&lt;?php
echo "&lt;h2&gt;For loop:&lt;/h2&gt;";
for ($i = 2; $i <= 20; $i += 2) {
    echo "&lt;p&gt;$i&lt;/p&gt;";
}

echo "&lt;h2&gt;While loop:&lt;/h2&gt;";
$i = 2;
while ($i <= 20) {
    echo "&lt;p&gt;$i&lt;/p&gt;";
    $i += 2;
}

echo "&lt;h2&gt;Do-While loop:&lt;/h2&gt;";
$i = 2;
do {
    echo "&lt;p&gt;$i&lt;/p&gt;";
    $i += 2;
} while ($i <= 20);
?&gt;</code></pre>
                        </div>
                    </div>
                    <div class="result-container">
                        <h3>Resultado:</h3>
                        <?php
                        echo "<h4>For loop:</h4>";
                        for ($i = 2; $i <= 20; $i += 2) {
                            echo "<p>$i</p>";
                        }

                        echo "<h4>While loop:</h4>";
                        $i = 2;
                        while ($i <= 20) {
                            echo "<p>$i</p>";
                            $i += 2;
                        }

                        echo "<h4>Do-While loop:</h4>";
                        $i = 2;
                        do {
                            echo "<p>$i</p>";
                            $i += 2;
                        } while ($i <= 20);
                        ?>
                    </div>
                    <button class="btn back-btn" onclick="hideExercise()">Volver a la lista</button>
                </div>
            `;
            break;
            
        case 9:
            exerciseHTML = `
                <div class="exercise-content active">
                    <h2>Ejercicio 9 - Formulario Básico</h2>
                    <div class="code-container">
                        <div class="code-header">
                            <span>Código PHP</span>
                        </div>
                        <div class="code-content">
                            <pre><code>&lt;form method="post"&gt;
    Ingrese su Nombre: &lt;input type="text" name="nombre" required&gt;&lt;br&gt;
    Ingrese su Edad: &lt;input type="number" name="edad" required&gt;&lt;br&gt;
    &lt;input type="submit" value="Enviar"&gt;
&lt;/form&gt;

&lt;?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nombre = $_POST['nombre'];
    $edad = $_POST['edad'];
    
    echo "El nombre ingresado es: $nombre";
    echo "&lt;br&gt;";
    echo "La edad ingresada es: $edad";
    echo "&lt;br&gt;";
    
    if ($edad >= 18) {
        echo "&lt;p&gt;Es mayor de edad.&lt;/p&gt;";
    } else {
        echo "&lt;p&gt;Es menor de edad.&lt;/p&gt;";
    }
}
?&gt;</code></pre>
                        </div>
                    </div>
                    <div class="exercise-form">
                        <h3>Formulario:</h3>
                        <form method="post">
                            <div class="form-group">
                                <label for="nombre">Ingrese su Nombre:</label>
                                <input type="text" name="nombre" required>
                            </div>
                            <div class="form-group">
                                <label for="edad">Ingrese su Edad:</label>
                                <input type="number" name="edad" required>
                            </div>
                            <input type="submit" value="Enviar" class="btn">
                        </form>
                    </div>
                    <?php
                    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                        $nombre = $_POST['nombre'];
                        $edad = $_POST['edad'];
                        
                        echo "<div class='result-container'>";
                        echo "<h3>Resultado:</h3>";
                        echo "<p>El nombre ingresado es: $nombre</p>";
                        echo "<p>La edad ingresada es: $edad</p>";
                        
                        if ($edad >= 18) {
                            echo "<p>Es mayor de edad.</p>";
                        } else {
                            echo "<p>Es menor de edad.</p>";
                        }
                        echo "</div>";
                    }
                    ?>
                    <button class="btn back-btn" onclick="hideExercise()">Volver a la lista</button>
                </div>
            `;
            break;
            
        // Continuar con los demás casos...
    }
    
    container.innerHTML = exerciseHTML;
    container.scrollIntoView({ behavior: 'smooth' });
}

// Función para ocultar ejercicios
function hideExercise() {
    const container = document.getElementById('exercise-container');
    container.innerHTML = '';
}