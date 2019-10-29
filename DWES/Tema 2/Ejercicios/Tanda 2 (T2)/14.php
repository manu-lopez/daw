<!-- Realiza un programa que diga si un número introducido por teclado es par y/o divisible entre 5. -->

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Ejercicio 14</title>
</head>

<body>
  <form action="" method="post">
    Numero 1: <input type="number" name="n1" id="n1"><br>
    <input type="submit" value="Enviar">
  </form>
  <?php
  if (isset($_POST["n1"])) {
    $numero = $_POST["n1"];
    echo ((($numero % 2) == 0) ? "Es par" : "Es impar");
    echo "<br>";
    echo ((($numero % 5) == 0) ? "Es divisible entre 5" : "No es divisible entre 5");
  }
  ?>
</body>

</html>