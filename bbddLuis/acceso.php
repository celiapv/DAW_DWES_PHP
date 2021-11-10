<?php

include_once 'conexion.php';
$config = parse_ini_file('datosconexionBD.ini');

obtenerConexionMysql($config);

obtenerConexionPDO();


?>