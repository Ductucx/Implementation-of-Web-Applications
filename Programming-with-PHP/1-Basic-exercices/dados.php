<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Dados</title>
    </head>
    <body>
        <?php
            // php -S localhost:8000  (PARA PRUEBAS)
            $numero = rand(1, 6);

            switch ($numero) {
                case 1:
                    echo "<img src=./IMG/images1.png>";
                    break;

                case 2:
                    echo "<img src=./IMG/images2.png>";
                    break;

                case 3:
                    echo "<img src=./IMG/images3.jpg>";
                    break;

                case 4:
                    echo "<img src=./IMG/images4.png>";
                    break;

                case 5:
                    echo "<img src=./IMG/images5.jpg>";
                    break;

                case 6:
                    echo "<img src=./IMG/images6.jpg>";
                    break;
                }
        ?>
    </body>
</html>