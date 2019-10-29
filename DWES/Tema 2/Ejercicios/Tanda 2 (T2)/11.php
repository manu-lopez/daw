<!-- Escribe un programa que dada una hora determinada (horas y minutos), calcule los segundos que faltan para llegar a la medianoche. -->
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Ejercicio 11</title>
</head>

<body>
  <h3>Calculador segundos</h3>
  <form action="#" method="post">
    Introduzca una hora: <input type="time" name="tiempo" id="tiempo">
    <input type="submit" value="Calcular">
  </form>

  <?php
  if (isset($_POST["tiempo"])) {
    $tiempo = $_POST["tiempo"];
    $horas = substr($tiempo, 0, 2);
    $minutos = substr($tiempo, 3, 4);

    //24 horas x 3600 segundos dan 86400
    $total = (24 * 3600);
    $transcurrido = ($horas * 3600) + ($minutos * 60);
    $restante = $total - $transcurrido;
    echo "Quedan para las 12 de la noche: " . $restante . " segundos";
  }
  ?>
</body>

</html>