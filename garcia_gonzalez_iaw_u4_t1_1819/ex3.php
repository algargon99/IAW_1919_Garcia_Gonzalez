<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Ejercicio 3</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
    <?php
    $vector=["Los Simpsons" => ["padre" => "Homer","madre" => "Marge", "hijos" => "Bart, Lisa y Maggie"], 
             "Los Griffin" => ["padre" => "Peter" , "madre" => "Lois", "hijos" => "Chris, Meg y Stewie"]];
    echo "<table>";
    echo "<tr><td></td>";
    foreach ($vector["Los Simpsons"] as $p => $j) {
        echo "<td>$p</td>";
        
    }
    echo "</tr>";
    foreach ($vector as $k => $val) {
        echo "<tr>";
        echo "<td>$k</td>";
        foreach ($val as $key => $value) {
            echo "<td>$value</td>";
            
        }

        echo "</tr>";
    }
    echo "</table>"
    ?>
</body>
</html>