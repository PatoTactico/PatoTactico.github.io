<?php
include("conexion.php");
?>

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
                <li class="menu-selected"><a href="mytablero.php" class="text-menu-selected"><i class="fa-solid fa-table"></i> MyTablero</a></li>
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

    
</head>

<!--------------------------------------
CUERPO
--------------------------------------->

<body>

    <div class="container-all" id="move-content">

        <div class="container-content_01">

            <article>

            <div class="search-bar">

                <form action="buscar.php" method="post">
                    <input type="text" name="buscar" class="field" id="">
                    <input type="submit" class="field_a" value="Buscar">
                </form>

                </div>

                <h2>TU TABLERO</h2>

                <table>
                <tr>
                    <th>MATERIA</th>
                    <th>ACTIVIDAD</th>
                    <th>DESCRIPCION</th>
                    <th>FECHA DE ENTREGA</th>
                    <th>ESTATUS</th>

                </tr>

                    <?php 

                        //Consultamos datos para plasmarlo en la tabla

                        include("conexion.php");
                        $tareas="SELECT * FROM tareas";

                        $result=mysqli_query($conn,$tareas);
                        while($row=mysqli_fetch_assoc($result)) { ?> 

                        <tr>

                            <td><?php echo $row['matTarea'] ?></td>
                            <td><?php echo $row['nomTarea'] ?></td>
                            <td><?php echo $row['descTarea'] ?></td>
                            <td><?php echo $row['fechaTarea'] . "\n", $row['horaTarea'] ?></td>
                            <td><?php echo $row['estadoTarea'] ?></td>


                        </tr>

                    <?php } ?>

                </table>

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