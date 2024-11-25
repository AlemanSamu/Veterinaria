<?php
    if (isset($_GET['id'])) {
        include('conexion.php');
        $reserva=new basedatos();
        $id= intval($_GET['id']);
        $res= $reserva->eliminar_reserva($id);

        if ($res==true) {
            header("location:crud-mostrar.php");
        } else {
            echo "Error al eliminar el registro";
        }
        
    }

?>