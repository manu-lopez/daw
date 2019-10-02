<!-- Ejercicio 03

Escribe un programa que muestre por pantalla 10 palabras en inglés junto a su correspondiente traducción al castellano. Las palabras deben estar distribuidas en dos columnas. Utiliza la etiqueta <table> de HTML. -->

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
  echo "  
    <table>
  <tr>
    <th> Español </th>
    <th> Inglés </th>
  </tr>
  <tr>
    <td> Adios </td>
    <td> Bye </td>
  </tr>
  <tr>
    <td> Casa </td>
    <td> House </td>
  </tr>
  <tr>
    <td> Hablar </td>
    <td> Speak </td>
  </tr>
  <tr>
    <td> Bolígrafo </td>
    <td> Pen </td>
  </tr>
  <tr>
    <td> Perro </td>
    <td> Dog </td>
  </tr>
  <tr>
    <td> Gato </td>
    <td> Cat </td>
  </tr>
  <tr>
    <td> Ciudad </td>
    <td> City </td>
  </tr>
  <tr>
    <td> Mar </td>
    <td> Sea </td>
  </tr>
  <tr>
    <td> Luna </td>
    <td> Moon </td>
  </tr>
  <tr>
    <td> Sol </td>
    <td> Sun </td>
  </tr>
  </table>"
  ?>
</body>

</html>