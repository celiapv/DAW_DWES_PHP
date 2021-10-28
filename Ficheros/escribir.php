<?php

//Abrir el archivo

 $archivo = 'claves.txt';
 $abrir = fopen($archivo, 'w');


 //Información de los productos
 // Descripción precio stock
 $producto1 = 'Lavadora industrial-1500-20'.chr(13).chr(10);
 $producto2 = 'Televisión 40 pulgadas-3500-30'.chr(13).chr(10);
 $producto3 = 'Frigorífico  2 m  - 5500 - 10';


 //Enviar información de los productos
 fwrite($abrir, $producto1);
 fwrite($abrir, $producto2);
 fwrite($abrir, $producto3);


//Cerrar el archivo
 fclose($abrir);

?>