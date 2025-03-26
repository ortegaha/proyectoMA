<?php
require_once 'config.php'; // Asegurar que el archivo se incluya correctamente

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = trim($_POST["nombre"]);

    if (!empty($nombre)) {
        $stmt = $pdo->prepare("SELECT * FROM usuarios WHERE nombre = :nombre");
        $stmt->bindParam(":nombre", $nombre, PDO::PARAM_STR);
        $stmt->execute();

        if ($stmt->rowCount() > 0) {
            echo "<h2>Hola, " . htmlspecialchars($nombre) . "!</h2>";
        } else {
            echo "<h2>Nombre no encontrado en la base de datos.</h2>";
        }
    } else {
        echo "<h2>Por favor, ingresa un nombre.</h2>";
    }
}
?>
