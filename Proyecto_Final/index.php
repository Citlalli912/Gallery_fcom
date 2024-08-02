<?php

session_start();
if( isset($_SESSION["usuario"])){ header("location: index.php"); }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Galeria de imagenes</title>
    <link rel="stylesheet" href="styles/global.css">
    <link rel="stylesheet" href="styles/index.css">

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Quicksand:wght@300..700&display=swap');
        body {
            font-family: 'Quicksand',sans-serif;
            display: flex;
            flex-direction: column;
            align-items: center;   
            justify-content: center;
            height: 100vh;
            margin: 0;
        }
        .container {
            display: flex;
            flex-direction: column;
            align-items: center;
            height: 100vh;
        }

        .box {
            width: 100%;
            background-color: #fff;
            padding: 20px;
            box-shadow: 0px 2px 4px rgba(0, 0, 0, 0.1);
        }

        .header-content {
            display: flex;
            align-items: center;
        }
        .header-content h1 {
            display: flex;
            
        }

        .header-left img {
            width: 50px;
            height: auto;
            margin-right: 5px;
        }

        .header-right h1 {
            font-size: 24px;
            font-family: 'Quicksand', sans-serif;
            margin: 0;
        }

        .menu {
            display: flex;
            font-family: 'Quicksand', sans-serif;
        }

        .menu a {
            margin-left: 10px;
            font-family: 'Quicksand', sans-serif;
        }
        nav
        {
            font-family: 'Quicksand', sans-serif;
            width: 100vw;
            height: 25vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="box">
            <nav>
                <div class="header-content">
                    <div class="header-left">
                        <img src="fondo/gallery.png" alt="Imagen de ejemplo">
                    </div>
                    <div class="header-right">
                        <h1>MyGallery  ||  </h1>
                    </div>
                </div>

                <section class="menu">
                    <?php if( isset( $_SESSION[ "usuario" ] ) && isset( $_SESSION[ "plan" ] ) ) { ?>

                        <a href="logout.php" class="button">Cerrar sesion </a>
                        <a href="upload.php" class="button">Subir</a>

                    <?php } else if( isset( $_SESSION[ "usuario" ] ) ) { ?>

                        <a href="logout.php" class="button">Cerrar sesion </a>
                        <a href="plans.php" class="button">Elegir plan</a>

                    <?php } else { ?>

                        <a href="login.php" class="button">Entrar</a>
                        <a href="singUp.php" class="button">Registrarse</a>
                        <a href="plans.php" class="button">Planes</a>
                    <?php } ?>
                </section>
            </nav>
        </div>

        <section class="grid">
            <?php
            global $ruta_imagenes;
            $ruta_imagenes = "media/";
            $imagenes = opendir( $ruta_imagenes );
            $hay_imagenes = false;
            if( $imagenes )
            {
                while( $imagen = readdir( $imagenes ) )
                {
                    if( is_file( $ruta_imagenes . $imagen ) && getimagesize( $ruta_imagenes . $imagen ) )
                    {
                        echo "  <form action='visualizer.php' method='post'>
                                <input type='hidden' name='picture' value='$imagen'>
                                <button type='submit'><img src='$ruta_imagenes$imagen'></button>
                            </form>";
                        $hay_imagenes = true;
                    }
                }
                closedir( $imagenes );
            }
            else
            {
                echo "Error: al cargar carpeta de imagenes";
            }
            if( !$hay_imagenes )
            {
                echo "No hay imagenes aun. Sube la primera imagen";
            }
            ?>
        </section>
    </div>
</body>
</html>
