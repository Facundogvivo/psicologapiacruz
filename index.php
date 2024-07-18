<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="Shortcut Icon" type="image/x-icon" href="images/logo.ico" />
    <title>Pía Cruz Dote | Psicóloga clínica</title>
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <script src="https://code.jquery.com/jquery-3.4.1.js" />
    </script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap">
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

        .hidden {
            display: none;
        }

        #informacion ul,
        #metodologia ul {
            margin-left: 60px;
        }
    </style>
</head>

<body>
    <div class="btn">
        <span class="fas fa-bars"></span>
    </div>
    <nav class="sidebar">
        <div class="logo">
            <img src="images/logo2.png" alt="Logo" />
        </div>
        <ul>
            <li><a href="index.php">Inicio</a></li>
            <li><a href="#sobre_mi">Sobre mí</a></li>
            <li>
                <a href="#metodologia" class="btn-primero">Metodología<span
                        class="fas fa-caret-down primero"></span></a>
                <ul class="mostrar-primero">
                    <li><a href="#pas1">Paso 1: Agenda tu primera consulta</a></li>
                    <li><a href="#pas2">Paso 2: Creamos un plan de trabajo</a></li>
                    <li>
                        <a href="#pas3">Paso 3: Agendamiento de las próximas sesiones</a>
                    </li>
                </ul>
            </li>
            <li><a href="#consultas">Agendar Consulta Presencial</a></li>
            <li><a href="#consultas">Agendar Consulta Online</a></li>
            <li><a href="#pre11">Terapia Floral</a></li>
            <li>
                <a href="#informacion" class="btn-segundo">Información para ti<span
                        class="fas fa-caret-down segundo"></span></a>
                <ul class="mostrar-segundo">
                    <li><a href="#pre1">¿La primera sesión es gratis?</a></li>
                    <li>
                        <a href="#pre2">¿Para qué me ayuda tomar una terapia psicológica?</a>
                    </li>
                    <li>
                        <a href="#pre3">¿Mejor tomar una terapia con Psicólogo o Psiquiatra?</a>
                    </li>
                    <li><a href="#pre4">¿Cuántas sesiones dura una terapia?</a></li>
                    <li>
                        <a href="#pre5">¿Es mejor elegir una sesión presencial u online?</a>
                    </li>
                    <li>
                        <a href="#pre6">¿A través de qué medios puedo pagar mi sesión psicológica?</a>
                    </li>
                    <li>
                        <a href="#pre7">¿Las boletas de atención pueden ser reembolsables en todas las
                            ISAPRES?</a>
                    </li>
                    <li><a href="#pre8">¿Es posible reagendar una consulta?</a></li>
                    <li><a href="#pre9">¿Puedo cancelar una consulta?</a></li>
                    <li><a href="#pre10">¿Qué es la terapia holística?</a></li>
                    <li>
                        <a href="#pre11">¿En qué consiste La terapia con flores de Bach?</a>
                    </li>
                    <li>
                        <a href="#pre12">¿Puedo agendar una sesión para Flores de Bach?</a>
                    </li>
                </ul>
            </li>
        </ul>
    </nav>
    <section class="about-us">

        <div class="about">
            <div class="text">

                <br />
                <hr class="custom-hr">
                <div id="sobre_mi">
                    <br />
                    <br />
                    <h2>Sobre mí</h2>
                    <br />
                    <div>
                        <p style="text-align: justify;"><img src="images/foto.jpg"
                                style="float: right; width: 35%; max-width: 300px; padding: 0 30px 30px 30px">
                            Psicóloga Clínica y Terapeuta holística. Enfocada en contemplar al
                            ser humano en cuerpo, mente y espíritu; como un todo. Propongo
                            alternativas de prevención y atención a problemas psicológicos que
                            afectan la salud mental y la vida diaria de mis pacientes, que
                            generen malestar y sufrimiento.
                        </p>
                        <br />
                        <p style="text-align: justify;">
                            En la terapia clínica y conjunto con el paciente, buscamos
                            comprender el significado y el propósito más profundo detrás de la
                            dolencia. Con el apoyo de la Psicología Clínica y medicina
                            complementaria de sanación si es necesario, trabajo a nivel
                            energético aspectos emocionales para equilibrar el organismo,
                            liberando los bloqueos y permitiendo que la energía fluya
                            libremente a través del cuerpo promoviendo el bienestar integral.
                        </p>
                        <br />
                        <p style="text-align: justify;">
                            Experiencia en atención con abordaje en trastornos del estado de
                            ánimo ansiedad y depresión, fobias, estrés, duelo y crisis.
                            Terapia individual y de pareja.
                        </p>
                    </div>

                    <br />
                    <br />
                    <div style="clear: both;">
                        <p style="text-align: center">
                            Te saluda cordialmente,<br />
                            Pía Cruz Dote<br />
                            Psicóloga Clínica<br />
                            Email:&nbsp;&nbsp;<a
                                href="mailto:contacto@psicologapiacruz.cl">contacto@psicologapiacruz.cl</a>
                            <br />
                            Teléfono:&nbsp;&nbsp;<a href="https://api.whatsapp.com/send?phone=56940928683">+569
                                40928683</a>
                        </p>
                    </div>

                    <div id="consultas">
                        <br />
                        <br />

                        <a href="reservaPresencial.php" style="text-decoration: none;"><button
                                class="botonConsulta hover-move" style="float: left">Agendar Consulta
                                Presencial</button></a>


                        <a href="reservaOnline.php" style="text-decoration: none;"><button
                                class="botonConsulta hover-move" style="float: right">Agendar Consulta
                                Online</button></a>

                    </div>
                </div>
                <br />
                <br />
                <br />
                <br />
                <hr class=" custom-hr">
                <div id="metodologia">
                    <br />
                    <br />
                    <h2>Metodología</h2>
                    <br />
                    <h4 id="pas1">
                        <br />
                        <br />
                        &#128995;&nbsp;&nbsp; Paso 1: Agenda tu primera consulta
                    </h4>
                    <ul>
                        <li style="text-align: justify;">Para agendar una consulta, reserva en esta
                            página y elige la fecha y horario en la que deseas realizar la
                            sesión de terapia. También podrás elegir la modalidad que más te
                            acomode: Terapia online o terapia presencial.</li>
                        <li style="text-align: justify;">Las sesiones de trabajo que realizo tienen
                            una duración de 60 minutos.</li>
                    </ul>

                    <br />
                    <br />
                    <h4 id="pas2">
                        <br />
                        <br />
                        &#128995;&nbsp;&nbsp; Paso 2: Creamos un plan de trabajo
                    </h4>
                    <ul>
                        <li style="text-align: justify;">En nuestra primera sesión, te invito a que me
                            cuentes acerca de ti, quien eres, como te sientes, que es lo que
                            te motiva a asistir a terapia, así como también, aclarar todas las
                            dudas que puedas tener respecto de este proceso.</li>
                        <li style="text-align: justify;">Si nunca has hecho una terapia, no te
                            preocupes, en esta primera sesión te explicaré cómo la terapia nos
                            ayudará a cumplir nuestros objetivos, y los compromisos que son
                            necesarios para que sea efectiva.</li>
                        <li style="text-align: justify;">Creamos un plan de trabajo. La cantidad de
                            sesiones que serán necesarias depende de las necesidades de cada
                            paciente.</li>
                    </ul>
                    <br />
                    <br />
                    <h4 id="pas3">
                        <br />
                        <br />
                        &#128995;&nbsp;&nbsp; Paso 3: Agendamiento de las próximas
                        sesiones
                    </h4>
                    <ul>
                        <li style="text-align: justify;">Podrás continuar con tu terapia agendando
                            regularmente sesiones en la frecuencia que estimemos conveniente.
                            Lo ideal es que al final de cada sesión dejemos agendada la hora
                            para tu próxima consulta, pero si no estás seguro, siempre podrás
                            agendar tú mismo a través de la plataforma.</li>
                    </ul>
                </div>
                <br />
                <br />
                <hr class="custom-hr">
                <div id="informacion">
                    <br />
                    <br />
                    <h2>Información para ti</h2>
                    <br />
                    <h4 onmouseover="desplegar('div1')" onmouseout="desplegar('div1')" id="pre1" class="hover-move">
                        <br />
                        <br />
                        &#128995;&nbsp;&nbsp; ¿La primera sesión es gratis?&nbsp;&nbsp;<i class="fas fa-caret-down"
                            style="color: gray; font-size: 20px;"></i>
                    </h4>
                    <div id="div1" class="hidden">
                        <ul>
                            <li style="text-align: justify;">Si, esta primera sesión de diagnóstico y
                                objetivos me gusta realizarla de manera gratuita ya que permite
                                que nos conozcamos y que sientas que tomas un proceso donde
                                resolverás tus inquietudes; esto para mí también es parte
                                fundamental del proceso en una terapia.</li>
                        </ul>
                        <br />
                    </div>
                    <h4 onmouseover="desplegar('div2')" onmouseout="desplegar('div2')" id="pre2" class="hover-move">
                        <br />
                        <br />
                        &#128995;&nbsp;&nbsp; ¿Para qué me ayuda tomar una terapia
                        psicológica?&nbsp;&nbsp;<i class="fas fa-caret-down" style="color: gray; font-size: 20px;"></i>
                    </h4>
                    <div id="div2" class="hidden">
                        <ul>
                            <li style="text-align: justify;">La salud mental es muy relevante para la
                                calidad de vida de las personas. Ayuda en el bienestar
                                emocional, mental y conductual. Abordaje para aliviar el
                                sufrimiento emocional, mejorar el autoestima y autoconfianza,
                                fortalecer las relaciones interpersonales, enfrentar y superar
                                problemas específicos y trastornos mentales, la adaptación a
                                cambios importantes en la vida, es decir, mejorar la salud
                                mental en general y la calidad de vida.</li>
                        </ul>
                        <br />
                    </div>
                    <h4 onmouseover="desplegar('div3')" onmouseout="desplegar('div3')" id="pre3" class="hover-move">
                        <br />
                        <br />
                        &#128995;&nbsp;&nbsp; ¿Mejor tomar una terapia con Psicólogo
                        o Psiquiatra?&nbsp;&nbsp;<i class="fas fa-caret-down" style="color: gray; font-size: 20px;"></i>
                    </h4>
                    <div id="div3" class="hidden">
                        <ul>
                            <li style="text-align: justify;">El Psicólogo aborda problemas emocionales y
                                conductuales, desarrollo personal, y situaciones donde la
                                terapia hablada es efectiva.
                            </li>
                            <li style="text-align: justify;">El psiquiatra es un médico, que aborda
                                idealmente trastornos graves, la perspectiva desde la cual
                                aborda la problemática es principalmente farmacológica. .
                            </li>
                            <li style="text-align: justify;">La terapia con ambos es beneficioso en
                                casos
                                complejos y para un tratamiento integral, es decir, no será
                                excluyente. La elección dependerá de tus necesidades
                                particulares y del tipo de apoyo que requieras.
                            </li>
                            <br />
                    </div>
                    <h4 onmouseover="desplegar('div4')" onmouseout="desplegar('div4')" id="pre4" class="hover-move">
                        <br />
                        <br />
                        &#128995;&nbsp;&nbsp; ¿Cuántas sesiones dura una terapia?&nbsp;&nbsp;<i
                            class="fas fa-caret-down" style="color: gray; font-size: 20px;"></i>
                    </h4>
                    <div id="div4" class="hidden">
                        <ul>
                            <li style="text-align: justify;">La duración de la terapia dependerá de tus
                                necesidades y de los objetivos terapéuticos. Lo determinaremos
                                al inicio de la terapia.</li>
                        </ul>
                        <br />
                    </div>
                    <h4 onmouseover="desplegar('div5')" onmouseout="desplegar('div5')" id="pre5" class="hover-move">
                        <br />
                        <br />
                        &#128995;&nbsp;&nbsp; ¿Es mejor elegir una sesión presencial
                        u online?&nbsp;&nbsp;<i class="fas fa-caret-down" style="color: gray; font-size: 20px;"></i>
                    </h4>
                    <div id="div5" class="hidden">
                        <ul>
                            <li style="text-align: justify;">Puedes elegir la modalidad que más te
                                acomode, la terapia es igual de efectiva sea online o
                                presencial.</li>
                            <li style="text-align: justify;">Para terapias de pareja puede resultar más
                                cómodo agendar una consulta presencial, pero no es un requisito.</li>
                        </ul>
                        <br />
                    </div>
                    <h4 onmouseover="desplegar('div6')" onmouseout="desplegar('div6')" id="pre6" class="hover-move">
                        <br />
                        <br />
                        &#128995;&nbsp;&nbsp; ¿A través de qué medios puedo pagar mi
                        sesión psicológica?&nbsp;&nbsp;<i class="fas fa-caret-down"
                            style="color: gray; font-size: 20px;"></i>
                    </h4>
                    <div id="div6" class="hidden">
                        <ul>
                            <li style="text-align: justify;">Las consultas se pueden pagar con
                                tarjetas de débito o crédito a través de Mercado Pago o a través de
                                transferencias
                                bancarias.</li>
                        </ul>
                        <br />
                    </div>
                    <h4 onmouseover="desplegar('div7')" onmouseout="desplegar('div7')" id="pre7" class="hover-move">
                        <br />
                        <br />
                        &#128995;&nbsp;&nbsp; ¿Las boletas de atención pueden ser
                        reembolsables en todas las ISAPRES?&nbsp;&nbsp;<i class="fas fa-caret-down"
                            style="color: gray; font-size: 20px;"></i>
                    </h4>
                    <div id="div7" class="hidden">
                        <ul>
                            <li style="text-align: justify;">Sí, y si tienes seguro complementario para
                                salud con cobertura para psicología, puedes traer el formulario
                                para ser llenado por mí.</li>
                        </ul>
                        <br />
                    </div>
                    <h4 onmouseover="desplegar('div8')" onmouseout="desplegar('div8')" id="pre8" class="hover-move">
                        <br />
                        <br />
                        &#128995;&nbsp;&nbsp; ¿Es posible reagendar una consulta?&nbsp;&nbsp;<i
                            class="fas fa-caret-down" style="color: gray; font-size: 20px;"></i>
                    </h4>
                    <div id="div8" class="hidden">
                        <ul>
                            <li style="text-align: justify;">Sí, puedes hacerlo contactándote a mi
                                email: <a href="mailto:contacto@psicologapiacruz.cl">contacto@psicologapiacruz.cl</a>
                            </li>
                        </ul>
                        <br />
                    </div>
                    <h4 onmouseover="desplegar('div9')" onmouseout="desplegar('div9')" id="pre9" class="hover-move">
                        <br />
                        <br />
                        &#128995;&nbsp;&nbsp; ¿Puedo cancelar una consulta?&nbsp;&nbsp;<i class="fas fa-caret-down"
                            style="color: gray; font-size: 20px;"></i>
                    </h4>
                    <div id="div9" class="hidden">
                        <ul>
                            <li style="text-align: justify;">Sí, contactándote a mi email. Recuerda que
                                al cancelar una hora estás liberando el cupo para que alguien
                                más lo pueda agendar.</li>
                        </ul>
                        <br />
                    </div>
                    <h4 onmouseover="desplegar('div10')" onmouseout="desplegar('div10')" id="pre10" class="hover-move">
                        <br />
                        <br />
                        &#128995;&nbsp;&nbsp; ¿Qué es la terapia holística?&nbsp;&nbsp;<i class="fas fa-caret-down"
                            style="color: gray; font-size: 20px;"></i>
                    </h4>
                    <div id="div10" class="hidden">
                        <ul>
                            <li style="text-align: justify;">Es un enfoque de tratamiento que considera
                                a
                                la persona en su totalidad: mente, cuerpo y espíritu. Se basa en
                                la creencia de que todos estos aspectos están interconectados y
                                que, para lograr un bienestar completo, es necesario abordarlos
                                de manera integral. Las prácticas terapéuticas holísticas pueden
                                incluir una variedad de técnicas y tratamientos, yo aplico
                                Flores de Bach, Reiki, Meditación y Yoga. De esta manera
                                promuevo el equilibrio y la armonía en todos los aspectos de la
                                persona.</li>
                        </ul>
                        <br />
                    </div>
                    <h4 onmouseover="desplegar('div11')" onmouseout="desplegar('div11')" id="pre11" class="hover-move">
                        <br />
                        <br />
                        &#128995;&nbsp;&nbsp; ¿En qué consiste La terapia con flores
                        de Bach?&nbsp;&nbsp;<i class="fas fa-caret-down" style="color: gray; font-size: 20px;"></i>
                    </h4>
                    <div id="div11" class="hidden">
                        <ul>
                            <li style="text-align: justify;">Constituye un sistema de tratamiento
                                natural, basado en elixires florales, que se emplea para
                                armonizar de manera holística (integral) los desequilibrios
                                físicos, emocionales, mentales y espirituales de las personas;
                                el descubrimiento de los elixires y su acción terapéutica tal y
                                como hoy la conocemos, se atribuye al médico británico, Edward
                                Bach. Al tratarse de remedios completamente naturales las flores
                                de Bach no tienen contraindicaciones ni interactúan con otros
                                tratamientos médicos por lo que son aptas para todos. Las Flores
                                de Bach son perfectas para resolver enfermedades que tienen un
                                origen emocional, mental o psicosomático.</li>
                        </ul>
                        <br />
                    </div>
                    <h4 onmouseover="desplegar('div12')" onmouseout="desplegar('div12')" id="pre12" class="hover-move">
                        <br />
                        <br />
                        &#128995;&nbsp;&nbsp; ¿Puedo agendar una sesión para Flores
                        de Bach?&nbsp;&nbsp;<i class="fas fa-caret-down" style="color: gray; font-size: 20px;"></i>
                    </h4>
                    <div id="div12" class="hidden">
                        <ul>
                            <li style="text-align: justify;">Claro que sí, reserva la hora Presencial u
                                Online. El valor de la sesión equivale a la sesión más el frasco
                                con las esencias florales.</li>
                        </ul>
                        <br />
                    </div>
                </div>
                <br />
                <hr class="custom-hr">
                <p style="text-align: justify; color: #6d28d9">
                    Te invito a recorrer juntos un camino lleno de sorpresas y
                    oportunidades, en un espacio seguro, confiable, libre de prejuicios,
                    en donde seremos comprendidos y aceptados.
                </p>
                <br />
                <h5 style="text-align: center; color: #6d28d9; font-weight: bolder">
                    ¡Quedo a disposición, espero poder ayudarte!
                </h5>
                <br />
                <br />
                <marquee width="100%" height="120px" behavior="alternate">&nbsp;&nbsp; <img src="images/banmedica.jpg"
                        alt="" />&nbsp;&nbsp;
                    <img src="images/colmena.jpg" alt="Colmena" height="100px;" />&nbsp;&nbsp;
                    <img src="images/consalud.jpg" alt="Consalud" height="100px;" />&nbsp;&nbsp;
                    <img src="images/cruzblanca.jpg" alt="Cruz Blanca" height="100px;" />&nbsp;&nbsp;
                    <img src="images/masvida.jpg" alt="Mas Vida" height="100px;" />&nbsp;&nbsp;
                    <img src="images/vidatres.jpg" alt="Vida Tres" height="100px;" />&nbsp;&nbsp;
                </marquee>

                <footer>
                    <div style="text-align: center; padding: 10px; background-color: #f1f1f1;">
                        <p>&copy; <span id="currentYear"></span> Facundo Gonzalez Vivo. Todos los
                            derechos reservados.
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
            </div>
        </div>
    </section>
    <script>
        const menuItems = document.querySelectorAll("nav.sidebar ul li a");

        menuItems.forEach(item => {
            item.addEventListener("click", function () {
                // Remove active class from all menu items
                menuItems.forEach(i => i.classList.remove("active"));

                // Add active class to the clicked menu item
                this.classList.add("active");
            });
        });
    </script>
    <script src="js/app.js"></script>
</body>

</html>