<!-- Escribe un programa que diga cuál es la última cifra de un número entero introducido por teclado. -->
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Ejercicio 16</title>
</head>

<body>
  <form action="" method="post">
    Numero 1: <input type="number" name="n1" max="99999" id="n1"><br>
    <input type="submit" value="Ordenar">
  </form>
  <?php
  if (isset($_POST["n1"])) {
    $numero = $_POST["n1"];
    $arrayNumero = array_reverse(str_split($numero));
    echo "Primera cifra es: " . $arrayNumero[0];
  }
  ?>
</body>

</html>