<!-- Escribe un programa que dados dos números, uno real (base) y un entero positivo (exponente), saque por pantalla todas las potencias con base el numero dado y exponentes entre uno y el exponente introducido. No se deben utilizar funciones de exponenciación. Por ejemplo, si introducimos el 2 y el 5, se deberán mostrar ¿21, 22, 23, 24, 25.? -->

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Ejercicio 15</title>
</head>

<body>
  <?php
  if (!isset($_POST["base"]) and !isset($_POST["exponente"])) {
    ?>
    <form action="15.php" method="post">
      Introduce la base: <input type="number" name="base">
      Introduce el exponente: <input type="number" name="exponente">
      <input type="submit" value="Calcular">
    </form>
  <?php
  } else {

    $base = $total = $_POST["base"];
    $exponente = intval($_POST["exponente"]);

    for ($i = 1; $i <= $exponente; $i++) {
      echo $total . " ";
      $total *= $base;
    }
  }
  ?>
  <br><br>
  <a href="15.php">Volver</a>
</body>

</html>