<!DOCTYPE html>

<html>

 <head>

 <meta charset="UTF-8">

  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

 <title>Formulario</title>


 </head>

 <body>

<div class="container">

<form action="productosDAO.php" method="post">  


    <p> Nombre: <input type="text" name="nombre"/></p>

    <p>  
        Marca 1 <input type="radio" name="marca" value="1">

        Marca 2 <input type="radio" name="marca" value="2">

        Marca 3 <input type="radio" name="marca" value="3">
    </p>

    <p> Fecha caducidad: <input type="date" name="caducidad"/></p>
    <p> Stock: <input type="number" name="stock"/></p>

    <p>  
        Lácteo <input type="checkbox" name="lacteo" value="1">

        Cereal <input type="checkbox" name="cereal" value="1">

        Proteina <input type="checkbox" name="proteina" value="1">

    </p>

    <p><input type="submit" value="Enviar" name="B1"></p>

</form>
</body>
</html>