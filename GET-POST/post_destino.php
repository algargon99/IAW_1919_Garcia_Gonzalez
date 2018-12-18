<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Resultado</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
    <p>Usuario <b><?php echo "$_POST[nombre]";?></b> correctamente creado</p>
    <p>Email: <?php echo "$_POST[email]";?></p>
    <p>Pais: <?php echo "$_POST[pais]";?></p>
    <h4>Lista de intereses</h4>
    <ul>
        <?php
            
                for($i=0; $i < sizeof($_POST["interes"]); $i++) { 
                echo "<li>".$_POST['interes'][$i]."</li>";   
        }
        ?>
    </ul>

</body>
</html>