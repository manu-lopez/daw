<!-- Escribe un programa que lea un número N e imprima una pirámide de números con N filas como en la siguiente figura. Recuerda utilizar un tipo de letra de ancho fijo como por ejemplo Courier para que los espacios tengan la misma anchura que los números. -->
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Ejercicio 24</title>
</head>

<body>
  <form action="" method="post">
    Introduzca numero: <input type="number" name="filas" required autofocus>
    <input type="submit" value="Mostrar">
  </form>
  <?php
  $espacio = "&nbsp";
  $n = 1;

  if (isset($_POST["filas"])) {
    $espacios = $filas = $_POST["filas"];

    while ($n <= $filas) {
      //pinto espacios
      for ($i = 0; $i < $espacios; $i++) {
        echo str_repeat($espacio, 2);
      }

      //pinto numeros hasta el centro
      for ($k = 1; $k <= $n; $k++) {
        echo $k;
      }
      //pinto numeros a partir del centro
      for ($j = ($n - 1); $j > 0; $j--) {
        echo $j;
      }
      echo "<br>";
      $n++;
      $espacios--;
    }
  }
  ?>
</body>

</html>