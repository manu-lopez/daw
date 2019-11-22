<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>

<body>
  <?php
  $horas = $_POST["horas"];
  $precioHora = 12;
  $total = $horas * $precioHora;
  ?>
  <p><?= $horas ?> trabajadas en la semana corresponde a <?= $total ?> €</p>
</body>

</html>