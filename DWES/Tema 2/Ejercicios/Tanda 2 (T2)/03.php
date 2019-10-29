<!-- Escribe un programa en que dado un número del 1 a 7 escriba el correspondiente nombre del día de la semana. -->
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Ejercicio 3 - Tanda 2</title>
</head>

<body>
  <form action="" method="post">
    Introduzca un numero del 1 al 7: <input type="number" name="numero" min="1" max="7" value="1" required>
    <input type="submit" value="Enviar">
  </form>

  <?php
  $dias = [
    "1" => "Lunes",
    "2" => "Martes",
    "3" => "Miércoles",
    "4" => "Jueves",
    "5" => "Viernes",
    "6" => "Sábado",
    "7" => "Domingo"
  ];

  if (isset($_POST["numero"])) {
    $dia = $_POST["numero"];
    echo "El dia de la semana es $dias[$dia]";
  }
  ?>
</body>

</html>