<!-- Escribe un programa que diga si un número introducido por teclado es o no primo. Un número primo es aquel que sólo es divisible entre él mismo y la unidad. -->
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Ejercicio 16</title>
</head>

<body>
  <form action="" method="post">
    Introduce un número: <input type="number" name="number" required>
    <input type="submit" value="¿Es primo?">
  </form>
  <?php
  $esPrimo = true;
  if (isset($_POST["number"])) {
    $number = $_POST["number"];
    for ($i = 2; $i <= ($number / 2); $i++) { // al dividir el rango entre 2, reducimos la carga y sigue siendo efectivo.
      if (($number % $i) == 0) {
        $esPrimo = false;
      }
    }
    echo ($esPrimo) ? "Es primo" : "No es primo";
  }
  ?>
</body>

</html>