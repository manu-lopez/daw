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
        <h1>CRUD PHP</h1>
        <p> Ver datos </p>
        <form action="mostrarConjunto.php" method="post">
            Seleccione tabla: <select name="categoria" id="categoria">
                <?php 
            $categoria = array('Producto', 'Stock', 'Familia', 'Tienda');
            foreach ($categoria as $value) {
                ?>
                <option value="<?php echo $value ?>"><?php echo $value ?></option>
                <?php
            }
            ?>
            </select>
            <br>
            <input type="submit" value="Mostrar">
        </form>
        <hr>    
        <p>Añadir datos</p>
        <form action="mostrarAgregar.php" method="post">
            Seleccione tabla: <select name="categoria" id="categoria">
                <?php 
            $categoria = array('Producto', 'Stock', 'Familia', 'Tienda');
            foreach ($categoria as $value) {
                ?>
                <option value="<?php echo $value ?>"><?php echo $value ?></option>
                <?php
            }
            ?>
            </select>
            <br>
            <input type="submit" value="Agregar">
        </form>
    </div>
</body>

</html>