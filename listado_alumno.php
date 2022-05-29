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
                    <li class="menu-selected"><a href="listado_alumno.php" class="text-menu-selected"><i class="fa-solid fa-list"></i> Listado de Alumnos</a></li>
                    <li><a href="registro_alumno.php"><i class="fa-solid fa-address-card"></i> Registro de Alumnos </a></li>
                    <li><a href="insertarTareas.php"><i class="fa-solid fa-paper-plane"></i> Insertar Tareas </a></li>
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
                        <a href="registro_alumno.php" class="btn-primary">Añadir</a>
                    </form>

                </div>

                <h2>Consulta de datos</h2>

                <table>
                    <tr>
                        <th>Id</th>
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

                                <td><?php echo $row['id'] ?></td>
                                <td><?php echo $row['ap'] ?></td>
                                <td><?php echo $row['am'] ?></td>
                                <td><?php echo $row['nom'] ?></td>
                                <td><?php echo $row['sem'] ?></td>
                                <td><?php echo $row['esp'] ?></td>
                                    
                                <div class="boton-listado">

                                <td> 
                                <a href= "editar.php?id=<?php echo $row["id"]; ?>" class="table_item_link">
                                <i class="fa-solid fa-pen-to-square"></i>
                                </a>
                                </td>

                                <td>
                                <a href= "eliminar.php?id=<?php echo $row["id"]; ?>" class="table_item_link">
                                <i class="fa-solid fa-trash"></i>
                                </a>
                                </td>

                                </div>

                            </tr>

                        <?php } ?>
                    
                </table>
            </article>
            
        </div>
    </div>
    
     <!-- Optional JavaScript; choose one of the two! -->
    <script src="./js/script.js"></script>
    <script src="./js/confirmacion.js"></script>

</body>
</html>