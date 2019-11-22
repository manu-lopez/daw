<!-- Muestra los números múltiplos de 5 de 0 a 100 utilizando un bucle do-while . -->

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Ejercicio 3</title>
</head>

<body>
  <?php
  $i = 0;
  do {
    echo 5 * $i . "<br>";
    $i++;
  } while ($i <= 20);
  ?>
</body>

</html>