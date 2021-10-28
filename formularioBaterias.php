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
    $codigo = 0;
    $marca = "";
    $carga = 0;
    $capacidad = 0;
    $ciclos = 0;

    $tipos = array(
        array("id" => 1,"nombre"=>"Tipo 1"),
        array("id" => 2,"nombre"=>"Tipo 2"),
        array("id" => 3,"nombre"=>"Tipo 3"),
        array("id" => 4,"nombre"=>"Tipo 4")
    );

    $baterias;

    if(isset($_POST['codigo'])){
        $codigo = $_POST['codigo'];
    }

    if(isset($_POST['marca'])){
        $marca = $_POST['marca'];
    }

    if(isset($_POST['carga'])){
        $carga = $_POST['carga'];
    }

    if(isset($_POST['capacidad'])){
        $capacidad = $_POST['capacidad'];
    }

    if(isset($_POST['ciclos'])){
        $ciclos = $_POST['ciclos'];
    }

    if(isset($_POST['tipo'])){
        $tipoId = $_POST['tipo'];
    }

    array_push($baterias, array("id" => $codigo, "marca" => $marca));

    print_r($baterias);
?>

 <body>

<div class="container">

<form action="formularioBaterias.php" method="post">  

<p>Código: <input type="text" name="codigo" value="<?php echo $codigo?>"/></p>
    <p>Tipo:
        <?php
            echo "<select name = 'tipo'>";
            
            foreach($tipos as $tipo){
                $seleccion = "";
                if($tipo['id'] == $tipoId){ 
                    $seleccion = "selected";
                }
                echo "<option value = '".$tipo['id']."' ".$seleccion.">".$tipo['nombre']."</option>";
            }
            echo "</select>";
        ?>
    </p>

    <p>Marca: <input type="text" name="marca" value="<?php echo $marca?>"/></p>
    <p>Carga: <input type="text" name="carga" value="<?php echo $carga?>"/> %</p>
    <p>Capacidad: <input type="text" name="capacidad" value="<?php echo $capacidad?>"/> mA</p>
    <p>Ciclos de vida: <input type="text" name="ciclos" value="<?php echo $ciclos?>"/></p>

    <p><input type="submit" value="tabla" name="tabla"></p>

</form>
</body>
</html>