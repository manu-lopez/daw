<!-- Ejercicio 08

Realiza un conversor de euros a pesetas. La cantidad en euros que se quiere convertir deberá estar almacenada en una variable. -->

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>

<body>
  Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestiae cumque, atque in, harum quibusdam quis quidem inventore ab laborum, dignissimos explicabo fugit illo aliquid voluptatem repellat magnam sint repudiandae nostrum tempora magni. Nesciunt nam unde expedita nostrum sed esse neque.
  <h3>Conversor EURO-PESETA</h3>
  <p>Introduce los euros a convertir</p>

  <form action="" method="post">
    <input type="number" name="euros" id="euros">
    <input type="submit" value="Convertir">
  </form>

  <?php
  $peseta = 166.38;
  if (isset(($_POST['euros']))) {
    $euros = ((int) $_POST['euros']);
    echo "<br>", $peseta * $euros;
  }
  ?>

</body>

</html>