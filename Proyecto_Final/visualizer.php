<?php
    session_start();
    $picture = $_POST["picture"];
    $ruta_imagenes = "media/";
?>
<!DOCTYPE html>
    <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title><?php echo "gale: $picture" ?></title>
           <link rel="stylesheet" href="styles/global.css">
           <link rel="stylesheet" href="styles/visualizer.css">
        
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
                .picCont {
                    display: flex;
                    align-items: center;
                    max-width: 600px; 
                    margin: 0 auto;
                    padding: 20px;
                }
                h1 {
                    margin-right: 10px; 
                }
                img {
                    max-width: 400px; 
                    height: auto;
                    border: 1px solid #ccc;
                    border-radius: 5px;
                }

            </style>
        </head>
        <body>
            <section class="picCont">
            <?php
                $usuario = $_SESSION["user"];
                if( isset($_POST["picture"]) ) 
                {
                    echo "  <h1>$picture</h1>
                            <h2>$usuario</h2>
                            <a href='$ruta_imagenes$picture' download='$picture'>
                                <img src='$ruta_imagenes$picture'>
                            </a>
                        ";
                } else { header("Location: index.php"); }
            ?>
            </section>
        </body>
    </html>