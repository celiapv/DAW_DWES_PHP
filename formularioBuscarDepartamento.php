<!DOCTYPE html>

<html>

 <head>

 <meta charset="UTF-8">

  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

 <title>Formulario</title>


 </head>
 <?php 

include_once 'datos.php';

//Crear array de departamentos de manera unica
$departamentos = array();
$nombres = array();
//Recorrer el array de empresas
foreach($datos as $empresa){
    
    //Por cada empresa pregunto si el array departamento contiene 
    //el departamento de la empresa
    //Si no lo contiene se añade
    if(!in_array($empresa['DEPARTAMENTO'], $departamentos)){
        array_push($departamentos, $empresa['DEPARTAMENTO']);
    }

    if(!in_array($empresa['NOMBRE'], $nombres)){
        array_push($nombres, $empresa['NOMBRE']);
    }
}//Fin del foreach de empresas

//print_r($departamentos);


?>

 <body>

<div class="container">

<form action="busquedaDepartamento.php" method="post">  


    <p>Departamento:
        <?php
            echo "<select name = 'departamento'>";
            foreach($departamentos as $departamento){
                echo "<option value = '".$departamento."'>".$departamento."</option>";
            }
            echo "</select>";
        ?>
    </p>

    <p>Nombre:
        <?php
            echo "<select name = 'nombre'>";
            foreach($nombres as $nombre){
                echo "<option value = '".$nombre."'>".$nombre."</option>";
            }
            echo "</select>";
        ?>
    </p>


    <p><input type="submit" value="Enviar" name="B1"></p>

</form>
</body>
</html>