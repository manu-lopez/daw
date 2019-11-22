<!-- Igual que el ejercicio anterior pero esta vez se debe pintar una pirámide hueca. -->
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Ejercicio 20</title>
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
    for ($i = 0; $i < $altura; $i++) {
      echo str_repeat($espacio, $altura - $i);
      if ($i >= 3 and $i < ($altura - 1)) {
        echo $caracter . str_repeat($espacio, ($i - 2) * 2) . $caracter;
        echo "<br>";
      } else {
        echo str_repeat($caracter, $i);
        echo "<br>";
      }
    }
  }
  ?>
</body>

</html>