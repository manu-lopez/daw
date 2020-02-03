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
    if(isset($_GET["tabla"])){
        switch ($_GET["tabla"]) {
            case 'producto':
                $queryProducto1 = 'DELETE FROM stock WHERE cod="'.$_GET["cod"].'"';
                $queryProducto2 = 'DELETE FROM producto WHERE cod="'.$_GET["cod"].'"';
                break;
            case 'familia':
                $query = 'DELETE FROM familia WHERE cod="'.$_GET["cod"].'"';
                break;
            case 'tienda':
                $query = 'DELETE FROM tienda WHERE cod='.$_GET["cod"];
                break;
            case 'stock':
                $query = 'DELETE FROM stock WHERE cod="'.$_GET["cod"].'"';
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

            if ($_GET["tabla"] == 'producto'){
                //elimino stock
                if ($dwes->query($queryProducto1) != true) $realizado = false;
                //Elimino producto
                if ($dwes->query($queryProducto2) != true) $realizado = false;
            } else {
                if ($dwes->query($query) != true) $realizado = false;
            }


            if($realizado == true){
                echo "<br>Se ha borrado correctamente los datos.";
                $dwes->commit();
            } else{
                echo "<br>ERROR: No se ha podido borrar los datos.";
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