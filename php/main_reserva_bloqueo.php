<?php

include ("conexion.php");

$fecha = $_POST["txt_dia_bloqueo"];
$hora = $_POST["txt_hora_bloqueo"];

// Verificar si la hora ha sido seleccionada
if (empty($hora)) {
	echo "<script> alert('Debes seleccionar una hora para bloquearla.'); window.location='../bloqueoHoras.php' </script>";
	exit;
}
$sqlgrabar = "INSERT INTO reserva (consulta, rut, nombre, email, telefono, motivo, dia, hora) values ('bloqueado','bloqueado','bloqueado','bloqueado','bloqueado', 'bloqueado', '$fecha', '$hora')";

if (mysqli_query($conn, $sqlgrabar)) {
	echo "<!DOCTYPE html>
	<html lang='es'>
		<head>
			<meta charset='utf-8' />
		</head>
		<body>
			<script> alert('Hora bloqueada con éxito: el $fecha a las $hora'); window.location='../bloqueoHoras.php' </script>
		</body>
	</html>";
	echo "";
}

