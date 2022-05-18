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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">    
    <style>
    table {
        font-family: arial, sans-serif;
        border-collapse: collapse;
        width: 100%;
    }

    td,
    th {
        border: 1px solid #dddddd;
        text-align: left;
        padding: 8px;
    }

    tr:nth-child(even) {
        background-color: #dddddd;
    }
    </style>
    
       <!--Menu-->
    
       <nav class="navbar navbar-expand-sm navbar-dark bg-success">
        <div class="container-fluid">
            <ul class="navbar-nav">
            <li class="nav-item">
                    <a class="nav-link" href="index.html">Bienvenido</a>
                </li>
            <li class="nav-item">
                    <a class="nav-link active" href="mytablero.php">MyTablero</a>
                </li>                
            <li class="nav-item">
                    <a class="nav-link" href="listado_alumno.php">Listado de Alumnos (Admin)</a>
                </li>
            <li class="nav-item">
                    <a class="nav-link" href="registro_alumno.html">Registro de Alumnos (Admin)</a>
                </li>
            </ul>
        </div>
    </nav>

    
</head>

<body>

    <h2>MyTablero</h2>
    <h5>Estas son tus tareas...</h5>

    <table>
        <tr>
            <th>MATERIAS</th>
            <th>ACTIVIDAD</th>
            <th>FECHA DE ENTREGA</th>
            <th>ESTATUS <br>  PENDIENTE/ENTREGADA/CALIFICADA</th>
        </tr>



        <tr>
            <td><?php echo 'ECOLOGIA' ?></td>
            <td><?php echo 'REDACCION DE TEXTO' ?></td>
            <td><?php echo '15/05/22' ?></td>
            <td><?php echo 'PEDNIENTE' ?></td>
        </tr>
            <tr>
            <td><?php echo 'CALCULO' ?></td>
            <td><?php echo 'INVESTIGACION' ?></td>
            <td><?php echo '20/05/22' ?></td>
            <td><?php echo 'ENTREGADO' ?></td>
        </tr>
            <tr>
            <td><?php echo 'ECOLOGIA' ?></td>
            <td><?php echo 'TABLERO DE RESERVAS' ?></td>
            <td><?php echo '26/05/22' ?></td>
            <td><?php echo 'CALIFICADA' ?></td>
        </tr>


    </table>

<style>.footer,.generic-footer{margin-bottom:98px}@media (min-width:374px){.footer,.generic-footer{margin-bottom:78px}}@media (min-width:546px){.footer,.generic-footer{margin-bottom:56px}}@media (min-width:1055px){.footer,.generic-footer{margin-bottom:0}}.disclaimer{position:fixed;z-index:9999999;bottom:0;right:0;border-top:2px solid #ff5c62;text-align:center;font-size:14px;font-weight:400;background-color:#fff;padding:5px 10px 5px 10px}.disclaimer a:hover{text-decoration:underline}@media (min-width:1052px){.disclaimer{text-align:right;border-left:2px solid red;border-top-left-radius:10px}}@media (min-width:1920px){.disclaimer{width:60%}}</style><div class="disclaimer">We support Ukraine and condemn war. Push Russian government to act against war. Be brave, vocal and show your support to Ukraine. Follow the latest news <a title="https://www.bbc.com/news/live/world-europe-60517447" target="_blank" href="https://www.bbc.com/news/live/world-europe-60517447" style="color: black;"><b>HERE</b></a></div></body>

</html>
