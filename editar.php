<?php
//llamar la conexion
require_once('conexion.php');

//comprobar la conexion
if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
    echo "Conexion"

?>
<!-- crear un formulario para editar registros en la tabla alumnos -->
<form action="editar.php" method="post">
    <?php
    // consultar un registro de la tabla alumnos
    $query = "SELECT * FROM alumno WHERE id = " . $_REQUEST['id'];
    //ejecutar la consulta
    $result = mysqli_query($conn, $query);
    //recorrer el resultado de la consulta
    while ($row = mysqli_fetch_array($result)) {
        ?>
    <!--Formulario-->

    <div class="container-all" id="move-content">


    <div class="container-content_01">

    <article>

    <h1>Alta de alumnos</h1>

    <p>En caso de que el alumno no este ingresado en el sistema, engreselo de forma manual por este medio.</p>

    <form action="insertardatos.php" method="post" class="form_a">


        <p for="matri">Matricula: <br></p>
        <input type="number" class="field" id="mat" name="mat" value="1" required min="1" max="999999999999999">


        <p for="ap">Apellido Paterno: <br></p>
        <input type="text" class="field" id="ap" name="ap" required maxlength="15">


        <p for="am">Apellido Materno: <br></p>
        <input type="text" class="field" id="am" name="am" required maxlength="15">


        <p for="nom">Nombre: <br></p>
        <input type="text" class="field" id="nom" name="nom" required maxlength="15">


        <p for="sem">Semestre: <br></p>
        <input type="number" class="field" id="sem" name="sem" value="1" required min="1" max="6">


        <p for="esp">Especialidad: <br></p>
        <input type="text" class="field" id="esp" name="esp" list="l1" required
        pattern="[Aa]dministracion [Dd]e [Rr]ecursos [Hh]umanos|[Pp]rogramacion|[Ee]lectricidad|[Pp]reparacion [Dd]e [Aa]limentos [Yy] [Bb]ebidas">

            <datalist id="l1">
              <option>Administracion de Recursos Humanos</option>
              <option>Programacion</option>
              <option>Electricidad</option>
              <option>Preparacion de alimentos y bebidas</option>
             </datalist>


        <button type="submit" class="btn-primary">Guardar</button>
        </form>
        </article>
        <?php
    }
    ?>
</form>
<?php
// validar que el formulario se ha enviado
if ( isset( $_REQUEST['guardar'])) {
    //crear la consulta
    $query = "UPDATE alumnos SET nombre='" . $_POST['nombre'] . "', apellido='" . $_POST['apellido'] . "', edad='" . $_POST['edad'] . "' WHERE id=" . $_REQUEST['id'];
    //ejecutar la consulta
    $result = mysqli_query($con, $query);
    //comprobar el resultado de la consulta
    if ($result) {
        echo "Registro editado correctamente";
        //redireccionar a la pagina principal
        header('Location: index.php');
    } else {
        echo "Error al editar el registro";
    }
}
//cerrar la conexion
mysqli_close($con);
?>