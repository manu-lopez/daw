<!-- Realiza un programa que nos diga cuántos dígitos tiene un número entero que puede ser positivo o negativo. Se permiten números de hasta 5 dígitos. -->
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
    Numero 1: <input type="number" name="n1" max="99999" id="n1"><br>
    <input type="submit" value="Ordenar">
  </form>
  <?php
  if (isset($_POST["n1"])) {
    $numero = $_POST["n1"];
    $arrayNumero = str_split($numero);
    echo "Tiene " . count($arrayNumero);
  }
  ?>
</body>

</html>