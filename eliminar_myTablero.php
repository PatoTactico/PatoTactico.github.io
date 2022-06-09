<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>
    
        <?php
        //Llama la conexion
        require_once("conexion.php");

        //Recupera los datos del formulario
        $id = $_GET['id'];

        //Muestra el dato seleccionado
        echo $id;

        //Solicita eliminar el registro seleccionado
        $sql = "DELETE FROM tareas WHERE idTarea = $id";

        //Ejecuta la consulta
        $result = mysqli_query($conn, $sql);
        
        //Si la consulta es correcta, muestra el mensaje de exito, sino muestra el error
        if ($result) {

            // IMPORTANTE | El redireccionamiento con header('location') no funciona en servidores compartidos
            // así que utilizaremos js para ello utilizamos location.herf
            echo "<script>location.href='admin_mytablero.php?removido=true';</script>";
            die();
        } else {
            echo "<h1>Error al eliminar tarea</h1>";
        }
                    //cerrar la conexion
                    mysqli_close($conn);
        ?>

    </div>

</body>
</html>