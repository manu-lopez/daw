<!-- Escribe un programa que sume, reste, multiplique y divida dos números introducidos por teclado. -->
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Ejercicio 4</title>
</head>

<body>
  <?php
  $numberX = $_POST['numberX'];
  $numberY = $_POST['numberY'];
  $operation = $_POST['operation'];

  switch ($operation) {
    case 'sum':

      $total = $numberX + $numberY;
      break;
    case 'subtraction':

      $total = $numberX - $numberY;

      break;
    case 'multiplication':

      $total = $numberX * $numberY;

      break;
    case 'division':
      // Prevenimos que se divida por 0
      if ($numberX == 0 or $numberY == 0) {
        echo "No dividir por 0";
        break;
      }

      $total = $numberX / $numberY;

      break;
  }
  ?>
    <p>El resultado de la operación es: <?= $total ?></p>
</body>

</html>