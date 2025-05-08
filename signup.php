<head>
  	<meta charset="utf-8">
  		<title>Oma's Kochstube - Sign Up</title>
	<link rel="stylesheet" href="formate.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximal scale=2.0 user-scalable=yes">
</head>
<?php 
session_start();
?>
<!-- The Modal (contains the Sign Up form) -->
<div id="id02" class="modals">
   	<form class="modal-content" action="signupdata.php" method="post">
      
   	<div class="container">
        <br>
          	</br>
        <h1>Sign Up</h1>
        <p>Please fill in this form to create an account.</p>
        <hr>
        <label for="email"><b>Email</b></label>
        <input type="text" placeholder="Enter Email" name="email" required>
	
        <label for="passw"><b>Password</b></label>
        <input type="password" id="passw" placeholder="Enter Password" name="passw" required>
	
        <label for="passw-repeat"><b>Repeat Password</b></label>
        <input type="password" id="passw-repeat" placeholder="Repeat Password" name="passw-repeat" required>
	
        <label for="usrname"><b>Username</b></label>
        <input type="text" placeholder="Enter Username" name="usrname" required>
        <label>
          	<input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me
        </label>

        	<script>
           	function passnav() {
           	    var passw = document.getElementById('passw').value.trim();
           	    var passwRepeat = document.getElementById('passw-repeat').value.trim();
           	    if (passw == passwRepeat && passw.length > 0 && passwRepeat.length > 0) {
           	        // Wenn die Passwörter übereinstimmen, zur index.php navigieren
           	        window.location.href = 'index.php';
           	        console.log('Passwort:', passw)
           	        console.log('Passwort wiederholen', passwRepeat)
           	    } else {
           	        // Wenn die Passwörter nicht übereinstimmen, eine Fehlermeldung anzeigen
           	        alert('Die Passwörter stimmen nicht überein. Bitte versuche es erneut.');
           	        console.log('Passwort:', passw)
           	        console.log('Passwort wiederholen', passwRepeat)
           	    }
           	}
       	</script>
       	<div class="clearfix">
       	    <button type="button" onclick="document.getElementById('id02').style.display='none'" class="cancelbtn">Cancel/already signed up</button>
       	    <button type="submit" class="signupbtn" onclick="passnav()">Sign Up</button>
       	</div>
   	</div>
   	</form>
</div>