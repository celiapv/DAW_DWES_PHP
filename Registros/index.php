<!DOCTYPE html>

<html>

 <head>

 <meta charset="UTF-8">

  <meta name="viewport" content="width=device-width, initial-scale=1">

 <title>Formulario</title>


 </head>
<?php
    function escribirRegistro(){
        //Abrir el archivo
        $archivo = 'registros.txt';
        $abrir = fopen($archivo, 'a');

        $linea = "Registro realizado el: ".date("d/m/Y - G:i:s");

        //Enviar información de los productos
        fwrite($abrir, $linea.PHP_EOL);

        //Cerrar el archivo
        fclose($abrir);
    }

    escribirRegistro();
?>

 <body>

<div class="container">

<form action="index.php" method="post">  

    <p><input type="submit" value="Registro" name="registro"></p>

</form>
</body>
</html>