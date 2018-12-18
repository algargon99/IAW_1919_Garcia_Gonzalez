<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EJERCICIO 3</title>
  </head>
  <body>
          <!-- PRINT THE TABLE AND THE HEADER -->
          <?php if (!isset($_POST["recambio"])) : ?>
     
      <form method="post">
      <?php
      $connect = new mysqli("localhost", "tf", "123456", "tf");
      $connect->set_charset("uft8");

      //TESTING IF THE CONNECTION WAS RIGHT
      if ($connect->connect_errno) {
          printf("Connection failed: %s\n", $connect->connect_error);
          exit();
      }

      //MAKING A SELECT QUERY
      /* Consultas de selección que devuelven un conjunto de resultados */
        $q="SELECT * from recambios";
      if ($resul = $connect->query($q)) {
        echo "<p>Recambio a añadir</p>";
          echo "<p>Recambio: <select name='recambio'>";
          while($o = $resul->fetch_object()) {
              echo "<option value='".$o->IdRecambio."'>".$o->IdRecambio." - ".$o->Descripcion."</option>";    
          }
          echo "</select></p>";
          
          //Free the result. Avoid High Memory Usages
          $resul->close();
          unset($o);
          unset($connect);
      }
      ?>
            <p>Unidades: <input type="number" name="uni"></p>
            <input type="submit" value="Añadir">
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
            $query="insert into incluyen values ('".$_POST['recambio']."','".$_GET['cod']."','".$_POST['uni']."')";
            if ($result = $connection->query($query)) {
               echo "<p>Has insertado ".$_POST['uni']." unidades del recambio ".$_POST['recambio']." en la reparación ".$_GET['cod']."</p>";
               
               
               unset($connection);
            }
    ?>
    <?php endif ?>

  </body>
</html>