<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GET DATA FROM A DATABASE</title>
  </head>
  <body>
          <!-- PRINT THE TABLE AND THE HEADER -->
          <?php if (!isset($_POST["ciudad"])) : ?>
     
      <form method="post">
        <fieldset>
            <legend>CIUDAD</legend>
            <span>Ciudad: </span><input type="text" name="ciudad" required>
            <input type="submit" value="Buscar">
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
      
            $query="select * from clientes where Direccion like '%".$_POST['ciudad']."' order by Nombre";
            if ($result = $connection->query($query)) {
              if ($result->num_rows==0) {
                echo "Ningún cliente de la ciudad: ".$_POST['ciudad'];
              }
               else{
                printf("<p>The select query returned %d rows.</p>", $result->num_rows);

                 while($obj = $result->fetch_object()) {
                    echo "<li>".$obj->Nombre.' '.$obj->Apellidos."</li>";
                    }
               }
            }
             else{
              echo "Error de consulta";
             }
           //Free the result. Avoid High Memory Usages
           $result->close();
           unset($obj);
           unset($connection);
             
    ?>
    <?php endif ?>

  </body>
</html>