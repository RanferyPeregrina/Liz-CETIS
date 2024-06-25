
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de reservación</title>
</head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="index.html">Hotel Paraiso</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="index.html">Inicio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="Habitaciones.html">Habitaciones</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="Servicios1.html">Servicio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="reservaciones.html">Reservaciones</a>
                </li>
            </ul>
        </div>
        </nav>

        <div class="container">

        <form action="registrar.php" method="post">
            <input type="text" name="Nombre" placeholder="Nombre">
            <input type="number" name="CantidadAdultos" placeholder="Cantidad de Adultos">
            <input type="number" name="CantidadNinos" placeholder="Cantidad de Niños">
            <input type="date" name="FechaLlegada" placeholder="Fecha de Llegada">
            <input type="date" name="FechaSalida" placeholder="Fecha de Salida">
            <button id="EnviarReservacion" name="EnviarReservacion" type="submit" class="btn btn-primary">Enviar</button>
        </form>


        </div>


        <?php
        include("registrar.php");
        ?>

    </body>
</html>