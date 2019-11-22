<!-- Amplía el programa anterior para que diga la nota del boletín (insuficiente, suficiente, bien, notable o sobresaliente). -->

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Ejercicio 8</title>
</head>

<body>
  <h3>Ejercicio 8</h3>
  <form action="" method="post">
    Introduzca 3 notas para obtener la media:
    <input type="number" name="nota1" value="0" min="0" max="10" required>
    <input type="number" name="nota2" value="0" min="0" max="10" required>
    <input type="number" name="nota3" value="0" min="0" max="10" required>
    <input type="submit" value="Calcular">
  </form>

  <?php
  if (isset($_POST["nota1"]) and isset($_POST["nota2"]) and isset($_POST["nota3"])) {
    $media = round((($_POST["nota1"] + $_POST["nota2"] + $_POST["nota3"]) / 3), 2);
    echo "La media de las 3 notas es $media";
    if ($media < 5) {
      echo "--> Insuficiente";
    } elseif ($media >= 5 and $media < 7) {
      echo "--> Bien";
    } elseif ($media >= 7 and $media < 9) {
      echo "--> Notable";
    } elseif ($media >= 9 and $media <= 10) {
      echo "--> Sobresaliente";
    }
  }
  ?>
</body>

</html>