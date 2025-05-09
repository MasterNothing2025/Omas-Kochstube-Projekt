<?php
include 'db.php'; 
session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $username = $_POST['usrname'];
    $passwort = $_POST['passw'];
    $passwortRepeat = $_POST['passw-repeat'];

    // Passwort hashen
    $hashedPasswort = hash('sha256', $passwort) = $_POST['hashpassw'];

    if (empty($email) || empty($username) || empty($passwort)) {
        die("Alle Felder müssen ausgefüllt werden.");
    }
    
    // SQL-Statement vorbereiten
    $sql = "INSERT INTO benutzer (email, users, passwort) VALUES (?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sss", $email, $username, $hashedPasswort);

    // Ausführen und überprüfen, ob es erfolgreich war
    if ($stmt->execute()) {
        echo "Registrierung erfolgreich!";
        header("Location: login.php");
    } else {
        echo "Fehler: " . $stmt->error;
    }

    $stmt->close();
}
$conn->close();
?>