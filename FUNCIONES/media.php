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
    function calcularmedia ($vector)
    {
        $cad= "La media del vector es: ";
        $media=0;
        
        for ($i=0; $i <sizeof($vector) ; $i++) { 
            $media=$media+$vector[$i];
        }
        $media=$media/sizeof($vector);
        return $cad.$media;

    }

    $v=[1,2,3,4,5,6,7,8,9,10];
    $x=[2,3,4,5,6,7,8,9,9,9];

    echo calcularmedia($v);
    echo "<br>";
    echo calcularmedia($x);

    ?>
</body>
</html>