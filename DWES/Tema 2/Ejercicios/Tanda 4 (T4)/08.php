<!-- Realiza un programa que pida 10 números por teclado y que los almacene en un array. A continuación se mostrará el contenido de ese array junto al índice (0 – 9) utilizando para ello una tabla. Seguidamente el programa pasará los primos a las primeras posiciones, desplazando el resto de números (los que no son primos) de tal forma que no se pierda ninguno. Al final se debe mostrar el array resultante. -->
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Ejercicio 8</title>
</head>

<body>
  <form action="" method="post">
    Introduzca número: <input type="number" name="numero" required autofocus>
    <input type="submit" value="Mandar">
  </form>

  <?php
  function esPrimo($numero)
  {
    if ($numero == 1) {
      return false;
    }
    for ($i = 2; $i <= round($numero / 2); $i++) {
      if ($numero % $i == 0) return false;
    }
    return true;
  }

  function convertirArray($array)
  {
    $primos = array();
    $noPrimos = array();
    foreach ($array as $valor) {
      (esPrimo($valor) == true) ? array_push($primos, $valor) : array_push($noPrimos, $valor);
    }
    return array_merge($primos, $noPrimos);
  }

  session_start();
  if (!isset($_SESSION["numeros"])) {
    $_SESSION["numeros"] = array();
    $_SESSION["contador"] = 0;
  }

  if (isset($_POST["numero"])) {
    array_push($_SESSION["numeros"], $_POST["numero"]);
    $_SESSION["contador"]++;

    //Mostramos al llegar a 10 numeros pedidos
    if ($_SESSION["contador"] == 10) {
      ?>
      <p>Array inicial</p>
      <table border="1">
        <?php
            echo "<tr>";
            foreach ($_SESSION["numeros"] as $clave => $valor) {
              echo "<td>" . $clave . "</td>";
            }
            echo "</tr>";
            echo "<tr>";
            foreach ($_SESSION["numeros"] as $valor) {
              echo "<td>" . $valor . "</td>";
            }
            echo "</tr>";
            ?>
      </table>
      <!-- Array modificado -->
      <p>Array modificado</p>
      <table border="1">
        <?php
            $arrayModificado = convertirArray($_SESSION["numeros"]);
            echo "<tr>";
            foreach ($arrayModificado as $clave => $valor) {
              echo "<td>" . $clave . "</td>";
            }
            echo "</tr>";
            echo "<tr>";
            foreach ($arrayModificado as $valor) {
              echo "<td>" . $valor . "</td>";
            }
            echo "</tr>";
            ?>
      </table>
  <?php
      session_destroy();
    }
  }
  ?>
</body>

</html>