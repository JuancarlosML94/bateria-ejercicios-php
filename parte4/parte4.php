<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Parte 4: Frases Cuñadas 2</title>
</head>
<body>
    <h1>Generador de Frases Cuñadas 2</h1>

    <?php
    // Arrays con las opciones de cada lista
    $sujetos = [
        "Yo en tu lugar…",
        "La verdad es que…",
        "Tú sabes que…",
        "No hay duda de que…",
        "Al final…"
    ];

    $acciones = [
        "siempre hay que invertir en…",
        "lo importante es…",
        "nunca subestimes…",
        "yo siempre digo que…",
        "el secreto está en…"
    ];

    $cierres = [
        "la bolsa de valores",
        "el no tener dinero congelado en el banco",
        "los chemtrails",
        "la nube",
        "las crypto"
    ];

    // Variables para guardar la frase elegida
    $s = "";
    $a = "";
    $c = "";

    // Si pulsamos alguno de los dos botones de enviar
    if (isset($_GET['enviar'])) {

        // Si le ha dado al botón de frase aleatoria
        if ($_GET['enviar'] === 'Aleatorio') {
            // array_rand nos da una posición al azar del array
            $s = $sujetos[array_rand($sujetos)];
            $a = $acciones[array_rand($acciones)];
            $c = $cierres[array_rand($cierres)];
        } else {
            // Si le da al botón normal de Generar, miramos si ha escrito algo manual

            // 1. Sujeto: si el texto personalizado no está vacío, lo usamos
            if (isset($_GET['custom_sujeto']) && trim($_GET['custom_sujeto']) !== '') {
                $s = trim($_GET['custom_sujeto']);
            } else if (isset($_GET['sujeto'])) {
                $s = $_GET['sujeto'];
            }

            // 2. Acción
            if (isset($_GET['custom_accion']) && trim($_GET['custom_accion']) !== '') {
                $a = trim($_GET['custom_accion']);
            } else if (isset($_GET['accion'])) {
                $a = $_GET['accion'];
            }

            // 3. Cierre
            if (isset($_GET['custom_cierre']) && trim($_GET['custom_cierre']) !== '') {
                $c = trim($_GET['custom_cierre']);
            } else if (isset($_GET['cierre'])) {
                $c = $_GET['cierre'];
            }
        }

        // Mostramos el resultado
        if ($s !== '' && $a !== '' && $c !== '') {
            echo "<p><strong>Frase:</strong> " . $s . " " . $a . " " . $c . "</p>";
        }
    }
    ?>

    <!-- Formulario sin labels, pasando los datos por GET -->
    <form action="parte4.php" method="GET">
        
        Sujeto:<br>
        <select name="sujeto">
            <?php
            foreach ($sujetos as $item) {
                echo "<option value='$item'>$item</option>";
            }
            ?>
        </select>
        <br>
        O escribe uno propio:
        <br>
        <input type="text" name="custom_sujeto">
        <br><br>

        Acción:<br>
        <select name="accion">
            <?php
            foreach ($acciones as $item) {
                echo "<option value='$item'>$item</option>";
            }
            ?>
        </select>
        <br>
        O escribe una propia:
        <br>
        <input type="text" name="custom_accion">
        <br><br>

        Cierre:<br>
        <select name="cierre">
            <?php
            foreach ($cierres as $item) {
                echo "<option value='$item'>$item</option>";
            }
            ?>
        </select>
        <br>
        O escribe uno propio:
        <br>
        <input type="text" name="custom_cierre">
        <br><br>

        <input type="submit" name="enviar" value="Generar">
        <input type="submit" name="enviar" value="Aleatorio">

    </form>

</body>
</html>