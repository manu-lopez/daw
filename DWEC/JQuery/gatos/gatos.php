<?php
    require "conexion.req.php";
    $c =  new MySQLi($host, $user, $pass, $db);
    $c -> query("SET NAMES utf8");
    if(isset($_GET["id"])){
        $sql = "SELECT * FROM gato WHERE id = ".$_GET["id"];
    } else {
        $sql = "SELECT * FROM gato";
    }
    $resultado = $c->query($sql);
    echo json_encode($resultado->fetch_all(MYSQLI_ASSOC));
?>