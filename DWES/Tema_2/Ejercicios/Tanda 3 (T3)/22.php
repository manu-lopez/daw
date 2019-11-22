<!-- Muestra por pantalla todos los números primos entre 2 y 100, ambos incluidos. -->
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Ejercicio 22</title>
</head>

<body>
  <?php
  for ($number = 2; $number <= 100; $number++) {
    $esPrimo = true;
    for ($k = 2; $k <= ($number / 2); $k++) {
      if (($number % $k) == 0) {
        $esPrimo = false;
      }
    }
    echo ($esPrimo) ? $number . " " : "";
  }
  ?>
</body>

</html>