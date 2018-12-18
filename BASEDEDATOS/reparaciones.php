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
        $query="SELECT * from reparaciones";
      if ($result = $connection->query($query)) {

          printf("<p>The select query returned %d rows.</p>", $result->num_rows);

      ?>

          <!-- PRINT THE TABLE AND THE HEADER -->
          <table style="border:1px solid black">
          <thead>
            <tr>
              <th>IdReparacion</th>
              <th>Matrícula</th>
              <th>FechaEntrada</th>
              <th>Km</th>
              <th>Averia</th>
              <th>FechaSalida</th>
              <th>Reparado</th>
              <th>Observaciones</th>
          </thead>

      <?php

          //FETCHING OBJECTS FROM THE RESULT SET
          //THE LOOP CONTINUES WHILE WE HAVE ANY OBJECT (Query Row) LEFT
          while($obj = $result->fetch_object()) {
              //PRINTING EACH ROW
              echo "<tr>";
                echo "<td>".$obj->IdReparacion."</td>";
                echo "<td><a href='coste_piezas.php?cod=$obj->Matricula'>$obj->Matricula</a></td>";
                echo "<td>".$obj->FechaEntrada."</td>";
                echo "<td>".$obj->Km."</td>";
                echo "<td>".$obj->Averia."</td>";
                echo "<td>".$obj->FechaSalida."</td>";
                echo "<td>".$obj->Reparado."</td>";
                echo "<td>".$obj->Observaciones."</td>";
              echo "</tr>";
          }

          
          //Free the result. Avoid High Memory Usages
          $result->close();
          unset($obj);
          unset($connection);

      } //END OF THE IF CHECKING IF THE QUERY WAS RIGHT

    ?>
  </body>
</html>
