<!-- Escribe un programa que lea una lista de diez números y determine cuántos son positivos, y cuántos son negativos. -->

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Ejercicio 13</title>
</head>

<body>
  <?php
  //Generamos lista de 10 números aleatorios
  echo "Lista: ";
  $positivos = $negativos = 0;
  for ($i = 0; $i < 10; $i++) {
    $numbers[$i] = rand(-10, 10);
    echo $numbers[$i] . " ";
    if ($numbers[$i] < 0) {
      $negativos++;
    } else {
      $positivos++;
    }
  }
  echo "<br>Positivos: " . $positivos . "<br>Negativos: " . $negativos;
  ?>
</body>

</html>