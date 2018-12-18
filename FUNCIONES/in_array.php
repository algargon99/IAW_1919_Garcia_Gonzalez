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
    function esta ($vector,$e)
    {
        
        
        for ($i=0; $i <sizeof($vector) ; $i++) { 
            if ($e==$vector[$i]) {
                return true;     
            }      
            
        }
        return false;

    }

    $v=[1,2,3,4,5,6,7,8,10];
    $x=[2,3,4,5,6,7,8,9,9,9];
    $e=9;
    if (esta($v,$e)){
        echo "El elemento ".$e." está en el vector";
    }
    else {
        echo "El elemento ".$e." no está en el vector";

    }
   
    echo "<br>";
    if (esta($x,$e)){
        echo "El elemento ".$e." está en el vector";
    }
    else {
        echo "El elemento ".$e." no está en el vector";

    }
    

    ?>
</body>
</html>