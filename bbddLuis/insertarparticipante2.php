<?php

include_once 'datosconexionBD.php';


// Crear una conexion
// En la conexión, indicamos la base de datos que queremos utilizar.
$con = mysqli_connect(SERVIDOR, USUARIO, CLAVE, BBDD);
// Comprobar la conexión
if (!$con) {
 die("Error en la conexión: " . mysqli_connect_error());
}
// preparar y vincular
$stmt = $con->prepare("INSERT INTO participantes (nombre,numero,email ) VALUES (?,?,?)");
$stmt->bind_param("sis", $nombre, $numero,$email);

// establecemos los parámetros y ejecutamos

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

echo "Las filas se han insertado correctamente";


$stmt->close();

$con->close();

?>