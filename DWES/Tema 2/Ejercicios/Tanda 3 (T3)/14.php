<!-- Escribe un programa que pida una base y un exponente (entero positivo) y que calcule la potencia. -->
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Ejercicio 14</title>
</head>

<body>
  <form action="" method="post">
    Introduce la base: <input type="number" name="base">
    Introduce el exponente: <input type="number" name="exponente">
    <input type="submit" value="Calcular">
  </form>
  <?php
  if (isset($_POST["base"]) and isset($_POST["exponente"])) {
    $base = intval($_POST["base"]);
    $exponente = intval($_POST["exponente"]);
    echo $base . " elevado a " . $exponente . " = " . pow($base, $exponente);
  }
  ?>
</body>

</html>