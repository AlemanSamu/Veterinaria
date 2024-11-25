<?php
include("conexion.php");

// Crear instancia de la clase basedatos
$datos = new basedatos();

// Verificar si el formulario se envió
if (isset($_POST) && !empty($_POST)) {
    // Insertar datos del dueño
    $cedula = $_POST['cedula'];
    $nombre = $_POST['nombre'];
    $telefono = $_POST['telefono'];
    $email = $_POST['email'];
    $direccion = $_POST['direccion'];

    $id_dueño = $datos->insertar_dueño($cedula, $nombre, $telefono, $email, $direccion);

    if ($id_dueño) {
        // Insertar datos del animal
        $nombre_animal = $_POST['nombre_animal'];
        $especie = $_POST['especie'];
        $raza = $_POST['raza'];
        $edad = $_POST['edad'];

        $id_animal = $datos->insertar_mascota($nombre_animal, $especie, $raza, $edad, $id_dueño);

        if ($id_animal) {
            // Insertar datos de la cita
            $fecha = $_POST['fecha'];
            $hora = $_POST['hora'];
            $motivo = $_POST['motivo'];

            $resultado = $datos->insertar_cita($fecha, $hora, $motivo, $id_animal);

            if ($resultado) {
                echo '<script>alert("Datos insertados correctamente"); window.location.href="crud-crear.php";</script>';
            } else {
                echo '<script>alert("Error al insertar la cita");</script>';
            }
        } else {
            echo '<script>alert("Error al insertar los datos del animal");</script>';
        }
    } else {
        echo '<script>alert("Error al insertar los datos del dueño");</script>';
    }
}
?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/agendar.css">
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

    <section class="from-f" id="banner">
		<div>
    <form  method="post">
	
	<div>
		<h1>Registrate ahora</h1> 
		</div><br><br><br><br>
		
        <h3>Datos del Dueño</h3>

		
		<div  class="input-box">
		<input type="text" name="cedula" placeholder="Cedula" id="cedula" required>
		</div>

		<div  class="input-box">
		<input type="text" name="nombre" placeholder="Nombre del dueño" id="nombre" required>
		</div>
		

		<div  class="input-box">
		<input type="text" name="telefono" placeholder="Teléfono" id="telefono-dueño" required>
		</div>

		<div  class="input-box"> 
		<input type="email" name="email" placeholder="Correo electrónico" id="email" required>
		</div>
       
		<div class="input-box">
	 	<textarea maxlength="255" name="direccion" placeholder="Dirección" rows="3" id="direccion" required></textarea>
	  	</div>
       
      <br><br>
        <h3>Datos del Animal</h3>

		<div  class="input-box">
        <input type="text" name="nombre_animal" placeholder="Nombre del animal" id="nombre-mascota"required>
		</div>

		<div  class="input-box">
		<input type="text" name="especie" placeholder="Especie (Perro, Gato, etc.)" id="especie" required>
		</div>

		<div  class="input-box">
		<input type="text" name="raza" placeholder="Raza" id="raza" required>
		</div>

		<div  class="input-box">
		<input type="number" name="edad" placeholder="Edad" id="edad" required>
		</div>

<br>
        <h3>Datos de la Cita</h3>

		<div  class="input-box">
		<input type="date" name="fecha" id="fecha-cita" required>
		</div>

		<div  class="input-box">
        <input type="time" name="hora" id="hora" required>
		</div>

		<div  class="input-box">
		<textarea name="motivo" placeholder="Motivo de la cita" rows="4" required maxlength="255" id="motivo" ></textarea>
		</div>
<br><br><br>
		<div>
        <button  class="btn " type="submit">Agendar</button>
		</div>

		</div>
	</form>	
    </section>

</body>
</html>