<?php
// utilizando constructores y métodos de la programación orientada a objetos
// $conexion = new mysqli('localhost', 'dwes', 'abc123', 'dwes');
// print $conexion->server_info;

// utilizando llamadas a funciones
// $conexion = mysqli_connect('localhost', 'dwes', 'abc123', 'dwes');
// print mysqli_get_server_info($conexion);

$dwes = new mysqli('localhost', 'dwes', 'abc123', 'dwes');
$error = $dwes->connect_errno;
if ($error != null) {
    echo "<p>Error $error conectando a la base de datos: $dwes->connect_error</p>";
    exit();
}
