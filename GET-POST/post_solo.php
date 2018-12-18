
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Post en un solo fichero</title>
    <link rel="stylesheet" type="text/css">
  </head>
  <body>


      <?php if (!isset($_POST["contra"])) : ?>
      <form method="post">
        <fieldset>
            <legend>REGISTRO</legend>
            <span>Usuario: </span><input type="text" name="nombre" required><br>
            <span>Contraseña: </span><input type="password" name="contra" required><br>
            <span>Email: </span><input type="email" name="email" required><br>
            <span>Pais: </span><select name="pais">
                <option value="Francia">Francia</option>
                <option value="Alemania">Alemania</option>
                <option value="Belgica">Belgica</option>
                <option value="ReinoUnido">Reino Unido</option>
                <option value="Andorra">Andorra</option>
                <option value="Italia">Italia</option>
                <option value="Croacia">Croacia</option>
                <option value="España">España</option>
                <option value="Rusia">Rusia</option>
                <option value="Noruega">Noruega</option>
            </select>
            <h4>Intereses</h4>
            <input type="checkbox" name="interes[]" value="PROG">Programacion<br>
            <input type="checkbox" name="interes[]" value="NET">Redes<br>
            <input type="checkbox" name="interes[]" value="BD">Base de datos<br>
            <input type="checkbox" name="interes[]" value="SO">Sistemas operativos<br>
            <input type="submit" value="Registrar">
        </fieldset>
    </form>

      <?php else: ?>

        
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
      <?php endif ?>

  </body>
</html>
