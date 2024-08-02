<?php

  session_start();

  $servidor = "localhost";
  $usuariodb = "root";
  $passdb = "";
  $db = "galeria";
  $conexion = mysqli_connect( $servidor, $usuariodb, $passdb, $db );

  $plan = $_POST[ "plan" ];

  $user = $_SESSION["usuario"];
  $consulta = "SELECT id_user FROM user WHERE user_name = '$user'";
  $resultado = $conexion -> query( $consulta );
  if ($resultado->num_rows > 0)  
  {
    $fila = $resultado->fetch_assoc(); 
    $userId = $fila["id_user"]; 
  } else { echo "Not Founded."; header( "Location: index.php" ); }
  mysqli_close($conexion);


  if($plan == "getHymba")
  {
    $conexion2 = mysqli_connect( $servidor, $usuariodb, $passdb, $db );
    $consulta2 = "INSERT INTO user_plan ( id_user, id_plan ) VALUES ( '$userId', '1' )"; 
    $resultado2 = $conexion2 -> query( $consulta2 );
    if ( $resultado2 )
    {
      mysqli_close($conexion2);
      $_SESSION[ 'plan' ] = true;
      header( "Location: index.php" );
    } else { echo "plan suscriptions went wrong"; }
  }

  if($plan == "getAtia")
  {
    $conexion2 = mysqli_connect( $servidor, $usuariodb, $passdb, $db );
    $consulta2 = "INSERT INTO user_plan ( id_user, id_plan ) VALUES ( '$userId', '2' )"; 
    $resultado2 = $conexion2 -> query( $consulta2 );
    if ( $resultado2 )
    {
      mysqli_close($conexion2);
      $_SESSION[ 'plan' ] = true;
      header( "Location: index.php" );
    } else { echo "plan suscriptions went wrong"; }
  }
?>