<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  
    <?php
        echo "<h2>Aplicacion DAW</h2>";
        $usuario = "Celia";
        $curso = "2º DAW";
    ?>

    
  <p>Usuario: <?php echo $usuario.' - '.$curso; 

  echo "<br>";

  $valores = [10, 20, 30];
  $cuotas = ['Enero'=>10, 'Marzo'=>20, 'Abril'=>30];

  print_r($valores);
  echo "<br>";
  print_r($cuotas);
  echo "<br>";

    for($i = 0; $i < 3; $i++){
        echo $valores[$i].' ';
    }
   echo "<br>";
   echo "Valor de Enero: ".$cuotas["Enero"]; 

   $array = [['Juan', 10, 15],

   ['Ana', 20, 30],

   ['Marcos', 200, 300]];



// Mostramos mensaje con el índice de cada  array y los valores que contiene
$html = '<table class="table">
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
            $html.= "<tr>";

            for($x=0; $x<count($array[$i]); $x++) {
                $html.= '<td>'.$array[$i][$x].'</td>';
            }//Fin segundo for
            $html.= '<td><a href="#" class="btn btn-info" role="button">Editar</a></td>';
            $html.= '<td><a href="#" class="btn btn-danger" role="button">Eliminar</a></td>';
            $html.= "</tr>";
        } //Fin primer for

        $html.= "</tbody>
</table>";

echo $html;
echo $html;
  ?> </p> 

</div>

</body>

