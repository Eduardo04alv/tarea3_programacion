<!DOCTYPE html>
<html>
<head><title>Lista de Tareas</title></head>
<body>
   <h1>Gestor de Tareas</h1>
   <h3>Proyecto CRUD en desarrollo (rama dev)</h3>
    form method="POST" action="agregar.php" onsubmit="return validarFormulario()">
    <input type="text" id="tarea" name="tarea" placeholder="Escribe una tarea" required>
    <button type="submit">Agregar</button>
</form>

<script>
function validarFormulario() {
    var tarea = document.getElementById("tarea").value.trim();
    if (tarea === "") {
        alert("Por favor, escribe una tarea antes de enviar.");
        return false;
    }
    return true;
}
</script>
    <ul>
        <?php
        if (file_exists("tareas.txt")) {
            $tareas = file("tareas.txt");
            foreach ($tareas as $tarea) {
                echo "<li>" . htmlspecialchars($tarea) . "</li>";
            }
        }
        ?>
    </ul>
</body>
</html>

