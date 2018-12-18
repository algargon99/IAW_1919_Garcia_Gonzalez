<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>EJERCICIO 2</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="style.css" />
    <script src="main.js"></script>
</head>
<body>
    <?php
    
    $vector=["V1"=>[3,4,5,6,7,5],
    "V2"=>[3,4,0,6,7,0],
    "V3"=>[3,4,5,0,7,0],
    "V4"=>[0,4,5,6,7,5],
    "V5"=>[3,4,5,6,7,5],
    "V6"=>[3,0,5,6,0,5]];

    echo "<table>";
    foreach ($vector as $k1 => $v1) {
        echo "<tr>";
            for ($i=0; $i<sizeof($v1); $i++) { 
                if ($v1[$i]==0) {
                    echo "<td class='cero'>".$v1[$i]."</td>";
                }
                else{
                    echo "<td>".$v1[$i]."</td>";
                }
            }
        echo "</tr>";
    }
    echo "</table>";

    ?>
</body>
</html>