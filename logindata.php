<?php
include 'db.php'; // Datenbankverbindung einfügen
session_start();


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $users = $_POST['usrname'];
    $passwort = $_POST['passw'];

    // SQL-Statement vorbereiten
    $stmt = $conn->prepare("SELECT passwort FROM benutzer WHERE users = ?");
    $stmt->bind_param("s", $users);
    $stmt->execute();
    $stmt->store_result();

    // Überprüfen, ob der Benutzer existiert
    if ($stmt->num_rows > 0) {
        $stmt->bind_result($hashedPasswort);
        $stmt->fetch();

        // Passwort überprüfen
        if (password_verify($passwort, $hashedPasswort)) {
            echo "Login erfolgreich!";
            header("Location: index.php");
        } else {
            echo "Login fehlgeschlagen";
        }
    } else {
        echo "Login fehlgeschlagen";
    }

    (password_verify($passwort, $hashedPasswort)); {
        $_SESSION['users'] = $users; 
        $_SESSION['loggedin'] = true; 
        header("Location: index.php");
    }

    $stmt->close();
}
$conn->close();
?>
