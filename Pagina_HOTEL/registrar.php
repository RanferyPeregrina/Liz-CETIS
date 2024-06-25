<?php

    include("cone.php");

    // if($conex){
    //     echo"Este mensaje no deberíia imprimirse si no está bien conectado todo jeje...";
    // }

    if (isset($_POST['EnviarReservacion'])){
        if( strlen($_POST['Nombre']) >= 1 &&
        strlen($_POST['CantidadAdultos']) >= 1 &&
        strlen($_POST['CantidadNinos']) >= 1 &&
        strlen($_POST['FechaLlegada']) >= 1 &&
        strlen($_POST['FechaSalida']) >= 1){

            $Nombre = $_POST['Nombre'];
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