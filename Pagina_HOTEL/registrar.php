<?php

include("cone.php");

if (isset($_POST['EnviarReservacion'])){
    if( strlen($_POST['nombre']) >= 1 &&
    strlen($_POST['CantidadAdultos']) >= 1 &&
    strlen($_POST['CantidadNinos']) >= 1 &&
    strlen($_POST['FechaLlegada']) >= 1 &&
    strlen($_POST['FechaSalida']) >= 1){

        $name = $_POST['nombre'];
        $CantidadAdultos = trim($_POST['CantidadAdultos']);
        $CantidadNinos = trim($_POST['CantidadNinos']);
        $FechaLlegada = date("d/m/y");
        $FechaSalida = date("d/m/y");

        $Consulta = "INSERT INTO `hotel_manager`(`Nombre`, `Adultos`, `Ninos`, `FechaLlegada`, `FechaSalida`) VALUES ('$Nombre','$CantidadAdultos','$CantidadNinos','$FechaLlegada','$FechaSalida')";
        $Resultado = mysqli_query($conex, $Consulta);

        if($Resultado){
            ?>
            <h3>¡Te haz registrado correctamente!</h3>
            <?php
        }
        else{
            ?>
            <h3>Oh... ha ocurrido un error.</h3>
            <?php
        }
    }else{
        ?>
            <h4>¡Faltan campos por completar!</h4>
        <?php
    }
    
}

?>