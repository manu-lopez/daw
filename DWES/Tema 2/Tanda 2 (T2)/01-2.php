<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Ejercicio 1
  </title>
</head>

<body>
  <?php
  $dia = strtolower($_POST["dia"]);
  $asignatura;
  switch ($dia) {
    case 'lunes':
      $asignatura = "DWES";
      echo "El $dia tienes $asignatura a primera hora";
      break;
    case 'martes':
      $asignatura = "Empresa";
      echo "El $dia tienes $asignatura a primera hora";
      break;
    case 'miércoles':
    case 'miercoles':
      $asignatura = "DIW";
      echo "El $dia tienes $asignatura a primera hora";
      break;
    case 'jueves':
      $asignatura = "DIW";
      echo "El $dia tienes $asignatura a primera hora";
      break;
    case 'viernes':
      $asignatura = "DWES";
      echo "El $dia tienes $asignatura a primera hora";
      break;
    case 'sábado':
    case 'sabado':
    case 'domingo':
      echo "Ese dia no hay clase";
      break;
    default:
      echo "Introducción incorrecta.";
      break;
  }

  ?>
    <br>
    <a href="01-1.php"> Volver </a>
</body>

</html>