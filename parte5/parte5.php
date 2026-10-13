<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Parte 5: Comparator</title>
</head>
<body>
    <h1>Calculadora y Comparador</h1>

    <?php
    // Comprobamos si nos han pasado los datos por GET
    if (isset($_GET['valor1']) && isset($_GET['operador']) && isset($_GET['valor2'])) {
        // Pillamos los valores tal cual vienen del formulario
        $v1 = $_GET['valor1'];
        $op = $_GET['operador'];
        $v2 = $_GET['valor2'];
        
        $resultado = "";
        $error = false;

        // Evaluamos qué operación hacer usando if-elseif-else encadenado
        if ($op === '+') {
            // Operación aritmética de suma
            $resultado = $v1 + $v2;
        } elseif ($op === '-') {
            // Operación aritmética de resta
            $resultado = $v1 - $v2;
        } elseif ($op === 'and') {
            // Operación lógica AND
            // Usamos un operador ternario rápido para mostrar true/false en texto
            $resBool = ($v1 && $v2);
            $resultado = $resBool ? 'true' : 'false';
        } elseif ($op === 'or') {
            // Operación lógica OR
            $resBool = ($v1 || $v2);
            $resultado = $resBool ? 'true' : 'false';
        } elseif ($op === 'xor') {
            // Operación lógica XOR
            $resBool = ($v1 xor $v2);
            $resultado = $resBool ? 'true' : 'false';
        } else {
            $error = true;
            echo "<p style='color: red;'>Operador no válido.</p>";
        }

        // Si todo ha ido bien, mostramos el resultado de la operación
        if (!$error) {
            echo "<p><strong>Resultado:</strong> " . $v1 . " " . $op . " " . $v2 . " → <strong>" . $resultado . "</strong></p>";
            echo "<hr>";
        }
    }
    ?>

    <!-- Formulario para introducir los valores y elegir el operador -->
    <form action="parte5.php" method="GET">
        Primer valor:
        <br>
        <input type="text" name="valor1" required>
        <br><br>

        Operador:
        <br>
        <select name="operador">
            <option value="and">and</option>
            <option value="or">or</option>
            <option value="xor">xor</option>
            <option value="+">+</option>
            <option value="-">-</option>
        </select>
        <br><br>

        Segundo valor:
        <br>
        <input type="text" name="valor2" required>
        <br><br>

        <input type="submit" value="Calcular">
    </form>

</body>
</html>