<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/modificar.css">
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
    <form action="guardar_datos.php" method="POST">
	
	<div>
		<h1>Registrate ahora</h1> 
		</div><br><br><br><br>
		
        <h3>Datos del Dueño</h3>

		<div  class="input-box">
		<input type="text" name="nombre_dueño" placeholder="Nombre del dueño" required>
		</div>

		<div  class="input-box">
		<input type="text" name="telefono" placeholder="Teléfono" required>
		</div>

		<div  class="input-box"> 
		<input type="email" name="email" placeholder="Correo electrónico" required>
		</div>
       
		<div class="input-box">
	 	<textarea maxlength="255" name="direccion" placeholder="Dirección" rows="3" required></textarea>
	  	</div>
       
      <br><br>
        <h3>Datos del Animal</h3>

		<div  class="input-box">
        <input type="text" name="nombre_animal" placeholder="Nombre del animal" required>
		</div>

		<div  class="input-box">
		<input type="text" name="especie" placeholder="Especie (Perro, Gato, etc.)" required>
		</div>

		<div  class="input-box">
		<input type="text" name="raza" placeholder="Raza" required>
		</div>

		<div  class="input-box">
		<input type="number" name="edad" placeholder="Edad" required>
		</div>

<br>
        <h3>Datos de la Cita</h3>

		<div  class="input-box">
		<input type="date" name="fecha" required>
		</div>

		<div  class="input-box">
        <input type="time" name="hora" required>
		</div>

		<div  class="input-box">
		<textarea name="motivo" placeholder="Motivo de la cita" rows="4" required maxlength="255"  ></textarea>
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