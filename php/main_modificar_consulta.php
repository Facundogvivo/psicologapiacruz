<?php

include ("conexion.php");

$id = $_POST['select_cita'];
$nombre = $_POST['txt_nombre_modificar'];
$rut = $_POST['txt_rut_modificar'];
$email = $_POST['txt_email_modificar'];
$telefono = $_POST['txt_telefono_modificar'];
$motivo = $_POST['txt_motivo_modificar'];
$fecha = $_POST['txt_date_modificar'];
$hora = $_POST['txt_hora_modificar'];

// Liberar la fecha y hora anteriores
$sql = "UPDATE reserva SET dia = '$fecha', hora = '$hora', nombre = '$nombre', rut = '$rut', email = '$email', telefono = '$telefono', motivo = '$motivo' WHERE id = $id";

if ($conn->query($sql) === TRUE) {
    echo "<script> alert('Hora modificada con éxito: el $fecha a las $hora'); window.location='../reagendar.php' </script>";
} else {
    echo "Error: " . $conn->error;
}

$conn->close();