<?php

 //Definición del nombre del archivo
 $archivo = "formatos.txt";

 //Verificando la existencia del archivo
 if (!file_exists($archivo)){

    echo 'Archivo NO existe..!!';

 }else{

    if(filesize($archivo) > 0){
        //Abriendo en forma de lectura
        $abrir = fopen($archivo, "r");

        //Obtener el contenido a partir de la lectura
        $contenido = fread($abrir, filesize($archivo));

        //Cerrando el archivo
        fclose($abrir);
        
        //Imprimir el contenido del archivo
        echo $contenido;
    }
    else{
        echo "El fichero esta vacio";
    }
 }

?>