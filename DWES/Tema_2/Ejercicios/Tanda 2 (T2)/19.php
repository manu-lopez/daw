<!-- Realiza un programa que diga si un número entero positivo introducido por teclado es capicúa. Se permiten números de hasta 5 cifras.  -->
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Ejercicio 19</title>
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
    $arrayInverso = array_reverse($arrayNumero);
    $numeroInverso = implode($arrayInverso);
    echo (($numero == $numeroInverso) ? "Es capicua" : "No es capicua");
  }
  ?>
</body>

</html>