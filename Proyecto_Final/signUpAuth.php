<?php

$servidor = "localhost";
$usuariodb = "root";
$passdb = "";
$db = "galeria";

$usuario = $_POST[ "user" ];
$correo = $_POST[ "email" ];
$contrasena = $_POST[ "pass" ];

$conexion = mysqli_connect( $servidor, $usuariodb, $passdb, $db );
    $consulta = "INSERT INTO user ( user_name, user_email, user_pass ) VALUES ( '$usuario', '$correo', '$contrasena' )"; 

if( mysqli_query( $conexion, $consulta ) )
{
    $_SESSION[ 'plan' ] = false;
    header( "Location: index.php" );
}
else
{
    echo "something gone wrong, reload the page";
}
?>