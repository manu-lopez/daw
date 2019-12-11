<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
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
                echo '<form action="agregar.php" method="POST">';
                echo '<input type="hidden" name="tabla" value="'.strtolower($_POST["categoria"]).'">';
                
                while($r = $queryColumnas->fetch_assoc()){
                    if (strtolower($_POST["categoria"]) == 'stock' and $r["COLUMN_NAME"] == 'cod') {
                        $queryCodStock = 'SELECT cod FROM producto'; // lo mostramos en stock -> cod
                        $codStock = $dwes->query($queryCodStock);
                        echo $r["COLUMN_NAME"].'<select name="cod" id="cod">';
                        while($cod = $codStock->fetch_assoc()){
                            echo '<option value="'.$cod["cod"].'">'.$cod["cod"].'</option>';
                        }
                        echo '</select><br>';
                    } elseif (strtolower($_POST["categoria"]) == 'producto' and $r["COLUMN_NAME"] == 'familia') {
                        $queryCodFamilia = 'SELECT cod FROM familia'; // lo mostramos en producto -> familia
                        $codFamilia = $dwes->query($queryCodFamilia);
                        echo $r["COLUMN_NAME"].'<select name="cod" id="cod">';
                        while($cod = $codFamilia->fetch_assoc()){
                            echo '<option value="'.$cod["cod"].'">'.$cod["cod"].'</option>';
                        }
                        echo '</select><br>';
                    }else {
                        if ($r["COLUMN_NAME"] == 'descripcion') {
                            echo $r["COLUMN_NAME"].'<textarea name="'.$r["COLUMN_NAME"].'" rows="4" cols="50"></textarea>';
                        }else{
                            echo $r["COLUMN_NAME"].'<input type="text" name="'.$r["COLUMN_NAME"].'" value="">';
                        }
                        echo '<br>';
                    }
                }
                echo '<br><input type="submit" value="Agregar">';
                echo '</form>';
            }
        }
        ?>
    </div>
</body>

</html>