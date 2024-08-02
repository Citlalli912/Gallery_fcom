<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Galeria: Planes</title> 

    <style>
    @import url('https://fonts.googleapis.com/css2?family=IBM+Plex+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600;1,700&display=swap');   
    body {
            font-family: 'Quicksand',sans-serif;
            display: flex;
            flex-direction: column;
            align-items: center;   
            justify-content: center;
            height: 100vh;
            margin: 0;
        }
    </style>
</head>
<body>
    <nav>
        <div class="box"></div>
        <a href="index.php"><h1>Galeria de imagenes</h1></a>
        </div>
        <section class="menu">
        <?php if( isset( $_SESSION[ "usuario" ] ) && isset( $_SESSION[ "plan" ] ) ) { ?>
        
            <a href="logout.php">Cerrar sesion </a>
            <a href="upload.php">Subir</a>

        <?php } else if( isset( $_SESSION[ "usuario" ] ) ) { ?>

            <a href="logout.php">Cerrar sesion </a>

        <?php } else { ?>

            <a href="login.php">Entrar</a>
            <a href="singUp.php">Registrarse</a>
        <?php } ?>
        </section>
    </nav>

    <h1 style="font-size: 30px; font-family: Quicksand ">Nuestros planes</h1>
    <p>Elige una opcion para continuar</p>


    <!--session & plan - upgrade-->
    <?php if( isset( $_SESSION[ "usuario" ] ) && isset( $_SESSION[ "plan" ] ) == true ) { ?>

        <p>Upgrade your current plan!</p>
        <section class="planGrid">
            <form>
                <input type="hidden" name="plan">
                <button type='submit' disabled>
                    <section class="planBody">
                        <h2>Standar</h2>
                        <p>Capacidad para subir hasta 5 imagenes en resolución estándar</p>
                        <p>Ya es tuyo!</p>
                    </section>
                </button>
            </form>

            <form action="planManager.php"  method="post">
                <input type="hidden" name="plan" value="upgradeToAtia">
                <button type='submit'>
                    <section class="planBody">
                        <h2>Premium</h2>
                        <p>Capacidad para subir hasta 10 imagenes de alta resolución</p>
                    </section>
                </button>
            </form>
        </section>

    <!--session - get a plan-->
    <?php } else if(isset($_SESSION["usuario"])) { ?>
        
        <p>Obtener plan!</p>
        <section class="planGrid">
            <form action="planManager.php" method="post">
                <input type="hidden" name="plan" value="getHymba">
                <button type='submit'>
                    <section class="planBody">
                        <h2>standar</h2>
                        <p>Capacidad para subir hasta 5 imagenes en resolución estándar</p>
                    </section>
                </button>
            </form>

            <form action="planManager.php" method="post">
                <input type="hidden" name="plan" value="getAtia">
                <button type='submit'>
                    <section class="planBody">
                        <h2>Premium</h2>
                        <p>Capacidad para subir hasta 10 imagenes de alta resolución</p>
                    </section>
                </button>
            </form>
        </section>



    <!--s & p !! - showcase -->
    <?php } else { ?>

        <p>Necesitas tener una cuenta para obtener un plan, <a href="singUp.php">Registrar!</a></p>
        <section class="planGrid">
            <form>
                <input type="hidden" name="plan">
                <button type='submit' disabled>
                    <section class="planBody">
                        <h2>Standar</h2>
                        <p>Capacidad para subir hasta 5 imagenes en resolución estándar</p>
                    </section>
                </button>
            </form>

            <form action="">
                <input type="hidden" name="plan">
                <button type='submit' disabled>
                    <section class="planBody">
                        <h2>Premium</h2>
                        <p>Capacidad para subir hasta 10 imagenes de alta resolución</p>
                    </section>
                </button>
            </form>
        </section>

    <?php } ?>
</body>
</html>
