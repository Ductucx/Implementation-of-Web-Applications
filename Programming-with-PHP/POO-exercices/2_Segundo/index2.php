<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <style>
            p{
                margin: 0;
                padding: 0;
            }
        </style>
    </head>
    <body>
        <?php
            include "prueba_clases2.php";

            # Stock hay 10, por lo que si ponemos 9, 1 y 10, saldra en el tercero como que no hay stock porque ==> stock = 10
            // echo $producto1->comprar(9);
            // echo $producto1->comprar(1);
            // echo $producto1->comprar(10);
            // echo $producto1->comprar(20);
            // echo $producto2->comprar(10);
            // echo $producto2->comprar(8);
            // echo $producto2->comprar(5);
            // echo $producto2->comprar(1);
        ?>
        <form>
            <select name="producto">
                <option value="">--- Selecciona un producto --</option>
                <?php foreach ($lista as $)
                ?>
            </select>
            <input type="text">
            <button type="submit"></button>
        </form>
    </body>
</html>