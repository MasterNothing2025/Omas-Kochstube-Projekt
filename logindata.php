<?php
include 'db.php';
session_start();

    $users = isset($_SESSION['usrname']) ? trim($_SESSION['usrname']) : '';
    $passwort = isset($_SESSION['passw']) ? trim($_SESSION['passw']) : '';

    $hashedPasswort = trim(hash('sha256', $password));
    $sql = "SELECT passwort, users FROM benutzer WHERE users = ? AND passwort = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ss", $users, $hashedPasswort); 
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        echo "Login erfolgreich!
        <a href='./index.php'>Zur Homepage</a>";
        $_SESSION['loggedin'] = true;
        $_SESSION['usrname'] = $users;
        exit();
    } else {
        echo "Login fehleschlagen 
        $hashedPasswort
        <a href='./login.php'>Erneut versuchen</a>";
    }

    $stmt->close();
    $conn->close();
    ?>
