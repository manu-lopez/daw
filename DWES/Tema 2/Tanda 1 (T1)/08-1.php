<!-- Escribe un programa que calcule el salario semanal de un trabajador en base a las horas trabajadas. Se pagarán 12 euros por hora. Recogida de datos por teclado mediante formularios -->

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Ejercicio 8</title>
  <style>
    /* Evitar ceguera */
    body {
      background-color: gray;
    }
  </style>
</head>

<body>
  <form action="08-2.php" method="post">
    Introduzca las horas semanales trabajadas: <input type="number" name="horas" value="0" required><br>
    <input type="submit" value="Calcular">
  </form>
</body>

</html>