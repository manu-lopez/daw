<!-- Escribe un programa que muestre en tres columnas, el cuadrado y el cubo de los 5 primeros números enteros a partir de uno que se introduce por teclado. -->

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Ejercicio 11</title>
</head>

<body>
  <form action="" method="post">
    Introduzca número: <input type="number" name="number" id="number" required>
    <input type="submit" value="Mostrar">
  </form>
  <?php
  if (isset($_POST["number"])) {
    $number = $_POST["number"];
    echo '<table border="1"';
    echo '<tr>';
    echo '<th>Número</th>';
    echo '<th>Cuadrado</th>';
    echo '<th>Cubo</th>';
    echo '</tr>';
    for ($i = $number; $i < ($number + 5); $i++) {
      echo '<tr>';
      echo '<td>' . $i . '</td>';
      echo '<td>' . pow($i, 2) . '</td>';
      echo '<td>' . pow($i, 3) . '</td>';
      echo '</tr>';
    }
    echo '</table';
  }
  ?>
</body>

</html>