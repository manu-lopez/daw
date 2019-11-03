<!-- Escribe un programa que lea 15 números por teclado y que los almacene en un array. Rota los elementos de ese array, es decir, el elemento de la posición 0 debe pasar a la posición 1, el de la 1 a la 2, etc. El número que se encuentra en la última posición debe pasar a la posición 0. Finalmente, muestra el contenido del array. -->

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Ejercicio 3</title>
</head>
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
  if ($_SESSION["contador"] == 15) {
    $nuevoArray[0] = 0;
    foreach ($_SESSION["numeros"] as $clave => $valor) {
      ($clave == (count($_SESSION["numeros"]) - 1)) ? $nuevoArray[0] = $valor : $nuevoArray[$clave + 1] = $valor;
    }
    print_r($nuevoArray);
    session_destroy();
  }
}
?>

<body>

</body>

</html>