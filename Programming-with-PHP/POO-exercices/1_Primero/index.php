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
            include "clases.php";

            $producto1=new Producto("Alcaparras", 2, 10);
            $producto2=new Producto("Alcachofas", 1, 20);

            echo $producto1->mostrarInfo();
            echo $producto2->mostrarInfo();

            # Stock hay 10, por lo que si ponemos 9, 1 y 10, saldra en el tercero como que no hay stock porque ==> stock = 10
            echo $producto1->comprar(9);
            echo $producto1->comprar(1);
            echo $producto1->comprar(10);
            echo $producto2->comprar(10);
            echo $producto2->comprar(8);
            echo $producto2->comprar(10);

        ?>
    </body>
</html>