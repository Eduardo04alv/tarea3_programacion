<!DOCTYPE html>
<html>
<head><title>Lista de Tareas</title></head>
<body>
   <h1>Gestor de Tareas</h1>
   <h3>Proyecto CRUD en desarrollo (rama dev)</h3>
   <!-- Inicio de formulario de login (en desarrollo) -->
<form method="post" action="login.php">
    <input type="text" name="usuario" placeholder="Usuario">
    <input type="password" name="clave" placeholder="Contraseña">
    <button type="submit">Login</button>
</form>
<hr>
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

