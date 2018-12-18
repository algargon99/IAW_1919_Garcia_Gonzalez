<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>EJERCICIO 1</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
    <?php
    function crear_formulario($v1,$v2){

foreach ($v1 as $key => $value) {
    echo $key.": <input type='$value'><br>";    
}
echo "<input type='submit' value='$v2'>";

    }
    $vector=["nombre"=>"text","fecha_de_nacimiento"=>"date","edad"=>"number"];
    $boton="Enviar";
    echo crear_formulario($vector,$boton);
    ?>
</body>
</html>