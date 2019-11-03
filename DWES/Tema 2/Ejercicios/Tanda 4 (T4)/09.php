<!-- Realiza un programa que pida 10 números por teclado y que los almacene en un array. A continuación se mostrará el contenido de ese array junto al índice (0 – 9). Seguidamente el programa pedirá dos posiciones a las que llamaremos “inicial” y “final”. Se debe comprobar que inicial es menor que final y que ambos números están entre 0 y 9. El programa deberá colocar el número de la posición inicial en la posición final, rotando el resto de números para que no se pierda ninguno. Al final se debe mostrar el array resultante. -->

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Ejercicio 9</title>
</head>

<body>
  <form action="" method="post">
    Introduzca número: <input type="number" name="numero" required autofocus>
    <input type="submit" value="Mandar">
  </form>
  <?php
  function convertirArray($array, $inicio, $final)
  {
    if (($inicio < $final) or ($inicio > 0) or ($inicio < 9) or ($final > 0) or ($final < 9)) {
      $nuevoArray[0] = 0;
      foreach ($array as $clave => $valor) {
        //si es la posicion introducida
        if ($clave == $final) {
          $nuevoArray[$clave] = $array[$inicio];
          // si es la ultima posición
        } elseif ($clave == (count($array) - 1)) {
          $nuevoArray[0] = $valor;
          $nuevoArray[$clave] = $valor;
          //El resto de posiciones
        } else {
          $nuevoArray[$clave] = $valor;
        }
      }
      return $nuevoArray;
    } else {
      echo "Datos incorrector";
    }
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
    if ($_SESSION["contador"] >= 10) {
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
      <br>
      <form action="" method="post">
        Inicio: <input type="number" name="inicio" required autofocus>
        Final: <input type="number" name="final" required autofocus>
        <input type="submit" value="Cambiar">
      </form>
    <?php
      }
    }
    if (isset($_POST["inicio"]) and isset($_POST["final"])) {
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
    <br>
    <!-- Array modificado -->
    <p>Array modificado</p>
    <table border="1">
      <?php
        $arrayModificado = convertirArray($_SESSION["numeros"], $_POST["inicio"], $_POST["final"]);
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
  ?>
</body>

</html>