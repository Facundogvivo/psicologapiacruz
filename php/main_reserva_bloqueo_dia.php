<?php

include ("conexion.php");

$fecha = $_POST["txt_dia_bloqueo_dia"];

// Consultar las horas ya reservadas para la fecha específica
$sqlConsulta = "SELECT hora FROM reserva WHERE dia = '$fecha'";
$result = mysqli_query($conn, $sqlConsulta);

$horasOcupadas = [];
while ($row = mysqli_fetch_assoc($result)) {
	$horasOcupadas[] = $row['hora'];
}

// Definir todas las horas que se desean bloquear
$horasBloqueo = ['08:00', '09:00', '10:00', '11:00'];

$valoresInsertar = [];
foreach ($horasBloqueo as $hora) {
	if (!in_array($hora, $horasOcupadas)) {
		$valoresInsertar[] = "('bloqueado','bloqueado','bloqueado','bloqueado','bloqueado', 'bloqueado', '$fecha', '$hora')";
	}
}

if (!empty($valoresInsertar)) {
	$sqlgrabar = "INSERT INTO reserva (consulta, rut, nombre, email, telefono, motivo, dia, hora) VALUES " . implode(", ", $valoresInsertar);

	if (mysqli_query($conn, $sqlgrabar)) {
		echo "<!DOCTYPE html>
		<html lang='es'>
			<head>
				<meta charset='utf-8' />
			</head>
			<body>
				<script> 
					alert('Dia bloqueado con exito para las horas disponibles en la fecha: $fecha'); window.location='../bloqueoHoras.php'
					</script>
			</body>
		</html>";
	} else {
		echo "<script> alert('Error al bloquear las horas.'); window.location='../bloqueoHoras.php' </script>";
	}
} else {
	echo "<!DOCTYPE html>
	<html lang='es'>
		<head>
			<meta charset='utf-8' />
		</head>
		<body>
			<script> alert('Todas las horas ya están ocupadas en la fecha: $fecha'); window.location='../bloqueoHoras.php' </script>
		</body>
	</html>";
}