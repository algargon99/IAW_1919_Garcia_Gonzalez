<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Resultado</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
</head>
<body>
    <?php
    function mostrarlista($cant){
        if ($_POST['cantidad']!=NULL) {
            $cad="<ul>";
            for ($a=0; $a<=2*$cant; $a++) { 
               
                        if ($a%2==0) {
                            $cad=$cad."<li>".$a."</li>";
                        }
                    }
                
            return $cad."</ul>";
        }
        else
        {
            echo "<h2>No has ingresado ningín valor</h2>";
        }

    }
    echo mostrarlista($_POST['cantidad'])
    ?>
</body>
</html>