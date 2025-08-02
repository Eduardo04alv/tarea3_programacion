<?php
if ($_SERVER["REQUEST_METHOD"] === "POST" && !empty($_POST["tarea"])) {
    $tarea = trim($_POST["tarea"]) . PHP_EOL;
    file_put_contents("tareas.txt", $tarea, FILE_APPEND);
}
header("Location: index.php");
exit();
