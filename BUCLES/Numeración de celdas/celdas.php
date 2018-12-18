<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="estilos.css">
  <title>Document</title>
</head>
<body>
  <?php
   $tam=7;
   echo "<table>";
    for ($i=0;$i<$tam;$i++){ 
      echo "<tr>";
      for ($j=0;$j<$tam;$j++){ 
        echo "<td>".($i*$tam+$j)."</td>";
      }
      echo "</tr>";
    }
   echo "</table>";
  ?>
</body>
</html>
