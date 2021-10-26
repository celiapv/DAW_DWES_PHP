<!doctype html>

<html>

<head>

<meta charset="utf-8"> 

<title>Buscar departamento</title> 

</head> 


<body>

<?php 

include_once 'datos.php';

if(isset($_POST['departamento'])){
    $depart = $_POST['departamento']; 
}

if(isset($_POST['nombre'])){
    $nombre = $_POST['nombre']; 
}

//$depart = strtolower($depart);
$acc = 0;

foreach($datos as $empresa){
    if($empresa['DEPARTAMENTO'] == $depart){
        $acc++;
    }
}

echo "<br>";
echo 'Ese departamento '.$depart.' se encuentra: '.$acc.' veces repetido';

echo "<table class='table'>
    <thead>
        <tr>
            <th>Nombre</th>
            <th>Id</th>
            <th>Departamento</th>
            <th>Empleados</th>
        </tr>
    </thead>
    <tbody>";

    $empleados = 0;

    foreach($datos as $empresa){
        if($empresa['DEPARTAMENTO'] == $depart){
            echo "<tr><td>".$empresa['NOMBRE']."</td>";
            echo "<td>".$empresa['ID']."</td>";
            echo "<td>".$empresa['DEPARTAMENTO']."</td>";
            echo "<td>".$empresa['EMPLEADOS']."</td></tr>";

            $empleados += $empresa['EMPLEADOS'];
        }
    }

    echo "</tbody>
    </table>";

    echo "<br>";
    echo "En el departamento ".$depart." hay ".$empleados." empleados";
    echo "<br>";

    echo "<table class='table'>
    <thead>
        <tr>
            <th>Nombre</th>
            <th>Id</th>
            <th>Departamento</th>
            <th>Empleados</th>
        </tr>
    </thead>
    <tbody>";

    foreach($datos as $empresa){
        if($empresa['NOMBRE'] == $nombre){
            echo "<tr><td>".$empresa['NOMBRE']."</td>";
            echo "<td>".$empresa['ID']."</td>";
            echo "<td>".$empresa['DEPARTAMENTO']."</td>";
            echo "<td>".$empresa['EMPLEADOS']."</td></tr>";

            $empleados += $empresa['EMPLEADOS'];
        }
    }

    echo "</tbody>
    </table>";

    echo "<br>";
    echo "En la empresa ".$nombre." hay ".$empleados." empleados";
    echo "<br>";

?> 

</body> 

</html>