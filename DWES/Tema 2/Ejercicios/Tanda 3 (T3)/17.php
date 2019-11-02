<!-- Realiza un programa que sume los 100 números siguientes a un número entero y positivo introducido por teclado. Se debe comprobar que el dato introducido es correcto (que es un número positivo). -->
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>

<body>
  <form action="" method="post">
    Introduce numero: <input type="number" name="number" min="0" required>
    <input type="submit" value="Calcular">
  </form>
  <?php
  if (isset($_POST["number"])) {
    $number = $_POST["number"];
    $limit = ($number + 100);
    $total = 0;
    for ($i = $number; $i < $limit; $i++) {
      $total += $i;
    }
    echo "La suma total es " . $total;
  }
  ?>
</body>

</html>