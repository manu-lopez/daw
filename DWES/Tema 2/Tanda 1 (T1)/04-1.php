<!-- Escribe un programa que sume, reste, multiplique y divida dos números introducidos por teclado. -->

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Ejercicio 4</title>
</head>

<body>
  <form action="04-2.php" method="post">
    <input type="number" name="numberX" value=1>
    <input type="number" name="numberY" value=1><br>
    <input type="radio" name="operation" value="sum" checked> Sumar
    <input type="radio" name="operation" value="subtraction"> Restar <br>
    <input type="radio" name="operation" value="multiplication"> Multiplicar
    <input type="radio" name="operation" value="division"> Dividir <br>
    <input type="submit" value="Calcular">
  </form>
</body>

</html>