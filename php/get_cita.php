<?php

include ("conexion.php");

$id = $_GET['id'];

$sql = "SELECT * FROM reserva WHERE id = $id";
$result = $conn->query($sql);

$cita = array();
if ($result->num_rows > 0) {
    $cita = $result->fetch_assoc();
}

echo json_encode($cita);
$conn->close();
