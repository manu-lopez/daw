<!-- Escribe un programa que genere 100 números aleatorios del 0 al 20 y que los muestre por pantalla separados por espacios. El programa pedirá entonces por teclado dos valores y a continuación cambiará todas las ocurrencias del primer valor por el segundo en la lista generada anteriormente. Los números que se han cambiado deben aparecer resaltados de un color diferente. -->
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Ejercicio 04</title>
</head>

<body>
  <?php
  session_start();
  if (!isset($_SESSION["numeros"])) {
    $_SESSION["numeros"] = array();
    for ($i = 0; $i < 100; $i++) {
      $_SESSION["numeros"][$i] = rand(0, 20);
      echo $_SESSION["numeros"][$i] . " ";
    }
  }
  ?>
  <form action="" method="post">
    Numero 1: <input type="number" name="n1" required autofocus>
    Numero 2: <input type="number" name="n2" required>
    <input type="submit" value="Cambiar">
  </form>
  <?php
  if (isset($_POST["n1"]) and isset($_POST["n2"])) {
    foreach ($_SESSION["numeros"] as $value) {
      if ($value == $_POST["n1"]) {
        echo "<a style=\"color:red;\">" . $_POST["n2"] . "<a> ";
      } else {
        echo $value . " ";
      }
    }
    session_destroy();
  }
  ?>
</body>

</html>