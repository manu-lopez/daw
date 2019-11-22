<!-- Realiza un conversor de euros a pesetas. Ahora la cantidad en euros que se quiere convertir se deberá introducir por teclado. -->

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Ejercicio 2</title>
</head>

<body>
  <?php
  $euros = $_POST['cantidadEuros'] * 100;
  $pesetas = 166.386;

  echo (($euros * $pesetas) / 100);
  ?>
</body>

</html>