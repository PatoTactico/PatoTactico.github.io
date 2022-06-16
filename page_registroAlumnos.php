<!DOCTYPE html>
<html lang="en">
<head>    

<title>Alta de Alumnos</title>
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
                <li class="menu-selected"><a href="page_registroAlumnos.php" class="text-menu-selected"><i class="fa-solid fa-address-card"></i> Registro de Alumnos </a></li>
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


    <!--Formulario-->

<div class="container-all" id="move-content">


        <div class="container-content_01">

            <article>

            <h2>ALTA DE ALUMNOS</h2>

            <p>En caso de que el alumno no este ingresado en el sistema, engreselo de forma manual por este medio.</p>

            <form action="subir_listadoAlumnos.php" method="get" class="form_a">


                    <p for="id">Id: <br></p>
                    <input type="number" class="field" id="idForm" name="idForm" value="1" required min="1" max="999999999999999">


                    <p for="ap">Apellido Paterno: <br></p>
                    <input type="text" class="field" id="apForm" name="apForm" required min="1" required maxlength="15">


                    <p for="am">Apellido Materno: <br></p>
                    <input type="text" class="field" id="amForm" name="amForm" required min="1" required maxlength="15">


                    <p for="nom">Nombre: <br></p>
                    <input type="text" class="field" id="nomForm" name="nomForm" required min="1" required maxlength="15">


                    <p for="sem">Semestre: <br></p>
                    <input type="number" class="field" id="semForm" name="semForm" value="1" required min="1" max="6">


                    <p for="esp">Especialidad: <br></p>
                    <input type="text" class="field" id="espForm" name="espForm" list="l1" 
                    required pattern="[Aa]dministracion [Dd]e [Rr]ecursos [Hh]umanos|[Pp]rogramacion|[Ee]lectricidad|[Pp]reparacion [Dd]e [Aa]limentos [Yy] [Bb]ebidas">

                        <datalist id="l1">
                        <option>Administracion de Recursos Humanos</option>
                        <option>Programacion</option>
                        <option>Electricidad</option>
                        <option>Preparacion de alimentos y bebidas</option>
                        </datalist>


                <button type="submit" class="btn-primary" name="guardar" id="guardar">Guardar</button>
            </form>
        </article>

    <div class="container-aside">

    <aside>
        <img src="./img/Logo.png" alt="">


        <h2>¿Qué hace esta pagina? </h2>
        <p>Esta pagina sirve para dar registro de forma manual a los alumnos. </p>

    </aside>
    </div>




    <div>
        <!-- Optional JavaScript; choose one of the two! -->
        <script src="./js/script.js"></script>
    
        <!-- Option 1: Bootstrap Bundle with Popper -->

    
        <!-- Option 2: Separate Popper and Bootstrap JS -->
    

    </div>
</body>

</html>