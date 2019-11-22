<!-- Realiza un programa que pida un número por teclado y que luego muestre ese número al revés. -->
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Ejercicio 25</title>
</head>

<body>
  <form action="" method="post">
    Introduzca numero: <input type="number" name="numero" required autofocus>
    <input type="submit" value="Mostrar">
  </form>
  <?php
  if (isset($_POST["numero"])) {
    // Lo que hacemos es lo siguiente: 
    // El número lo dividimos por carácter y lo convertimos en un array, posteriormente le "damos la vuelta" a este array y luego lo volvemos a pasar a string mediante join
    echo "El número " . $_POST["numero"] . " al revés es " . join("", array_reverse(str_split($_POST["numero"], 1)));
  }
  ?>
</body>

</html>