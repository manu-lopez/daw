<!-- Define tres arrays de 20 números enteros cada una, con nombres “numero”, “cuadrado” y “cubo”. Carga el array “numero” con valores aleatorios entre 0 y 100. En el array “cuadrado” se deben almacenar los cuadrados de los valores que hay en el array “numero”. En el array “cubo” se deben almacenar los cubos de los valores que hay en “numero”. A continuación, muestra el contenido de los tres arrays dispuesto en tres columnas. -->
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Ejercicio 1</title>
</head>

<body>
  <?php
  $numero = array();
  $cuadrado = array();
  $cubo = array();

  for ($i = 0; $i < 20; $i++) {
    $numero[$i] = rand(0, 100);
    $cuadrado[$i] = pow($numero[$i], 2);
    $cubo[$i] = pow($numero[$i], 3);
  }
  ?>
  <table border="1">
    <tr>
      <th>Numero</th>
      <th>Cuadrado</th>
      <th>Cubo</th>
    </tr>
    <?php
    for ($k = 0; $k < 20; $k++) {
      echo "<tr>";
      echo "<td>";
      echo $numero[$k];
      echo "</td>";
      echo "<td>";
      echo $cuadrado[$k];
      echo "</td>";
      echo "<td>";
      echo $cubo[$k];
      echo "</td>";
      echo "</tr>";
    }
    ?>
  </table>
</body>

</html>