<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/eliminar.css">
    <title>Agendar Cita</title>
</head>
<body>

<header>
      <div class="contenedor">        <h1 class='bx bxs-dog'> Patitas Felices</h1> 
        <input type="checkbox" id="menu-bar">
        <div class="menu-b">
        <label class="bx bx-menu" for="menu-bar"></label>
        </div>
        <nav class="menu">
            <a href="principal.php">Inicio</a>
            <a href="crud-crear.php">Agendar cita</a>
            <a href="crud-eliminar.php">Cancelar cita</a>
            <a href="crud-modificar.php">Modificar cita</a>
            <a href="crud-mostrar.php">Agenda</a>
            <a href="salir.php">Salir</a>

        </nav>
    </div>
    </header>    



    <div class="container bg-light margin-top">

<table class="table table-bordered">

    <thead>
        <tr>
            <th>Id</th>
            <th>Cedula</th>
            <th>Nombre</th>
            <th>Telefono</th>
            <th>Direccion</th>
            <th>Mascota</th>
            <th>Especie</th>
            <th>raza</th>
            <th>Fecha</th>
            <th>Hora</th>
        </tr>
    </thead>

    
    <tbody>
        
        <?php
include("conexion.php");

            $tabla= new basedatos(); 
            $listado= $tabla->leer_tabla();

            while ( $row= mysqli_fetch_object($listado) ) {
               $id= $row->id_dueño;
               $cedula= $row->cedula;
               $nombre= $row->nombre;
               $telefono= $row->telefono;
               $direccion= $row->direccion;
               /* mascota */
               $nombre_animal= $row->nombre_animal;
               $especie= $row->especie;
               $raza= $row->raza;
               $fecha= $row->fecha;         
               $hora= $row->hora;         

        ?>

        <tr>
            <td> <?php echo $id;  ?> </td>
            <td> <?php echo $cedula;  ?> </td>
            <td> <?php echo $nombre;  ?> </td>
            <td> <?php echo $telefono;  ?> </td>
            <td> <?php echo $direccion;  ?> </td>
            <td> <?php echo $nombre_animal;  ?> </td>
            <td> <?php echo $especie;  ?> </td>
            <td> <?php echo $raza;  ?> </td>
            <td> <?php echo $fecha;  ?> </td>
            <td> <?php echo $hora;  ?> </td>
            <td>
                
                <a href="eliminar.php?id=<?php echo $id;?>" class="delete" title="Eliminar" data-toggle="tooltip"> <i class="material-icons">&#xE92B;</i></a>
                 </a>

            
            </td>              
        </tr>

    <?php 
        }
    ?>

    </tbody>

</table>

</div>




</body>
</html>