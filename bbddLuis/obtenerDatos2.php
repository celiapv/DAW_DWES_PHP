<?php

include_once 'conexion3.php';

try {

    // Establecemos el modo de error de PDO para que salten excepciones
    $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql = "SELECT id, nombre, numero, email FROM participantes";

    
    $result = $conexion->query($sql);

    //OPCION 1
    foreach($result as $row){

        //OPCION 2
        //while ($row = $result->fetch(PDO::FETCH_ASSOC)){

        echo "Id: " . $row["id"]. " - Nombre: " . $row["nombre"]. " - Número: " .   $row["numero"]. " - Email: " . $row["email"]. "         <br>";
        echo "<br/>";
    }



} catch(PDOException $e) {
    echo "Error: " . $e->getMessage();

}

$conexion = null;

?>