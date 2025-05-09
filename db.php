<?php
$servername = "localhost:3306"; // oder Ihre Serveradresse
$username = "root2"; // Ihr Datenbankbenutzername
$password = "Blitzmerker#2025!"; // Ihr Datenbankpasswort
$dbname = "benutzer_db"; // Ihr Datenbankname

// Verbindung herstellen
$conn = new mysqli($servername, $username, $password, $dbname);

// Überprüfen, ob die Verbindung erfolgreich war
if ($conn->connect_error) {
    header("Location: index.php");
    die("Connection failed: " . $conn->connect_error);
}
?>
