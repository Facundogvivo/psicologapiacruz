<!DOCTYPE html>
<html lang='en'>

<head>
  <meta charset='utf-8' />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="Shortcut Icon" type="image/x-icon" href="images/logo.ico" />
  <title>Pía Cruz Dote | Psicóloga clínica</title>
  <link rel='stylesheet' href='css/style.css' />
  <link rel='stylesheet' href='css/bootstrap.min.css' />
  <script src='https://code.jquery.com/jquery-3.4.1.js' />
  </script>
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css' />
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
  <style>
    .custom-hr {
      border: 0;
      height: 3px;
      /* Grosor de la línea */
      background: #6d28d9;
      /* Color de la línea */
    }

    .hover-move {
      transition: transform 0.3s ease;
    }

    .hover-move:hover {
      transform: translateY(-5px);
    }
  </style>
</head>

<body>
  <div class="btn">
    <span class="fas fa-bars"></span>
  </div>
  <nav class='sidebar'>
    <div class='logo'>
      <img src='images/logo2.png' alt='Logo' />
    </div>
    <ul>
      <li><a href='horario.php'>Ver calendario</a></li>
      <li><a href='bloqueoHoras.php'>Bloqueo de horas</a></li>
      <li><a href='agendar.php'>Agendar</a></li>
      <li><a href='reagendar.php'>Reagendar</a></li>
      <hr class="custom-hr">
      <li><a href='index.php'>Inicio</a></li>
      <li><a href='index.php#sobre_mi'>Sobre mí</a></li>
      <li>
        <a href='index.php#metodologia' class='btn-primero'>Metodología<span
            class='fas fa-caret-down primero'></span></a>
        <ul class='mostrar-primero'>
          <li><a href='index.php#pas1'>Paso 1: Agenda tu primera consulta</a></li>
          <li><a href='index.php#pas2'>Paso 2: Creamos un plan de trabajo</a></li>
          <li>
            <a href='index.php#pas3'>Paso 3: Agendamiento de las próximas sesiones</a>
          </li>
        </ul>
      </li>
      <li><a href='index.php#consultas'>Agendar Consulta Presencial</a></li>
      <li><a href='index.php#consultas'>Agendar Consulta Online</a></li>
      <li><a href="index.php#pre11">Terapia Floral</a></li>
      <li>
        <a href='index.php#informacion' class='btn-segundo'>Información para ti<span
            class='fas fa-caret-down segundo'></span></a>
        <ul class='mostrar-segundo'>
          <li><a href='index.php#pre1'>¿La primera sesión es gratis?</a></li>
          <li>
            <a href='index.php#pre2'>¿Para qué me ayuda tomar una terapia psicológica?</a>
          </li>
          <li>
            <a href='index.php#pre3'>¿Mejor tomar una terapia con Psicólogo o Psiquiatra?</a>
          </li>
          <li><a href='index.php#pre4'>¿Cuántas sesiones dura una terapia?</a></li>
          <li>
            <a href='index.php#pre5'>¿Es mejor elegir una sesión presencial u online?</a>
          </li>
          <li>
            <a href='index.php#pre6'>¿A través de qué medios puedo pagar mi sesión psicológica?</a>
          </li>
          <li>
            <a href='index.php#pre7'>¿Las boletas de atención pueden ser reembolsables en todas las
              ISAPRES?</a>
          </li>
          <li><a href='index.php#pre8'>¿Es posible reagendar una consulta?</a></li>
          <li><a href='index.php#pre9'>¿Puedo cancelar una consulta?</a></li>
          <li><a href='index.php#pre10'>¿Qué es la terapia holística?</a></li>
          <li>
            <a href='#index.phppre11'>¿En qué consiste La terapia con flores de Bach?</a>
          </li>
          <li>
            <a href='#index.phppre12'>¿Puedo agendar una sesión para Flores de Bach?</a>
          </li>
        </ul>
      </li>
    </ul>
  </nav>
  <section class='about-us'>
    <div class='about'>
      <div class='text'>
        <div id='bloqueoHoras'>
          <h2>Bloqueo por horas</h2>
          <div class='recordatorio'>
            <form id="bookingForm" action="php/main_reserva_bloqueo.php" method="post">
              <label>Selecciona una fecha:</label>
              <input type="date" id="txt_dia_bloqueo" name="txt_dia_bloqueo" required
                min="<?php echo date('Y-m-d'); ?>" />
              <script>
                // Opcional: Forzar el calendario al enfocar el campo de entrada
                document.getElementById('txt_dia_bloqueo').addEventListener('focus', function () {
                  this.showPicker();
                });
              </script>
              <div id="timeslotsbloqueo">
                <!-- Los horarios disponibles se mostrarán aquí -->
              </div>
              <br />
              <input type="text" id="txt_hora_bloqueo" name="txt_hora_bloqueo" readonly hidden />
              <br />
              <button class="hover-move  boton" id="submitButton" type="submit" style="color: #000;">
                <i class="zmdi">&#128467;&#65039;</i> &nbsp;&nbsp; Bloquear
              </button>
            </form>
          </div>
        </div>


        <br />
        <div id='bloqueoDia'>
          <h2>Bloqueo por día</h2>
          <div class='recordatorio'>
            <form id="bookingForm" action="php/main_reserva_bloqueo_dia.php" method="post">
              <label>Selecciona una fecha:</label>
              <input type="date" id="txt_dia_bloqueo_dia" name="txt_dia_bloqueo_dia" required
                min="<?php echo date('Y-m-d'); ?>" />
              <script>
                // Opcional: Forzar el calendario al enfocar el campo de entrada
                document.getElementById('txt_dia_bloqueo_dia').addEventListener('focus', function () {
                  this.showPicker();
                });
              </script>

              <br />
              <button class="hover-move  boton" id="submitButton" type="submit" style="color: #000;">
                <i class="zmdi">&#128467;&#65039;</i> &nbsp;&nbsp; Bloquear
              </button>
            </form>
          </div>
        </div>
        <br />
        <div id='bloqueoVariosDias'>
          <h2>Bloqueo por varios días</h2>
          <div class='recordatorio'>
            <form id="bookingForm" action="php/main_reserva_bloqueo_varios_dias.php" method="post">
              <label>Selecciona fecha desde:</label>
              <input type="date" id="txt_dia_bloqueo_desde" name="txt_dia_bloqueo_desde" required
                min="<?php echo date('Y-m-d'); ?>" />
              <script>
                // Opcional: Forzar el calendario al enfocar el campo de entrada
                document.getElementById('txt_dia_bloqueo_desde').addEventListener('focus', function () {
                  this.showPicker();
                });
              </script>
              <label>Selecciona fecha hasta:</label>
              <input type="date" id="txt_dia_bloqueo_hasta" name="txt_dia_bloqueo_hasta" required
                min="<?php echo date('Y-m-d'); ?>" />
              <script>
                // Opcional: Forzar el calendario al enfocar el campo de entrada
                document.getElementById('txt_dia_bloqueo_hasta').addEventListener('focus', function () {
                  this.showPicker();
                });
              </script>
              <br />
              <button class="hover-move  boton" id="submitButton" type="submit" style="color: #000;">
                <i class="zmdi">&#128467;&#65039;</i> &nbsp;&nbsp; Bloquear
              </button>
            </form>
          </div>
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
      </div>
    </div>
  </section>
  <script>
    fetch('php/get_occupied_slots.php')
      .then(response => response.json())
      .then(data => {
        occupiedSlots = data;
      })
      .catch(error => console.error('Error fetching occupied slots:', error));

    const dateInputBloqueo = document.getElementById("txt_dia_bloqueo");
    const timeslotsDivBloqueo = document.getElementById("timeslotsbloqueo");

    const timeslots = ["08:00", "09:00", "10:00", "11:00"];

    let occupiedSlots = {};

    dateInputBloqueo.addEventListener("change", () => {
      const selectedDateBloqueo = dateInputBloqueo.value;
      renderTimeslotsBloqueo(selectedDateBloqueo);
    });

    function renderTimeslotsBloqueo(date) {
      timeslotsDivBloqueo.innerHTML = "";
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
            document
              .querySelectorAll(".timeslot")
              .forEach((ts) => ts.classList.remove("selected"));
            timeslot.classList.add("selected");
            document.getElementById("txt_hora_bloqueo").value = time;
          });
        }
        timeslotsDivBloqueo.appendChild(timeslot);
      });
    }
  </script>
  <script src='js/app.js'></script>

</body>

</html>