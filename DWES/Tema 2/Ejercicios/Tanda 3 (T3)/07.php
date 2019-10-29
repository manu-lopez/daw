<!-- Realiza el control de acceso a una caja fuerte. La combinación será un número de 4 cifras. El programa nos pedirá la combinación para abrirla. Si no acertamos, se nos mostrará el mensaje “Lo siento, esa no es la combinación” y si acertamos se nos dirá “La caja fuerte se ha abierto satisfactoriamente”. Tendremos cuatro oportunidades para abrir la caja fuerte. -->
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Ejercicio 07</title>
</head>

<body>
  <h3>Caja fuerte</h3>
  <form action="" method="post">
    Introduzca la clave secreta: <input type="number" name="clave" id="clave" min=1000 max=9999>
    <input type="submit" value="Abrir">
  </form>
  <?php

  echo rand(1000, 9999);
  
  if (isset($_POST["clave"])) {
    $password = rand(1000, 9999);
    $userInput = $_POST["clave"];

    if ($password == $userInput) {
      echo "Acertaste";
    } else {
      echo "Error";
    }
  }
  ?>
</body>

</html>