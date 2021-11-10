<?php

include_once 'datosconexionBD.php';

$nombre='';
$marca=-1;
$caducidad='';
$stock = 0;
$lacteo = 0;
$cereal = 0;
$proteina = 0;

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
if(isset($_POST["lacteo"])){
    $lacteo = $_POST["lacteo"];
}
if(isset($_POST["cereal"])){
    $cereal = $_POST["cereal"];
}
if(isset($_POST["proteina"])){
    $proteina = $_POST["proteina"];
}

try {

    $con = new PDO("mysql:host=".SERVIDOR.";dbname=".BBDD, USUARIO, CLAVE);
    // Establecemos el modo de error de PDO para que salten excepciones
    $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // preparar y vincular parámetros
     $stmt = $con->prepare("INSERT INTO productos (nombre,marca,caducidad,stock,lacteo,cereal,proteina) VALUES (:nombre, :marca, :caducidad, :stock, :lacteo, :cereal, :proteina)");
     $stmt->bindParam(':nombre', $nombre);
     $stmt->bindParam(':marca', $marca);
     $stmt->bindParam(':caducidad', $caducidad);
     $stmt->bindParam(':stock', $stock);
     $stmt->bindParam(':lacteo', $lacteo);
     $stmt->bindParam(':cereal', $cereal);
     $stmt->bindParam(':proteina', $proteina);

    $stmt->execute();
    
    echo "Nuevas filas insertadas correctamente";

} catch(PDOException $e) {

    echo "Error: " . $e->getMessage();

}

$con = null;

?>