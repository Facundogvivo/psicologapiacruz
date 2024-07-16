<?php

include ("conexion.php");

$sql = "SELECT dia, hora FROM reserva";
$result = $conn->query($sql);

$occupiedSlots = array();

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $date = $row["dia"];
        $time = $row["hora"];
        if (!array_key_exists($date, $occupiedSlots)) {
            $occupiedSlots[$date] = array();
        }
        array_push($occupiedSlots[$date], $time);
    }
}

$conn->close();

header('Content-Type: application/json');
echo json_encode($occupiedSlots);
