
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

            <form method="post">

                <div class="form-group">
                    <label for="nombre">Nombre</label>
                    <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Introduce tu nombre">
                </div>
                <div class="form-group">
                    <label for="adultos">Cantidad de Adultos</label>
                    <input type="number" class="form-control" id="adultos" name="CantidadAdultos" placeholder="Introduce la cantidad de adultos">
                </div>
                <div class="form-group">
                    <label for="ninos">Cantidad de Niños</label>
                    <input type="number" class="form-control" id="ninos" name="CantidadNinos" placeholder="Introduce la cantidad de niños">
                </div>
                <div class="form-group">
                    <label for="fechaInicio">Fecha de Llegada</label>
                    <input  placeholder="dd-mm-aaaa" class="form-control datepicker" name="FechaLlegada" id="fechaInicio">
                </div>
                <div class="form-group">
                    <label for="fechaFin">Fecha de Salida</label>
                    <input placeholder="dd-mm-aaaa" type="text" name="FechaSalida" class="form-control datepicker" id="fechaFin">
                </div>
                <button id="EnviarReservacion" name="EnvarReservacion" type="submit" class="btn btn-primary">Enviar</button>

            </form>

        </div>


        <?php
        include("registrar.php");
        ?>

    </body>
</html>