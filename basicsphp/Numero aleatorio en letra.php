<html>
<body>
  <?php
  $num=rand(1, 5);
  if ($num==1) {
    echo "<h1>One</h1>";
  }
  elseif ($num==2) {
    echo "<h2>Two</h2>";
  }
  elseif ($num==3) {
    echo "<h3>Three</h3>";
  }
  elseif ($num==4) {
    echo "<h4>Four</h4>";
  }
  else {
    echo "<h5>Five</h5>";
  }
   ?>
</body>
</html>
