<?php

include ("conexion.php");

header('Content-Type: application/json');


// Consulta SQL para obtener todas las citas del mes actual
$sql = "SELECT dia, hora, nombre, motivo, consulta
        FROM reserva";

$result = $conn->query($sql);

$citas = [];

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $citas[] = $row;
    }
}

echo json_encode($citas);