<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Asociativas</title>
    </head>
    <body>
        <?php
            // Esto es un ejemplo de un array asociativo >>>>> $ejemplo = array("Juan" => "25", "Maria" => "28", "Paco" => "27"); 

            // O se puede hacer de la siguiente manera:
            // $ejemplo["Juan"] = "25";
            // $ejemplo["Maria"] = "28";
            // $ejemplo["Paco"] = "27";
            // -------------------------------------------------
            // Para recorrer un array asociativo con 'foreach'
            // foreach ($ejemplo as $clave => $valor) {
            //     echo "Clave: " . $clave . " - Valor: " . $valor;
            //     echo "<br>";
            // }

            // Ahora pongámoslo a prueba:

            $ejemplo = array("Juan" => "25", "Maria" => "28", "Paco" => "27"); 

            foreach ($ejemplo as $clave => $valor) {
                echo "Clave: " . $clave . " - Valor: " . $valor;
                echo "<br>";
            };

            // El resultado saldrá así:

            // Clave: Juan - Valor: 25
            // Clave: Maria - Valor: 28
            // Clave: Paco - Valor: 27


            // Ahora vamos con el ejercicio práctico:

            echo "<p>-----------------------------------------------------------------------------------------------------------</p>";

            $paises = array(
                            "Italy"=>"Rome", "Luxembourg"=>"Luxembourg", "Belgium"=> "Brussels", "Denmark"=>"Copenhagen",
                            "Finland"=>"Helsinki", "France" => "Paris", "Slovakia"=>"Bratislava", "Slovenia"=>"Ljubljana",
                            "Germany" => "Berlin", "Greece" => "Athens", "Ireland"=>"Dublin", "Netherlands"=>"Amsterdam",
                            "Portugal"=>"Lisbon", "Spain"=>"Madrid", "Sweden"=>"Stockholm", "United Kingdom"=>"London",
                            "Cyprus"=>"Nicosia", "Lithuania"=>"Vilnius", "Czech Republic"=>"Prague", "Estonia"=>"Tallin",
                            "Hungary"=>"Budapest", "Latvia" => "Riga", "Malta"=>"Valetta", "Austria" => "Vienna",
                            "Poland"=>"Warsaw"
                            );
            
            foreach ( $paises as $i => $clave_pais){
                echo "The capital of $i is $clave_pais <br>"; //Lo he puesto en ingles para que no esté en spanenglish
            };
        ?>
    </body>
</html>