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

        .calendar {
            display: grid;
            grid-template-columns: repeat(7, 1fr);
            gap: 5px;
            margin-bottom: 20px;
        }

        .calendar-header {
            font-weight: bold;
            text-align: center;
            background-color: #f2f2f2;
            padding: 5px;
        }

        .calendar-day {
            text-align: center;
            padding: 5px;
            border: 1px solid #ddd;
            position: relative;
            cursor: pointer;
        }

        .calendar-day:hover {
            background-color: #f0f0f0;
        }

        .calendar-day.active {
            background-color: #b3e5fc;
        }

        .calendar-time {
            font-size: 0.9em;
            position: static;
            /* Change from absolute to static */
            top: auto;
            left: auto;
            right: auto;
            background-color: #fff;
            border: none;
            /* Remove border */
            display: block;
            /* Always display */
            padding: 5px;
            z-index: 10;
        }

        .calendar-time div {
            border-bottom: 1px solid #ddd;
            /* Optional: Add separation between time slots */
            padding: 2px 0;
        }

        .calendar-day:hover .calendar-time {
            display: block;
        }

        .busy {
            background-color: #ffcdd2;
            /* Color de fondo para horas ocupadas */
        }

        .motivo-bloqueo {
            background-color: #ffcccc;
            /* Rojo claro */
        }

        .motivo-individual {
            background-color: #ccffcc;
            /* Verde claro */
        }

        .motivo-pareja {
            background-color: #ccccff;
            /* Azul claro */
        }

        .motivo-evaluacion {
            background-color: #ffccff;
            /* Azul claro */
        }

        .motivo-floral {
            background-color: #ccffff;
            /* Azul claro */
        }

        .meses {
            border-radius: 10px;
            margin: 5px auto;
            color: #000;
            background-color: #ddd6fe;
            float: left;
            height: 60px;
            box-shadow: 10px 10px 5px #000;
            border-radius: 15px;
            border: 1px solid black;
        }

        .legend-color {
            display: inline-block;
            width: 20px;
            height: 20px;
            margin-right: 5px;
            vertical-align: middle;
            box-shadow: 5px 5px 5px #000;
        }

        #legend {
            display: flex;
            align-items: center;
            margin-left: 20px;
        }

        #legend div {
            display: flex;
            align-items: center;
            margin-right: 15px;
        }

        .controls-container {
            display: flex;
            justify-content: center;
            align-items: center;
            margin-top: 20px;
            /* Ajusta según tus necesidades */
        }

        #calendarControls {
            text-align: center;
            display: flex;
            flex-direction: row;
            align-items: center;
            gap: 10px;
        }

        #calendarControls button {
            margin: 5px;
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
            <img src='images/logoPiaCruz.png' alt='Logo' />
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
                <h1>Calendario de reservas</h1>
                <div id="calendarControls" class="controls-container">
                    <button id="prevMonth" class="meses hover-move">Mes Anterior</button>
                    <button id="nextMonth" class="meses hover-move">Mes Siguiente</button>
                </div>
                <div id="legend">
                    <div><span class="legend-color motivo-evaluacion"></span> Primera sesión de evaluación</div>
                    <div><span class="legend-color motivo-individual"></span> Terapia individual</div>
                    <div><span class="legend-color motivo-pareja"></span> Terapia de pareja</div>
                    <div><span class="legend-color motivo-floral"></span> Terapia floral</div>
                    <div><span class="legend-color motivo-bloqueo"></span> Hora bloqueada</div>
                </div>
                <br><br>
                <div id="calendarContainer"></div>

                <br><br>
                <footer>
                    <div style="text-align: center; padding: 10px; background-color: #f1f1f1;">
                        <p>&copy; <span id="currentYear"></span> Facundo Gonzalez Vivo. Todos los derechos reservados.
                        </p>
                        <p>Diseñado y programado por <a href="http://www.facundogonzalezvivo.cl" target="_blank">Facundo
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
                    const calendarContainer = document.getElementById('calendarContainer');
                    const prevMonthBtn = document.getElementById('prevMonth');
                    const nextMonthBtn = document.getElementById('nextMonth');
                    let currentDate = new Date();
                    let currentMonth = currentDate.getMonth();
                    let currentYear = currentDate.getFullYear();

                    prevMonthBtn.addEventListener('click', () => changeMonth(-1));
                    nextMonthBtn.addEventListener('click', () => changeMonth(1));

                    renderCalendar(currentYear, currentMonth);

                    function changeMonth(direction) {
                        currentMonth += direction;
                        if (currentMonth < 0) {
                            currentMonth = 11;
                            currentYear--;
                        } else if (currentMonth > 11) {
                            currentMonth = 0;
                            currentYear++;
                        }
                        renderCalendar(currentYear, currentMonth);
                    }

                    function renderCalendar(year, month) {
                        const daysInMonth = new Date(year, month + 1, 0).getDate();
                        const firstDay = new Date(year, month, 1).getDay();
                        const monthName = new Intl.DateTimeFormat('es', { month: 'long' }).format(new Date(year, month, 1));

                        const adjustedFirstDay = (firstDay === 0) ? 6 : firstDay - 1;

                        // Crear la estructura de la tabla del calendario
                        calendarContainer.innerHTML = `
                            <div class="calendar-header">${monthName} ${year}</div>
                            <table class="calendar-table">
                                <thead>
                                    <tr>
                                        <th style="width: 100px; text-align: center">Lunes</th>
                                        <th style="width: 100px; text-align: center">Martes</th>
                                        <th style="width: 100px; text-align: center">Miércoles</th>
                                        <th style="width: 100px; text-align: center">Jueves</th>
                                        <th style="width: 100px; text-align: center">Viernes</th>
                                        <th style="width: 100px; text-align: center">Sábado</th>
                                        <th style="width: 100px; text-align: center">Domingo</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    ${generateCalendarDays(year, month, daysInMonth, adjustedFirstDay)}
                                </tbody>
                            </table>
                        `;

                        fetchBusyHours(year, month);
                    }

                    function generateCalendarDays(year, month, daysInMonth, firstDay) {
                        let calendarDaysHTML = '<tr>';
                        let dayCount = 1;

                        for (let i = 0; i < firstDay; i++) {
                            calendarDaysHTML += `<td class="calendar-day"></td>`;
                        }

                        for (let day = 1; day <= daysInMonth; day++) {
                            const date = new Date(year, month, day);
                            const dayOfWeek = date.getDay();
                            const isActiveDay = (currentDate.getDate() === day && currentDate.getMonth() === month);

                            calendarDaysHTML += `
            <td class="hover-move calendar-day ${isActiveDay ? 'active' : ''}" data-day="${day}" data-month="${month}" data-year="${year}">
                ${day}
                <div class="calendar-time">
                    <!-- Horarios reservados se mostrarán aquí -->
                </div>
            </td>
        `;

                            if (dayOfWeek === 0 && day < daysInMonth) { // Domingo, nueva fila
                                calendarDaysHTML += '</tr><tr>';
                            }
                        }

                        const remainingDays = 7 - ((firstDay + daysInMonth) % 7);
                        if (remainingDays !== 7) {
                            for (let i = 0; i < remainingDays; i++) {
                                calendarDaysHTML += `<td class="calendar-day"></td>`;
                            }
                        }

                        calendarDaysHTML += '</tr>';
                        return calendarDaysHTML;
                    }

                    function fetchBusyHours(year, month) {
                        fetch(`php/get_citas.php`)
                            .then(response => response.json())
                            .then(data => {
                                const filteredData = data.filter(cita => {
                                    const citaYear = parseInt(cita.dia.split('-')[0]);
                                    const citaMonth = parseInt(cita.dia.split('-')[1]) - 1;
                                    return citaYear === year && citaMonth === month;
                                });

                                const citasByDay = {};
                                filteredData.forEach(cita => {
                                    const day = parseInt(cita.dia.split('-')[2]);
                                    if (!citasByDay[day]) {
                                        citasByDay[day] = [];
                                    }
                                    citasByDay[day].push(cita);
                                });

                                for (const day in citasByDay) {
                                    citasByDay[day].sort((a, b) => {
                                        const hourA = parseInt(a.hora.split(':')[0]);
                                        const hourB = parseInt(b.hora.split(':')[0]);
                                        const minuteA = parseInt(a.hora.split(':')[1]);
                                        const minuteB = parseInt(b.hora.split(':')[1]);
                                        return hourA - hourB || minuteA - minuteB;
                                    });
                                }

                                for (const day in citasByDay) {
                                    const dayElement = document.querySelector(`.calendar-day[data-day="${day}"][data-month="${month}"][data-year="${year}"]`);
                                    if (dayElement) {
                                        const calendarTime = dayElement.querySelector('.calendar-time');
                                        if (calendarTime) {
                                            citasByDay[day].forEach(cita => {
                                                const motivoClass = getMotivoClass(cita.motivo);
                                                calendarTime.innerHTML += `<div class="busy ${motivoClass}">${cita.hora}<br>(${cita.consulta})<br>${cita.nombre}<br>(${cita.motivo})</div>`;
                                            });
                                        }
                                    }
                                }
                            })
                            .catch(error => console.error('Error:', error));
                    }

                    function getMotivoClass(motivo) {
                        switch (motivo.toLowerCase()) {
                            case 'evaluacion':
                                return 'motivo-evaluacion';
                            case 'individual':
                                return 'motivo-individual';
                            case 'pareja':
                                return 'motivo-pareja';
                            case 'bloqueado':
                                return 'motivo-bloqueado';
                            case 'floral':
                                return 'motivo-floral';
                            default:
                                return '';
                        }
                    }

                </script>
            </div>
        </div>
    </section>
    <script src='js/app.js'></script>

</body>

</html>