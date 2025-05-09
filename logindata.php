<?php
include 'db.php';

$username = !empty($_POST['usrname']) ? trim($_POST['usrname']) : '';
$hashedPasswort = !empty($_POST['passw']) ? hash('sha256',  trim($_POST['passw'])) : '';

// SQL-Abfrage zur Überprüfung des Benutzers
$sql = "SELECT id, users FROM benutzer WHERE users = ? AND passwort = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("ss", $username, $hashedPasswort); 
$stmt->execute();
$result = $stmt->get_result();

var_dump($username, $hashedPasswort);

if ($result->num_rows > 0) {
    
    $row = $result->fetch_assoc();

        // Login erfolgreich
        $_SESSION['userid'] = (int)$row['id'];
        $_SESSION['usrname'] = $username;
        echo "Login erfolgreich!";
        header("Location: index.php");
        exit();
    } else {
        // Passwort ist falsch
        echo "Login fehlgeschlagen. <a href='./login.php'>Erneut versuchen</a>";
    }



$stmt->close();
$conn->close();
?>
