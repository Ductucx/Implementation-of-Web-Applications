<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <?php
            include "usuario.php";

            $usuario1=new Usuario("Evelin Dutuc","evedut@alu.edu.gva.es","hola1234");
            $usuario2=new Usuario("Prueba2","prueba2@alu.edu.gva.es","hola2345");

            echo $usuraio1->getNombre();
            echo "<br/>";

            $usuario1->setNombre("Evelin Dutuc");
            $usuario1->setEmail("evedutuc@alu.edu.gva.es");

            echo $usuraio2->getNombre();

        ?>
        <h1>Ejemplo POO</h1>

    </body>
</html>