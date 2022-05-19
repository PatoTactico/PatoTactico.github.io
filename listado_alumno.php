<?php
include("conexion.php");
?>

<!DOCTYPE html>
<html>

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="./css/estilos.css">

</head>
<body>
    
<!--------------------------------------
HEADER
--------------------------------------->
<header>

    <div class="header-content">

        <div class="logo">
            <h1><b>My</b>Tablero CBtis 191</h1>
        </div>

        <div class="menu">

            <nav>
                <ul>
                <li><a href="index.html">Bienvenido</a></li>
                <li><a href="mytablero.php">MyTablero</a></li>
                <li class="menu-selected"><a href="listado_alumno.php" class="text-menu-selected">Listado de Alumnos(Admin)</a></li>
                <li><a href="registro_alumno.html">Registro de Alumnos (Admin)</a></li>
                <li><a href="#">Insertar Tareas (Admin)</a></li>
                </ul>
            </nav>


</header>
    
</head>

<body>

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
            <td> <img src="./img/modify.png" alt="HTML5 Icon" style="width:30px;height:30px;">
            </td>
            <td>
                <a href="default.asp">
                    <img src="./img/delete.png" alt="HTML5 Icon" style="width:30px;height:30px;">
                </a>
            </td>

        </tr>
        <?php
        }
      ?>

    </table>

<style>.footer,.generic-footer{margin-bottom:98px}@media (min-width:374px){.footer,.generic-footer{margin-bottom:78px}}@media (min-width:546px){.footer,.generic-footer{margin-bottom:56px}}@media (min-width:1055px){.footer,.generic-footer{margin-bottom:0}}.disclaimer{position:fixed;z-index:9999999;bottom:0;right:0;border-top:2px solid #ff5c62;text-align:center;font-size:14px;font-weight:400;background-color:#fff;padding:5px 10px 5px 10px}.disclaimer a:hover{text-decoration:underline}@media (min-width:1052px){.disclaimer{text-align:right;border-left:2px solid red;border-top-left-radius:10px}}@media (min-width:1920px){.disclaimer{width:60%}}</style><div class="disclaimer">We support Ukraine and condemn war. Push Russian government to act against war. Be brave, vocal and show your support to Ukraine. Follow the latest news <a title="https://www.bbc.com/news/live/world-europe-60517447" target="_blank" href="https://www.bbc.com/news/live/world-europe-60517447" style="color: black;"><b>HERE</b></a></div></body>

</html>