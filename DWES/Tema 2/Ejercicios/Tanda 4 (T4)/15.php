<!-- Realiza un programa que sea capaz de rotar todos los elementos de una matriz cuadrada una posición en el sentido de las agujas del reloj. La matriz debe tener 12 filas por 12 columnas y debe contener números generados al azar entre 0 y 100. Se debe mostrar tanto la matriz original como la matriz resultado, ambas con los números convenientemente alineados -->
<?php
$numeroFilas = 12;
$numerosColumnas = 12;
echo "<p> MATRIZ ORIGINAL </p>";
for ($i = 0; $i < $numeroFilas; $i++) {
  for ($k = 0; $k < $numerosColumnas; $k++) {
    $array[$i][$k] = rand(0, 100);
    echo $array[$i][$k] . " ";
  }
  echo "<br> ";
}
echo "<p> MATRIZ ROTADA </p>";
$arrayNuevo;
for ($filas = 0; $filas < $numeroFilas; $filas++) {
  for ($columnas = 0; $columnas < $numerosColumnas; $columnas++) {
    $arrayNuevo[$filas][$columnas] = $array[($numerosColumnas - 1) - $columnas][$filas];
    echo $arrayNuevo[$filas][$columnas] . " ";
  }
  echo "<br>";
}
?>