<?php 
header("Access-Control-Allow-Origin: *");
 $c = new MYSQLI("localhost", "root", "(mariadb)", "provincias");
 $c->query("SET NAMES utf8");
 $r = $c->query("SELECT * FROM autonomias");
 echo json_encode($r->fetch_all(MYSQLI_ASSOC));
?>