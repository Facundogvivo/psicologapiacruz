<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="Shortcut Icon" type="image/x-icon" href="images/logo.ico" />
  <meta name="description"
    content="Psicóloga especializada en terapia individual y de pareja. Aborda problemas de ansiedad, depresión, estrés, fobias, etc.">
  <title>Pía Cruz Dote | Psicóloga clínica</title>
  <link rel="stylesheet" href="css/style.css" />
  <link rel="stylesheet" href="css/bootstrap.min.css" />
  <script src="https://code.jquery.com/jquery-3.4.1.js" />
  </script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
  <meta http-equiv="refresh"
    content="0;url=https://facundogonzalezvivo.cl/proyectos/psicologapiacruz/reservaOnline.php">

  <script>
    function mostrarPalabra(palabra) {
      const miOracion = document.getElementById(palabra).value;
      const palabras = miOracion.split(" ");

      for (let i = 0; i < palabras.length; i++) {
        palabras[i] = palabras[i][0].toUpperCase() + palabras[i].substr(1);
      }

      document.getElementById(palabra).value = palabras.join(" ");
    }
  </script>
</head>

<body>
  <div class="btn">
    <span class="fas fa-bars"></span>
  </div>
  <nav class="sidebar">
    <div class="logo">
      <img src="images/logoPiaCruz.png" alt="Logo" />
    </div>
    <ul>
      <li><a href="index.php">Inicio</a></li>
      <li><a href="index.php#sobre_mi">Sobre mí</a></li>
      <li>
        <a href="index.php#metodologia" class="btn-primero">Metodología<span
            class="fas fa-caret-down primero"></span></a>
        <ul class="mostrar-primero">
          <li><a href="index.php#pas1">Paso 1: Agenda tu primera consulta</a></li>
          <li><a href="index.php#pas2">Paso 2: Creamos un plan de trabajo</a></li>
          <li>
            <a href="index.php#pas3">Paso 3: Agendamiento de las próximas sesiones</a>
          </li>
        </ul>
      </li>
      <li><a href="index.php#consultas">Agendar Consulta Presencial</a></li>
      <li><a href="index.php#consultas">Agendar Consulta Online</a></li>
      <li><a href="index.php#pre11">Terapia Floral</a></li>
      <li>
        <a href="index.php#informacion" class="btn-segundo">Información para ti<span
            class="fas fa-caret-down segundo"></span></a>
        <ul class="mostrar-segundo">
          <li><a href="index.php#pre1">¿La primera sesión es gratis?</a></li>
          <li>
            <a href="index.php#pre2">¿Para qué me ayuda tomar una terapia psicológica?</a>
          </li>
          <li>
            <a href="index.php#pre3">¿Mejor tomar una terapia con Psicólogo o Psiquiatra?</a>
          </li>
          <li><a href="index.php#pre4">¿Cuántas sesiones dura una terapia?</a></li>
          <li>
            <a href="index.php#pre5">¿Es mejor elegir una sesión Online u online?</a>
          </li>
          <li>
            <a href="index.php#pre6">¿A través de qué medios puedo pagar mi sesión psicológica?</a>
          </li>
          <li>
            <a href="index.php#pre7">¿Las boletas de atención pueden ser reembolsables en todas las
              ISAPRES?</a>
          </li>
          <li><a href="index.php#pre8">¿Es posible reagendar una consulta?</a></li>
          <li><a href="index.php#pre9">¿Puedo cancelar una consulta?</a></li>
          <li><a href="index.php#pre10">¿Qué es la terapia holística?</a></li>
          <li>
            <a href="index.php#pre11">¿En qué consiste La terapia con flores de Bach?</a>
          </li>
          <li>
            <a href="index.php#pre12">¿Puedo agendar una sesión para Flores de Bach?</a>
          </li>
        </ul>
      </li>
    </ul>
  </nav>
  <!-- <h1>Psicóloga Pia Cruz Dote</h1> -->
  <section class="about-us" id="inicio">
    <div class="about">
      <div class="text">
        <h1>Agendar Consulta</h1>
        <hr style="border: 0; height: 3px; background: #6d28d9;">
        <div id="consulta_online">
          <h5>Modalidad Online</h5>
          <br />
          <div class="recordatorio">
            <p>&#9201;&#65039;&nbsp;&nbsp; Duración sesión de 60 minutos</p>
            <p>&#128421;&#65039;&nbsp;&nbsp; Videoconferencia por Google Meet</p>
            <p>&#128246;&nbsp;&nbsp; Es recomendable contar con buena conexión a internet</p>
            <p>&#127911;&nbsp;&nbsp; Contar con micrófono, audífonos y cámara web</p>
          </div>

          <div class="recordatorio" style="margin-top: 15px">
            <h5>Reserva de Consulta Online</h5>
            <form id="bookingForm" action="php/main_agenda_online.php" method="post">
              <div class="row">
                <div class="col-sx-12 col-sm-6">
                  <label>Nombre y apellido</label><br>
                  <input type="text" id="txt_nombre_online" name="txt_nombre_online" required
                    onchange="mostrarPalabra('txt_nombre_online');" value="Facundo Gonzalez Vivo"
                    style="border: 1px solid #b5b5b5; width: 100%; border-radius: 10px; padding: 5px;box-shadow: 10px 10px 5px #d6c4fd;" />
                </div>
                <div class="col-sx-12 col-sm-6">
                  <label>RUT <span>12345678-K</span></label><br>
                  <input type="text" id="txt_rut_online" name="txt_rut_online" required value="14645916-1"
                    style="border: 1px solid #b5b5b5; width: 100%; border-radius: 10px; padding: 5px;box-shadow: 10px 10px 5px #d6c4fd;" />
                </div>
                <div class="col-sx-12 col-sm-6">
                  <label>Email <span>nombre@mail.com</span></label><br>
                  <input type="email" id="txt_email_online" name="txt_email_online" required
                    value="facundo.gvivo@gmail.com"
                    style="border: 1px solid #b5b5b5; width: 100%; border-radius: 10px; padding: 5px;box-shadow: 10px 10px 5px #d6c4fd;" />
                </div>
                <div class="col-sx-12 col-sm-6">
                  <label>Teléfono <span>+56987654321</span></label><br>
                  <input type="tel" id="txt_telefono_online" name="txt_telefono_online" required value="+56966992704"
                    style="border: 1px solid #b5b5b5; width: 100%; border-radius: 10px; padding: 5px;box-shadow: 10px 10px 5px #d6c4fd;" />
                </div>
                <div class="col-sx-12 col-sm-12">
                  <label>Motivo de Consulta</label><br>
                  <select id="txt_motivo_online" name="txt_motivo_online" required onchange="handleMotivoChange()"
                    style="border: 1px solid #b5b5b5; width: 100%; border-radius: 10px; padding: 5px;box-shadow: 10px 10px 5px #d6c4fd;" />
                  <option value="" style="display: none">
                    Selecciona un motivo
                  </option>
                  <option value="Primera Sesión de Evaluación">
                    Primera Sesión de Evaluación
                  </option>
                  <option value="Terapia Individual">Terapia Individual</option>
                  <option value="Terapia de Pareja">Terapia de Pareja</option>
                  <option value="Terapia Floral">Terapia Floral</option>
                  </select>
                </div>
                <div class="col-sx-12 col-sm-12">
                  <label>Selecciona una fecha:</label><br>
                  <input type="date" id="txt_date_online" name="txt_date_online" required
                    style="border: 1px solid #b5b5b5; width: 100%; border-radius: 10px; padding: 5px;box-shadow: 10px 10px 5px #d6c4fd;"
                    min="<?php echo date('Y-m-d'); ?>" />
                  <script>
                    // Opcional: Forzar el calendario al enfocar el campo de entrada
                    document.getElementById('txt_date_online').addEventListener('focus', function () {
                      this.showPicker();
                    });
                  </script>
                  <div id="timeslotsOnline">
                    <!-- Los horarios disponibles se mostrarán aquí -->
                  </div>
                  <br />
                  <input type="text" id="txt_hora_online" name="txt_hora_online" readonly hidden />
                </div>
              </div>
              <br />
              <button class="hover-move  boton" id="submitButton" type="submit" style="color: #000; padding: 15px;">
                <i class="zmdi">&#128467;&#65039;</i> &nbsp;&nbsp; Reservar y Pagar
              </button>
            </form>
          </div>
          <br><br>
          <footer>
            <div style="text-align: center; padding: 10px; background-color: #f1f1f1;">
              <p>&copy; <span id="currentYear"></span> Facundo Gonzalez Vivo. Todos los derechos reservados.
              </p>
              <p>Diseñado y programado por <a href="http://www.facundogonzalezvivo.cl" target="_blank">Facundo
                  Gonzalez
                  Vivo</a> <img src="images/facundo.jpg" alt="Logo" style="width: 30px; border-radius: 5px;" />
              </p>
            </div>
          </footer>

          <script>
            document.getElementById('currentYear').textContent = new Date().getFullYear();
          </script>
          <script>

            // Función para verificar si es fin de semana
            function isWeekend(date) {
              const day = date.getDay();
              return day === 5 || day === 6; // Friday (5) or Saturday (6)
            }

            const dateInputOnline = document.getElementById("txt_date_online");
            const timeslotsDivOnline = document.getElementById("timeslotsOnline");

            const timeslots = ["08:00", "09:00", "10:00", "11:00"];
            let occupiedSlots = {};

            // Escuchar cambios en la fecha
            dateInputOnline.addEventListener("change", () => {
              const selectedDateOnline = new Date(dateInputOnline.value);
              if (isWeekend(selectedDateOnline)) {
                alert("No se puede reservar horas los fines de semana.");
                dateInputOnline.value = ""; // Reset the date input
                timeslotsDivOnline.style.display = 'none';
              } else {
                renderTimeslotsOnline(dateInputOnline.value);
                timeslotsDivOnline.style.display = 'block';
              }
            });

            // Función para renderizar los horarios disponibles
            function renderTimeslotsOnline(date) {
              timeslotsDivOnline.innerHTML = "";
              const occupied = occupiedSlots[date] || [];

              timeslots.forEach((time) => {
                const timeslot = document.createElement("div");
                timeslot.textContent = time;
                timeslot.classList.add("timeslot");
                if (occupied.includes(time)) {
                  timeslot.classList.add("occupied");
                } else {
                  timeslot.classList.add("available");
                  timeslot.addEventListener("click", () => {
                    document.querySelectorAll(".timeslot").forEach((ts) => ts.classList.remove("selected"));
                    timeslot.classList.add("selected");
                    document.getElementById("txt_hora_online").value = time;

                  });
                }
                timeslotsDivOnline.appendChild(timeslot);
              });
            }

            // Obtener slots ocupados desde el servidor
            fetch('php/get_occupied_slots.php')
              .then(response => response.json())
              .then(data => {
                occupiedSlots = data;
              })
              .catch(error => console.error('Error fetching occupied slots:', error));

          </script>

        </div>
      </div>
    </div>
  </section>
  <script src="js/app.js"></script>
</body>

</html>