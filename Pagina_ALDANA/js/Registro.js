document.querySelector('form').addEventListener('submit', function(event) {
    // Validación de la fecha de nacimiento
    const fechaNacimiento = new Date(document.getElementById('fecha-nacimiento').value);
    const edad = new Date().getFullYear() - fechaNacimiento.getFullYear();
    const mes = new Date().getMonth() - fechaNacimiento.getMonth();
    if (mes < 0 || (mes === 0 && new Date().getDate() < fechaNacimiento.getDate())) {
        edad--;
    }
    if (edad < 18) {
        alert('Debe ser mayor de 18 años para registrarse.');
        event.preventDefault();
        return;
    }

    // Validación de la coincidencia de contraseñas
    const contra = document.getElementById('contra').value;
    const confirmarContra = document.getElementById('confirmar-contra').value;
    if (contra !== confirmarContra) {
        alert('Las contraseñas no coinciden.');
        event.preventDefault();
        return;
    }

    // Todas las validaciones pasaron
});