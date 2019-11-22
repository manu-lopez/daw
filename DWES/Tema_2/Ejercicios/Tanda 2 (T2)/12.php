<!-- Realiza un minicuestionario con 10 preguntas tipo test sobre las asignaturas que se imparten en el curso. Cada pregunta acertada sumará un punto. El programa mostrará al final la calificación obtenida. Pásale el minicuestionario a tus compañeros y pídeles que lo hagan para ver qué tal andan de conocimientos en las diferentes asignaturas del curso. -->
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Ejercicio 12</title>
</head>

<body>
  <h3>Cuestionario</h3>
  <?php
  $preguntas = array(
    1 => array("Que es linux?" => array("Un juego", "Un sistema operativo", "Un coche")),
    2 => array("Que es php?" => array("Un lenguaje", "Un sistema operativo", "Un coche")),
    3 => array("Que es Tesla?" => array("Un juego", "Un sistema operativo", "Una marca de coches"))
  );
  $correctas = array(
    1 => 1,
    2 => 0,
    3 => 2
  );
  ?>
  <form action="" method="post">
    <?php
    foreach ($preguntas as $npregunta => $preguntas) {
      echo "<p>" . $npregunta;
      foreach ($preguntas as $pregunta => $respuestas) {
        echo "- " . $pregunta . "</p>";
        $contador = 0;
        foreach ($respuestas as $respuesta) {
          if ($contador == $correctas[$npregunta]) {
            echo '<input type="radio" name="r' . $npregunta . '" value="1"> ' . $respuesta;
          } else {
            echo '<input type="radio" name="r' . $npregunta . '" value="0"> ' . $respuesta;
          }
          $contador++;
        }
        echo "<br>";
      }
    }
    ?>
    <br>
    <input type="submit" value="Enviar">
    <?php
    $puntos = $_POST['r1'] + $_POST['r2'] + $_POST['r3'];
    echo "Ha obtenido $puntos puntos.";
    ?>
  </form>
</body>

</html>