<?php
$f = fopen("datos.txt","a");
fputs($f,$_REQUEST['email'].
         "-".
         md5($_REQUEST['password']).
         "-".
         $_REQUEST['selectProvincia'].
         "-".
         $_REQUEST['selectDia'].
         "/".
         $_REQUEST['selectMes'].
         "/".
         $_REQUEST['selectAnio'].
         "\n");
echo "OK";
