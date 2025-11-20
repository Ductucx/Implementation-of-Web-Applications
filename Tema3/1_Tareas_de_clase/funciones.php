<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Funciones</title>
    </head>
    <body>
        <?php
            // php -S localhost:8000  (PARA PRUEBAS)

            // Los argumentos se clasifican de la siguiente manera:
            // $arg_*número de ejercicio**número de argumento*
            // Ej: Ejercicio 3 => El primer argumento será $arg_31
            // SI fuese el tercer argumento => $arg_33

// ========================================================================================================

            echo "<u><b>Ejercicio 1:</u></b><br>";
            function tabla_multiplicar($arg_11)
            {
                for ($i = 1; $i <= 10; $i++){
                    $resultado = $arg_11 * $i;
                    echo "$arg_11 * $i = $resultado<br>";
                };
            };

            tabla_multiplicar(7);

// ========================================================================================================

            echo "<br><br>";
            echo "<u><b>Ejercicio 2:</u></b><br>";
            function entrada_salida($arg_21, $arg_22){ // Primer argumento es el incio, el segundo el fin.
                for ($i = $arg_21; $i <= $arg_22; $i++){
                    echo "<i>Tabla del $i:</i><br>";
                    tabla_multiplicar($i);
                    echo "<br>";
                };
            }

            entrada_salida(1, 10);

// ========================================================================================================

            echo "<br><br>";
            echo "<u><b>Ejercicio 3:</u></b><br>";
            function inicializar_array($numero_de_elementos, $min, $max){
                $array31 = [];
                
                for ($i = 0; $i < $numero_de_elementos; $i++){ // Aquí indicamos que si $numero_de_elementos es mayor que $i, vaya sumando y añadiendo una posición hasta que incumpla la condiciónn.
                    $array31[] = rand($min, $max); // Añadimos un número aleatorio entre el mínimo y máximo para añadir en cada posición.
                };

                return $array31;
            };

            $mi_array = inicializar_array(10, 1, 100);
            print_r($mi_array);

// ========================================================================================================

// Aqui vamos a utilizar el array de las notas >>>>> $notas = ["Nota1" => 2, "Nota2" => 8, "Nota3" => 0, "Nota4" => 10];

            echo "<br><br>";
            echo "<u><b>Ejercicio 4:</u></b><br>";
            $notas = ["Nota1" => 2, "Nota2" => 8, "Nota3" => 0, "Nota4" => 10];
            function calcular_media($array41){
                $suma = array_sum($array41);
                $cantidad = count($array41);
                $media = $suma / $cantidad;

                return $media;
            };

            $mi_media = calcular_media($notas);
            echo "$mi_media";

// ========================================================================================================

// Aqui vamos a utilizar el array de las notas >>>>> $notas = ["Nota1" => 2, "Nota2" => 8, "Nota3" => 0, "Nota4" => 10];


            echo "<br><br>";
            echo "<u><b>Ejercicio 5:</u></b><br>";

            function calcular_maximo($array51){
                $maximo = max($array51);

                return $maximo;
            };

            $mi_maximo = calcular_maximo($notas);
            echo "$mi_maximo";

// ========================================================================================================

// Aqui vamos a utilizar el array de las notas >>>>> $notas = ["Nota1" => 2, "Nota2" => 8, "Nota3" => 0, "Nota4" => 10];

            echo "<br><br>";
            echo "<u><b>Ejercicio 6:</u></b><br>";

            function calcular_minimo($array61){
                $minimo = min($array61);

                return $minimo;
            };

            $mi_minimo = calcular_minimo($notas);
            echo "$mi_minimo";

// ========================================================================================================
        
// Aqui vamos a utilizar el array de las notas >>>>> $notas = ["Nota1" => 2, "Nota2" => 8, "Nota3" => 0, "Nota4" => 10];

            echo "<br><br>";
            echo "<u><b>Ejercicio 7:</u></b><br>";

            function imprimir_array($array71){
                echo "<table>";
                echo "<tr><th>Posición</th><th>Valor</th></tr>";

                foreach ($array71 as $posicion => $valor){
                    echo "<tr>";
                    echo "<td style='text-align: center;'>$posicion</td>";
                    echo "<td style='text-align: center;'>$valor</td>";
                    echo "</tr>";
                };
                echo "</table>";

            };

            imprimir_array($notas);
        ?>
    </body>
</html>