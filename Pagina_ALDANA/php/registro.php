if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Validación de nombre
    if (empty($_POST["nombre"]) || strlen($_POST["nombre"]) > 75) {
        die("El nombre es inválido.");
    }

    // Validación de teléfono
    if (!preg_match("/^\d{12}$/", $_POST["telefono"])) {
        die("El teléfono debe contener 12 dígitos.");
    }

    // Validación de fecha de nacimiento (mayor de 18 años)
    $fechaNacimiento = new DateTime($_POST["fecha-nacimiento"]);
    $ahora = new DateTime();
    $diferencia = $ahora->diff($fechaNacimiento);
    if ($diferencia->y < 18) {
        die("Debe ser mayor de 18 años.");
    }

    // Validación de número de tarjeta bancaria
    if (!preg_match("/^\d{18}$/", $_POST["tarjeta-bancaria"])) {
        die("El número de tarjeta bancaria debe contener 18 dígitos.");
    }

    // Validación de contraseñas
    if (strlen($_POST["contra"]) < 8 || strlen($_POST["contra"]) > 16) {
        die("La contraseña debe tener entre 8 y 16 caracteres.");
    }

    if ($_POST["contra"] !== $_POST["confirmar-contra"]) {
        die("Las contraseñas no coinciden.");
    }

    // Si todas las validaciones pasan, guardar los datos en la base de datos
    // Código para insertar en la base de datos
}




<!-- Codigo viejito... no sé si vaya a funcionar la verdad. Pero lo guardamos para explorar el modelo después -->
<!-- if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Validación de nombre
    if (empty($_POST["nombre"]) || strlen($_POST["nombre"]) > 75) {
        die("El nombre es inválido.");
    }

    // Validación de teléfono
    if (!preg_match("/^\d{12}$/", $_POST["telefono"])) {
        die("El teléfono debe contener 12 dígitos.");
    }

    // Validación de fecha de nacimiento (mayor de 18 años)
    $fechaNacimiento = new DateTime($_POST["fecha-nacimiento"]);
    $ahora = new DateTime();
    $diferencia = $ahora->diff($fechaNacimiento);
    if ($diferencia->y < 18) {
        die("Debe ser mayor de 18 años.");
    }

    // Validación de número de tarjeta bancaria
    if (!preg_match("/^\d{18}$/", $_POST["tarjeta-bancaria"])) {
        die("El número de tarjeta bancaria debe contener 18 dígitos.");
    }

    // Validación de contraseñas
    if (strlen($_POST["contra"]) < 8 || strlen($_POST["contra"]) > 16) {
        die("La contraseña debe tener entre 8 y 16 caracteres.");
    }

    if ($_POST["contra"] !== $_POST["confirmar-contra"]) {
        die("Las contraseñas no coinciden.");
    }

    // Si todas las validaciones pasan, guardar los datos en la base de datos
    // Código para insertar en la base de datos
}


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
?> -->