<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Ejercicio 2</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
    <?php
    $vector=[0,1,2,3,4,5,6,7,8,9];
    $v1=[];
    $v2=[];
        for ($i=0; $i<sizeof($vector) ; $i++) {     
            if ($i%2==0) {
                $v1[]=$vector[$i];
            }
            else {
                $v2[]=$vector[$i];
            }
       }
    $suma=0;
    for ($i=0; $i <sizeof($v1) ; $i++) { 
        $suma=$suma+$v1[$i];
     }
    $media=$suma/sizeof($v1);
    echo "$media";
    echo "<br>";
    echo "<ul>";
     for ($i=0; $i < sizeof($v2); $i++) { 
        echo "<li>$v2[$i]</li>";
         }
    echo "</ul>"
    ?>
</body>
</html>