
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Post en un solo fichero</title>
    <link rel="stylesheet" type="text/css">
    <style>
        fieldset{
            width: 700px;
            float:left;
        }   
     
    </style>
  </head>
  <body>
  

      <?php if (!isset($_POST["matricula"])) : ?>
      <form method="post">
            <fieldset>
                <legend>Primero</legend>
                <p><input type="checkbox" name="primero[]" value="LM">LM</p>
                <p><input type="checkbox" name="primero[]" value="GBD">GBD</p>
                <p><input type="checkbox" name="primero[]" value="FOL">FOL</p>
                <p><input type="checkbox" name="primero[]" value="PAR">PAR</p>
                <p><input type="checkbox" name="primero[]" value="FH">FH</p>
                <p><input type="checkbox" name="primero[]" value="IS 0O">ISO</p>
            </fieldset>
            <fieldset>
                <legend>Segundo</legend>
                <p><input type="checkbox" name="segundo[]" value="SEG">SEG</p>
                <p><input type="checkbox" name="segundo[]" value="ASO">ASO</p>
                <p><input type="checkbox" name="segundo[]" value="AGBD">AGBD</p>
                <p><input type="checkbox" name="segundo[]" value="ENIM">ENIM</p>
                <p><input type="checkbox" name="segundo[]" value="IAW">IAW</p>
                <p><input type="checkbox" name="segundo[]" value="SRI">SRI</p>
            </fieldset>
            <input type="submit" name="matricula" value="Matricular" id="submit">
    </form>

      <?php else: ?>
        <?php
            if (isset($_POST['primero']) && in_array("GBD",$_POST["primero"]) && isset($_POST['segundo']) && in_array("AGBD",$_POST["segundo"]) ||
                isset($_POST['primero']) && in_array("PAR",$_POST["primero"]) && isset($_POST['segundo']) && in_array("SRI",$_POST["segundo"]) ||
                isset($_POST['primero']) && in_array("ISO",$_POST["primero"]) && isset($_POST['segundo']) && in_array("ASO",$_POST["segundo"])) {
                    echo "Esta matricula no es válida";
                } 
            else  {
                if (isset($_POST["primero"])) {
                    echo "<p>PRIMERO</p>";
                    echo "<ul>";
                    for ($i=0; $i<sizeof($_POST["primero"]) ; $i++) { 
                        echo "<li>".$_POST["primero"][$i]."</li>";
                    }
                    echo "</ul>";
                }
                else {
                    echo "No hay ninguna asignatura en primero";
                }
                
                if (isset($_POST["segundo"])) {
                    echo "<p>SEGUNDO</p>";
                    echo "<ul>";
                    for ($i=0; $i<sizeof($_POST["segundo"]) ; $i++) { 
                        echo "<li>".$_POST["segundo"][$i]."</li>";
                    }
                    echo "</ul>";
                }
                else {
                    echo "No hay ninguna asignatura en segundo";
                }
                
            }   
            
        ?>
        
      <?php endif ?>

  </body>
</html>
