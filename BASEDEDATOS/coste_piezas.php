<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GET DATA FROM A DATABASE</title>
  </head>
  <body>
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
        $query="select i.unidades*c.PrecioReferencia coste, r.matricula, v.marca, v.modelo from reparaciones r
        join vehiculos v on v.matricula=r.matricula
        join incluyen i on r.idreparacion=i.idreparacion
        join recambios c on c.idrecambio=i.idrecambio 
        where r.matricula='".$_GET['cod']."'
        group by r.matricula";
      echo $query;
      if ($result = $connection->query($query)) {

          printf("<p>The select query returned %d rows.</p>", $result->num_rows);

      ?>

          <!-- PRINT THE TABLE AND THE HEADER -->
          

      <?php

          //FETCHING OBJECTS FROM THE RESULT SET
          //THE LOOP CONTINUES WHILE WE HAVE ANY OBJECT (Query Row) LEFT
          while($obj = $result->fetch_object()) {
              //PRINTING EACH ROW
             echo "El coste en piezas para reparar el coche ".$obj->matricula.", ".$obj->modelo." y ".$obj->marca." es: ".$obj->coste;
          }

          
          //Free the result. Avoid High Memory Usages
          $result->close();
          unset($obj);
          unset($connection);

      } //END OF THE IF CHECKING IF THE QUERY WAS RIGHT

    ?>
  </body>
</html>
