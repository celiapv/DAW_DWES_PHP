<!doctype html>

<html>

<head>

<meta charset="utf-8"> 

<title>Sumar GET</title> 

</head> 


<body>

<?php 

if(isset($_POST['T1'])){
    $valor1 = $_POST['T1']; 
}
if(isset($_POST['T2'])){
    $valor2 = $_POST['T2']; 
}
if(isset($_POST['T3'])){
    $valor3 = $_POST['T3']; 
}


$suma = $valor1 + $valor2 + $valor3;

echo "$valor1 + $valor2 + $valor3 = $suma"; 

?> 

</body> 

</html>