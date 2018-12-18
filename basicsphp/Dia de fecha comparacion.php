<html>
<body>
  <?php
  $fecha=date("d");
  if ($fecha>10) {
    echo "Out of service";
  }
  else {
    echo "Active service";
  }
   ?>
</body>
</html>
