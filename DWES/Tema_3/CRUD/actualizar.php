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
                $query = 'UPDATE producto SET nombre="'.$_POST["nombre"].'", nombre_corto="'.$_POST["nombre_corto"].'", descripcion="'.$_POST["descripcion"].'", PVP='.$_POST["PVP"].', familia="'.$_POST["familia"].'" WHERE cod="'.$_POST["cod"].'"';
                break;
            case 'familia':
                $query = 'UPDATE familia SET nombre="'.$_POST["nombre"].'" WHERE cod="'.$_POST["cod"].'"';
                break;
            case 'tienda':
                $query = 'UPDATE tienda SET nombre="'.$_POST["nombre"].'", tlf='.$_POST["tlf"].' WHERE cod='.$_POST["cod"];
                break;
            case 'stock':
                $query = 'UPDATE stock set unidades='.$_POST["unidades"].' WHERE cod="'.$_POST["cod"].'"';
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
                echo "<br>Se ha actualizado correctamente los datos.";
                $dwes->commit();
            } else{
                echo "<br>ERROR: No se ha podido actualizar los datos.";
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