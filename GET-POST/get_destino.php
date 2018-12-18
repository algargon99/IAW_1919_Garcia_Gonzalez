<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Destino</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
    <?php
    if ($_GET!=null){
        echo "<ul>";
        echo "<li>$_GET[N]</li>";
        echo "<li>$_GET[A]</li>";
        echo "<li>$_GET[EDAD]</li>";
        echo "<li>$_GET[EMAIL]</li>";
        echo "<ul>";
    }
    else {
        echo "NO HAY DATOS";
    }

    ?>
</body>
</html>