<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Ejercicio 10</title>
</head>

<body>
  <?php
  $cantidad = $_POST["cantidad"];
  $base = $_POST["base"];
  $tipo = $_POST["conversion"];

  if ($base == "mb" && $tipo == "kb") {
    $total = $cantidad * 1024;
  } elseif ($base == "kb" && $tipo == "mb") {
    $total = $cantidad / 1024;
  } else {
    $total = $cantidad;
  }
  ?>

  <p><?= $cantidad ?> <?= $base ?> son <?= $total ?> <?= $tipo ?></p>
</body>

</html>