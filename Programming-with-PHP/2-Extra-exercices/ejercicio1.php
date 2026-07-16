<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Ejercicio1</title>
        <style>
            table{
                border-collapse: collapse;
                text-align: center;
                widith: 12rem;
            }
            .encabezado{
                background-color: #FFEECC;
            }
            .elemento{
                width: 8rem;
            }
            .par{
                background-color: #CCCCCC;
            }
            .impar{
                background-color: #CCEEFF;
            }
        </style>
    </head>
    <body>
        <?php
            // php -S localhost:8000  (PARA PRUEBAS)

            echo "<h1>Conversión euros/pesetas</h1>";
            
            $valor_monedas = [
                1 => 166.386, 2 => 332.772, 3 => 499.158, 4 => 665.544, 5 => 831.98,
                6 => 998.316, 7 => 1164.702, 8 => 1331.088, 9 => 1497.474, 10 => 1663.86
            ];
            
            echo "<table>";
            echo "<tr><th class='encabezado'> Euros </th><th class='encabezado'> Pesetas </th></tr>";
            foreach ($valor_monedas as $euro => $peseta){
                $clase = ($euro % 2 == 0) ? "par" : "impar"; // El "?" es como un IF SIMPLIFICADO, es como si dijese par o impar, verdadero o falso, pero una de las dos tiene que pasar.

                echo "<tr class='$clase'>";
                    echo "<td class='elemento'>$euro</td>";
                    echo "<td class='elemento'>$peseta</td>";
                echo "</tr>";
            }

            echo "</table>";

            // Ahora obtendremos la hora para saludar al usuario en base a la hora que sea.

            $hora = date("H");

            echo "<br><br>";

            if ($hora >= 8 && $hora <= 13) {
                echo "Buenos días";
            }
            else if ($hora >= 14 && $hora <= 20) {
                echo "Buenas tardes";
            }
            else {
                echo "Buenas noches";
            }

        ?>
    </body>
</html>