<?php
include 'db.php'; 

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $users = $_POST['usrname'];
    $passwort = $_POST['passw'];
    $passwortRepeat = $_POST['passw-repeat'];

    // Passwort hashen
    $hashedPasswort = password_hash($passwort, PASSWORD_DEFAULT);

    if (empty($email) || empty($users) || empty($passwort)) {
        die("Alle Felder müssen ausgefüllt werden.");
    }
    
    // SQL-Statement vorbereiten
    $stmt = $conn->prepare("INSERT INTO benutzer (email, users, passwort) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $email, $users, $hashedPasswort);

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