<!DOCTYPE html>
<html>
<head><title>Lista de Tareas</title></head>
<body>
   <h1>Gestor de Tareas</h1>
   <h3>Proyecto CRUD en desarrollo (rama dev)</h3>
    <form method="POST" action="agregar.php">
        <input type="text" name="tarea" required>
        <button type="submit">Agregar</button>
    </form>
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

