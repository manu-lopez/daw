<!-- Realiza un programa que sea capaz de rotar todos los elementos de una matriz cuadrada una posición en el sentido de las agujas del reloj. La matriz debe tener 12 filas por 12 columnas y debe contener números generados al azar entre 0 y 100. Se debe mostrar tanto la matriz original como la matriz resultado, ambas con los números convenientemente alineados -->
<?php
$numeroFilas = $numerosColumnas = 5;
$fila = $columna = 0;

echo "<p> MATRIZ ORIGINAL </p>";
for ($i = 0; $i < $numeroFilas; $i++) {
  for ($k = 0; $k < $numerosColumnas; $k++) {
    $array[$i][$k] = rand(0, 100);
    // $array[$i][$k] = $k; // rellenamos con numero consecutivos, para facilitar desarrollo
    echo $array[$i][$k] . " ";
  }
  echo "<br> ";
}
echo "<p> MATRIZ ROTADA </p>";
$nuevoArray = $array;
while ($fila < $numeroFilas and $columna < $numerosColumnas) {

  //Primera fila

  //Guardamos primer valor de la fila siguiente
  $valorPrevio = $array[$fila + 1][$columna];

  for ($i = $columna; $i < $numerosColumnas; $i++) {
    $valorActual = $array[$fila][$i];
    $nuevoArray[$fila][$i] = $valorPrevio;
    $valorPrevio = $valorActual;
  }
  $fila++;

  //Ultima Columna
  for ($i = $fila; $i < $numeroFilas; $i++) {
    $valorActual = $array[$i][$numerosColumnas - 1];
    $nuevoArray[$i][$numerosColumnas - 1] = $valorPrevio;
    $valorPrevio = $valorActual;
  }
  $numerosColumnas--;

  //Ultima fila
  if ($fila < $numeroFilas) {
    for ($i = $numerosColumnas - 1; $i >= $columna; $i--) {
      $valorActual = $array[$numeroFilas - 1][$i];
      $nuevoArray[$numeroFilas - 1][$i] = $valorPrevio;
      $valorPrevio = $valorActual;
    }
  }
  $numeroFilas--;

  //Primera Columna
  if ($columna < $numerosColumnas) {
    for ($i = $numeroFilas - 1; $i >= $fila; $i--) {
      $valorActual = $array[$i][$columna];
      $nuevoArray[$i][$columna] = $valorPrevio;
      $valorPrevio = $valorActual;
    }
  }
  $columna++;
}

//Mostramos nuevo array

for ($i = 0; $i < count($array); $i++) {
  for ($k = 0; $k < count($array); $k++) {
    echo $nuevoArray[$i][$k] . " ";
  }
  echo "<br>";
}
?>