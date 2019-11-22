<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>

<body>
  <?php
  $base = $_POST['baseImponible'];
  $impuesto = $_POST['impuesto'];
  $total = $base + ($base * $impuesto);

  ?>
  <p>Base Imponible: <?= $base ?></p>
  <p>Tipo de impuesto: <?php echo ($impuesto == ".21" ? "IVA" : "IRPF"); ?></p>
  <p>Cantidad del impuesto: <?= $impuesto * 100 ?>%</p>
  <p>Total: <?= $total ?>€</p>
</body>

</html>