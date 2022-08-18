<?php

        $bd = 'mysql:host=localhost;dbname=grooming';
        $user = 'root';
        $pass = '';

        try {
        $conn = new PDO($bd, $user, $pass);
                echo 'listo!';
        }catch (PDOException $e) {
        print "¡Error!: " . $e ->getMessage() . "<br/>";
        die('La conexión falló');
        }