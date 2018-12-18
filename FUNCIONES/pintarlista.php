<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
   
</head>
<body>
    <?php
    function pintarlista ($vector)
    {
        $cad= "<ul>";
       
        for ($i=0; $i <sizeof($vector) ; $i++) { 
            $cad=$cad."<li>".$vector[$i]."</li>";
        }
        $cad=$cad."</ul>";
        return $cad;

    }

    $v=[1,2,3,4,5,6,7,8,9,10];

    echo pintarlista($v);
    
    ?>
</body>
</html>