<?php
//variables a usar
$valorUnicode = 127815;
$arrayUnicodes = $arrayFrutas = array();
$contador = 0;

//generamos array con los valores unicodes que necesitamos
for ($i = 0; $i < 13; $i++) {
  array_push($arrayUnicodes, "&#" . $valorUnicode);
  $valorUnicode += 1;
}

//Rellenamos array con tamaño comprendido entre 7 y 20 de manera aleatoria con las frutas
for ($i = 0; $i <= rand(7, 20); $i++) {
  $arrayFrutas[$i] = $arrayUnicodes[rand(0, count($arrayUnicodes) - 1)];
}

//Comprobar frutas y mostrar resultado
?>
<h1 style="text-align: center">DisFruta con PHP </h1>
<h2>
  <?php
  echo count($arrayFrutas);
  ?>
  frutas</h2>
<p style="font-size: 7rem">
  <?php
  foreach ($arrayFrutas as $key => $value) {
    echo $value;
  }
  ?>
</p>
<h2>Resultados</h2>
<?php
//recorremos el array de los unicodes para comprobar si coincide con el valor del array de frutas, para ellos usamos dos bucles
for ($i = 0; $i < count($arrayUnicodes); $i++) {
  for ($k = 0; $k < count($arrayFrutas); $k++) {
    if ($arrayFrutas[$k] == $arrayUnicodes[$i]) {
      $contador++;
    }
  }
  if ($contador > 0) {
    echo ($contador == 1) ? "<p>La fruta <span style=\"font-size: 2rem\">" . $arrayUnicodes[$i] . "</span> está <strong> " . $contador . "</strong> vez en la lista.</p>" : "<p>La fruta <span style=\"font-size: 2rem\">" . $arrayUnicodes[$i] . "</span> está <strong> " . $contador . "</strong> veces en la lista.</p>";
    //reiniciamos el contador
    $contador = 0;
  }
}
?>
<br>
<button onclick="location.reload()">¡¡¡ DisFruta otra vez !!!</button>
<br>