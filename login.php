<?php
    
    include("conexion.php");
    $datos= new basedatos();

    $usuario= $_POST['usuario'];
    $clave= $_POST['clave'];

    $resultado= $datos->login($usuario, $clave);
    $array= mysqli_fetch_array($resultado);

    if ($array['registros']>0) {
        session_start();
        $_SESSION['username']=$usuario;
        header("location:principal.php");
    } else {
        echo "Datos incorrectos";
    }
    

?>