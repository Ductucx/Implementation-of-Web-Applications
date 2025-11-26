<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Ejercicio2</title>
    </head>
    <body>
        <?php
            // php -S localhost:8000  (PARA PRUEBAS)


            echo "<h3>1. Obtener el parámetro 'nombre' desde querystring y eliminar '/' al principio y al final</h3>";
            $nombre = trim($_GET['nombre'] ?? "TuNombre", "/");
            // ?? Significa "null coalescing operator". Significa “Si $_GET['nombre'] existe y no es null, úsalo; si no, usa "TuNombre".”
            // trim() es una función de PHP que elimina caracteres al principio y al final de una cadena.
                // El primer argumento es la cadena que quieres limpiar.
                // El segundo argumento ("/") indica qué carácter eliminar.

            echo "Nombre recibido: $nombre";

            // Poner en la url para probar: http://localhost:8000/ejercicio2.php?nombre=Evelin

// ====================================================================================================================================
            
            echo "<h3>2. Mostrar la longitud del nombre</h3>";
            $longitud = strlen($nombre);

            echo "Longitud: $longitud caracteres";

// ====================================================================================================================================

            echo "<h3>3. Nombre en mayúsculas</h3>";

            $upper_nombre = strtoupper($nombre);
            echo "Nombre en mayúsculas: $upper_nombre";
// ====================================================================================================================================

            echo "<h3>4. Nombre en minúsculas</h3>";

            $lower_nombre = strtolower($nombre);
            echo "Nombre en minúsculas: $lower_nombre";

// ====================================================================================================================================

            echo "<h3>5. Comprobar prefijo si se pasa</h3>";

            if (isset($_GET['prefijo'])) { // isset() es una función de PHP que sirve para comprobar si una variable:
                                                // · Existe
                                                // · Tiene un valor no nulo

                                                // Si ambas cosas se cumplen, devuelve true.
                                                // Si alguna falla, devuelve false.

                $prefijo = $_GET['prefijo'];
                if (strpos($nombre, $prefijo) === 0) { // strpos devuelve la posición de la primera coincidencia. "===" Es igualdad estricta, tiene que ser el valor y el tipo que coincidan para que sea true.
                    echo "<p>El nombre comienza con el prefijo $prefijo</p>";
                } else {
                    echo "<p>El nombre NO comienza con el prefijo $prefijo</p>";
                }
            }

            // Poner en la url para probar: http://localhost:8000/ejercicio2.php?nombre=Evelin&prefijo=Eve   O   prefijo=EVE

// ====================================================================================================================================

            echo "<h3>6. Número de veces que aparece la letra 'a' (mayúscula o minúscula)</h3>";

            $contar_a = substr_count($lower_nombre, "a"); // substr_count() es una función de PHP que cuenta cuántas veces aparece una subcadena dentro de otra cadena.
            echo "<p>Número de veces que aparece la letra 'a': $contar_a</p>";

// ====================================================================================================================================

            echo "<h3>7. Posición de la primera 'a' (mayúscula o minúscula)</h3>";

            $pos_a = stripos($nombre, "a"); // stripos() no distingue mayúsculas/minúsculas
            if ($pos_a !== false) {
                echo "<p>Posición de la primera 'a': $pos_a</p>";
            } else {
                echo "<p>No hay ninguna letra 'a' en el nombre...</p>";
            }

            // Poner en la url para probar: http://localhost:8000/ejercicio2.php?nombre=Manolo&prefijo=Mano

// ====================================================================================================================================

            echo "<h3>8. Sustituir letras 'o' por número cero (mayúscula o minúscula)</h3>";

            $ceros = str_ireplace("o", "0", $nombre); // str_ireplace() es una función de PHP que reemplaza todas las ocurrencias de una subcadena en otra cadena, ignorando mayúsculas y minúsculas.
            echo "<p>Nombre con 'o' reemplazados por ceros: $ceros</p>";

        ?>
    </body>
</html>