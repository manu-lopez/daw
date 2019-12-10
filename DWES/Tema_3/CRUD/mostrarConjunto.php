<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>CRUD</title>
</head>
<body>
<div class="container">
    <a href="index.php">Volver a inicio</a>
<?php
    $dwes = new mysqli('localhost', 'dwes', 'abc123', 'dwes');
    $error = $dwes->connect_errno;
    if ($error == null) {
        //Con esta query obtengo los nombre de las columnas
        $query = "SELECT COLUMN_NAME FROM INFORMATION_SCHEMA.COLUMNS WHERE TABLE_SCHEMA = 'dwes' AND TABLE_NAME = '".strtolower($_POST["categoria"])."'";
        $queryColumnas = $dwes->query($query);
        if($queryColumnas){
            //Guardo en array los datos para la cabezera
            $thead[] = "Accion";
            while($r = $queryColumnas->fetch_assoc()){
                $thead[] = $r["COLUMN_NAME"];
            }
            echo '<table class="table">';
            echo "<tr>";
            //Formo la cabezera
            foreach ($thead as $word) {
                echo "<th>".$word."</th>";
            }
            echo "</tr>";
            
            //Elimino acciones para que cuadre
            unset($thead[0]);
            $resultado = $dwes->query('SELECT * FROM '.strtolower($_POST["categoria"]));
            if ($resultado) {
                //Añado resultados
                while ($row = $resultado->fetch_array()){
                    echo "<tr>";
                    echo '<td><a href="mostrarSolo.php?id='.$row["cod"].'&tabla='.$_POST["categoria"].'">Modificar</a> <a href="eliminar.php?cod='.$row["cod"].'&tabla='.strtolower($_POST["categoria"]).'">Eliminar</a></td>';
                    foreach ($thead as $word) {
                        echo "<td>".$row[$word]."</td>";
                    }
                    echo "</tr>";
                }
            }
            echo "</table>";
        } else {
            echo "error";
        }
        $dwes->close();
      }
      $resultado->free();
      ?>
      </div>
</body>
</html>