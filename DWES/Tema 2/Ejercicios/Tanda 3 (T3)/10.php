<!-- Escribe un programa que calcule la media de un conjunto de números positivos introducidos por teclado. A priori, el programa no sabe cuántos números se introducirán. El usuario indicará que ha terminado de introducir los datos cuando meta un número negativo. -->
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Ejercicio 10</title>
</head>

<body>
  <p>Introduzca números (para acabar terminar introduce uno negativo):</p>
  <?php
  session_start();
  if (!isset($_POST["number"])) {
    $_POST["number"] = 0;
    $_SESSION["total"] = 0;
    $_SESSION["contador"] = 0;
  }
  if ($_POST["number"] >= 0) {
    $_SESSION["contador"]++;
    $_SESSION["total"] += $_POST["number"];
    ?>
    <form action="" method="post">
      <input type="number" name="number" required>
      <input type="submit" value="Calcular">
    </form>
  <?php
  } elseif ($_POST["number"] < 0 and $_SESSION["total"] != 0) {
    echo "La media es " . ($_SESSION["total"] / ($_SESSION["contador"] - 1));
    session_destroy();
  }
  ?>
</body>

</html>