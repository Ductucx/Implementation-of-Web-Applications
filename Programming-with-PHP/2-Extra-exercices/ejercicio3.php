<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Ejercicio3</title>
    </head>
    <body>
        <?php
            // php -S localhost:8000  (PARA PRUEBAS)


            echo "<h3>1. Crea un array llamado nombres que contenga varios nombres</h3>";
            $nombres = ["Evelin", "Cesar", "Javier", "Angel", "Isabel", "Guillermo"];
            $nombres_original = $nombres; // guardamos copia porque lo vamos a necesitar luego
            echo "<pre>";
                print_r($nombres);
            echo "</pre>";

// ====================================================================================================================================

            echo "<h3>2. Muestra el número de elementos que tiene el array (función count).</h3>";
            echo "<p>Número de elementos en el array: " . count($nombres) . "</p>";

// ====================================================================================================================================

            echo "<h3>3. Crea una cadena que contenga los nombres de los alumnos existentes en el array separados por un espacio y muéstrala (función de strings implode)</h3>";

            $cadena_nombres = implode(" ", $nombres); // implode() convierte un array en un string, separando los elementos con el separador que tú elijas.
            echo "<p>Nombres en una sola cadena ==> $cadena_nombres</p>";

// ====================================================================================================================================

            echo "<h3>4. Muestra el array ordenado alfabéticamente (función asort)</h3>";

            asort($nombres); // ordena manteniendo la relación clave → valor
            echo "<p>Array ordenado alfabéticamente:</p>";
            echo "<pre>";
                print_r($nombres);
            echo "</pre>";

// ====================================================================================================================================

            echo "<h3>5. Muestra el array en el orden inverso al que se creó (función array_reverse)</h3>";

            $nombres = $nombres_original; // Ahora llamamos a la copia para restaurarla y volver al estado original.
            $reverse = array_reverse($nombres);
            echo "<p>Array en orden inverso:</p>";
            echo "<pre>";
                print_r($reverse);
            echo "</pre>";

// ====================================================================================================================================

            echo "<h3>6. Muestra la posición que tiene tu nombre en el array (función array_search)</h3>";

            $mi_nombre = "Evelin";
            $pos = array_search($mi_nombre, $nombres);
            echo "<p>Mi nombre $mi_nombre está en la posición: $pos</p>";

// ====================================================================================================================================

            echo "<h3>7. Crea un array de alumnos donde cada elemento sea otro array que contenga el id, nombre y edad del alumno.</h3>";

            $alumnos = [
                ["id" => 1, "nombre" => "Evelin", "edad" => 19],
                ["id" => 2, "nombre" => "Luis", "edad" => 22],
                ["id" => 3, "nombre" => "Carlos", "edad" => 21],
                ["id" => 5, "nombre" => "Pedro", "edad" => 20],
            ];

            echo "<pre>";
                print_r($alumnos);
            echo "</pre>";

// ====================================================================================================================================

            echo "<h3>8. Crea una tabla html en la que se muestren todos los datos de los alumnos.</h3>";

            echo "<h2>Tabla de alumnos</h2>";
            echo "<table style='text-align: center;'>";
                echo "<tr><th>ID</th><th>Nombre</th><th>Edad</th></tr>";

                foreach ($alumnos as $alumno) {
                    echo "<tr>";
                        echo "<td>{$alumno['id']}</td>";
                        echo "<td>{$alumno['nombre']}</td>";
                        echo "<td>{$alumno['edad']}</td>";
                    echo "</tr>";
                }
            echo "</table>";

// ====================================================================================================================================

            echo "<h3>9. Crea un array con 10 números y utiliza la función array_sum para obtener la suma de los 10 números. Debes entregar el fichero arrays.php</h3>";

            $numeros = [0, 10, 1, 9, 2, 8, 3, 7, 4, 6];
            $suma = array_sum($numeros);
            echo "<p>La suma total es de: $suma</p>";


        ?>
    </body>
</html>