<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GET DATA FROM A DATABASE</title>
  </head>
  <body>
          <!-- PRINT THE TABLE AND THE HEADER -->
          <?php if (!isset($_POST["codcliente"])) : ?>
     
      <form method="post">
        <fieldset>
            <legend>Insertar cliente</legend>
            <span>CodCliente: </span><input type="text" maxlength="5" name="codcliente" required><p>
            <span>Nombre: </span><input type="text" name="nombre" required><p>
            <span>Apellidos: </span><input type="text" name="apellidos"><p>
            <span>Direccion: </span><input type="text" name="direccion"><p>
            <span>Telefono: </span><input type="text" name="telefono"><p>
            <span>DNI: </span><input type="text" maxlength="9" name="dni">

            <input type="submit" value="Crear cliente">
        </fieldset>
       </form>

      <?php else: ?>
      <?php
        //CREATING THE CONNECTION
       $connection = new mysqli("localhost", "tf", "123456", "tf");
       $connection->set_charset("uft8");

        //TESTING IF THE CONNECTION WAS RIGHT
       if ($connection->connect_errno) {
           printf("Connection failed: %s\n", $connection->connect_error);
          exit();
       }

      //MAKING A SELECT QUERY
      /* Consultas de selección que devuelven un conjunto de resultados */
      
            $query="insert into clientes values ('".$_POST['codcliente']."','".$_POST['dni']."','".$_POST['apellidos']."','".$_POST['nombre']."','".$_POST['direccion']."','".$_POST['telefono']."')";
            if ($result = $connection->query($query)) {
                echo "Se ha insertado el cliente correctamente";
            }
          
    ?>
    <?php endif ?>

  </body>
</html>