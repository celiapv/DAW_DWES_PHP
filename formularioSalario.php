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

    $empleado = "";
    $horas = "";
    $valor_hora_categoria = "";
    $irpf = "";
    $jornada = "";
    $horasJornada = "";

    if(isset($_POST['empleado'])){
        $empleado = $_POST['empleado'];
    }

    if(isset($_POST['horas'])){
        $horas = $_POST['horas'];
    }

    if(isset($_POST['categoria'])){
        $idCategoria = $_POST['categoria'];
    }

    if(isset($_POST['irpf'])){
        $irpf = $_POST['irpf'] * 0.01;
    }

    if(isset($_POST['jornada'])){
        $jornada = $_POST['jornada'];
    }

    $categorias = array(

        array("id" => 1,"nombre"=>"Jefe", "valor"=>50, "valorExtra"=>60),
        
        array("id" => 2,"nombre"=>"Administrativo", "valor"=>30, "valorExtra"=>40),
        
        array("id" => 3,"nombre"=>"Operario", "valor"=>15, "valorExtra"=>25),

        array("id" => 4,"nombre"=>"Becario", "valor"=>6, "valorExtra"=>10)
    );  
    

    function calcularHorasExtra($horas, $horasJornada){
        return $horasExtra = $horas - $horasJornada;
    }

    function calcularBruto($horasJornada, $valor, $horasExtra, $valorExtra){
        return $bruto = $horasJornada * $valor + $horasExtra * $valorExtra;
    }
?>

<div class="container">

<form action="formularioSalario.php" method="post">  


    <p> Empleado: <input type="text" name="empleado" value="<?php echo $empleado?>"/></p>
    <p> Horas: <input type="text" name="horas" value="<?php echo $horas?>"/></p>
    <p> IRPF: <input type="text" name="irpf" value="<?php echo $irpf?>"/></p>
    <p>  
        Jornada completa<input type="radio" name="jornada" value="1">

        Jornada parcial<input type="radio" name="jornada" value="2">
    </p>

    <p>  

        Categoría

        <select name="categoria" size="1">
        <?php
            $bruto = "0.00";
            $descuento = "0.00";
            $neto = "0.00";
            foreach($categorias as $categoria){
                $seleccion = "";
                if($idCategoria == $categoria['id']){
                    $seleccion = "selected";

                    if($jornada == 1){
                        $horasJornada = 40;
                    }
                    else{
                        $horasJornada = 20;
                    }

                    if($horas > $horasJornada){
                        $horasExtra= calcularHorasExtra($horas, $horasJornada);
                        $bruto= calcularBruto($horasJornada,$categoria['valor'], $horasExtra,$categoria['valorExtra']);
                    }
                    else{
                        $bruto = $categoria['valor']*$horas;
                    }
                    
                    if($irpf != ""){
                        $descuento = $bruto*$irpf;
                    }
                    $neto = $bruto - $descuento;
                }
                echo "<option value='".$categoria['id']."' ".$seleccion.">".$categoria['nombre']."</option>";
            }
        ?>         
        </select>

    </p>
    
    <?php
        //Otra manera
        /**echo "<p>Salario bruto ";
        if($horas != ""){
            $bruto = calcularBruto($horas, $valorHora);
            echo $bruto."€</p>";
        }
        echo "<p>Descuento ";
        if($horas != ""){
            $descuento = calcularDescuento($bruto, $porcentajeDescuento);
            echo $descuento."€</p>";
        }
        echo "<p>Salario neto ";
        if($horas != ""){
            echo $neto."€</p>";
        }*/

        //Mi manera
        echo "<p>Salario bruto <label>".$bruto."€</label></p>";
        echo "<p>Descuento <label>".$descuento."€</label></p>";
        echo "<p>Salario neto <label>".$neto."€</label></p>";
    ?>
    

    <p><input type="submit" value="Calcular"></p>
    <p><input type="submit" value="Limpiar"></p>

</form>
</body>
</html>