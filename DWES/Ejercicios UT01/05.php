<!-- Ejercicio 05

Escribe un programa que utilice las variables $x y $y. Asignales los valores 144 y 999 respectivamente. A continuación, muestra por pantalla el valor de cada variable, la suma, la resta, la división y la multiplicación. -->

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
  $x = 144;
  $y = 99;
  echo "<p> El valor de X es $x </p>";
  echo "<p> El valor de Y es $y </p>";
  echo "La suma es: ", $x + $y;
  echo "<br>La resta es: ", $x - $y;
  echo "<br>La multiplicación es: ", $x * $y;
  echo "<br>La división es: ", $x / $y;
  ?>
</body>

</html>