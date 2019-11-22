<!-- Escribe un programa que calcule el total de una factura a partir de la base imponible. -->
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
  <style>
    /* Evitar ceguera */
    body {
      background-color: gray;
    }
  </style>
</head>

<body>
  <h3>Formación de factura</h3>
  <form action="07-2.php" method="post">
    Base imponible: <input type="number" name="baseImponible" value=0 required><br>
    Tipo contribución:
    <select name="impuesto" id="">
      <option value=".21">IVA</option>
      <option value=".12">IRFP</option>
    </select>
    <br><input type="submit" value="Calcular">
  </form>
</body>

</html>