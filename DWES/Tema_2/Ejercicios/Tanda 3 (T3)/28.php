<!-- Escribe un programa que calcule el factorial de un número entero leído por teclado. -->
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Ejercicio 28</title>
</head>

<body>
  <p>Escribe un programa que calcule el factorial de un número entero leído por teclado.</p>
  <form action="" method="post">
    Introduzca numero: <input type="number" name="numero" required autofocus>
    <input type="submit" value="Factorial">
  </form>
  <?php
  if (isset($_POST["numero"])) {
    $total = 1;
    for ($i = 1; $i <= $_POST["numero"]; $i++) {
      $total *= $i;
    }
    echo $total;
  }
  ?>
</body>

</html>