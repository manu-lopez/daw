<!-- Realiza un programa que resuelva una ecuación de primer grado (del tipo ax + b = 0). -->
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Ejercicio 5</title>
</head>

<body>
  <h3>Resolución ecuación tipo ax + b = 0</h3>
  <form action="" method="post">
    <input type="number" name="valora" placeholder="a" required>x + <input type="number" name="valorb" placeholder="b" required> = 0
    <input type="submit" value="Calcular">
  </form>

  <?php
  if (isset($_POST["valora"]) and isset($_POST["valorb"])) {
    $valorA = $_POST["valora"];
    $valorB = $_POST["valorb"];
    // echo gettype(-$valorB);
    $valorX = (-$valorB / $valorA);
    echo "X vale $valorX";
  }
  ?>
</body>

</html>