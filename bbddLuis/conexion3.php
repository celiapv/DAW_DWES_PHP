<?php
function obtenerConexion(){


$config= parse_ini_file('datosconexionBD.ini');



       /* Intentamos establecer una conexión con el servidor.*/
       try {
     
         $conexion  = new PDO("mysql:host=".$config['host'].";dbname=" .$config['dbname'].";charset=utf8", $config['username'], $config['password']);
         
           /* Establecemos atributos para configurar la conexión PDO*/
           $conexion ->setAttribute(PDO::MYSQL_ATTR_USE_BUFFERED_QUERY, true);
           $conexion ->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

           return $conexion;
           
           echo "<p>Conexión realizada con PDO";
           

       } catch (PDOException $e) {

           die ("<p><H3>No se ha podido establecer la conexión.
                 <p>Compruebe si está activado el servidor de bases dedatos MySQL.</H3></p>\n <p>Error: ". $e->getMessage()."</p>\n");
           exit();

       } // end try

   
      }

?>