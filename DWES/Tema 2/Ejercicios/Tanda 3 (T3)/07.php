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
  <?php
  session_start();
  $password = 1234;

  if (!isset($_SESSION['oportunidades'])) {
    $_SESSION['oportunidades'] = 2;
    echo "Tienes " . ($_SESSION['oportunidades'] + 1) . " oportunidades para acertar, suerte!<br>";
    echo '<form action="" method="post">';
    echo 'Introduzca la clave secreta: <input type="number" name="clave" id="clave" min=1000 max=9999>';
    echo '<input type="submit" value="Abrir">';
    echo '</form>';
  }

  if (isset($_POST["clave"])) {
    echo "Te quedan " . $_SESSION['oportunidades'] . " oportunidades";
    echo '<form action="" method="post">';
    echo 'Introduzca la clave secreta: <input type="number" name="clave" id="clave" min=1000 max=9999>';
    echo '<input type="submit" value="Abrir">';
    echo '</form>';
    $userInput = intval($_POST["clave"]);
    if ($userInput == $password) {
      echo "<br>La caja se abrió!";
    } else {
      if ($_SESSION['oportunidades'] == 0) {
        echo "<br>Te quedaste sin intentos";
      } else {
        $_SESSION['oportunidades']--;
        echo "<br>Clave incorrecta";
      }
    }
  }

  ?>
</body>

</html>