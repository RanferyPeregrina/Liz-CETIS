<?php
if ($_SERVER["REQUEST_METOHOD"] == "POST"){
$NOMBRE = $_POST['nombre'];
$adultos =$_POST['adultos'];
$ninos = $_POST['ninos'];
$fechaInicio = $_POST['fechaInicio'];
$fechaFin = $_POST['fechaFin'];

if(!is_numeric($adultos) || !is_numeric($ninos) ){
echo " La cantidad de adultos y niños debe ser numericos.";
exit;
}
// Convertir las fechas a formato Datetime para poder comprarlas
$fechaInicio = DateTime:: createFromFormat('m/d/Y', $fechaInicio)
$fechaFin = DateTime ::createFromFormat('m/d/Y', $fechaFin);
$hoy = new DateTime();

// Validar que la fecha inicio sea posterior al dia actual 
if ($fechaInicio <= $hoy) {
echo "La fecha de la llegada debe ser posterior al dia actual.";
exit;
}
//Validar que la fecha de inicio sea menor a 30 dias en el futuro 

$hoy->modify('+30 days');

if($fechaInicio >$hoy){

echo "La fecha de llegada debe ser menor a 30 dias en el futuro.";

exit;

}

//Validar que la fecha fin sea mayor a la fecha 
inicio

if($fechaFin <=$fechaInicio){

echo "La fecha de salida debe ser mayor a la fecha de llegada.";

exit;

}
$sql="INSERT INTO reservaciones(nombre,adultos,ninos,fechaLlegada,fechaSalida)

VALUES('$nombre','$adultos','$ninos','$fechaInicio','$fechaFin')";

if($conn->query($sql)===TRUE){

echo "Nueva reserva creada exitosamente";

}else{

echo"Error:".$sql."<br>".$conn->error;

}

$conn->close()
}

