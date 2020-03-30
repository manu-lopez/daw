<?php
    // var_dump($_POST);
    // var_dump($_FILES);
    // $_FILES["foto"]["name"]; nombre del archivo
    // $_FILES["foto"]["tmp_name"]; nombre de la carpeta temporal en el que se almacena el archivo
    // $_FILES["foto"]["type"]; tipo del archivo
    // $_FILES["foto"]["error"]; si hubiera algún error
    // $_FILES["foto"]["size"]; tamaño en bytes
    
    if($_FILES["foto"]["type"] != "image/jpeg" && $_FILES["foto"]["type"] != "image/jpg"){
        echo "ERROR";
    }else{
        move_uploaded_file($_FILES["foto"]["tmp_name"], "archivos_subidos/".$_POST["nombre"]."-".$_FILES["foto"]["name"]);
        echo "archivos_subidos/".$_POST["nombre"]."-".$_FILES["foto"]["name"];
    }
    
?>