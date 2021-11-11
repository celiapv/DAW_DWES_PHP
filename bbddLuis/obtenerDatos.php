<?php

include_once 'conexion2.php';


$sql = "SELECT id, nombre, numero, email FROM participantes";

// OPCIÓN 1
$resultado = $conexion->query($sql);


// OPCIÓN 2
// mysqli no usa búfer
//$resultado = mysqli_query($conexion, $sql);


// OPCIÓN 3
// mysqli usando búfer
//$resultado = mysqli_query($conexion, $sql, MYSQLI_STORE_RESULT);


if ($resultado->num_rows > 0) {
    // se muestra los datos de cada fila
    while($participante = $resultado->fetch_assoc()) {
        echo "Id: " . $participante["id"]. " - Nombre: " . $participante["nombre"]. " - Número: " . $participante["numero"]. " - Email: " . $participante["email"]. "<br>";
    }

} else {
    echo "No hay resultados";
}

$conexion->close();
?>