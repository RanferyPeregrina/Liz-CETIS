
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/reservaciones.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
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


        <form action="registrar.php" method="post"><br>

        <div class="form-group">
            <label for="Nombre">Ingrese su nombre completo: </label> <br> 
            <input class="form-control" type="text" name="Nombre" id="Nombre" placeholder="Nombre"><br>
        </div>

        <div class="form-group">
            <label for="Nombre">Ingrese la cantdad de adultos que registrará: </label> <br> 
            <input class="form-control" type="number" name="CantidadAdultos" id="CantdadAdultos" placeholder="Cantidad de Adultos"><br>
        </div>


        <div class="form-group">
            <label for="Nombre">Ingrese la cantdad de niiños que registrará: </label> <br> 
            <input class="form-control" type="number" name="CantidadNinos" id="CantdadNinos" placeholder="Cantidad de Niños"><br>
        </div>

        <div class="form-group">
            <label for="Nombre">Ingrese su fecha de llegada al hotel: </label> <br>
            <input class="form-control" type="date" name="FechaLlegada" id="FechaLlegada" placeholder="Fecha de Llegada"><br>
        </div>

        <div class="form-group">
            <label for="Nombre">Ingrese su fecha de salida del hotel: </label> <br>
            <input class="form-control" type="date" name="FechaSalida" id="FechaSalida" placeholder="Fecha de Salida"><br>
        </div>
            <button id="EnviarReservacion" name="EnviarReservacion" type="submit" class="btn btn-primary">Enviar</button>
        </form>


        </div>


        <?php
        include("registrar.php");
        ?>

    </body>
</html>