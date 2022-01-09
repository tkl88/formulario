<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Formulario</title>
    <link rel="stylesheet" href="estilos.css">
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,800,900" rel="stylesheet">
</head>    
<body>
  <div class="Form">
    <div class="style">

      <?php
        echo "Nombre     : "; echo $_POST['nombre']; echo "<br/>";
        echo "Email   : "; echo $_POST['email']; echo "<br/>";
        echo "asunto    : "; echo $_POST['asunto']; echo "<br/>";
        echo "Mensaje : "; echo $_POST['mensaje']; echo "<br/>";
      ?>
  </div>
    </div>
</body>
</html>