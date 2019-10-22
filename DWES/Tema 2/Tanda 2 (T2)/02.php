<!-- Realiza un programa que pida una hora por teclado y que muestre luego buenos días, buenas tardes o buenas noches según la hora. Se utilizarán los tramos de 6 a 12, de 13 a 20 y de 21 a 5. respectivamente. Sólo se tienen en cuenta las horas, los minutos no se deben introducir por teclado. -->
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Ejercicio 2 - Tanda 2</title>
</head>

<body>
  <h3>Ejercicio 2 - Tanda 2</h3>
  <form action="02-1.php" method="post">
    Introduzca una hora: <input type="time" name="hora" required>
    <input type="submit" value="Enviar">
  </form>

  <?php
  if (isset($_POST["hora"])) {
    $hora = substr($_POST["hora"], 0, 2);
    if ($hora >= 6 and $hora <= 12) {
      echo "Buenos Dias";
    } elseif ($hora >= 13 and $hora <= 20) {
      echo "Buenas tardes";
    } elseif (($hora >= 21 and $hora <= 24) or ($hora >= 1 and $hora <= 5)) {
      echo "buenas Noches";
    }
  }
  ?>
</body>

</html>