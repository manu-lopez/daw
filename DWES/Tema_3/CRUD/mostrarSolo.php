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
    <div class="container">
    <a href="index.php">Volver a inicio</a>
    <h3>Modificar</h3>
        <?php 
            $dwes = new mysqli('localhost', 'dwes', 'abc123', 'dwes');
            $error = $dwes->connect_errno;
            if ($error == null){
                //obtengo columnas
                $query = "SELECT COLUMN_NAME FROM INFORMATION_SCHEMA.COLUMNS WHERE TABLE_SCHEMA = 'dwes' AND TABLE_NAME = '".strtolower($_GET['tabla'])."'";
                $queryColumnas = $dwes->query($query);
                //obtengo tabla
                $resultado = $dwes->query("SELECT * FROM ".strtolower($_GET['tabla'])." WHERE cod='".$_GET['id']."'");
                if ($resultado) {
                    echo '<form action="actualizar.php" method="POST">';
                    echo '<input type="hidden" name="tabla" value="'.strtolower($_GET['tabla']).'">';
                    while ($dato = $resultado->fetch_array()){
                        while($r = $queryColumnas->fetch_assoc()){

                            //NOTE  Meter datos en inputs
                            if ($r["COLUMN_NAME"] == 'cod') {
                                echo '<input type="hidden" name="'.$r["COLUMN_NAME"].'" value="'.$dato[$r["COLUMN_NAME"]].'">';
                            }elseif ($r["COLUMN_NAME"] == 'descripcion') {
                                echo $r["COLUMN_NAME"].'<textarea name="'.$r["COLUMN_NAME"].'" rows="4" cols="50">'.$dato[$r["COLUMN_NAME"]].'</textarea>';
                            }else{
                                echo $r["COLUMN_NAME"].'<input type="text" name="'.$r["COLUMN_NAME"].'" value="'.$dato[$r["COLUMN_NAME"]].'">';
                            }
                            echo '<br>';
                        }

                    }
                    echo '<br><input type="submit" value="Modificar">';
                    echo '</form>';
                } else {
                    echo $dwes->connect_errno;
                }
            }
            ?>
    </div>
</body>

</html>