<!-- Vamos a ampliar uno de los ejercicios de la relación anterior para considerar las horas extras. Escribe un programa que calcule el salario semanal de un trabajador teniendo en cuenta que las horas ordinarias (40 primeras horas de trabajo) se pagan a 12 euros la hora. A partir de la hora 41, se pagan a 16 euros la hora. -->

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Ejercicio 4 - Tanda 2</title>
</head>

<body>
  <h3>Ejercicio 4 - Tanda 2</h3>
  <form action="" method="post">
    Introduzca las horas semanales trabajadas: <input type="number" name="horas" min="1" required>
    <input type="submit" value="calcuar">
  </form>
  <?php
  if (isset($_POST["horas"])) {
    $horas = $_POST["horas"];
    if ($horas > 40) {
      $total = (($horas - 40) * 16) + 480;
      echo "Cantidad total por $horas trabajadas es: $total";
    } else {
      $total = $horas * 12;
      echo "Cantidad total por $horas trabajadas es: $total";
    }
  }
  ?>
</body>

</html>