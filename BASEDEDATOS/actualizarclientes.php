
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Post en un solo fichero</title>
    <link rel="stylesheet" type="text/css">
  </head>
  <body>
    

      <?php if (!isset($_POST["matricula"])) : ?>
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
    $query="SELECT * from vehiculos where matricula='".$_GET['cod']."'";
    if ($result = $connection->query($query)) {

        printf("<p>The select query returned %d rows.</p>", $result->num_rows);
    }

    ?>
      <form method="post">
        <fieldset>
            <legend>REGISTRO</legend>
            <?php 
            while($obj = $result->fetch_object()) {
            echo "<span>CodCliente: </span><input type='text' name='codcliente' value='".$obj->CodCliente."' required><br>";
            echo "<span>DNI: </span><input type='text' name='dni' value='".$obj->DNI."' required><br>";
            echo "<span>Nombre: </span><input type='text' name='nombre' value='".$obj->Nombre."' required><br>";
            echo "<span>Apellidos: </span><input type='text' name='apellidos' value='".$obj->Apellidos."' required><br>";
            echo "<span>Direccion: </span><input type='text' name='direccion' value='".$obj->Direccion."' required><br>";
             echo "<span>Telefono: </span><input type='text' name='telefono' value='".$obj->Telefono."' required><br>";
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
$query="update clientes
set codcliente='".$_POST['codcliente']."', 
dni='".$_POST['dni']."' , 
nombre='".$_POST['nombre']."' , 
apellidos='".$_POST['apellidos']."' , 
Direccion='".$_POST['direccion']."' , 
telefono='".$_POST['telefono']."'
where codcliente='".$_GET['cod']."'";
if ($result = $connection->query($query)) {

    header('Location: clientes.php');

}

?>

<p>Cliente editado </p>

      <?php endif ?>

  </body>
</html>
