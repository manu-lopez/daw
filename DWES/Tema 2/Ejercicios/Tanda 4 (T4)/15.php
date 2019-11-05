<!-- Realiza un programa que sea capaz de rotar todos los elementos de una matriz cuadrada una posición en el sentido de las agujas del reloj. La matriz debe tener 12 filas por 12 columnas y debe contener números generados al azar entre 0 y 100. Se debe mostrar tanto la matriz original como la matriz resultado, ambas con los números convenientemente alineados -->
<?php
$numeroFilas = 3;
$numerosColumnas = 3;
$fila = $columna = 0;

echo "<p> MATRIZ ORIGINAL </p>";
for ($i = 0; $i < $numeroFilas; $i++) {
  for ($k = 0; $k < $numerosColumnas; $k++) {
    // $array[$i][$k] = rand(0, 100);
    $array[$i][$k] = $k;
    echo $array[$i][$k] . " ";
  }
  echo "<br> ";
}
echo "<p> MATRIZ ROTADA </p>";
while ($fila < $numeroFilas and $columna < $numerosColumnas) {

  //Primera fila

  //Guardamos primer valor de la fila siguiente
  $valorPrevio = $array[$fila + 1][$columna];

  for ($i = $fila; $i < $numerosColumnas; $i++) {
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
    for ($i = $numerosColumnas - 1; $i >= $columna; $i--) { }
  }
}
?>