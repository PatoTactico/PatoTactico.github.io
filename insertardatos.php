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
                <li><a href="index.html" >Bienvenido</a></li>
                <li><a href="mytablero.php">MyTablero</a></li>
                <li><a href="listado_alumno.php">Listado de Alumnos(Admin)</a></li>
                <li><a href="registro_alumno.html">Registro de Alumnos (Admin)</a></li>
                <li><a href="#">Insertar Tareas (Admin)</a></li>
                </ul>
            </nav>


</header>
    
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

