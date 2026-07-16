<?php
    // define variables and set to empty values
    $name = $email = $dni = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nombre = test_input($_POST["nombre"]);
        $email = test_input($_POST["email"]);
        $dni = test_input($_POST["dni"]);
        }

        function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    // define variables and set to empty values
    $nombreErr = $emailErr = $dniErr = "";


    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (empty($_POST["nombre"])) {
            $nameErr = "<p style='color: red;'>* [ERROR] No deje el NOMBRE vacío</p>";
            echo $nameErr;
        } else {
            $name = test_input($_POST["nombre"]);
        }

        if (empty($_POST["email"])) {
            $emailErr = "<p style='color: red;'>* [ERROR] No deje el EMAIL vacío</p>";
            echo $emailErr;
        } else {
            $email = test_input($_POST["email"]);
        }
        
        if (empty($_POST["dni"])) {
            $dniErr = "<p style='color: red;'>* [ERROR] No deje el DNI vacío</p>";
            echo $dniErr;
        } else {
            $website = test_input($_POST["dni"]);
        }
    }
?>