<!-- Ejercicio 10

Escribe un programa que pinte por pantalla una pirámide rellena a base de asteriscos. La base de la pirámide debe estar formada por 9 asteriscos. -->

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
    echo str_repeat($caracter, $i);
    echo "<br>";
  }
  ?>

</body>

</html>