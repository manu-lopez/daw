<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Adivino</title>
</head>

<body>
  <h1>Juego del adivino</h1>
  <form action="" method="post">
    Introduce un numero: <input type="text" name="numeroIntroducido" autofocus>
    <input type="submit" value="Comprobar número">
  </form>
  <br>
  <?php

  //Comprobamos esta vacio lo introducido
  if (isset($_POST["numeroIntroducido"]) and empty($_POST["numeroIntroducido"])) {
    echo "No has introducido nada.";

    //Comprobamos si es numero entero positivo
  } elseif (isset($_POST["numeroIntroducido"]) and !is_numeric($_POST["numeroIntroducido"])) {
    echo "No has introducido un numero entero positivo";
  } elseif (isset($_POST["numeroIntroducido"]) and is_int(intval($_POST["numeroIntroducido"]))) {

    if (!isset($_SESSION["numeroParaAdivinar"])) {
      // $_SESSION["numeroParaAdivinar"] = rand(1, 10); //Ponemos 10 para comprobar que funciona de manera más fácil.
      $_SESSION["numeroParaAdivinar"] = rand(1, 100);
    }

    // Código para comprobar funcionamiento mientras desarrollaba.
    // echo "Introducido: " . $_POST["numeroIntroducido"];
    // echo "<br>";
    // echo "Para adivinar: " . $_SESSION["numeroParaAdivinar"];
    // echo "<br>";

    if ($_SESSION["numeroParaAdivinar"] == $_POST["numeroIntroducido"]) {
      echo "Felicidades, has acertado!";
      session_destroy();
      echo "<br><a href=\"adivino.php\">Volver a jugar</a>";
    } elseif ($_SESSION["numeroParaAdivinar"] < $_POST["numeroIntroducido"]) {
      echo "El numero introducido es mayor";
    } elseif ($_SESSION["numeroParaAdivinar"] > $_POST["numeroIntroducido"]) {
      echo "El numero introducido es menor";
    }
  }
  ?>
</body>

</html>