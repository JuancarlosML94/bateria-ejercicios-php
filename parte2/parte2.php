<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Parte 2: Historial de lanzamientos</title>
    <style>
        .dado {
            font-size: 60px;
            display: inline-block;
            margin: 5px;
        }
    </style>
</head>
<body>
    <h1>Lanzamiento de dados acumulados</h1>

    <?php
    // 1. Recogemos los resultados anteriores que viajan por GET. Si no hay nada, empieza vacío.
    $resultados = $_GET["resultados"] ?? "";

    // 2. Generamos un nuevo lanzamiento aleatorio entre 1 y 6
    $lanzamiento = rand(1, 6);

    // 3. Si ya existían resultados previos, los concatenamos con una coma; si no, es el primero.
    if ($resultados != "") {
        $resultadosActualizados = $resultados . "," . $lanzamiento;
    } else {
        $resultadosActualizados = $lanzamiento;
    }
    ?>

    <!-- 4. Mostramos el último lanzamiento -->
    <p>Último lanzamiento: <strong><?php echo $lanzamiento; ?></strong></p>

    <!-- 5. Mostramos el historial completo de tiradas -->
    <p>Historial de tiradas: <?php echo $resultadosActualizados; ?></p>

    <!-- 6. El botón/enlace pasa la cadena de resultados actualizada a la siguiente recarga por GET -->
    <p>
        <a href="parte2.php?resultados=<?php echo $resultadosActualizados; ?>">
            <button>Lanzar otro dado</button>
        </a>
    </p>

</body>
</html>