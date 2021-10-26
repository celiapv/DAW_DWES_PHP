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
    include ("encabezado.php");
   
    $cantidad = 0;
    $total = 0;
    $subtotal = 0;
    $cliente = "";

    $comidas = array(

        array("id" => 1,"comida"=>"Ensalada", "precio"=>7),
        
        array("id" => 2,"comida"=>"Hamburguesa", "precio"=>13),
        
        array("id" => 3,"comida"=>"Bocadillo", "precio"=>4),

        array("id" => 4,"comida"=>"Sandwich", "precio"=>3),

        array("id" => 5,"comida"=>"Migas extremeñas", "precio"=>20)
    );

    $cantidades = array();
    //Comprobamos que haya campos con elementos
    foreach($comidas as $comida){
        if(isset($_POST['cantidad_'.$comida['id']])){
            //array_push($cantidades, $_POST['cantidad_'.$comida['id']]);

            //array con las cantidades de todos los productos usando el id del producto
            $cantidades[$comida["id"]] = $_POST['cantidad_'.$comida['id']];

            $datos = array();
            $cantidad = $_POST['cantidad_'.$comida['id']];
            $datos['cantidad'] = $cantidad;
            $datos['precioP'] = $cantidad * (int)$comida['precio'];
            $cantidades[$comida['id']] = $datos;
        }
    }
    

    if(isset($_POST['cliente'])){
        $cliente = $_POST['cliente'];
    }

    if(isset($_POST['total'])){
        $total = $_POST['total'];
    }

    if(isset($_POST['subtotal'])){
        $subtotal = $_POST['subtotal'];
    }

?>

<div class="container">

<form action="formularioComidaParaLlevar.php" method="post">  
    
    <table class="table">
        <tbody>
            <tr>
                <th>Cliente</th>
                <th><input type="text" name="cliente" value="<?php echo $cliente?>"/></th>
            </tr>
            <tr>
                <th>Lista de productos</th>
                <th>Cantidad</th>
                <th>Precio €</th>
                <th>Subtotal</th>
            </tr>
            
            <?php
                $total = 0;

                foreach($comidas as $comida){
                    echo "<tr><td>".$comida["comida"]."</td>";
                    echo '<td><input type="text" name="cantidad_'.$comida["id"].'" value='.$cantidades[$comida['id']]['cantidad'].'></td>';
                    echo "<td>".$comida["precio"]."</td>";
                    echo "<td>".$cantidades[$comida['id']]['precioP']."</td></tr>";
                    $total += $cantidades[$comida['id']]['precioP'];
                }
            ?>
            
        </tbody>
    </table>
    <?php echo"Precio total: " .$total;?>
    <p><p><input type='submit' value='Finalizar Venta'></p></p>
      

    <?php include ("pie.php"); ?>
</form>
</body>
</html>