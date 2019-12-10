<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>CRUD</title>
</head>
<body>
    <h3>Salida</h3>
<?php 
    if(isset($_POST["tabla"])){
        switch ($_POST["tabla"]) {
            case 'producto':
                $query = 'INSERT INTO `producto`(`cod`, `nombre`, `nombre_corto`, `descripcion`, `PVP`, `familia`) VALUES ("'.$_POST["cod"].'","'.$_POST["nombre"].'","'.$_POST["nombre_corto"].'","'.$_POST["descripcion"].'",'.$_POST["PVP"].',"'.$_POST["familia"].'")';
                break;
            case 'familia':
                $query = 'INSERT INTO `familia`(`cod`, `nombre`) VALUES ("'.$_POST["cod"].'","'.$_POST["nombre"].'")';
                break;
            case 'tienda':
                $query = 'INSERT INTO `tienda`(`cod`, `nombre`, `tlf`) VALUES ('.$_POST["cod"].',"'.$_POST["nombre"].'",'.$_POST["tlf"].')';
                break;
            case 'stock':
                $query = 'INSERT INTO `stock`(`cod`, `tienda`, `unidades`) VALUES ("'.$_POST["cod"].'", '.$_POST["tienda"].','.$_POST["unidades"].')';
                break;
            default:
                $query = -1;
                break;
        }

        $dwes = new mysqli('localhost', 'dwes', 'abc123', 'dwes');
        $error = $dwes->connect_errno;
        
        if ($error == null){
            $realizado = true;
            $dwes->autocommit(false);

            if ($dwes->query($query) != true) $realizado = false;

            if($realizado == true){
                echo "<br>Se ha agregado correctamente los datos.";
                $dwes->commit();
            } else{
                echo "<br>ERROR: No se ha podido agregar los datos.";
                $dwes->rollback();
            }
        }

    } else {
        echo "Error: no se ha seleccionado tabla.";
    }
?>
<br><a href="index.php">Volver a inicio</a>
</body>
</html>