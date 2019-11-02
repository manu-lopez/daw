<!-- Escribe un programa que permita ir introduciendo una serie indeterminada de números hasta que la suma de ellos supere el valor 10000. Cuando esto último ocurra, se debe mostrar el total acumulado, el contador de los números introducidos y la media. -->

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Ejercicio 23</title>
</head>

<body>
  <p>Introduzca números:</p>
  <?php
  session_start();
  if (!isset($_POST["number"])) {
    $_POST["number"] = 0;
    $_SESSION["contador"] = 0;
    $_SESSION["total"] = 0;
  }
  $_SESSION["contador"]++;
  $_SESSION["total"] += $_POST["number"];
  ?>
  <form action="" method="post">
    <input type="number" name="number" required autofocus>
    <input type="submit" value="Calcular">
  </form>
  <?php

  if ($_SESSION["total"] > 10000) {
    echo "Total números: " . ($_SESSION["contador"] - 1) . "<br>";
    echo "Total: " . $_SESSION["total"] . "<br>";
    echo "Media: " . ($_SESSION["total"] / ($_SESSION["contador"] - 1));

    session_destroy();
  }
  ?>
</body>

</html>