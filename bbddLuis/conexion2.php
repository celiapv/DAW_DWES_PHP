<?php

//Obtener la conexion con mysqli
$config= parse_ini_file('datosconexionBD.ini');
$conexion=mysqli_connect( $config['host'],$config['username'],$config['password'],$config['dbname']) or die("Problemas con la conexión a la base de datos:".mysqli_connect_error()) ;

// Comprobar la conexión
if (!$conexion) {
  die("Error en la conexión: " . mysqli_connect_error());
}

?>