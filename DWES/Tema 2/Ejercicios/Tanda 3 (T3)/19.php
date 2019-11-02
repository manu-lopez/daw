<!-- Realiza un programa que pinte una pirámide por pantalla. La altura se debe pedir por teclado mediante un formulario. La pirámide estará hecha de bolitas, ladrillos o cualquier otra imagen de las 5 que se deben dar a elegir mediante un formulario. -->

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Ejercicio 19</title>
</head>

<body>
  <form action="" method="post">
    Introduzca altura: <input type="number" name="altura" required>
    <select name="figura">
      <option value="*">*</option>
      <option value="•">•</option>
      <option value="#">#</option>
      <option value=""></option>
    </select>
    <input type="submit" value="Construir">
  </form>
  <?php
  $espacio = "&nbsp";

  if (isset($_POST["altura"])) {
    $caracter = $_POST["figura"];
    $altura = $base = $_POST["altura"];
    for ($i = 0; $i <= $altura; $i++) {
      echo str_repeat($espacio, $altura - $i);
      echo str_repeat($caracter, $i);
      echo "<br>";
    }
  }
  ?>
</body>

</html>