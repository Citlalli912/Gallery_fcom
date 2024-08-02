<?php

    session_start();
    if( isset($_SESSION["usuario"])){ header("location: index.php"); }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrarse</title>

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Quicksand:wght@300..700&display=swap');
        body{
                font-family: 'Quicksand',sans-serif;
                display: flex;
                flex-direction: column;
                align-items:center;
                
                height: 100vh;
                margin: 0;
        }
        .box {
                width: 100%;
                background-color: #fff;  /* Add a light background color */
                padding: 25px 20px;  /* Add some padding for spacing */
                margin-bottom: 60px;  /* Add space below the box */
                border: 1px solid #2A6737;
        }
        .box .container {
                text-align: center;
        }
        nav {
                width: 100%;
                display: flex;
                text-align: center;
                margin-bottom: 20px;
        }
        nav, img{
                width: 40px;
                height: 40px;
                margin: 10px;
        }
        a{
            text-decoration: none;
            color: black;
        }
        menu a:hover{
            color:#52B374;
            text-decoration:underline;
        }
        .con-box {  /* New box for the content */
            background-color: #fff;  /* Set white background for content */
            padding: 20px;  /* Add padding for content */
            border-radius: 4px;   /* Add rounded corners */
            max-width: 400px;  /* Maintain max width for content */
            margin: 0 auto;  /* Center the content box horizontally */
            border: 1px solid #2AA037;
            box-shadow: 0px 2px 5px #2A6737;
        }
        .con {
            max-width: 400px;
            text-align: center;
        }
        form {
            display: flex;
            flex-direction: column;
        }

        label {
            display: block;
            margin-bottom: 5px;
        }

        input[type="text"],
        input[type="email"],
        input[type="password"]{
            width:100%;
            padding: 5px;
            border: 1px solid #ccc;
            border-radius: 4px;
            margin-bottom: 15px;
        }

        input[type="submit"] {
            font-family: 'Quicksand', sans-serif;
            background-color: #2D7A47;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer; 
            margin-top: 20px; 

        }
        p{
            font-size:15px;
        }
        p a{
            color: #2D7A47;
        }
    </style>

</head>
<body>
    <div class="box">
        <nav>
            <img src="fondo/gallery.png" alt=""><a href="index.php"><h1>MyGallery</h1></a>
        </nav>
    </div>
    </div>
    <div class="con-box">
        <form action="signUpAuth.php" method="post">
            <label for="user">Nombre</label>
            <input type="text" name="user" id="user"> 
            <label for="email">Correo electronico</label> 
            <input type="text" name="email" id="email"> 
            <label for="pass">Contaseña</label> 
            <input type="password" name="pass" id="pass"> 
            <input type="submit" value="Registrar">
            <p>Ya tienes una cuenta?<a href="login.php"> Iniciar sesion</a></p>
        </form>
    </div>
</body>
</html>