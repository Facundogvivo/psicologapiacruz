<?php

include ("conexion.php");

$sql = "SELECT id, dia, hora FROM reserva";
$result = $conn->query($sql);

$citas = array();
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $citas[] = $row;
    }
}

echo json_encode($citas);
$conn->close();
