
<head>
	<meta charset="utf-8">
	<title>Oma's Kochstube - Login</title>
	<link rel="stylesheet" href="formate.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximal scale=2.0 user-scalable=yes">
</head>
<?php
session_start();
?>
<form action="logindata.php" method="post">

    <!-- The Modal -->
    <div id="id01" class="modals">

        <!-- Modal Content -->
        <form class="modal-content animate" action="index.php">
            <div class="container">
                <label for="usrname" ><b>Username</b></label>
                <input type="text" placeholder="Enter Username" name="usrname" id="usrname" required>
        
                <label for="passw"><b>Password</b></label>
                <input type="password" placeholder="Enter Password" name="passw" required>
            </div>
            <div class="container">
                <button type="submit" class="loginbtn" id="loginbtn">Login</button>
                <button type="button" onclick="window.location.href='index.php';" class="cancelbtn">Abbrechen</button>
            </div>
        </form>
      </div> 
</form>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $users = $_POST['usrname'];
    $passwort = $_POST['passw'];
    if ($users == 'usrname' && $passwort == 'passw') {
        $_SESSION['loggedin'] = true;
        $_SESSION['usrname'] = $users; 
    } else {
        echo "Ungültiger Benutzername oder Passwort.";
    }
}
?>
<form action="signup.php" method="post" class="container">
    <button type="submit" class="signup">Sign Up</button>
</form>
