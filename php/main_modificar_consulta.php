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


    // Enviar correo de confirmación
    $to = $email . ', contacto@psicologapiacruz.cl'; // Cambia 'otheremail@example.com' por la otra dirección de correo
    $subject = "Confirmación de Reserva";
    $message = "
    <html>
      <head>
        <meta charset='utf-8' />
        <title>Confirmación de Reserva</title>
      </head>
      <body>
        <p>Hola $nombre, tu consulta online ha sido agendada con éxito</p>
        <p>Datos de la reserva:</p>
        <ul>
          <li>Tipo de consulta: Online</li>
          <li>Como: Videoconferencia por Google Meet</li>
          <li>Recuerde: Es recomendable contar con buena conexión a internet. Contar con micrófono, audífonos y cámara web</li>
          <li>Fecha: $fechaModificada</li>
          <li>Hora: $hora</li>
          <li>Motivo: $motivo</li>
        </ul>
        <p>Datos del paciente:</p>
        <ul>
          <li>Nombre: $nombre</li>
          <li>Rut: $rut</li>
          <li>Teléfono: $telefono</li>
          <li>Email: $email</li>
        </ul>
        <p>Que tengas un buen día, nos vemos el $fechaModificada</p>
        <br>
        <img src='https://www.psicologapiacruz.cl/images/logoPiaCruz.jpg' alt='Firma' style='width:200px;height:auto;' />
        <p>Pía Cruz Dote<br>Psicóloga Clínica</p>
      </body>
    </html>
    ";

    // Para enviar un correo HTML, debes establecer las cabeceras Content-type
    $headers = 'MIME-Version: 1.0' . "\r\n";
    $headers .= 'Content-type: text/html; charset=UTF-8' . "\r\n";

    // Cabeceras adicionales
    $headers .= 'From: contacto@psicologapiacruz.cl' . "\r\n"; // Cambia 'info@yourdomain.com' por tu dirección de correo

    // Enviar correo
    mail($to, $subject, $message, $headers);

    echo "<!DOCTYPE html>
    <html lang='es'>
        <head>
            <meta charset='utf-8' />
        </head>
        <body>
            <script>
                alert('Hora modificada con éxito: el $fecha a las $hora'); window.location='../reagendar.php' 
            </script>
        </body>
    </html>";
} else {
    echo "Error: " . $conn->error;
}

$conn->close();