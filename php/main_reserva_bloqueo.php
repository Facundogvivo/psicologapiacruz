<?php

include ("conexion.php");

$fecha = $_POST["txt_dia_bloqueo"];
$hora = $_POST["txt_hora_bloqueo"];

// Verificar si la hora ha sido seleccionada
if (empty($hora)) {
	echo "<script> alert('Debes seleccionar una hora para bloquearla.'); window.location='../bloqueoHoras.php' </script>";
	exit;
}
$sqlgrabar = "INSERT INTO reserva (consulta, rut, nombre, email, telefono, motivo, dia, hora) values ('Bloqueado','Bloqueado','Bloqueado','Bloqueado','Bloqueado', 'Bloqueado', '$fecha', '$hora')";

if (mysqli_query($conn, $sqlgrabar)) {
	echo "<script> alert('Hora bloqueada con exito: el $fecha a las $hora'); window.location='../bloqueoHoras.php' </script>";
}

