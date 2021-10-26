<?php
    include_once("cabecera.php");
?>

<body>

<div class="container">
  
<?php
        $usuario = "Celia";
        $curso = "2º DAW";

        include_once("menu.php");
    ?>

    
  <p>Usuario: <?php echo $usuario.' - '.$curso; 

  echo "<br>";

  $cuotas = ['Enero'=>10, 'Marzo'=>20, 'Abril'=>30];


   $array = [['Juan', 10, 15],

   ['Ana', 20, 30],

   ['Marcos', 200, 300]];



// Mostramos mensaje con el índice de cada  array y los valores que contiene
echo '<table class="table">
    <thead>
        <tr>
            <th>Alumno</th>
            <th>Cuota 1</th>
            <th>Cuota 2</th>
            <th></th>
            <th></th>
        </tr>
    </thead>
    <tbody>';

        for($i=0; $i<count($array); $i++) {
            echo "<tr>";

            for($x=0; $x<count($array[$i]); $x++) {
                echo '<td>';
                echo $array[$i][$x];
                echo '</td>';
            }//Fin segundo for
            echo '<td><a href="#" class="btn btn-info" role="button">Editar</a></td>';
            echo '<td><a href="#" class="btn btn-danger" role="button">Eliminar</a></td>';
            echo "</tr>";
        } //Fin primer for

echo "</tbody>
</table>";

  ?> </p> 

</div>

</body>

