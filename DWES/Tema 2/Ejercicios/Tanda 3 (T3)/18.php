<!-- Escribe un programa que obtenga los números enteros comprendidos entre dos números introducidos por teclado y validados como distintos, el programa debe empezar por el menor de los enteros introducidos e ir incrementando de 7 en 7. -->

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Ejercicio 18</title>
</head>

<body>
  <form action="" method="post">
    Introduce numero 1: <input type="number" name="number1" required>
    Introduce numero 2: <input type="number" name="number2" required>
    <input type="submit" value="Mostrar">
  </form>
  <?php
  if (isset($_POST["number1"]) and isset($_POST["number1"])) {
    $number1 = $_POST["number1"];
    $number2 = $_POST["number2"];


    function showNumbersInBetween($lowNumber, $highNumber)
    {
      for ($i = $lowNumber; $i <= $highNumber; $i += 7) {
        echo $i . " ";
      }
    }

    if ($number1 != $number2) {
      if ($number1 < $number2) {
        showNumbersInBetween($number1, $number2);
      } else {
        showNumbersInBetween($number2, $number1);
      }
    } else {
      echo "Los numeros era iguales";
    }
  }
  ?>
</body>

</html>