<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Subir imagenes</title>
    <style>
body {
    font-family: Arial, sans-serif;
    background-color: #f4f4f4;
    margin: 0;
    padding: 0;
    background-repeat: no-repeat;
    background-size: cover;
    background-attachment: fixed;
}
</style>
</head>
<body>

    <?php
    $carpeta = "media/";

    if(!empty($_FILES["archivo"]["name"])){
        $archivo = $_FILES["archivo"]["name"];
        $ruta_temporal = $_FILES["archivo"]["tmp_name"];
        $tipo_archivo = $_FILES["archivo"]["type"];
        $tamano_archivo = $_FILES["archivo"]["size"];
        
        if($tipo_archivo != "image/jpg" && $tipo_archivo != "image/png" && $tipo_archivo != "image/jpeg" && $tipo_archivo != "image/gif")
        {
            echo "Error: Solo se permiten imagenes JPG, PNG y GIF";
            return;
        }
        
        if($tamano_archivo > 3072000)
        {
            echo "Error: El archivo es demasiado grande";
            return;
        }

        move_uploaded_file($ruta_temporal, $carpeta . $archivo);
        echo "Se ha enviado el archivo";
        header ( "Location: upload.php" );
    }   
    else
    {
        echo "No se logro hacer el envio";
        header ( "Location: upload.php" );
    }
    ?>
</body>
</html>