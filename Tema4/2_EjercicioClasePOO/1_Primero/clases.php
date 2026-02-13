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
    class Producto {
        public $nombre;
        public $precio;
        private $stock;

        public function __construct($nombre, $precio, $stock) {
            $this->nombre=$nombre;
            $this->precio=$precio;
            $this->stock=$stock;
        }

        public function mostrarInfo() {
            return "<p>Producto: ". $this->nombre. "</p><p>Precio: ". $this->precio. " €</p><br/>";
        }

        public function comprar($cantidad) {
            if ($cantidad <= $this->stock) {
                $this->stock -= $cantidad;
                $precio_total= $this->precio * $cantidad;
                echo "<b>". $this->nombre. "</b>";
                echo "<p style='color: green;'>Has comprado ". $cantidad. " por ". $precio_total ."€ !!</p><br/>";
            } else {
                echo "<b>". $this->nombre. "</b>";
                echo "<p style='color: red;'>No hay suficiente stock</p><br/>";
            }
        }
    }
?>