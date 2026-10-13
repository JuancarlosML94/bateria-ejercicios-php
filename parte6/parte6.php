<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Parte 6: Strings cachondas</title>
</head>
<body>
    <h1>Manipulación de Strings con Arrays</h1>

    <?php
    // 1. Frase original que nos da el enunciado
    $fraseOriginal = "Hace frío mucho frío tiempo frío que frío me frío estoy frío quedando frío contigo frío";
    
    echo "<p><strong>Frase original:</strong> " . $fraseOriginal . "</p>";

    // 2. Convertimos la frase en un array usando explode (separando por espacios)
    $palabras = explode(" ", $fraseOriginal);

    // 3. Recorremos el array para filtrar y coger solo las posiciones impares
    // (Las posiciones impares en código (índices 0, 2, 4...) corresponden a las palabras 1ª, 3ª, 5ª...)
    $palabrasFiltradas = [];
    
    for ($i = 0; $i < count($palabras); $i++) {
        // Si el índice es par (0, 2, 4...), es la palabra "frío" o una posición par, así que la saltamos.
        // Si el índice es impar (1, 3, 5...), nos la quedamos.
        if ($i % 2 === 0) {
            $palabrasFiltradas[] = $palabras[$i];
        }
    }

    // 4. Volvemos a juntar el array en un string con implode usando espacios
    $fraseNueva = implode(" ", $palabrasFiltradas);

    // Mostramos el resultado final
    echo "<p><strong>Frase limpia (solo posiciones impares):</strong> " . $fraseNueva . "</p>";
    ?>

</body>
</html>