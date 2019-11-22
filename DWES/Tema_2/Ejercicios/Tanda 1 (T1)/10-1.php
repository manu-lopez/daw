<!-- Realiza un conversor de Mb a Kb. -->
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Ejercicio 10</title>
</head>

<body>
  <h3>Conversor MB <--> KB</h3>
  <form action="10-2.php" method="post">
    Convertir: <input type="number" name="cantidad" value=0 required>
    <select name="base">
      <option value="mb">mb</option>
      <option value="kb">kb</option>
    </select>
    a
    <select name="conversion">
      <option value="kb">kb</option>
      <option value="mb">mb</option>
    </select>
    <input type="submit" value="Calcular">
  </form>
</body>

</html>