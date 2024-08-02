<?php
    session_start();
    if(isset($_SESSION["usuario"]))
    {
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Subir Imagenes</title>
        <link rel="stylesheet" href="styles/global.css">
        <link rel="stylesheet" href="styles/upload.css">

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
        <nav>
            <a href="index.php"><h1>Galeria de imagenes</h1></a>
            <section class="menu">
                <a href="logout.php">Cerrar sesion</a>
            </section>
        </nav>        
        <h1>Subir Imagenes</h1>
        <h2><?php echo "Bienvenido, " . $_SESSION["usuario"] ?></h2>
        <form action="fileUpload.php" enctype="multipart/form-data" method="post">
            <input type="file" name="archivo">
            <br>
            <input type="submit" value="Enviar">
        </form>
    </body>
</html>
<?php 
}   
else
{
    header( "Location: login.php" );
}
?>