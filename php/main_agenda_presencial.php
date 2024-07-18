<?php

include ("conexion.php");

$rut = $_POST['txt_rut_presencial'];
$nombre = $_POST['txt_nombre_presencial'];
$email = $_POST['txt_email_presencial'];
$telefono = $_POST['txt_telefono_presencial'];
$motivo = $_POST['txt_motivo_presencial'];

$fecha = $_POST['txt_date_presencial'];
$dateTime = new DateTime($fecha);
$fechaModificada = $dateTime->format('d-m-Y');

$hora = $_POST['txt_hora_presencial'];

// Verificar si la hora ha sido seleccionada
if (empty($hora)) {
  echo "<script> alert('Debes seleccionar una hora para agendarla.'); window.location='../reservaPresencial.php' </script>";
  exit;
}

if ($motivo == 'Primera Sesión de Evaluación Individual' || $motivo == 'Primera Sesión de Evaluación Terapia de Pareja') {
  // Guardar en la base de datos
  $sql = "INSERT INTO reserva (consulta, rut, nombre, email, telefono, motivo, dia, hora) VALUES ('Presencial','$rut', '$nombre', '$email', '$telefono', '$motivo', '$fecha', '$hora')";

  if (mysqli_query($conn, $sql)) {


    // Enviar correo de confirmación
    $to = $email . ', contacto@facundogonzalezvivo.cl'; // Cambia 'otheremail@example.com' por la otra dirección de correo
    $subject = "Confirmación de Reserva";
    $message = "
    <html>
    <head>
      <title>Confirmación de Reserva</title>
    </head>
    <body>
      <p>$nombre, tu consulta presencial ha sido agendada con éxito</p>
      <p>Detalles de la reserva:</p>
      <ul>
        <li>Tipo de consulta: Presencial</li>
        <li>Rut: $rut</li>
        <li>Nombre: $nombre</li>
        <li>Email: $email</li>
        <li>Teléfono: $telefono</li>
        <li>Motivo: $motivo</li>
        <li>Fecha: $fechaModificada</li>
        <li>Hora: $hora</li>
      </ul>
      <p>Que tengas un buen día, nos vemos el $fechaModificada</p>
    </body>
    </html>
    ";

    // Para enviar un correo HTML, debes establecer las cabeceras Content-type
    $headers = 'MIME-Version: 1.0' . "\r\n";
    $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

    // Cabeceras adicionales
    $headers .= 'From: contacto@facundogonzalezvivo.cl' . "\r\n"; // Cambia 'info@yourdomain.com' por tu dirección de correo

    // Enviar correo
    mail($to, $subject, $message, $headers);

    echo "
    <!DOCTYPE html>
    <html lang='en'>
    
    <head>
      <meta charset='utf-8' />
      <title>Pía Cruz Dote | Psicóloga clínica</title>
      <link rel='Shortcut Icon' type='image/x-icon' href='../images/logo.ico' />
      <link rel='stylesheet' href='../css/style.css' />
      <link rel='stylesheet' href='../css/bootstrap.min.css' />
      <script src='https://code.jquery.com/jquery-3.4.1.js' />
      </script>
      <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css' />
      <link href='https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap' rel='stylesheet'>
    </head>
    
    <body>
      <nav class='sidebar'>
        <div class='logo'>
          <img src='../images/logo.png' alt='Logo' />
        </div>
        <ul>
          <li><a href='../index.html'>Inicio</a></li>
          <li><a href='../index.html#sobre_mi'>Sobre mí</a></li>
          <li>
            <a href='../index.html#metodologia' class='btn-primero'>Metodología<span
                class='fas fa-caret-down primero'></span></a>
            <ul class='mostrar-primero'>
              <li><a href='../index.html#pas1'>Paso 1: Agenda tu primera consulta</a></li>
              <li><a href='../index.html#pas2'>Paso 2: Creamos un plan de trabajo</a></li>
              <li>
                <a href='../index.html#pas3'>Paso 3: Agendamiento de las próximas sesiones</a>
              </li>
            </ul>
          </li>
          <li><a href='../index.html#consultas'>Agendar Consulta Presencial</a></li>
          <li><a href='../index.html#consultas'>Agendar Consulta Online</a></li>
          <li><a href='../index.html#pre11'>Terapia Floral</a></li>
          <li>
            <a href='../index.html#informacion' class='btn-segundo'>Información para ti<span
                class='fas fa-caret-down segundo'></span></a>
            <ul class='mostrar-segundo'>
              <li><a href='../index.html#pre1'>¿La primera sesión es gratis?</a></li>
              <li>
                <a href='../index.html#pre2'>¿Para qué me ayuda tomar una terapia psicológica?</a>
              </li>
              <li>
                <a href='../index.html#pre3'>¿Mejor tomar una terapia con Psicólogo o Psiquiatra?</a>
              </li>
              <li><a href='../index.html#pre4'>¿Cuántas sesiones dura una terapia?</a></li>
              <li>
                <a href='../index.html#pre5'>¿Es mejor elegir una sesión presencial u online?</a>
              </li>
              <li>
                <a href='../index.html#pre6'>¿A través de qué medios puedo pagar mi sesión psicológica?</a>
              </li>
              <li>
                <a href='../index.html#pre7'>¿Las boletas de atención pueden ser reembolsables en todas las
                  ISAPRES?</a>
              </li>
              <li><a href='../index.html#pre8'>¿Es posible reagendar una consulta?</a></li>
              <li><a href='../index.html#pre9'>¿Puedo cancelar una consulta?</a></li>
              <li><a href='../index.html#pre10'>¿Qué es la terapia holística?</a></li>
              <li>
                <a href='#../index.htmlpre11'>¿En qué consiste La terapia con flores de Bach?</a>
              </li>
              <li>
                <a href='#../index.htmlpre12'>¿Puedo agendar una sesión para Flores de Bach?</a>
              </li>
            </ul>
          </li>
        </ul>
      </nav>
      <section class='about-us'>
        <div class='about'>
          <div class='text'>
            <div id='detalle_reserva'>
    
              <h2 style='text-align: center;'>Reserva realizada</h2><br>
              <p style='text-align: center;'>$nombre, tu consulta presencial ha sido agendada con éxito</p>
              <div class='recordatorio col-sm-12'>
                <div class='col-sm-6'>
                  <p style='text-align: right'>Tipo de consulta:&nbsp;&nbsp;</p>
                </div>
                <div class='col-sm-6'>
                  <p style='text-align: left'>&nbsp;&nbsp;Presencial</p>
                </div>
                <div class='col-sm-6'>
                  <p style='text-align: right'>Rut:&nbsp;&nbsp;</p>
                </div>
                <div class='col-sm-6'>
                  <p style='text-align: left'>&nbsp;&nbsp;$rut</p>
                </div>
                <div class='col-sm-6'>
                  <p style='text-align: right'>Nombre:&nbsp;&nbsp;</p>
                </div>
                <div class='col-sm-6'>
                  <p style='text-align: left'>&nbsp;&nbsp;$nombre</p>
                </div>
                <div class='col-sm-6'>
                  <p style='text-align: right'>Email:&nbsp;&nbsp;</p>
                </div>
                <div class='col-sm-6'>
                  <p style='text-align: left'>&nbsp;&nbsp;$email</p>
                </div>
                <div class='col-sm-6'>
                  <p style='text-align: right'>Teléfono:&nbsp;&nbsp;</p>
                </div>
                <div class='col-sm-6'>
                  <p style='text-align: left'>&nbsp;&nbsp;$telefono</p>
                </div>
                <div class='col-sm-6'>
                  <p style='text-align: right'>Motivo:&nbsp;&nbsp;</p>
                </div>
                <div class='col-sm-6'>
                  <p style='text-align: left'>&nbsp;&nbsp;$motivo</p>
                </div>
                <div class='col-sm-6'>
                  <p style='text-align: right'>Fecha:&nbsp;&nbsp;</p>
                </div>
                <div class='col-sm-6'>
                  <p style='text-align: left'>&nbsp;&nbsp;$fechaModificada</p>
                </div>
                <div class='col-sm-6'>
                  <p style='text-align: right'>Hora:&nbsp;&nbsp;</p>
                </div>
                <div class='col-sm-6'>
                  <p style='text-align: left'>&nbsp;&nbsp;$hora</p>
                </div>
              </div>
            </div>
            <p style='text-align: center; padding-top: 350px;'>Que tengas un buen día, nos vemos el $fechaModificada</p>
            <br><br>
            <footer>
              <div style='text-align: center; padding: 10px; background-color: #f1f1f1;'>
                <p>&copy; <span id='currentYear'></span> Facundo Gonzalez Vivo. Todos los derechos reservados.
                </p>
                <p>Diseñado y programado por <a href='http://www.facundogonzalezvivo.cl' target='_blank'>Facundo
                    Gonzalez
                    Vivo</a> <img src='../images/facundo.jpg' alt='Logo' style='width: 30px; border-radius: 5px;' />
                </p>
              </div>
            </footer>
    
            <script>
              document.getElementById('currentYear').textContent = new Date().getFullYear();
            </script>
          </div>
        </div>
      </section>
      <script src='../js/app.js'></script>
    
    </body>
    
    </html>";
  }
} else {

  // Redirigir a la página de pago con Mercado Pago
  session_start();

  $_SESSION['reserva'] = array(
    'consulta' => 'Presencial',
    'rut' => $rut,
    'nombre' => $nombre,
    'email' => $email,
    'telefono' => $telefono,
    'motivo' => $motivo,
    'dia' => $fecha,
    'diaModificado' => $fechaModificada,
    'hora' => $hora
  );
  header('Location: pagar_presencial.php');
  exit;

}
