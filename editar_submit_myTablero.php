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
                <li><a href="mytablero.php"><i class="fa-solid fa-table"></i> MyTablero</a></li>
                <li><a href="listado_alumno.php"><i class="fa-solid fa-list"></i> Listado de Alumnos</a></li>
                <li><a href="registro_alumno.php"><i class="fa-solid fa-address-card"></i> Registro de Alumnos </a></li>
                <li><a href="insertarTareas.php"><i class="fa-solid fa-paper-plane"></i> Insertar Tareas </a></li>
                <li class="menu-selected"><a href="admin_mytablero.php" class="text-menu-selected"><i class="fa-solid fa-table"></i> Admin Tablero </a></li>
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

                <?php

                //Llama la conexion a la pagina
                require_once('conexion.php');

                //Llama los resultados con $_GET
                $matTarea = $_GET ['matTareaEdit'];
                $nomTarea = $_GET ['nomTareaEdit'];
                $descTarea = $_GET ['descTareaEdit'];
                $fechaTarea = $_GET ['fechaTareaEdit'];
                $horaTarea = $_GET ['horaTareaEdit'];
                $estadoTarea = $_GET ['estadoTareaEdit'];
                $semTarea = $_GET ['semTareaEdit'];
                $grupoTarea = $_GET ['grupoTareaEdit'];

                //Consulta los resultados con UPDATE SET
                $sql = "UPDATE tareas SET matTarea='$matTarea', nomTarea='$nomTarea', descTarea='$descTarea', fechaTarea='$fechaTarea', horaTarea='$horaTarea', estadoTarea='$estadoTarea', semTarea='$semTarea', grupoTarea='$grupoTarea' WHERE idTarea";

                echo "<br>";

                //Sube la consulta, si es correcta, muestra el mensaje de exito, sino muestra el error
                if (mysqli_query($conn, $sql)) {

                ?>

                    <h1>Se ha modificado corretamente</h1>
                
                <?php

                echo "<br>";

                echo "Id: $matTarea";
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
                
                } else {
                ?>

                    <h1>Error :( <br></h1>
                
                <?php    
                
                echo "No se han logrado procesar. Asegurese de colocar los caracteres correctos." . "<br>" . "<br>" . $sql . "<br>" . mysqli_error($conn);
                }

                ?>

                    <a href="admin_mytablero.php"><button>Regresar</button></a>
                
                <?php

                //Cierra la conexion
                mysqli_close($conn);

                ?>
            </article>
            </div>
    </div>
</div>
</form>
</body>
</html>