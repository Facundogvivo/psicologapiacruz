<?php

include ("conexion.php");

$fechaDesde = $_POST["txt_dia_bloqueo_desde"];
$fechaHasta = $_POST["txt_dia_bloqueo_hasta"];

// Convertir las fechas a formato DateTime para poder iterar fácilmente
$fechaInicio = new DateTime($fechaDesde);
$fechaFin = new DateTime($fechaHasta);
$fechaFin->modify('+1 day'); // Incluir el último día en el bucle

$horasBloqueo = ['08:00', '09:00', '10:00', '11:00'];

for ($fecha = $fechaInicio; $fecha < $fechaFin; $fecha->modify('+1 day')) {
    $fechaStr = $fecha->format('Y-m-d');

    // Consultar las horas ya reservadas para la fecha específica
    $sqlConsulta = "SELECT hora FROM reserva WHERE dia = '$fechaStr'";
    $result = mysqli_query($conn, $sqlConsulta);

    $horasOcupadas = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $horasOcupadas[] = $row['hora'];
    }

    $valoresInsertar = [];
    foreach ($horasBloqueo as $hora) {
        if (!in_array($hora, $horasOcupadas)) {
            $valoresInsertar[] = "('bloqueado','bloqueado','bloqueado','bloqueado','bloqueado', 'bloqueado', '$fechaStr', '$hora')";
        }
    }

    if (!empty($valoresInsertar)) {
        $sqlgrabar = "INSERT INTO reserva (consulta, rut, nombre, email, telefono, motivo, dia, hora) VALUES " . implode(", ", $valoresInsertar);

        if (mysqli_query($conn, $sqlgrabar)) {
            // Puedes dejar este mensaje si quieres alertar sobre cada día bloqueado exitosamente
            // echo "<script> alert('Día $fechaStr bloqueado con éxito'); </script>";
        } else {
            echo "<script> alert('Error al bloquear las horas para el día $fechaStr.'); window.location='../bloqueoHoras.php' </script>";
        }
    }
}

echo "<script> alert('Dias bloqueados con exito: desde el $fechaDesde hasta $fechaHasta'); window.location='../bloqueoHoras.php' </script>";