<!DOCTYPE html>

<html>

 <head>

 <meta charset="UTF-8">

  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

 <title>Formulario Notas</title>


 </head>

 <body>

<?php
    

    $notas = array(

        array("id" => 1,"nombre"=>"Antonio", "promedio"=>array(5,6,9,9)),
        
        array("id" => 2,"nombre"=>"Celia", "promedio"=>array(1,4,3,6)),
        
        array("id" => 3,"nombre"=>"Andrea", "promedio"=>array(6,6,9,8)),

        array("id" => 4,"nombre"=>"Felipe", "promedio"=>array(4,5,6,4)),

        array("id" => 5,"nombre"=>"Mario", "promedio"=>array(10,10,9,9)),

        array("id" => 6,"nombre"=>"Lucía", "promedio"=>array(5,6,5,8)),

        array("id" => 7,"nombre"=>"María", "promedio"=>array(6,3,4,7)),

        array("id" => 8,"nombre"=>"Jose", "promedio"=>array(0,3,3,1))
    );

?>

<div class="container">

<form action="formularioNotas.php" method="post">  
    
    <table class="table">
        <tbody>
            <tr>
                <th>Nº Orden</th>
                <th>Alumno</th>
                <th>Promedio</th>
            </tr>
            
            <?php
                $totalAlumn = 0;
                $totalAprob = 0;
                $totalSus = 0;
                $mejorNota = 0;
                $peorNota = 10;
                $mejorAlumno;
                $peorAlum;
                $promAlum = 0;

                foreach($notas as $nota){
                    $totalAlumn++;

                    
                    foreach($nota["promedio"] as $promedio){
                        $promAlum += $promedio;
                    }

                    $promAlum = round($promAlum/count($nota["promedio"]), 0, PHP_ROUND_HALF_DOWN);

                    echo "<tr><td>".$nota["id"]."</td>";
                    echo "<td>".$nota["nombre"]."</td>";
                    echo "<td>".$promAlum."</td></tr>";

                    if($promAlum >= 5){
                        $totalAprob++;
                    }
                    else{
                        $totalSus++;
                    }

                    if($promAlum > $mejorNota){
                        $mejorNota = $nota["promedio"];
                        $mejorAlumno = $nota;
                    }

                    if($promAlum <= $peorNota){
                        $peorNota = $nota["promedio"];
                        $peorAlum = $nota;
                    }
                }
            ?>
            
        </tbody>
    </table>

    <p><p><input type='submit' value='Mostrar resumen'></p></p>
    
    <table class="table">
        <tbody>
            <tr>
                <th>Total de alumnos</th>
                <th>Total de aprobados</th>
                <th>Total desaprobados</th>
            </tr>
            
            <?php
                echo "<tr><td>".$totalAlumn."</td>";
                echo "<td>".$totalAprob."</td>";
                echo "<td>".$totalSus."</td></tr>";
            ?>
            
        </tbody>
    </table>

    <table class="table">
        <tbody>
            <tr>
                <th>Alumno con mayor promedio</th>
                <th>Alumno con menor promedio</th>
            </tr>
            
            <?php
                echo "<tr><td>".$mejorAlumno["nombre"]."</td>";
                echo "<td>".$peorAlum["nombre"]."</td></tr>";
            ?>
            
        </tbody>
    </table>

</form>
</body>
</html>