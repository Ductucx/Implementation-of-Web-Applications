<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Cálculo de Notas</title>
    </head>
    <body>
        <div class="contenedor">
            <h1>Cálculo de Notas</h1>

            <?php
                include './PHP/verification.php';
                if ($_SERVER["REQUEST_METHOD"] == "POST") {

                    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) $errores[] = "El correo no tiene un formato válido.";
                    if (!preg_match("/^[0-9]{8}[A-Za-z]$/", $dni)) $errores[] = "El DNI debe tener 8 números y 1 letra.";

                    $notasPr = ["Practica1" => $_POST["pr1"], "Practica2" => $_POST["pr2"], "Practica3" => $_POST["pr3"], "Practica4" => $_POST["pr4"]];
                    $notasEx = ["Examen1" => $_POST["ex1"], "Examen2" => $_POST["ex2"]];

                    foreach ($notasPr as $clave => $valor) {
                        if ($valor < 0 || $valor > 10) $errores[] = "La nota de $clave debe estar entre 0 y 10.";
                    }

                    foreach ($notasEx as $clave => $valor) {
                        if ($valor < 0 || $valor > 10) $errores[] = "La nota de $clave debe estar entre 0 y 10.";
                    }

                    if (!empty($errores)) {
                        echo "<div class='error'><ul>";
                        foreach ($errores as $e) echo "<li>$e</li>";
                        echo "</ul></div>";
                    } 
                    else {

                        $mediaPracticas = array_sum($notasPr) / count($notasPr);
                        $mediaExamenes  = array_sum($notasEx) / count($notasEx);

                        $notaFinal = ($mediaPracticas * 0.40) + ($mediaExamenes * 0.60);


                        echo "<div class='resultado'>
                                <h3>Resultado del alumno</h3>
                                <p><b>Nombre:</b> $nombre</p>
                                <p><b>Email:</b> $email</p>
                                <p><b>DNI:</b> $dni</p>

                                <p><b>Media de prácticas:</b> " . number_format($mediaPracticas, 2) . "</p>
                                <p><b>Media de exámenes:</b> " . number_format($mediaExamenes, 2) . "</p>
                                <p><b>Calificación final:</b> <strong>" . number_format($notaFinal, 2) . "</strong></p>
                            </div>";
                    }
                }
            ?>

            <!-- FORMULARIO -->
            <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                <h3>Datos del alumno</h3>

                <label>Nombre:</label>
                <input type="text" name="nombre">

                <label>Correo electrónico:</label>
                <input type="email" name="email">

                <label>DNI:</label>
                <input type="text" name="dni" placeholder="12345678A">

                <h3>Notas de prácticas</h3>
                <label>Práctica 1:</label>
                <input type="number" name="pr1" min="0" max="10">

                <label>Práctica 2:</label>
                <input type="number" name="pr2" min="0" max="10">

                <label>Práctica 3:</label>
                <input type="number" name="pr3" min="0" max="10">

                <label>Práctica 4:</label>
                <input type="number" name="pr4" min="0" max="10">

                <h3>Notas de exámenes</h3>
                <label>Examen 1:</label>
                <input type="number" name="ex1" min="0" max="10">

                <label>Examen 2:</label>
                <input type="number" name="ex2" min="0" max="10">

                <button class="boton">Calcular</button>
            </form>

        </div>

    </body>
</html>