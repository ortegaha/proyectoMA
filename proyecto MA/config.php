<?php
// Configuración de la conexión a la base de datos
$host = "localhost"; // Servidor de MySQL
$dbname = "plataforma_web"; // Nombre de la base de datos
$username = "root"; // Usuario de MySQL (por defecto en XAMPP es "root")
$password = ""; // Contraseña de MySQL (por defecto en XAMPP es "")

try {
    // Crear la conexión con PDO
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Mensaje de éxito si la conexión es exitosa
    echo "<h2 style='color:green;'>✅ Conexión exitosa a la base de datos.</h2>";
} catch (PDOException $e) {
    // Mostrar error si la conexión falla
    echo "<h2 style='color:red;'>❌ Error de conexión a la base de datos: " . $e->getMessage() . "</h2>";
}
?>
