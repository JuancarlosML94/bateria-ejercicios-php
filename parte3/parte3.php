<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Parte 3: Frases Cuñadas</title>
</head>
<body>
    <h1>Generador de Frases Cuñadas</h1>

    <?php
    // Metemos las opciones en arrays para no escribir tanto option a mano
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

    // Si le damos a enviar, pillamos los datos por GET y montamos la frase
    if (isset($_GET['sujeto']) && isset($_GET['accion']) && isset($_GET['cierre'])) {
        $s = $_GET['sujeto'];
        $a = $_GET['accion'];
        $c = $_GET['cierre'];

        // Imprimimos la frase juntando las tres variables
        echo "<p><strong>Frase:</strong> " . $s . " " . $a . " " . $c . "</p>";
    }
    ?>

    <!-- Formulario básico que se recarga a sí mismo pasando los datos por GET -->
    <form action="parte3.php" method="GET">
        Sujeto:
        <select name="sujeto">
            <?php
            // Recorremos el array para pintar las opciones del desplegable
            foreach ($sujetos as $item) {
                echo "<option value='$item'>$item</option>";
            }
            ?>
        </select>
        <br><br>

        Acción:
        <select name="accion">
            <?php
            foreach ($acciones as $item) {
                echo "<option value='$item'>$item</option>";
            }
            ?>
        </select>
        <br><br>

        Cierre:
        <select name="cierre">
            <?php
            foreach ($cierres as $item) {
                echo "<option value='$item'>$item</option>";
            }
            ?>
        </select>
        <br><br>

        <input type="submit" value="Generar">
    </form>

</body>
</html>