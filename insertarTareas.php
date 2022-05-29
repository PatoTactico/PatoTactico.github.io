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
                <h1>My<b>Tablero</b> CBtis</h1>
            </div>

            <div class="menu" id="show-menu">

                <nav>
                    <ul>
                    <li><a href="index.html"><i class="fas fa-home"></i> Bienvenido</a></li>
                    <li><a href="mytablero.php"><i class="fa-solid fa-table"></i> MyTablero</a></li>
                    <li><a href="listado_alumno.php"><i class="fa-solid fa-list"></i> Listado de Alumnos</a></li>
                    <li><a href="registro_alumno.php"><i class="fa-solid fa-address-card"></i> Registro de Alumnos </a></li>
                    <li class="menu-selected"><a href="insertarTareas.php"><i class="fa-solid fa-paper-plane" class="text-menu-selected"></i> Insertar Tareas </a></li>
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

                <h1>Insertar Tareas</h1>
                <br>

                <form action="subirTareas.php" method="get">
                    <label for="">Titulo</label>
                    <input type="text" class="field" name="nomTarea" id="nomTarea">
                    <label for="">Materia</label>
                    <input type="text" class="field" name="matTarea" id="matTarea">
                    <label for="">Descripcion</label>
                    <input type="text" class="field" name="descTarea" id="descTarea">
                    <label for="">Fecha</label>
                    <input type="date" class="field" name="fechaTarea" id="fechaTarea">
                    <label for="">Hora</label>
                    <input type="time" class="field" name="horaTarea" id="horaTarea">
                    <label for="">Estado</label>
                    <input type="text" class="field" name="estadoTarea" id="estadoTarea">
                    <label for="">Semestre</label>
                    <input type="text" class="field" name="semTarea" id="semTarea">
                    <label for="">Grupo</label>
                    <input type="text" class="field" name="grupoTarea" id="grupoTarea">
                    <input type="submit" class="btn-primary" value="Insertar">
                </form>
            </article>

            <div class="container-aside">

                <aside>
                <img src="./img/Logo.png" alt="">


                <h2>¿Por qué se va a hacer? </h2>
                <p>Para poder dar solución a la problemática de la falta de conocimiento de los padres con respecto al desempeño académico de sus hijos,
                así como para ayudar a los alumnos ya que nosotros al ser parte del cuerpo estudiantil en ocasiones también hemos olvidado alguna tarea,
                pero con esta página web podremos saber cuáles tareas tenemos asignadas, así como su fecha de entrega. </p>

                </aside>

                <aside>
                
                <h2>¿Para qué se va a hacer?</h2>
                <p>Para ser una herramienta que les permita a los padres estar informados acerca de las actividades encargadas a sus hijos. </p>

                <h2>¿Qué problemáticas resuelve? </h2>
                <p>Resuelve la problemática de que los padres no se encuentran al tanto de las tareas que les encargan a sus hijos, 
                así como de si estos las realizan o no y si las entregan. </p>

                <h2>¿Cómo se va a hacer? </h2>
                <p>Documentación para realizar la aplicación web, crear una base de datos de pruebas,
                realizar la aplicación para el cliente, realizar la aplicación para los docentes,
                diseñar y mejorar la calidad de interacción de ambas aplicaciones,
                llevar a cabo las pruebas para identificar errores, se llevará a cabo la utilización de la base de datos real para así finalizar la aplicación </p>

                <a href="#"><button>Leer más</button></a>
                </aside>

            </div>

        </div>
    </div>

        <!-- JavaScript -->

        <script src="./js/script.js"></script>
        <script src=".confirmacion.js"></script>
    
</body>
</html>