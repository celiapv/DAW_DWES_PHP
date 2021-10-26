<?php


if (isset($_POST["nombre"])) {
    $nombre=$_POST["nombre"]; 
}


if (isset($_POST["ciclo"])) {
    $ciclo=$_POST["ciclo"]; 
}


if (isset($_POST["curso"])) {
    $curso=$_POST["curso"]; 
}


if (isset($_POST["info"])) {
    $info=$_POST["info"]; 
}


if (isset($_POST["horario"])) {
    $horario=$_POST["horario"]; 
}


if (isset($_POST["observaciones"])) {
    $observaciones=$_POST["observaciones"]; 
}


echo "DATOS ENVIADOS".'<br>';  

echo  $nombre.'<br>';  
echo  $ciclo.'<br>'; 
echo  $curso.'<br>'; 

foreach($info as $informacion){
    echo $informacion.'<br>';
}

echo  $horario.'<br>'; 
echo  $observaciones.'<br>'; 

?>  