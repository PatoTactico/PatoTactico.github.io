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
            <h1>My<b>Tablero</b> CBtis</h1>
        </div>

        <div class="menu" id="show-menu">

            <nav>
                <ul>
                <li><a href="index.html"><i class="fas fa-home"></i> Bienvenido</a></li>
                <li><a href="mytablero.php"><i class="fa-solid fa-table"></i> MyTablero</a></li>
                <li><a href="listado_alumno.php"><i class="fa-solid fa-list"></i> Listado de Alumnos</a></li>
                <li><a href="registro_alumno.html"><i class="fa-solid fa-address-card"></i> Registro de Alumnos </a></li>
                <li><a href="#"><i class="fa-solid fa-paper-plane"></i> Insertar Tareas </a></li>
                </ul>
            </nav>

        </div>

    </div>

    <div id="icon-menu">

        <i class="fa-solid fa-bars"></i>

    </div>

</header>
    
    <!--------------------------------------

    --------------------------------------->

    <div class="container-all" id="move-content">


        <div class="container-content_01">

            <article>

                <?php

                include("conexion.php");

                echo "Sus datos...";
                echo "<br>";

                echo "<br>";
                $mat = $_POST['mat'];
                echo "Matricula: $mat";
                echo "<br>";
                $ap = $_POST['ap'];
                echo "Apellido_Paterno: $ap";
                echo "<br>";
                $am = $_POST['am'];
                echo "Apellido_Materno: $am";
                echo "<br>";
                $nom = $_POST['nom'];
                echo "Nombre: $nom";
                echo "<br>";
                $sem = $_POST['sem'];
                echo "Semestre: $sem";
                echo "<br>";
                $esp = $_POST['esp'];
                echo "Especialidad: $esp";
                echo "<br>";





                $sql = "INSERT INTO alumno (mat,ap,am,nom,sem,esp) VALUES ('$mat','$ap','$am','$nom','$sem','$esp')";



                echo "<br>";

                if (mysqli_query($conn, $sql)) {
                echo "Se han agregado al registro satisfactoriamente, puede acceder a ellos en la pestaña de Listado de Alumnos.";
                } else {
                    
                echo "No se han logrado procesar. Asegurese de colocar los caracteres correctos." . "<br>" . "<br>" . $sql . "<br>" . mysqli_error($conn);
                }

                mysqli_close($conn);
                ?>
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
            

         <!-- Optional JavaScript; choose one of the two! -->
         <script src="./js/script.js"></script>

</body>
</html>