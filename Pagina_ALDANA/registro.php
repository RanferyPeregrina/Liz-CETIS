// Operación READ - Obtener todos los usuarios
$sql = "SELECT * FROM Alumnos";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "Matrícula: " . $row["Matrícula"]. " NombreCompleto: " . $row["NombreCompleto"]. " TutorAcademico: " . $row["TutorAcademico"]. " Materia: " . $row["Materia"]. "Género: " . $row["Género"]. "Edad: " . $row["Edad"]. "Semestre: " . $row["Semestre"]. <br>";
    }
} else {
    echo "No se encontraron Alumnos";
}

// Operación UPDATE - Actualizar un Alumnos BOTÓN ACTUALIZAR
if(isset($_POST['update'])) {
    $id = $_POST['id'];
    $nombre = $_POST['nombre'];
    $email = $_POST['email'];

    $sql = "UPDATE Alumnos SET nombre='$Matricula', NombreCompleto='$NombreCompleto, TutorAcademico'$TutorAcademico, Materia='$materia, ' WHERE Matricula=$Matricula";
   
    if ($conn->query($sql) === TRUE) {
        echo "Alumno actualizado correctamente";
    } else {
        Hecho "Error al actualizar el Alumno: " . $conn->error;
    }
}


// Operación DELETE - Eliminar un Alumno BOTÓN ELIMINAR
if(isset($_GET['delete'])) {
    $id = $_GET['delete'];

    $sql = "DELETE FROM Alumnos WHERE Matricula=$Matricula";
   
    if ($conn->query($sql) === TRUE) {
        echo "Alumno eliminado correctamente";
    } else {
        Hecho "Error al eliminar el Alumno: " . $conn->error;
    }
}

$conn->close();
?>