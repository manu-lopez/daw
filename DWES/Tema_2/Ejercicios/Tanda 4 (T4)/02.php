<!-- Escribe un programa que pida 10 números por teclado y que luego muestre los números introducidos junto con las palabras “máximo” y “mínimo” al lado del máximo y del mínimo respectivamente. -->
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Ejercicio 02</title>
</head>

<body>
  <form action="" method="post">
    Introduzca numero: <input type="number" name="numero" required autofocus>
    <input type="submit" value="Mandar">
  </form>
  <?php
  //Iniciamos sesion
  session_start();
  //Comprobamos si habia sesion anterior o si se ha pasado numero ya, si no se inicializa variables.
  if (!isset($_POST["numero"])) {
    $_POST["numero"] = 0;
    $_SESSION["contador"] = 0;
    $_SESSION["numeros"] = array();
  } else {
    //se añaden numeros al array y se aumenta el contador
    array_push($_SESSION["numeros"], $_POST["numero"]);
    $_SESSION["contador"]++;
    //Cuando el contador llega a 10 se recorre el array y se muestra
    if ($_SESSION["contador"] == 10) {
      foreach ($_SESSION["numeros"] as $i) {
        echo $i;
        if ($i == max($_SESSION["numeros"])) echo " Máximo";
        if ($i == min($_SESSION["numeros"])) echo " Mínimo";
        echo "<br>";
      }
      session_destroy();
    }
  }
  ?>
</body>

</html>