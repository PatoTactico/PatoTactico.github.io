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
    
    <nav class="navbar navbar-expand-sm bg-info navbar-dark">
        <div class="container-fluid">
            <ul class="navbar-nav">
            <li class="nav-item">
                    <a class="nav-link" href="index.html">Bienvenido</a>
                </li>
            <li class="nav-item">
                    <a class="nav-link" href="mytablero.php">MyTablero</a>
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

</html>

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

