<?php

session_start();

$servidor = "localhost";
$usuariodb = "root";
$passdb = "";
$db = "galeria";

$conn = mysqli_connect($servidor, $usuariodb,$passdb, $db);
if (isset($conn))
{
    $usuario = $_POST[ "user" ];
    $contrasena = $_POST[ "pass" ];

    $conexion = mysqli_connect( $servidor, $usuariodb, $passdb, $db );
    $consulta = "SELECT user_name, user_pass FROM user WHERE user_name = '$usuario' AND user_pass = '$contrasena'";
    
    $resultado = $conn -> query( $consulta );

    if ( $resultado -> num_rows == 1 )
    {
        $_SESSION[ 'usuario' ] = $usuario;
        header( "Location: index.php" );
    }
    else
    {
        echo "Error: Usuario y/o contraseña son incorrectas";
    }
}
mysqli_close($conn);
?>