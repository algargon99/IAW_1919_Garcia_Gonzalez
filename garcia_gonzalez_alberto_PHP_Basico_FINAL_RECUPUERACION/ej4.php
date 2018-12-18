
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EJERCICIO 4</title>
    <link rel="stylesheet" type="text/css" href=" ">
    <style>
      span {
        width: 100px;
        display: inline-block;
      }
    </style>
  </head>
  <body>

      <!-- PHP STRUCTURE FOR CONDITIONAL HTML -->
      <!-- FIRST TIME. NO DATA IN THE POST (checking a required form field) -->
      <!-- So we must show the form -->



      <?php if (!isset($_POST["max"])) : ?>
        <form method="post">
          <h1>Stock</h1>
          <span>MIN: </span><input type="text" name="min"><br>
          <span>MAX: </span><input type="text" name="max"><br>
          <input type="submit" value="BUSCAR">
        </form>

      <!-- DATA IN $_POST['mail']. Coming from a form submit -->
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
              $query="select distinct r.idrecambio as IdRecambio,Descripcion,Stock, count(*) as Cant from recambios r
              left join incluyen i on r.idrecambio=i.idrecambio
              where stock<=".$_POST['max']." and stock>=".$_POST['min']."
              group by i.idrecambio
              order by stock desc";
            if ($result = $connection->query($query)) {
      
                printf("<p>The select query returned %d rows.</p>", $result->num_rows);
      
            ?>
      
                <!-- PRINT THE TABLE AND THE HEADER -->
                <table style="border:1px solid black">
                <thead>
                  <tr>
                    <th>IdRecambio</th>
                    <th>Descripción</th>
                    <th>Stock</th>
                    <th>Reparaciones en las que se ha usado</th>
                </thead>
      
            <?php
      
                //FETCHING OBJECTS FROM THE RESULT SET
                //THE LOOP CONTINUES WHILE WE HAVE ANY OBJECT (Query Row) LEFT
                while($obj = $result->fetch_object()) {
                    //PRINTING EACH ROW
                    echo "<tr>";
                      echo "<td>".$obj->IdRecambio."</td>";
                      echo "<td>".$obj->Descripcion."</td>";
                      echo "<td>".$obj->Stock."</td>";
                      echo "<td>".$obj->Cant."</td>";
                    echo "</tr>";
                }
      
                
                //Free the result. Avoid High Memory Usages
                $result->close();
                unset($obj);
                unset($connection);
      
            } //END OF THE IF CHECKING IF THE QUERY WAS RIGHT
      
          ?>
        

      <?php endif ?>

  </body>
</html>
