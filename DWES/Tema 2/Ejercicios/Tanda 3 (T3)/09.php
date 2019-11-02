<!-- Realiza un programa que nos diga cuántos dígitos tiene un número introducido por teclado. -->
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Ejercicio 09</title>
</head>

<body>
  <form action="" method="post">
    Introduzca número: <input type="number" name="number" id="number" required>
    <input type="submit" value="Contar">
  </form>
  <?php
  if (isset($_POST["number"])) {
    echo "Tiene " . strlen($_POST["number"]) . " dígitos";
  }
  ?>
</body>

</html>