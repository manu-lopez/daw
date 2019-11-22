<!-- Realiza un programa que pida 8 números enteros y que luego muestre esos números de colores, los pares de un color y los impares de otro. -->
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Ejercicio 6</title>
</head>

<body>
  <?php
  session_start();
  if (!isset($_SESSION["numeros"])) {
    $_SESSION["numeros"] = array();
    $_SESSION["contador"] = 0;
  }
  ?>
  <form action="" method="post">
    Introduzca numero: <input type="number" name="numero" required autofocus>
    <input type="submit" value="Mandar">
  </form>
  <?php
  if (isset($_POST["numero"])) {
    $_SESSION["contador"]++;
    array_push($_SESSION["numeros"], $_POST["numero"]);
    if ($_SESSION["contador"] == 8) {
      foreach ($_SESSION["numeros"] as $valor) {
        echo ($valor % 2 == 0) ? "<a style=\"color:red;\">" . $valor . "<a> " : "<a style=\"color:green;\">" . $valor . "<a> ";
      }
      session_destroy();
    }
  }
  ?>
</body>

</html>