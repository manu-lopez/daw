<!-- Escribe un programa que muestre por pantalla todos los números enteros positivos menores a uno leído por teclado que no sean divisibles entre otro también leído de igual forma.  -->
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Ejercicio 29</title>
</head>

<body>
  <p>Escribe un programa que muestre por pantalla todos los números enteros positivos menores a uno leído por teclado que no sean divisibles entre otro también leído de igual forma. </p>
  <form action="" method="post">
    Introduzca numero 1: <input type="number" name="numero1" required autofocus>
    Introduzca numero 2: <input type="number" name="numero2" required autofocus>
    <input type="submit" value="Mostrar">
  </form>
  <?php
  if (isset($_POST["numero1"]) and isset($_POST["numero2"])) {
    for ($i = 1; $i <= $_POST["numero1"]; $i++) {
      if ($i % $_POST["numero2"] == 0) {
        echo $i . " ";
      }
    }
  }
  ?>
</body>

</html>