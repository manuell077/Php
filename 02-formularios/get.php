<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Formulario Get</title>
</head>

<body>

  <?php
         echo $_GET['numero']; 
         
      ?>

  <form action="controlador.php" method="post">
    <div>
      <label for="nombre">Ingresa un nombre</label>
      <input type="text" name="nombre" id="nombre">
    </div>
    <div>
      <label for="apellido">Ingresa el apellido</label>
      <input type="text" name="apellido" id="apellido">
    </div>

    <div>
      <label for="correo">Ingresa el correo</label>
      <input type="text" name="correo" id="correo">
    </div>

    <div>
      <label for="edad">Ingresa la edad </label>
      <input type="text" name="edad" id="edad">
    </div>


    <div>
      <label for="python">Python </label>
      <input type="checkbox" name="checkbox[]" id="python" value="python">

    </div>

    <div>
      <label for="java">Java </label>
      <input type="checkbox" name="checkbox[]" id="java" value="java">

    </div>
    <div>
      <label for="javasript">Java Script </label>
      <input type="checkbox" name="checkbox[]" id="javasript" value="javasript">

    </div>

    <div>
      <label for="ruby">Ruby </label>
      <input type="checkbox" name="checkbox[]" id="ruby" value="ruby">

    </div>





    <button type="submit">Enviar</button>
  </form>


</body>

</html>