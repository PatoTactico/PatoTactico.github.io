<?php
//llama la conexion
require_once('conexion.php');
//conectar a la base de datos escuela con mysqli
$conn = new mysqli($servername, $username, $password, $dbname);
if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

// borrar el registro de la tabla alumnos con el id que se pasa por la url
if ( isset( $_REQUEST['mat'])) {
    //crear la consulta
    $query = "DELETE FROM alumno WHERE mat = " . $_REQUEST['mat'];
    //ejecutar la consulta
    $result = mysqli_query($conn, $query);
    //comprobar el resultado de la consulta
    if ($result) {
        echo "Registro borrado correctamente";
        //redireccionar a la pagina principal
        header('Location: listado_alumno.php');
    } else {
        echo "Error al borrar el registro";
    }
}
//cerrar la conexion
mysqli_close($conn);
?>