<!DOCTYPE html>
<html>

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum.scale=1.0,
    minimum-scale=1.0">

    <!-- Solicita los estilos e iconos --> 
    <script src="https://kit.fontawesome.com/839ff977a4.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="./css/estilos.css">

</head>
<body>
    
<!--------------------------------------
BARRA DE MENU
--------------------------------------->

    <header>  

        <div class="header-content">

            <div class="logo">
                <h1>My<b>Tablero</b> CBTis</h1>
            </div>

            <div class="menu" id="show-menu">

                <nav>
                    <ul>
                    <li><a href="index.html"><i class="fas fa-home"></i> Bienvenido</a></li>
                    <li><a href="page_mytablero.php"><i class="fa-solid fa-table"></i> MyTablero</a></li>
                    <li><a href="page_listadoAlumnos.php"><i class="fa-solid fa-list"></i> Listado de Alumnos</a></li>
                    <li><a href="page_registroAlumnos.php"><i class="fa-solid fa-address-card"></i> Registro de Alumnos </a></li>
                    <li class="menu-selected"><a href="page_insertarTareas.php"><i class="fa-solid fa-paper-plane" class="text-menu-selected"></i> Insertar Tareas </a></li>
                    <li><a href="page_admin_myTablero.php"><i class="fa-solid fa-table"></i> Admin Tablero </a></li>
                    </ul>
                </nav>

            </div>

        </div>

        <div id="icon-menu">

            <i class="fa-solid fa-bars"></i>

        </div>

    </header>

<!--------------------------------------
CONTENIDO PRINCIPAL
--------------------------------------->

<body>

    <div class="container-all" id="move-content">

        <div class="container-content_01">

            <article>

                <h2>INSERTAR TAREAS</h2>
                <br>

                <form action="subir_myTablero.php" method="get">
                    <label for="">Titulo</label>
                    <input type="text" class="field" name="nomTarea" id="nomTarea" required min="1" required maxlength="50" autocomplete="off">

                    <label for="">Materia</label>
                    <input type="text" class="field" name="matTarea" id="matTarea" required min="1" required maxlength="50" autocomplete="off" list="l5" 
                    required pattern="[Cc]alculo [Dd]iferencial|[Ii]ngles|[Ff]isica|[Ee]cologia|[Cc]onstruye[Pp]aginas [Ww]eb| 
                    [Dd]esarrolla [Aa]plicaciones [Qq]ue [Ss]e [Ee]jecutan [Ee]n [Ee]l [Cc]liente|
                    [Dd]esarrolla [Aa]plicaciones [Qq]ue [Ss]e [Ee]jecutan [Ee]n [Ee]l [Ss]ervidor|[Tt]utoria">

                    <datalist id="l5">
                        <option>Calculo Diferencial</option>
                        <option>Ingles</option>
                        <option>Fisica</option>
                        <option>Ecologia</option>
                        <option>Construye Paginas Web</option>
                        <option>Desarrolla Aplicaciones Que Se Ejecutan En El Cliente</option>
                        <option>Desarrolla Aplicaciones Que Se Ejecutan En El Servidor</option>
                        <option>Tutoria</option>
                    </datalist>

                    <label for="">Descripcion</label>
                    <input type="text" class="field" name="descTarea" id="descTarea" required min="1" autocomplete="off" required maxlength="50">

                    <label for="">Fecha</label>
                    <input type="date" class="field" name="fechaTarea" id="fechaTarea" required min="1" autocomplete="off" required maxlength="6">

                    <label for="">Hora</label>
                    <input type="time" class="field" name="horaTarea" id="horaTarea" required min="1" autocomplete="off" required maxlength="50">

                    <label for="">Estado</label>
                    <input type="text" class="field" name="estadoTarea" id="estadoTarea" required min="1" autocomplete="off" required maxlength="50" list="l4" 
                    required pattern="[Pp]endiente|[Ee]ntregado|[Ss]in [Ee]ntregar">

                    <datalist id="l4">
                        <option>Pendiente</option>
                        <option>Entregado</option>
                        <option>Sin Entregar</option>
                    </datalist>

                    <label for="">Semestre</label>
                    <input type="text" class="field" name="semTarea" id="semTarea" required maxlength="50" autocomplete="off" list="l3" 
                    required pattern="1|2|3|4|5|6">

                    <datalist id="l3">
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                        <option>6</option>
                    </datalist>

                    <label for="">Grupo</label>
                    <input type="text" class="field" name="grupoTarea" id="grupoTarea" required maxlength="50" list="l2" 
                    required pattern="[Aa]|[Bb]|[Cc]|[Dd]|[Ee]">

                    <datalist id="l2">
                        <option>A</option>
                        <option>B</option>
                        <option>C</option>
                        <option>D</option>
                        <option>E</option>
                    </datalist>

                    <input type="submit" class="btn-primary" value="Insertar">
                </form>
            </article>

            <div class="container-aside">

                <aside>
                    <img src="./img/Logo.png" alt="">


                    <h2>¿Qué hace esta pagina? </h2>
                    <p>Esta pagina sirve para la insercion de tareas por parte de el docente. </p>

                </aside>
            </div>

        </div>
    </div>

        <!-- JavaScript -->

        <script src="./js/script.js"></script>
        <script src=".confirmacion.js"></script>
    
</body>
</html>