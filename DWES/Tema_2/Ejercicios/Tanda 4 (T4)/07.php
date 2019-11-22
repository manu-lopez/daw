<!-- Escribe un programa que genere 20 números enteros aleatorios entre 0 y 100 y que los almacene en un array. El programa debe ser capaz de pasar todos los números pares a las primeras posiciones del array (del 0 en adelante) y todos los números impares a las celdas restantes. Utiliza arrays auxiliares si es necesario. -->
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Ejercicio 07</title>
</head>

<body>
  <h1>Pares - Impares</h1>
  <?php
  $arrayMixto = array();
  echo "Array desordenado: ";
  for ($i = 0; $i < 20; $i++) {
    array_push($arrayMixto, rand(0, 100));
    echo $arrayMixto[$i] . " ";
  }
  $arrayPares = array();
  $arrayImpares = array();
  foreach ($arrayMixto as $value) {
    ($value % 2 == 0) ? array_push($arrayPares, $value) : array_push($arrayImpares, $value);
  }

  $arrayOrdenado = array_merge($arrayPares, $arrayImpares);
  echo "<br>Array ordenado:";
  foreach ($arrayOrdenado as $value) {
    echo $value . " ";
  }
  ?>
</body>

</html>