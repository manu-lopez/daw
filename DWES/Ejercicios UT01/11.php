<!-- Ejercicio 11

Igual que el programa anterior, pero esta vez la pirámide estará hueca (se debe ver únicamente el contorno hecho con asteriscos). -->

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
  $caracter = "*";
  $espacio = "&nbsp";
  for ($i = 1; $i < 10; $i++) {
    echo str_repeat($espacio, 9 - $i);
    if ($i >= 3 && $i < 9) {
      echo "*";
      echo str_repeat($espacio, ($i - 2) * 2);
      echo "*";
      echo "<br>";
    } else {
      echo str_repeat($caracter, $i);
      echo "<br>";
    }
  }
  ?>

</body>

</html>