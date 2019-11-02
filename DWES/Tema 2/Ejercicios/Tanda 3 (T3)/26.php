<!-- Realiza un programa que pida primero un número y a continuación un dígito. El programa nos debe dar la posición (o posiciones) contando de izquierda a derecha que ocupa ese dígito en el número introducido. -->

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Ejercicio 26</title>
</head>

<body>
  <form action="" method="post">
    Introduzca un numero: <input type="number" name="numero" required autofocus>
    Introduzca una posición: <input type="number" name="posicion" min=1 required>
    <input type="submit" value="Calcular">
  </form>
  <?php
  if (isset($_POST["numero"]) and isset($_POST["posicion"])) {
    $arrayNumeros = str_split($_POST["numero"], 1);

    if ($_POST["posicion"] < count($arrayNumeros)) {
      echo "Número: " . $_POST["numero"] . "<br>";
      echo $arrayNumeros[$_POST["posicion"] - 1];
    } else {
      echo "Posición incorrecta";
    }
  }
  ?>
</body>

</html>