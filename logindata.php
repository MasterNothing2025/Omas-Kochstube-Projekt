<?php
include 'db.php';
session_start();

$username = isset($_SESSION['usrname']) ? trim($_SESSION['usrname']) : '';
$hashedPasswort = isset($_SESSION['passw']) ? trim($_SESSION['passw']) : '';

// SQL-Abfrage zur Überprüfung des Benutzers
$sql = "SELECT users, passwort FROM benutzer WHERE users = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("ss", $username, $hashedPasswort); 
$stmt->execute();
$result = $stmt->get_result();
var_dump($_SESSION);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    // Passwort überprüfen
    if (password_verify($passwort, $row['passwort'])) {
        // Login erfolgreich
        $_SESSION['loggedin'] = true;
        $_SESSION['usrname'] = $username;
        echo "Login erfolgreich! <a href='./index.php'>Zur Homepage</a>";
    } else {
        // Passwort ist falsch
        echo "Login fehlgeschlagen. E<a href='./login.php'>rneut versuchen</a>";
    }
} else {
    // Benutzer existiert nicht
    echo "Login fehlgeschlagen. <a href='./login.php'>Erneut versuche</a>n";
}

$stmt->close();
$conn->close();
?>
