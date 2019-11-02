<!-- Escribe un programa que muestre, cuente y sume los múltiplos de 3 que hay entre 1 y un número leído por teclado. -->
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Ejercicio 27</title>
</head>

<body>
  <p>Escribe un programa que muestre, cuente y sume los múltiplos de 3 que hay entre 1 y un número leído por teclado.</p>
  <form action="" method="post">
    Introduzca un número: <input type="number" name="numero" required autofocus>
    <input type="submit" value="Mostrar">
  </form>
  <?php
  if (isset($_POST["numero"])) {
    $sonMultiplos = array();
    $total = 0;
    for ($i = 1; $i <= $_POST["numero"]; $i++) {
      if ($i % 3 == 0) {
        array_push($sonMultiplos, $i);
        $total += $_POST["numero"];
      }
    }
    echo join(" ", $sonMultiplos);
    echo "<br>Total: " . $total;
  }
  ?>
</body>

</html>