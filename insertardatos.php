<!DOCTYPE html>
<html>
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum.scale=1.0,
    minimum-scale=1.0">

<!--------------------------------------
CSS E ICONS
---------------------------------------> 
    <script src="https://kit.fontawesome.com/839ff977a4.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="./css/estilos.css">
</head>
<body>
    
<!--------------------------------------
HEADER
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
                <li><a href="insertarTareas.php"><i class="fa-solid fa-paper-plane"></i> Insertar Tareas </a></li>
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
CUERPO - INSERTAR DATOS
--------------------------------------->

    <!--Colocan containers para dar estilos-->
    <div class="container-all" id="move-content">
        <div class="container-content_01">
            <article>

                <?php

                //Llama la conexion
                require_once('conexion.php');

                //Llama los resultados con $_GET
                $id = $_GET['idForm'];
                $ap = $_GET['apForm'];
                $am = $_GET['amForm'];
                $nom = $_GET['nomForm'];
                $sem = $_GET['semForm'];
                $esp = $_GET['espForm'];

                //Consulta para insertar datos con INSERT INTO
                $sql = "INSERT INTO alumno (id,ap,am,nom,sem,esp) VALUES ('$id','$ap','$am','$nom','$sem','$esp')";

                echo "<br>";

                //Sube la consulta, si es correcta, muestra el mensaje de exito, sino muestra el error
                if (mysqli_query($conn, $sql)) {

                ?>

                    <h1>Se ha registrado corretamente</h1>
                
                <?php

                echo "<br>";

                echo "Id: $id";
                echo "<br>";

                echo "Apellido Paterno: $ap";
                echo "<br>";

                echo "Apellido Materno: $am";
                echo "<br>";

                echo "Nombre: $nom";
                echo "<br>";

                echo "Semestre: $sem";
                echo "<br>";

                echo "Especialidad: $esp";
                echo "<br>";

                
                } else {
                ?>

                    <h1>Error :( <br></h1>
                
                <?php    
                
                echo "No se han logrado procesar. Asegurese de colocar los caracteres correctos." . "<br>" . "<br>" . $sql . "<br>" . mysqli_error($conn);
                }

                ?>

                    <a href="registro_alumno.php"><button>Regresar</button></a>
                
                <?php

                //Cierra la conexion
                mysqli_close($conn);

                ?>
            </article>

            <!--Abre un "miniblog"-->
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
            
         <!--JavaScript-->
         <script src="./js/script.js"></script>
         <script src="confirmacion.js"></script>

</body>
</html>