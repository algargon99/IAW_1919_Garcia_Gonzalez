<html>
<body>
  <ul>
  <?php
  $n1=1;

  while ($n1<=100) {
    $resto=$n1%5;
    if ($resto==0) {
    echo "<li>$n1</li>";
  }
  $n1++;
  }
     ?>
  </ul>
  <ul>
  <?php
  $n=6;

for ($n1=0; $n1 <= 100; $n1++) {
  $resto=$n1%$n;
  if ($resto==0) {
    echo "<li>$n1</li>";
  }
}
     ?>
  </ul>
</body>
</html>
