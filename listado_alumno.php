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
            <h1>My<b>Tablero</b> CBtis</h1>
        </div>

        <div class="menu" id="show-menu">

            <nav>
                <ul>
                <li><a href="index.html"><i class="fas fa-home"></i> Bienvenido</a></li>
                <li><a href="mytablero.php"><i class="fa-solid fa-table"></i> MyTablero</a></li>
                <li class="menu-selected"><a href="listado_alumno.php" class="text-menu-selected"><i class="fa-solid fa-list"></i> Listado de Alumnos</a></li>
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
    
</head>

<body>

    <div class="container-all" id="move-content">

        <div class="container-content_01">

            <article>

            <div class="search-bar">

                <form action="buscar.php" method="post">
                    <input type="text" name="buscar" class="field" id="">
                    <input type="submit" class="field_a" value="Buscar">
                    <a href="registro_alumno.html" class="btn-primary">Añadir</a>
                </form>

            </div>

                <h2>Consulta de datos</h2>

                <table>
                    <tr>
                        <th>MATRICULA</th>
                        <th>APELLIDO PATERNO</th>
                        <th>APELLIDO MATERNO</th>
                        <th>NOMBRE</th>
                        <th>SEMESTRE</th>
                        <th>ESPECIALIDAD</th>
                        <th>MODIFICAR</th>
                        <th>ELIMINAR</th>
                    </tr>

                    <?php 
                    $sql="SELECT * FROM alumno";
                    $result=mysqli_query($conn,$sql);

                    while($mostrar=mysqli_fetch_array($result)){
                    ?>

                    <tr>
                        <td><?php echo $mostrar['mat'] ?></td>
                        <td><?php echo $mostrar['ap'] ?></td>
                        <td><?php echo $mostrar['am'] ?></td>
                        <td><?php echo $mostrar['nom'] ?></td>
                        <td><?php echo $mostrar['sem'] ?></td>
                        <td><?php echo $mostrar['esp'] ?></td>

                        <a href="editar.php?
                        mat=<?php echo $mostrar['mat'] ?> &
                        ap=<?php echo $mostrar['ap'] ?> &
                        am=<?php echo $mostrar['am'] ?> &
                        nom=<?php echo $mostrar['nom'] ?> &
                        sem=<?php echo $mostrar['sem'] ?> &
                        esp=<?php echo $mostrar['esp'] ?>
                        ">
                        
                        <td> 
                        <a href="editar.php">
                        <img src="./img/modify.png" alt="HTML5 Icon" style="width:30px;height:30px;">
                        </a>
                        </td>

                        <td>
                        <a href="eliminar.php">
                        <img src="./img/delete.png" alt="HTML5 Icon" style="width:30px;height:30px;">
                        </a>
                        </td>

                    </tr>
                    <?php
                    }
                ?>

                </table>

            </article>



        </div>
    </div>
     <!-- Optional JavaScript; choose one of the two! -->
    <script src="./js/script.js"></script>
</body>
</html>