<!-- Muestra la tabla de multiplicar de un número introducido por teclado. El resultado se debe mostrar en una tabla (<table> en HTML). -->
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Ejercicio 08</title>
</head>

<body>
  <form action="" method="post">
    Introduzca número para generar su tabla: <input type="number" name="number" id="number" required>
    <input type="submit" value="Mostrar">
  </form>
  <?php
  if (isset($_POST["number"])) {
    echo "<table border=\"1\">";
    echo "<tr>";
    echo "<th>Número</th>";
    echo "<th>Resultado</th>";
    echo "</tr>";
    for ($i = 0; $i <= 10; $i++) {
      echo "<tr>";
      echo "<td>" . $_POST["number"] . " x " . $i . " = </td>";
      echo "<td>" . ($_POST["number"] * $i) . "</td>";
      echo "</tr>";
    }
    echo "</table>";
  }
  ?>
</body>

</html>