<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="tabla.css" />

</head>
<body>
<?php

    function pintartabla($v){

        $cad="<table>";
        foreach ($v as $k => $a) {
            $cad=$cad."<tr>";
            for ($i=0; $i <sizeof($a) ; $i++) { 
                $cad=$cad."<td>".$a[$i]."</td>";
            };
            $cad=$cad."</tr>";
        }
        return $cad."</table>";
    }

    $A=['a','b','c'];
    $B=['d','e','f'];
    $C=['g','h','i'];
    $V=["A" => $A,"B" => $B, "C" => $C];

    echo pintartabla($V);

?>
</body>
</html>
