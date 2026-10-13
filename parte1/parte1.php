<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Lanzamiento de dados</title>
    <style> 
        /* Estilo para que el simbolo del dado se vea grande*/
        .dado {
            font-size: 80px;
            line-height: 1;
            margin: 10px 0;
        }
    </style>
</head>
<body>
    <h1>Lanzamiento de Dado</h1>

    <?php
    // Comprobamos si se ha pulsado el botón (si el parámetro 'lanzar' viaja por GET)

    if (isset($_GET['lanzar'])) {

        // Generamos un número aleatorio entre 1 y 6

        $resultado = rand(1, 6);

        // Array simple con los símbolos Unicode de cada cara (índices del 1 al 6)

        $dados = [
            1 => "&#9856;",
            2 => "&#9857;",
            3 => "&#9858;",
            4 => "&#9859;",
            5 => "&#9860;",
            6 => "&#9861;"
        ];

        // Obtenemos el símbolo correspondiente al resultado aleatorio

        $simboloDado = $dados[$resultado];
        
        echo "<p>¡Has lanzado el dado y ha salido un: <strong>$resultado</strong>!</p>";
        
        // Mostramos el icono del dado grande
       
        echo "<div class='dado'>$simboloDado</div>";
       
        // Enlace para volver a lanzar

        echo '<p><a href="parte1.php?lanzar=1">Lanzar otra vez</a></p>';
    } else {

        // Estado inicial: solo mostramos el botón / enlace para empezar

        echo '<p><a href="parte1.php?lanzar=1"><button>Lanzar dado</button></a></p>';
    }
    ?>

</body>
</html>