<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <?php
            class Usuario{

                private $nombre;
                private $email;
                private $password;

                public function __construct($nom,$correo,$pswd) {
                    $this->nombre=$nom;
                    $this->email=$correo;
                    $this->password=$pswd;
                }

                public function saludar() {
                    return "Hola, soy ". $this->nombre. " y mi email es ". $this->email. ".";
                }

                public function getNombre() {
                    return $this->nombre;
                }

                public function getEmail() {
                    return $this->email;
                }

                public function setNombre() {
                    $this->nombre=$nom;
                }

                public function setEmail() {
                    $this->email=$correo;
                }
            }
        ?>        
    </body>
</html>