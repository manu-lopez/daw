<?php

//2. esPrimo: Devuelve verdadero si el número que se pasa como parámetro es primo y falso en caso contrario.
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
