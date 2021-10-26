<!DOCTYPE html>

<html>

 <head>

 <meta charset="UTF-8">

  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

 <title>Formulario Salario</title>


 </head>

 <body>

<?php

    $precio = 0;
    $cantidad = 0;
    $total = 0;
    $idProducto = "";
    $precioProducto = 0;
    $idCuota = 0;

    if(isset($_POST['precio'])){
        $precio = $_POST['precio'];
    }

    if(isset($_POST['cantidad'])){
        $cantidad = $_POST['cantidad'];
    }

    if(isset($_POST['categoria'])){
        $idCategoria = $_POST['categoria'];
    }

    if(isset($_POST['total'])){
        $total = $_POST['total'];
    }

    if(isset($_POST['cuotas'])){
        $idCuota = $_POST['cuotas'];
    }

    $productos = array(

        array("id" => 1,"producto"=>"Lavadora", "precio"=>200),
        
        array("id" => 2,"producto"=>"Frigorifico", "precio"=>350),
        
        array("id" => 3,"producto"=>"Lavavajillas", "precio"=>150),

        array("id" => 4,"producto"=>"Tostadora", "precio"=>20)
    );  
    

?>

<div class="container">

<form action="formularioVentaProducto.php" method="post">  
    <p><h1>VENTA PRODUCTOS</h1></p>    
    <p>  

        Producto
            <select name="categoria" size="1">
                <?php
                    echo "<option value='0'>Producto</option>";
                    foreach($productos as $producto){
                        $seleccion = "";
                        if($idCategoria == $producto['id']){
                            $seleccion = "selected";
                            $precioProducto = $producto['precio'];
                            $total = $precioProducto * $cantidad;
                        }
                        echo "<option value='".$producto['id']."' ".$seleccion.">".$producto['producto']."</option>";
                    }
                ?>         
            </select>
        </p>

    <p> Precio: <input type="text" name="precio" value="<?php echo $precioProducto?>"/></p>
    <p> Cantidad: <input type="text" name="cantidad" value="<?php echo $cantidad?>"/></p>
    <p> Total: <input type="text" name="total" value="<?php echo $total?>"/></p>

    <p>  
        Cuotas
            <select name="cuotas" size="1">
                <?php
                    for($i = 1; $i <= 12; $i++){
                        $seleccion = "";
                        if($idCuota == $i){
                            $seleccion = "selected";
                        }
                        echo "<option value='".$i."' ".$seleccion.">".$i."</option>";
                    }
                ?>         
            </select>
    </p>

    <p>
        <?php
            echo "<table class='table'>
            <thead>
                <tr>
                    <th>Nº letras</th>
                    <th>Monto</th>
                </tr>
            </thead>
            <tbody>";

            for($i = 1; $i <= $idCuota; $i++){
                echo "<tr><td>".$i."</td>";
                echo "<td>".$total/$idCuota."</td></tr>";
            }

            echo "</tbody>
            </table>";

        ?>

    </p>

    <?php
        if($precioProducto == 0){
            echo '<p><input type="submit" value="Obtener precio"></p>';
        }

        if($precioProducto > 0 && $total == 0){
            echo "<p><input type='submit' value='Calcular'></p>";
        }

        if($total > 0){
            echo "<p><input type='submit' value='Calcular financiacion'></p>";
        }
    ?>
    
</form>
</body>
</html>