<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="Shortcut Icon" type="image/x-icon" href="images/logo.ico" />
    <meta name="description"
        content="Psicóloga Clínica y Terapeuta Holística, especializada en terapia individual y de pareja. Aborda problemas de ansiedad, depresión, estrés, fobias y más, integrando psicología clínica y medicina complementaria para un bienestar integral. Agenda tu cita hoy.">
    <title>Pía Cruz Dote | Psicóloga clínica</title>
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
    <style>
        .custom-hr {
            border: 0;
            height: 3px;
            background: #6d28d9;
        }
    </style>
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
            <li><a href='horario.php'>Ver calendario</a></li>
            <li><a href='bloqueoHoras.php'>Bloqueo de horas</a></li>
            <li><a href='agendar.php'>Agendar</a></li>
            <li><a href='reagendar.php'>Reagendar</a></li>
            <hr class="custom-hr">
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
                        <a href="index.php#pre5">¿Es mejor elegir una sesión presencial u online?</a>
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
    <section class="about-us">
        <div class="about">
            <div class="text">
                <h1>Modificar Consulta</h1>
                <hr style="border: 0; height: 3px; background: #6d28d9;">
                <div id="modificar_consulta">
                    <h5>Modificar Consulta</h5>
                    <br />
                    <div class="recordatorio" style="margin-top: 15px">
                        <form id="modifyForm" action="php/main_modificar_consulta.php" method="post">
                            <div class="row">
                                <div class="col-sx-12 col-sm-12">
                                    <label>Seleccione su cita agendada</label><br>
                                    <select id="select_cita" name="select_cita" required
                                        style="border: 1px solid #b5b5b5; width: 100%; border-radius: 10px; padding: 5px;box-shadow: 10px 10px 5px #d6c4fd;">
                                        <option value="" style="display: none">
                                            Selecciona una cita
                                        </option>
                                        <!-- Opciones generadas dinámicamente desde el servidor -->
                                    </select>
                                </div>
                                <div class="col-sx-12 col-sm-6">
                                    <label>Nombre y apellido</label><br>
                                    <input type="text" id="txt_nombre_modificar" name="txt_nombre_modificar" required
                                        onchange="mostrarPalabra('txt_nombre_modificar');"
                                        style="border: 1px solid #b5b5b5; width: 100%; border-radius: 10px; padding: 5px;box-shadow: 10px 10px 5px #d6c4fd;" />
                                </div>
                                <div class="col-sx-12 col-sm-6">
                                    <label>RUT</label><br>
                                    <input type="text" id="txt_rut_modificar" name="txt_rut_modificar" required
                                        style="border: 1px solid #b5b5b5; width: 100%; border-radius: 10px; padding: 5px;box-shadow: 10px 10px 5px #d6c4fd;" />
                                </div>
                                <div class="col-sx-12 col-sm-6">
                                    <label>Email</label><br>
                                    <input type="email" id="txt_email_modificar" name="txt_email_modificar" required
                                        style="border: 1px solid #b5b5b5; width: 100%; border-radius: 10px; padding: 5px;box-shadow: 10px 10px 5px #d6c4fd;" />
                                </div>
                                <div class="col-sx-12 col-sm-6">
                                    <label>Teléfono</label><br>
                                    <input type="tel" id="txt_telefono_modificar" name="txt_telefono_modificar" required
                                        style="border: 1px solid #b5b5b5; width: 100%; border-radius: 10px; padding: 5px;box-shadow: 10px 10px 5px #d6c4fd;" />
                                </div>
                                <div class="col-sx-12 col-sm-12">
                                    <label>Motivo de Consulta</label><br>
                                    <select id="txt_motivo_modificar" name="txt_motivo_modificar" required
                                        style="border: 1px solid #b5b5b5; width: 100%; border-radius: 10px; padding: 5px;box-shadow: 10px 10px 5px #d6c4fd;">
                                        <option value="" style="display: none">
                                            Selecciona un motivo
                                        </option>
                                        <option value="Primera Sesión de Evaluación Individual">
                                            Primera Sesión de Evaluación (Terapia Individual)
                                        </option>
                                        <option value="Primera Sesión de Evaluación Terapia de Pareja">
                                            Primera Sesión de Evaluación (Terapia de Pareja)
                                        </option>
                                        <option value="Terapia Individual">Terapia Individual</option>
                                        <option value="Terapia de Pareja">Terapia de Pareja</option>
                                        <option value="Terapia Floral">Terapia Floral</option>
                                    </select>
                                </div>
                                <div class="col-sx-12 col-sm-12">
                                    <label>Selecciona una nueva fecha:</label><br>
                                    <input type="date" id="txt_date_modificar" name="txt_date_modificar" required
                                        style="border: 1px solid #b5b5b5; width: 100%; border-radius: 10px; padding: 5px;box-shadow: 10px 10px 5px #d6c4fd;"
                                        min="<?php echo date('Y-m-d'); ?>" />
                                    <script>
                                        document.getElementById('txt_date_modificar').addEventListener('focus', function () {
                                            this.showPicker();
                                        });
                                    </script>
                                    <div id="timeslotsModificar">
                                        <!-- Los horarios disponibles se mostrarán aquí -->
                                    </div>
                                    <br />
                                    <input type="text" id="txt_hora_modificar" name="txt_hora_modificar" readonly
                                        hidden />
                                </div>
                            </div>
                            <br /><button class="hover-move boton" id="modifyButton" type="submit"
                                style="color: #000; padding: 15px;">
                                <i class="zmdi">&#128467;&#65039;</i> &nbsp;&nbsp; Modificar y Guardar
                            </button>
                        </form>
                    </div>
                    <br><br>
                    <footer>
                        <div style="text-align: center; padding: 10px; background-color: #f1f1f1;">
                            <p>&copy; <span id="currentYear"></span> Facundo Gonzalez Vivo. Todos los derechos
                                reservados.
                            </p>
                            <p>Diseñado y programado por <a href="http://www.facundogonzalezvivo.cl"
                                    target="_blank">Facundo
                                    Gonzalez
                                    Vivo</a> <img src="images/facundo.jpg" alt="Logo"
                                    style="width: 30px; border-radius: 5px;" />
                            </p>
                        </div>
                    </footer>

                    <script>
                        document.getElementById('currentYear').textContent = new Date().getFullYear();
                    </script>
                    <script>
                        function isWeekend(date) {
                            const day = date.getDay();
                            return day === 5 || day === 6; // Friday (5) or Saturday (6)
                        }

                        const dateInputModificar = document.getElementById("txt_date_modificar");
                        const timeslotsDivModificar = document.getElementById("timeslotsModificar");

                        const timeslots = ["08:00", "09:00", "10:00", "11:00"];
                        let occupiedSlots = {};

                        dateInputModificar.addEventListener("change", () => {
                            const selectedDateModificar = new Date(dateInputModificar.value);
                            if (isWeekend(selectedDateModificar)) {
                                alert("No se puede reservar horas los fines de semana.");
                                dateInputModificar.value = ""; // Reset the date input
                                timeslotsDivModificar.style.display = 'none';
                            } else {
                                renderTimeslotsModificar(dateInputModificar.value);
                                timeslotsDivModificar.style.display = 'block';
                            }
                        });

                        function renderTimeslotsModificar(date) {
                            timeslotsDivModificar.innerHTML = "";
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
                                        document.getElementById("txt_hora_modificar").value = time;
                                    });
                                }
                                timeslotsDivModificar.appendChild(timeslot);
                            });
                        }

                        fetch('php/get_occupied_slots.php')
                            .then(response => response.json())
                            .then(data => {
                                occupiedSlots = data;
                            })
                            .catch(error => console.error('Error fetching occupied slots:', error));
                        // Función para convertir la fecha de yyyy-mm-dd a dd-mm-yyyy
                        function formatDate(isoDate) {
                            const [year, month, day] = isoDate.split('-');
                            return `${day}-${month}-${year}`;
                        }

                        // Cargar citas agendadas del servidor y llenar el select
                        fetch('php/get_agendadas.php')
                            .then(response => response.json())
                            .then(data => {
                                const selectCita = document.getElementById('select_cita');
                                data.forEach(cita => {
                                    const option = document.createElement('option');
                                    option.value = cita.id;
                                    option.textContent = `${formatDate(cita.dia)} - ${cita.hora}`;
                                    selectCita.appendChild(option);
                                });
                            })
                            .catch(error => console.error('Error fetching agendadas:', error));

                        // Llenar formulario con datos de cita seleccionada
                        document.getElementById('select_cita').addEventListener('change', function () {
                            const citaId = this.value;
                            if (citaId) {
                                fetch(`php/get_cita.php?id=${citaId}`)
                                    .then(response => response.json())
                                    .then(data => {
                                        document.getElementById('txt_nombre_modificar').value = data.nombre;
                                        document.getElementById('txt_rut_modificar').value = data.rut;
                                        document.getElementById('txt_email_modificar').value = data.email;
                                        document.getElementById('txt_telefono_modificar').value = data.telefono;
                                        document.getElementById('txt_motivo_modificar').value = data.motivo;
                                    })
                                    .catch(error => console.error('Error fetching cita:', error));
                            }
                        });

                    </script>

                </div>
            </div>
        </div>
    </section>
    <script src="js/app.js"></script>

</body>

</html>