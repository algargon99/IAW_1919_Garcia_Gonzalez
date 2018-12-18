<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Media</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
    <?php
    $bd=[7,5,9,3,4,8,2,1,7,8];
    $iaw=[3,4,9,7,9,9,8,4,10,8];
    $seg=[7,3,9,5,4,8,2,1,4,8];

    $notas=["BD" => $bd,"IAW" => $iaw, "SEG" => $seg];
    echo "<table>";
    foreach ($notas as $k => $v) {
        echo "<tr>";
        echo "<td>$k</td>";
        $media=0;
        for ($i=0; $i <sizeof($v) ; $i++) { 
            $media=$media+$v[$i];
        };
        echo "<td>".$media/sizeof($v)."</td>";
        echo "</tr>";
    }
    echo "</table>";
    ?>
</body>
</html>