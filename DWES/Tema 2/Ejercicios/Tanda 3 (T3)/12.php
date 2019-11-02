<!-- Escribe un programa que muestre los n primeros términos de la serie de Fibonacci. El primer término de la serie de Fibonacci es 0, el segundo es 1 y el resto se calcula sumando los dos anteriores, por lo que tendríamos que los términos son 0, 1, 1, 2, 3, 5, 8, 13, 21, 34, 55, 89, 144... El número n se debe introducir por teclado. -->
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Ejercicio 12</title>
</head>

<body>
  <h1>Fibonacci</h1>
  <form action="" method="post">
    Introduzca número limite para mostrar: <input type="number" name="number" id="number" required>
    <input type="submit" value="Mostrar">
  </form>
  <?php
  if (isset($_POST["number"])) {
    $limite = $_POST["number"];
    $serie = $n0 = 0;
    $n1 = 1;
    for ($i = 0; $i <= $limite; $i++) {
      echo $serie . " ";
      $serie = $n0 + $n1;
      $n0 = $n1;
      $n1 = $serie;
    }
  }
  ?>
</body>

</html>