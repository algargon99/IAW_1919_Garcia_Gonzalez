
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Post en un solo fichero</title>
    <link rel="stylesheet" type="text/css">
  </head>
  <body>
    

      <?php if (!isset($_POST["modelo"])) : ?>
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
    $query="SELECT * from vehiculos v join clientes c on c.codcliente=v.codcliente where matricula='".$_GET['cod']."'";
    if ($result = $connection->query($query)) {

        printf("<p>The select query returned %d rows.</p>", $result->num_rows);
    }

    ?>
      <form method="post">
        <fieldset>
            <legend>REGISTRO</legend>
            <?php 
               
                
        while($obj = $result->fetch_object()) {
                   
                    
            echo "<span>Matricula: </span><input type='text' name='matricula' value='".$obj->Matricula."' required><br>";
            echo "<span>Marca: </span><input type='text' name='marca' value='".$obj->Marca."' required><br>";
            echo "<span>Modelo: </span><input type='text' name='modelo' value='".$obj->Modelo."' required><br>";
            echo "<span>Color: </span><input type='text' name='color' value='".$obj->Color."' required><br>";
            echo "<span>FechaMatriculacion: </span><input type='text' name='fechamatriculacion' value='".$obj->FechaMatriculacion."' required><br>";
            echo "<select name='cliente' required>";
             //CREATING THE CONNECTION
             $conexion = new mysqli("localhost", "tf", "123456", "tf");
             $conexion->set_charset("uft8");

             //TESTING IF THE CONNECTION WAS RIGHT
             if ($conexion->connect_errno) {
                 printf("Connection failed: %s\n", $conexion->connect_error);
                 exit();
             }

             //MAKING A SELECT QUERY
             /* Consultas de selección que devuelven un conjunto de resultados */
            $consulta="SELECT * from clientes";

            if ($resultado = $conexion->query($consulta)) {

                printf("<p>The select query returned %d rows.</p>", $resultado->num_rows);
            }            while($objeto=$resultado->fetch_object()){
                if ($objeto->CodCliente==$obj->CodCliente) {
                    echo "<option value='".$objeto->CodCliente."' selected>".$objeto->Nombre." ".$objeto->Apellidos."</option>";

                }
                echo "<option value='".$objeto->CodCliente."'>".$objeto->Nombre." ".$objeto->Apellidos."</option>";
            }
                echo "</select><br>";
            }?>
            <input type="submit" value="Cambiar">
        </fieldset>
    </form>

      <?php else: ?><?php

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
$query="update vehiculos
set matricula='".$_POST['matricula']."', 
marca='".$_POST['marca']."' , 
modelo='".$_POST['modelo']."' , 
color='".$_POST['color']."' , 
fechamatriculacion='".$_POST['fechamatriculacion']."' , 
codcliente='".$_POST['cliente']."'
where matricula='".$_GET['cod']."'";
echo $query;

if ($result = $connection->query($query)) {
    header('Location: editarvehiculos.php');
}
?>

      <?php endif ?>

  </body>
</html>
