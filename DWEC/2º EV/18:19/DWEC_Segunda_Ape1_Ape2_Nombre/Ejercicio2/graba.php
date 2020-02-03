<?php
$usuario = $_POST['usuario'];
$puntos = $_POST['puntos'];
$fecha = date("Y-m-d H:i:s");
$f = fopen("puntuacion.txt","a");
fputs($f,$fecha.";".$usuario.";".$puntos."\n");
fclose($f);
?>