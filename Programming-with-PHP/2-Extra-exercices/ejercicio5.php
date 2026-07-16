<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Ejercicio5</title>
    </head>
    <body>
        <h1>Conversor de monedas</h1>

        <form action="" method="get">
            <label for="euros">Cantidad de euros: </label>
            <input type="number" id="euros" name="euros" maxlength="10" min="0.01" step="0.01">

            <label for="cambio">Moneda: </label>
            <select name="cambio" id="">
                <option value="pesetas">Pesetas</option>
                <option value="dolares">Dólares</option>
                <option value="libras_esterlinas">Libras esterlinas</option>
                <option value="yenes_japoneses">Yenes japoneses</option>
                <option value="francos_suizos">Francos suizos</option>
            </select>

            <button type="submit">Convertir</button>

            <?php
                // php -S localhost:8000  (PARA PRUEBAS)

                $euros = $_GET['euros'];
                $moneda = $_GET['cambio'];
                $pesetas = 166.386;
                $dolares = 1.325;
                $librasester = 0.927;
                $yenesjapo = 118.232;
                $francossuiz = 1.515;

                switch ($moneda) {

                    case 'pesetas';
                    $result_pesetas = $euros * $pesetas;
                    echo "<p> $result_pesetas </p>";
                    break;

                    case 'dolares';
                    $result_dolares = $euros * $dolares;
                    echo "<p> $result_dolares </p>";
                    break;

                    case 'libras_esterlinas';
                    $result_librasester = $euros * $librasester;
                    echo "<p> $result_librasester </p>";
                    break;

                    case 'yenes_japoneses';
                    $result_yenesjapo = $euros * $yenesjapo;
                    echo "<p> $result_yenesjapo </p>";
                    break;

                    case 'francos_suizos';
                    $result_francossuiz = $euros * $francossuiz;
                    echo "<p> $result_francossuiz </p>";
                    break;
                }
            ?>
        </form>
    </body>
</html>