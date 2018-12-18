<html>
<body>
  <ol>
  <?php
  $n1=1;
    while ($n1 <= 100) {
      echo "<li>2<sup>$n1</sup>=".pow(2,$n1)."</li>";
  $n1++;
}
   ?>
  </ol>
  <ol>
  <?php
    for ($n1=1; $n1 <= 100; $n1++) {
      echo "<li>2<sup>$n1</sup>=".pow(2,$n1)."</li>";
}
     ?>
  </ol>
</body>
</html>
