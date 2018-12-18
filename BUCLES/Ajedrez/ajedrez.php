<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="estilos.css">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
  <?php
   $tam=8;
   echo "<table>";
    for ($i=0;$i<8;$i++){ 
      echo "<tr>";
      for ($j=0;$j<8;$j++){ 
        if (($i%2==0)&&($j%2==0)||($i%2==1)&&($j%2==1)) {
          echo "<td class='negra'></td>";
        }
        else {
          echo "<td class='blanca'></td>";
        }
      }
      echo "</tr>";
    }
   echo "</table>";
  ?>
</body>
</html>
