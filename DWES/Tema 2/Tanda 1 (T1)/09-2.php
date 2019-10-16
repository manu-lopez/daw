<!-- Escribe un programa que calcule el volumen de un cono mediante la fórmula V = 1/3 πr 2 h. -->
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Ejercicio 9</title>
  <style>
    /* Evitar ceguera */
    body {
      background-color: gray;
    }
  </style>
</head>

<body>
  <?php
  $radio = $_POST["radio"];
  $altura = $_POST["altura"];
  $total = round((1 / 3) * pi() * pow($radio, 2) * $altura, 2);
  ?>
  <p>El volumen de un cono de radio <?= $radio ?> y altura <?= $altura ?> es <?= $total ?></p>
</body>

</html>