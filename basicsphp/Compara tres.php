<html>
<body>
  <?php
  $n1=200;
  $n2=200;
  $n3=200;

  if ($n1>$n2&&$n3) {
    echo $n1." es el mayor";
  }
  elseif ($n2>$n1&&$n3) {
    echo $n2." es el mayor";
  }
  elseif ($n1==$n2&&$n3) {
    echo "Todos son iguales";
  }
  else {
    echo $n3." es el mayor";
  }

   ?>
</body>
</html>
