<?php
    session_start();
    $usuario= $_SESSION['username'];

    if (!isset($usuario)) {
        header("location:index.html");
    } else {
        
    }
    

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Patitas Felices</title>
    <link rel="stylesheet" href="css/a-estilos.css">
    <link rel="stylesheet" href="css/menu.css">
 
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

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

    <main>

    <section id="banner">
        <img src="img/perro-3.jpg" alt="">

        <div class="contenedor">
        <h2>Cuida a tu amigo de cuatro patas </h2>
        <p>Agenda tu proxima cita</p>
        <a href="crud-crear.php">Agendar</a>
        </div>
    </section>

    <section id="bienvenidos" class="contenedor">
        <h2>BIENVENIDOS</h2>
        <p>La salud y el bienestar de tu mascota son nuestra prioridad. En Patitas Felices
            ofrecemos servicios veterinarios personalizados para que tu amigo peludo tenga una vida larga y saludable.</p>
    </section> <br>

    <section id="info">
        <h3 class="contenedor">Para muchos,
             las mascotas no son solo compañeros, sino los hilos invisibles 
             que tejen el hermoso tapiz de la familia.
        </h3>

    <div class="contenedor">
        <div class="info-pet">
            <img src="img/gatos-1.jpg" alt="">
            <h4>Naty</h4>
        </div>

        <div class="info-pet">
            <img src="img/perro_1.jpg" alt="">
            <h4>Jerry</h4>
        </div>

        <div class="info-pet">
            <img src="img/perro-2.jpg" alt="">
            <h4>Tom & Laika</h4>
        </div>

        <div class="info-pet">
            <img src="img/perro-4.jpg" alt="">
            <h4>Cookie</h4>
        </div>
    </div>
    </section>
    </main>


    <footer>
        <div class="contenedor">
            <p class="copy">Patitas Felices &copy; 2024</p>

            <div class="sociales">
                <a class="bx bxl-facebook-circle"href=""></a>
                <a class="bx bxl-twitter" href=""></a>
                <a class="bx bxl-instagram" href=""></a>
                <a class="bx bx-map"href=""></a>
            </div>
        </div>
    </footer>
</body>
</html>