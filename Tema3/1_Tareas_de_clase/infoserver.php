<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8" >
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>InfoServer</title>
    </head>
    <body>
        <?php
            // php -S localhost:8000  (PARA PRUEBAS)
            echo "<pre>";           // La etiqueta <pre> es para que salga en un formato específico,
            print_r($_SERVER);      // y que vaya separando los elementos línea por línea
            echo "</pre>";

            echo "<br><br>";
            print_r($_SERVER);      // Si lo hacemos sin <pre> saldrá desordenado y todo de una

            echo "<br><br><br>";
            echo "<u><b>La dirección IP del servidor donde se está ejecutando el script:</b></u>";
            echo "<br>";
            echo $_SERVER['REMOTE_ADDR'];

            echo "<br><br>";
            echo "<u><b>El nombre del host del servidor donde se está ejecutando el script:</b></u>";
            echo "<br>";
            echo $_SERVER['SERVER_NAME'];

            echo "<br><br>";
            echo "<u><b>El software que está utilizando el servidor para servir el script:</b></u>";
            echo "<br>";
            echo $_SERVER['SERVER_SOFTWARE'];

            echo "<br><br>";
            echo "<u><b>Información sobre el agente de usuario (User Agent) desde el que se está solicitando el script:</b></u>";
            echo "<br>";
            echo $_SERVER['HTTP_USER_AGENT'];

            echo "<br><br>";
            echo "<u><b>La dirección IP del cliente que está solicitando el script:</b></u>";
            echo "<br>";
            echo $_SERVER['HTTP_HOST'];
        ?>
    </body>
</html>