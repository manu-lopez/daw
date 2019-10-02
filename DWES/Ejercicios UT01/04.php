<!-- Ejercicio 04

Escribe un programa que muestre tu horario de clase mediante una tabla. Aunque se puede hacer íntegramente en HTML (igual que los ejercicios anteriores), ve intercalando código HTML y PHP para familiarizarte con éste último. -->

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>

<body>
  <?php
  echo '  <table border="1">
    <tr>
      <th>Lunes</th>
      <th>Martes</th>
      <th>Miercoles</th>
      <th>Jueves</th>
      <th>Viernes</th>
    </tr>
    <tr>
      <td>DWES</td>
      <td></td>
      <td>DIW</td>
      <td>DIW</td>
      <td>DWES</td>
    </tr>
    <tr>
      <td>DWES</td>
      <td></td>
      <td>DIW</td>
      <td>DIW</td>
      <td>DWES</td>
    </tr>
    <tr>
      <td>DWES</td>
      <td>DAW</td>
      <td>DWES</td>
      <td>DIW</td>
      <td>DWEC</td>
    </tr>
    <tr>
      <td>RECREO</td>
      <td>RECREO</td>
      <td>RECREO</td>
      <td>RECREO</td>
      <td>RECREO</td>
    </tr>
    <tr>
      <td>DWEC</td>
      <td>DIW</td>
      <td>DWES</td>
      <td>DAW</td>
      <td>DWEC</td>
    </tr>
    <tr>
      <td>DWEC</td>
      <td>DIW</td>
      <td>DWES</td>
      <td>DAW</td>
      <td>DWEC</td>
    </tr>
    <tr>
      <td>DWES</td>
      <td>DIW</td>
      <td></td>
      <td></td>
      <td>DIW</td>
    </tr>
  </table>';
  ?>
</body>

</html>