<?php

include_once 'conexion3.php';

$nombre = '';

function obtenerTipoPorId($id){
    $conexion = obtenerConexion();
    $tipo = '';
    
    try {

        $sql = "SELECT * FROM tipoProducto WHERE id=".$id;
        $tipo = $conexion->prepare($sql);
        $tipo->execute();
    
    
    } catch(PDOException $e) {
        echo "Error: " . $e->getMessage();
    }

    return $tipo;
}

function obtenerAllTipos(){

    $conexion = obtenerConexion();
    $tipos = '';
    
    try {

        $sql = "SELECT * FROM tipoProducto";
        $tipos = $conexion->prepare($sql);
        $tipos->execute();
    
    } catch(PDOException $e) {
        echo "Error: " . $e->getMessage();
    }

    return $tipos;
}

function insertarTipo($nombre){
    
    
    $conexion = obtenerConexion();

    try {
        // preparar y vincular parámetros
        $stmt = $conexion->prepare("INSERT INTO tipoProducto (nombre) VALUES (:nombre)");
        $stmt->bindParam(':nombre', $nombre);

        $stmt->execute();
        
        echo "Nuevas filas insertadas correctamente";

    } catch(PDOException $e) {

        echo "Error: " . $e->getMessage();

    }
}
$conexion = null;

?>