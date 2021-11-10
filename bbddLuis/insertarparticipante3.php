<?php

include_once 'datosconexionBD.php';


try {

    $con = new PDO("mysql:host=".SERVIDOR.";dbname=".BBDD, USUARIO, CLAVE);
    // Establecemos el modo de error de PDO para que salten excepciones
    $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // preparar y vincular parámetros

    $stmt = $con->prepare("INSERT INTO participantes (nombre, numero,email ) VALUES (:nombre,:numero,:email)");
     $stmt->bindParam(':nombre', $nombre);
     $stmt->bindParam(':numero', $numero);
     $stmt->bindParam(':email', $email);
   

     $stmt2 = $con->prepare("INSERT INTO participantes (nombre,numero,email ) VALUES (?,?,?)");
     $stmt2->bindParam(1, $nombre );
     $stmt2->bindParam(2, $numero );
     $stmt2->bindParam(3, $email );

     // establecemos los parámetros y ejecutamos para insertar

    $nombre = "José";
    $numero=4;
    $email = "jose@gmail.com";
    $stmt->execute();
    
    $nombre = "María";
    $numero=7;
    $email = "maria@gmail.com";
    $stmt->execute();
    
    $nombre = "Julia";
    $numero=8;
    $email = "julia@gmail.com";
    $stmt->execute();
    
    echo "Nuevas filas insertadas correctamente";

} catch(PDOException $e) {

    echo "Error: " . $e->getMessage();

}

$con = null;

?>