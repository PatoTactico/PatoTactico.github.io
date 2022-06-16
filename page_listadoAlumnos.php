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
                    <li class="menu-selected"><a href="page_listadoAlumnos.php" class="text-menu-selected"><i class="fa-solid fa-list"></i> Listado de Alumnos</a></li>
                    <li><a href="page_registroAlumnos.php"><i class="fa-solid fa-address-card"></i> Registro de Alumnos </a></li>
                    <li><a href="page_insertarTareas.php"><i class="fa-solid fa-paper-plane"></i> Insertar Tareas </a></li>
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

                <div class="search-bar">

                    <form action="buscar.php" method="post">
                        <input type="text" name="buscar" class="field" id="">
                        <input type="submit" class="field_a" value="Buscar">

                    </form>

                </div>

                <h2>LISTADO DE ALUMNOS</h2>

                <table>
                    <tr>
                        <!-- <th>Id</th> -->
                        <th>APELLIDO PATERNO</th>
                        <th>APELLIDO MATERNO</th>
                        <th>NOMBRE</th>
                        <th>SEMESTRE</th>
                        <th>ESPECIALIDAD</th>
                        <th>MODIFICAR</th>
                        <th>ELIMINAR</th>
                    </tr>

                        <?php 

                            //Consultamos datos para plasmarlo en la tabla

                            include("conexion.php");
                            $alumno="SELECT * FROM alumno";

                            $result=mysqli_query($conn,$alumno);
                            while($row=mysqli_fetch_assoc($result)) { ?> 

                            <tr>

                                <!-- <td><?php //echo $row['id'] ?></td> -->
                                <td><?php echo $row['ap'] ?></td>
                                <td><?php echo $row['am'] ?></td>
                                <td><?php echo $row['nom'] ?></td>
                                <td><?php echo $row['sem'] ?></td>
                                <td><?php echo $row['esp'] ?></td>
                                    
                                <div class="boton-listado">

                                <td> 
                                <a href= "editar_form_listadoAlumnos.php?id=<?php echo $row["id"]; ?>" class="table_item_link">
                                <i class="fa-solid fa-pen-to-square"></i>
                                </a>
                                </td>

                                <td>
                                <a href= "eliminar_listadoAlumnos.php?id=<?php echo $row["id"]; ?>" class="table_item_link">
                                <i class="fa-solid fa-trash"></i>
                                </a>
                                </td>

                                </div>

                            </tr>

                        <?php } ?>
                    
                </table>
            </article>

            <div class="container-aside">

            <aside>
                <img src="./img/Logo.png" alt="">


                <h2>¿Qué hace esta pagina? </h2>
                <p>Esta pagina sirve para administrar el listado de alumnos por parte de el docente. </p>

            </aside>
            </div>

        </div>
    </div>
    
     <!-- JavaScript -->
    <script src="./js/script.js"></script>
    <script src="./js/confirmacion.js"></script>

</body>
</html>