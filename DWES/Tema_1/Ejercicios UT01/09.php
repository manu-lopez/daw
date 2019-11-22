<!-- Ejercicio 09

Realiza un conversor de pesetas a euros. La cantidad en pesetas que se quiere convertir deberá estar almacenada en una variable. -->

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>

<body>
  <h3>Conversor EURO-PESETA</h3>
  <p>Introduce las pesetas a convertir</p>

  <form action="" method="post">
    <input type="number" name="peseta" id="peseta">
    <input type="submit" value="Convertir">
  </form>

  <?php
  $euro = 0.006;
  $peseta = ((int) $_POST['peseta']) ?? 0;
  echo "<br>", $peseta * $euros;
  ?>

</body>

</html>