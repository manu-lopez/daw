<!-- Escribe un programa que nos diga el horóscopo a partir del día y el mes de nacimiento. -->
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Ejercicio 10</title>
</head>

<body>
  <h3>Horóscopo</h3>
  <form action="#" method="post">
    Introduzca su fecha de nacimiento: <input type="date" name="fecha" id="fecha">
    <input type="submit" value="Mostrar">
  </form>

  <?php
  if (isset($_POST["fecha"])) {
    $fecha = DateTime::createFromFormat('Y-m-d', $_POST["fecha"]);
    $dia = $fecha->format('d');
    $mes = $fecha->format('m');

    $horoscopo = array(
      "01" => ($dia < 21) ? "capricornio" : "acuario",
      "02" => ($dia < 20) ? "acuario" : "piscis",
      "03" => ($dia < 21) ? "piscis" : "aries",
      "04" => ($dia < 21) ? "aries" : "tauro",
      "05" => ($dia < 20) ? "tauro" : "géminis",
      "06" => ($dia < 22) ? "géminis" : "cáncer",
      "07" => ($dia < 22) ? "cáncer" : "leo",
      "08" => ($dia < 24) ? "leo" : "virgo",
      "09" => ($dia < 23) ? "virgo" : "libra",
      "10" => ($dia < 23) ? "libra" : "escorpio",
      "11" => ($dia < 23) ? "escorpio" : "sagitario",
      "12" => ($dia < 21) ? "sagitario" : "capricornio",
    );

    echo "Su horoscopo es: " . $horoscopo[$mes];
  }
  ?>
</body>

</html>