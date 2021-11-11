<?php

include_once 'conexion3.php';

$nombre='';
$marca=-1;
$caducidad='';
$stock = 0;
$lacteo = 0;
$cereal = 0;
$proteina = 0;
$proveedor = '';

if (isset($_POST["nombre"])) {
    $nombre=$_POST["nombre"]; 
}
if (isset($_POST["marca"])) {
    $marca=$_POST["marca"]; 
}
if (isset($_POST["caducidad"])) {
    $caducidad=$_POST["caducidad"]; 
}
if (isset($_POST["stock"])) {
    $stock=$_POST["stock"]; 
}
if(isset($_POST["tipo"])){
    $tipo = $_POST["tipo"];
}
if(isset($_POST["proveedor"])){
    $proveedor = $_POST["proveedor"];
}


function obtenerProductoPorId($id){
    $conexion = obtenerConexion();
    $producto = '';
    
    try {

        $sql = "SELECT * FROM productos WHERE id=".$id;
        $producto = $conexion->prepare($sql);
        $producto->execute();
    
    
    } catch(PDOException $e) {
        echo "Error: " . $e->getMessage();
    }

    return $producto;
}

function obtenerAllProductos(){

    $conexion = obtenerConexion();
    $productos = '';
    
    try {

        $sql = "SELECT * FROM productos";
        $productos = $conexion->prepare($sql);
        $productos->execute();
    
        //OPCIÓN 1 
        foreach($productos as $row){
            echo $row['id'] . " " . $row['nombre']. " " . $row['numero'] ." " . $row['email'] ;
            echo "<br/>";
        }
    
    } catch(PDOException $e) {
        echo "Error: " . $e->getMessage();
    }

    return $productos;
}

function insertarProducto(){
    

    $conexion = obtenerConexion();

    try {
        // preparar y vincular parámetros
        $stmt = $conexion->prepare("INSERT INTO productos (nombre,marca,caducidad,stock,tipo, proveedor) VALUES (:nombre, :marca, :caducidad, :stock, :tipo, :proveedor)");
        $stmt->bindParam(':nombre', $nombre);
        $stmt->bindParam(':marca', $marca);
        $stmt->bindParam(':caducidad', $caducidad);
        $stmt->bindParam(':stock', $stock);
        $stmt->bindParam(':tipo', $tipo);
        $stmt->bindParam(':proveedor', $proveedor);

        $stmt->execute();
        
        echo "Nuevas filas insertadas correctamente";

    } catch(PDOException $e) {

        echo "Error: " . $e->getMessage();

    }
}
$conexion = null;

?>