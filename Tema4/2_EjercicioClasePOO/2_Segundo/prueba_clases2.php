<!--
1. Define la clase Producto.
         Atributos: nombre (public), precio (public), stock (private).
2. Constructor: Recibe los 3 datos e inicializa.
3. Método mostrarInfo(): Devuelve un string tipo: "Producto: X - Precio: Y€".
4. Método comprar($cantidad):
     - Si hay suficiente stock, resta la cantidad y devuelve true.
     - Si no hay stock, devuelve false (no hace nada).
5. Prueba: Crea 2 productos, muestra su info e intenta comprar más stock del que hay para ver si falla
-->

<?php
    class Producto2 {
        // Propiedades
        private $nombre;
        private $precio;
        private $stock;

        public function __construct($nombre, $precio, $stock) {
            $this->nombre = $nombre;
            $this->precio = $precio;
            $this->stock = $stock;
        }

        public function mostrar() {
            return "<b>Producto:</b> ". $this->nombre. " | <b>Precio:</b> ". $this->precio. " € | <b>Stock:</b> ". $this->stock. "<br/><br/>";
        }

        public function get_nombre() {
            return $this->nombre;
        }

        public function comprar($cantidad) {
            if ($cantidad <= $this->stock) {
                $this->stock -= $cantidad;
                $total = $this->precio * $cantidad;
                echo "<p>COMPRADO ". $cantidad. " ". $this->nombre. " por el módico precio total de <b><span style='color: green;'>". $total. " €</span></b></p><br/>";
            } else {
                echo "<p><b style='color: red;'>** ERROR ==></b> Has intentado comprar <b>". $cantidad. "</b> <b style='color: blue;'>". $this->nombre. "</b> cuando realmente el <b>stock total</b> es de <b style='color: red;'>". $this->stock. "</b></p><br/>";
            }
        }
    }

    $producto1 = new Producto2("Tomates", 2, 20);
    $producto2 = new Producto2("Aguacates", 3, 15);
    $producto3 = new Producto2("Manzanas", 2, 40);
    $producto4 = new Producto2("Platanos", 1, 10);

    $lista = [$producto1, $producto2, $producto3, $producto4];
?>