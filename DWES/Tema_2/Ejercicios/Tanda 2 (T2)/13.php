<!-- Escribe un programa que ordene tres números enteros introducidos por teclado. -->
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Ejercicio 13</title>
</head>

<body>
  <form action="" method="post">
    Numero 1: <input type="number" name="n1" id="n1"><br>
    Numero 2: <input type="number" name="n2" id="n2"><br>
    Numero 3: <input type="number" name="n3" id="n3"><br>
    <input type="submit" value="Ordenar">
  </form>

  <?php
  if (isset($_POST["n1"]) and isset($_POST["n2"]) and isset($_POST["n3"])) {
    $numeros = array($_POST["n1"], $_POST["n2"], $_POST["n3"]);
    sort($numeros);
    echo "Los números introducidos ordenados de menor a mayor son $numeros[0], $numeros[1] y $numeros[2].";
  }

  ?>
</body>

</html>