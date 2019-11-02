<!-- Realiza un programa que vaya pidiendo números hasta que se introduzca un numero negativo y nos diga cuantos números se han introducido, la media de los impares y el mayor de los pares . El número negativo sólo se utiliza para indicar el final de la introducción de datos pero no se incluye en el cómputo. -->
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Ejercicio 21</title>
</head>

<body>
  <p>Introduzca números (para acabar terminar introduce uno negativo):</p>
  <?php
  session_start();
  if (!isset($_POST["number"])) {
    $_POST["number"] = 0;
    $_SESSION["pares"] = 0;
    $_SESSION["impares"] = 0;
    $_SESSION["contador"] = 0;
    $_SESSION["contadorImpares"] = 0;
  }
  if ($_POST["number"] >= 0) {
    $_SESSION["contador"]++;

    //Controlamos pares / Impares
    if ($_POST["number"] % 2 == 0) {
      ($_SESSION["pares"] < $_POST["number"]) ? $_SESSION["pares"] = $_POST["number"] : $_SESSION["pares"];
    } else {
      $_SESSION["contadorImpares"]++;
      $_SESSION["impares"] += $_POST["number"];
    }
    ?>
    <form action="" method="post">
      <input type="number" name="number" required autofocus>
      <input type="submit" value="Calcular">
    </form>
  <?php
  } elseif ($_POST["number"] < 0 and $_SESSION["contador"] > 0) {
    echo "Total números: " . ($_SESSION["contador"] - 1) . "<br>";
    echo ($_SESSION["impares"] == 0) ? "Ningun impar<br>" : "La media de los impares es: " . ($_SESSION["impares"] / $_SESSION["contadorImpares"]);
    echo "Par más grande: " . $_SESSION["pares"];
    session_destroy();
  }
  ?>
</body>

</html>