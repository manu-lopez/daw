<!-- Realiza un programa que resuelva una ecuación de segundo grado (del tipo ax2 + bx + c = 0). -->

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Ejercicio 9</title>
</head>

<body>
  <h3>Ejercicio 9</h3>
  <form action="#" method="post">
    <input type="number" name="valorA" id="valorA"> X2 + <input type="number" name="valorB" id="valorB"> + <input type="number" name="valorC" id="valorC"> = 0
    <input type="submit" value="Calcular">
  </form>
  <?php
  if (isset($_POST["valorA"]) and isset($_POST["valorB"]) and isset($_POST["valorC"])) {
    $valorA = intval($_POST["valorA"]);
    $valorB = intval($_POST["valorB"]);
    $valorC = intval($_POST["valorC"]);

    // 0x^2 + 0x + 0 = 0
    if ($valorA == 0 and $valorB == 0 and $valorC == 0) {
      echo "Infinitas soluciones";
    }

    // 0x^2 + 0x + c = 0  con c distinto de 0
    if ($valorA == 0 and $valorB == 0 and $valorC != 0) {
      echo "No tiene solución";
    }

    // ax^2 + bx + 0 = 0  con a y b distintos de 0
    if ($valorA != 0 and $valorB != 0 and $valorC == 0) {
      echo  "x<sub>1</sub> = 0";
      echo  "<br>x<sub>2</sub> = ", (-$valorB / $valorA);
    }

    // 0x^2 + bx + c = 0  con b y c distintos de 0
    if ($valorA == 0 and $valorB != 0 and $valorC != 0) {
      echo  "x<sub>1</sub> = x<sub>2</sub> = ", (-$valorC / $valorB);
    }

    // ax^2 + bx + c = 0  con a, b y c distintos de 0
    if ($valorA != 0 and $valorB != 0 and $valorC != 0) {
      $discrimintante = (pow($valorB, 2) - (4 * $valorA * $valorB));

      if ($discrimintante < 0) {
        echo "No tiene solución real";
      } else {
        echo  "x<sub>1</sub> = ", (-$valorB + sqrt($discriminante)) / (2 * $valorA);
        echo  "<br>x<sub>2</sub> = ", (-$valorB - sqrt($discriminante)) / (2 * $valorA);
      }
    }
  }
  ?>
</body>

</html>