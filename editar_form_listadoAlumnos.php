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
                <li><a href="page_mytablero.php"><i class="fa-solid fa-table"></i> MyTablero</a></li>
                <li><a href="page_listadoAlumnos.php"><i class="fa-solid fa-list"></i> Listado de Alumnos</a></li>
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
CUERPO
--------------------------------------->

<div class="container-all" id="move-content">


    <div class="container-content_01">

        <article>

            <!-- crear un formulario para editar registros en la tabla alumnos -->
            <form action="editar_submit_listadoAlumnos.php" method="get">

                <?php

                //Consultar la conexion
                require_once('conexion.php');

                //Muestra el titulo de la pagina
                ?> <h2>MODIFICAR ALUMNO: </h2> <?php 

                //Se toman el dato id de la fila seleccionada
                $idFila = $_GET["id"];

                //Comprueba la id seleccionada
                echo $idFila;

                //Consulta para obtener los datos de la fila seleccionada
                $query = "SELECT * FROM alumno WHERE id = $idFila";


                //Ejecuta la consulta
                $result = mysqli_query($conn, $query);


                //Recorrer el resultado de la consulta
                while ($row = mysqli_fetch_array($result)) {
                    
                    ?>    
                        <from method="GET">
                            <p for="id">Id: <br></p>
                            <input type="number" class="field" id="idFormEdit" name="idFormEdit" value="1" required min="1" max="999999999999999">


                            <p for="ap">Apellido Paterno: <br></p>
                            <input type="text" class="field" id="apFormEdit" name="apFormEdit" required maxlength="15">


                            <p for="am">Apellido Materno: <br></p>
                            <input type="text" class="field" id="amFormEdit" name="amFormEdit" required maxlength="15">


                            <p for="nom">Nombre: <br></p>
                            <input type="text" class="field" id="nomFormEdit" name="nomFormEdit" required maxlength="15">


                            <p for="sem">Semestre: <br></p>
                            <input type="number" class="field" id="semFormEdit" name="semFormEdit" value="1" required min="1" max="6">


                            <p for="esp">Especialidad: <br></p>
                            <input type="text" class="field" id="espFormEdit" name="espFormEdit" list="l1" required
                            pattern="[Aa]dministracion [Dd]e [Rr]ecursos [Hh]umanos|[Pp]rogramacion|[Ee]lectricidad|[Pp]reparacion [Dd]e [Aa]limentos [Yy] [Bb]ebidas">

                                <datalist id="l1">
                                <option>Administracion de Recursos Humanos</option>
                                <option>Programacion</option>
                                <option>Electricidad</option>
                                <option>Preparacion de alimentos y bebidas</option>
                                </datalist>
                        

                                <button type="submit" class="btn-primary" name="guardarEdit" id="guardarEdit">Guardar</button>

                <?php
                }
                ?> 
            </article>

            <!-- Abre un aside "miniblog" -->

        <div class="container-aside">

            <aside>
                <img src="./img/Logo.png" alt="">


                <h2>¿Qué hace esta pagina? </h2>
                <p>Esta página genera un formulario para realizar una edicion de una fila específica seleccionada. </p>

                </aside>

        </div>
    </div>
</div>
    
</form>
</body>
</html>