<!-- Realiza un programa que calcule el tiempo que tardará en caer un objeto desde una altura h. Aplica t=√2h/g siendo g = 9.81m/s2 -->
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Ejercicio 6</title>
</head>

<body>
  <h3>Ejercicio 6</h3>
  <form action="" method="post">
    Introduzca la altura: <input type="number" name="altura" value="0" required>
    <input type="submit" value="Calcular">
  </form>

  <?php
  if (isset($_POST["altura"])) {
    $altura = intval($_POST["altura"]);
    $gravedad = 9.81;
    $resultado = sqrt((2 * $altura) / $gravedad);
    echo "El tiempo que tarda un objeto en caer desde $altura m es $resultado";
  }
  ?>
</body>

</html>