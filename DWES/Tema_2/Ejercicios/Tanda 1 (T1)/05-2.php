<!-- Escribe un programa que calcule el área de un rectángulo. -->

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Ejercicio 5</title>
</head>

<body>
  <?php
  $base = $_POST['base'];
  $height = $_POST['height'];

  $area = $base * $height;
  ?>
  <p>El area de un rectángulo de base <?= $base ?> y altura <?= $height ?> es <?= $area ?></p>
</body>

</html>