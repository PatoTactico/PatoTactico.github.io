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
                    <li><a href="mytablero.php"><i class="fa-solid fa-table"></i> MyTablero</a></li>
                    <li><a href="listado_alumno.php"><i class="fa-solid fa-list"></i> Listado de Alumnos</a></li>
                    <li><a href="registro_alumno.php"><i class="fa-solid fa-address-card"></i> Registro de Alumnos </a></li>
                    <li class="menu-selected"><a href="insertarTareas.php"><i class="fa-solid fa-paper-plane" class="text-menu-selected"></i> Insertar Tareas </a></li>
                    <li><a href="admin_mytablero.php"><i class="fa-solid fa-table"></i> Admin Tablero </a></li>
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

                <?php

                //Llama la conexion
                require_once('conexion.php');

                //Llama los resultados con $_GET
                $matTarea = $_GET['matTarea'];
                $nomTarea = $_GET['nomTarea'];
                $descTarea = $_GET['descTarea'];
                $fechaTarea = $_GET['fechaTarea'];
                $horaTarea = $_GET['horaTarea'];
                $estadoTarea = $_GET['estadoTarea'];
                $semTarea = $_GET['semTarea'];
                $grupoTarea = $_GET['grupoTarea'];

                //Consulta para insertar datos con INSERT INTO
                $sql = "INSERT INTO tareas (matTarea, nomTarea, descTarea, fechaTarea, horaTarea, estadoTarea, semTarea, grupoTarea) VALUES ('$matTarea', '$nomTarea', '$descTarea', '$fechaTarea', '$horaTarea', '$estadoTarea', '$semTarea', '$grupoTarea')";

                echo "<br>";

                //Sube la consulta, si es correcta, muestra el mensaje de exito, sino muestra el error
                if (mysqli_query($conn, $sql)) {

                ?>

                    <h1>Se ha registrado corretamente</h1>

                <?php

                echo "<br>";

                echo "Nombre: $nomTarea";
                echo "<br>";

                echo "Descripcion: $descTarea";
                echo "<br>";

                echo "Fecha: $fechaTarea";
                echo "<br>";

                echo "Hora: $horaTarea";
                echo "<br>";

                echo "Estado: $estadoTarea";
                echo "<br>";

                echo "Semestre: $semTarea";
                echo "<br>";

                echo "Grupo: $grupoTarea";
                echo "<br>";

                } else {
                ?>

                    <h1>Error :( <br></h1>

                <?php    

                echo "No se han logrado procesar. Asegurese de colocar los caracteres correctos." . "<br>" . "<br>" . $sql . "<br>" . mysqli_error($conn);
                }

                ?>

                    <a href="insertarTareas.php"><button>Regresar</button></a>

                <?php

                //Cierra la conexion
                mysqli_close($conn);

                ?>

            </article>

<div class="container-aside">

    <aside>
    <img src="./img/Logo.png" alt="">


    <h2>??Por qu?? se va a hacer? </h2>
    <p>Para poder dar soluci??n a la problem??tica de la falta de conocimiento de los padres con respecto al desempe??o acad??mico de sus hijos,
    as?? como para ayudar a los alumnos ya que nosotros al ser parte del cuerpo estudiantil en ocasiones tambi??n hemos olvidado alguna tarea,
    pero con esta p??gina web podremos saber cu??les tareas tenemos asignadas, as?? como su fecha de entrega. </p>

    </aside>

    <aside>
    
    <h2>??Para qu?? se va a hacer?</h2>
    <p>Para ser una herramienta que les permita a los padres estar informados acerca de las actividades encargadas a sus hijos. </p>

    <h2>??Qu?? problem??ticas resuelve? </h2>
    <p>Resuelve la problem??tica de que los padres no se encuentran al tanto de las tareas que les encargan a sus hijos, 
    as?? como de si estos las realizan o no y si las entregan. </p>

    <h2>??C??mo se va a hacer? </h2>
    <p>Documentaci??n para realizar la aplicaci??n web, crear una base de datos de pruebas,
    realizar la aplicaci??n para el cliente, realizar la aplicaci??n para los docentes,
    dise??ar y mejorar la calidad de interacci??n de ambas aplicaciones,
    llevar a cabo las pruebas para identificar errores, se llevar?? a cabo la utilizaci??n de la base de datos real para as?? finalizar la aplicaci??n </p>

    <a href="#"><button>Leer m??s</button></a>
    </aside>

</div>

</div>
</div>

<!-- JavaScript -->

<script src="./js/script.js"></script>
<script src=".confirmacion.js"></script>

</body>
</html>