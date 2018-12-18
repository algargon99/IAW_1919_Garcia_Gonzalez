<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Ejercicio 1</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
    <?php
    $vector=[0,1,2,3,4,5,6,7,8,9];
    $v1=[];
    $v2=[];
    $tamaño=sizeof($vector)/2;
    if (sizeof($vector)%2==0) {
        for ($i=0; $i<sizeof($vector) ; $i++) {     
            if ($i<$tamaño) {
                $v1[]=$vector[$i];
            }
            else {
                $v2[]=$vector[$i];
            }
       }
    }
    else{
        echo "NO SE PUEDE";
        }
    
    var_dump($v1);
    echo "<br>";
    var_dump($v2);
    ?>
</body>
</html>