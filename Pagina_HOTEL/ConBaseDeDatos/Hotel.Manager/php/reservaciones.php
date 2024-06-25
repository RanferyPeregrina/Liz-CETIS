<?php
if ($_SERVER["REQUEST_METOHOD"] == "POST"){
$NOMBRE = $_POST['nombre'];
$adultos =$_POST['adultos'];
$ninos = $_POST['ninos'],
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
}