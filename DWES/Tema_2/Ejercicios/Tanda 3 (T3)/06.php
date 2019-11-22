<!-- Muestra los números del 320 al 160, contando de 20 en 20 utilizando un bucle do-while . -->
<?php
$number = 320;
do {
  echo $number . "<br>";
  $number -= 20;
} while ($number >= 160);
?>