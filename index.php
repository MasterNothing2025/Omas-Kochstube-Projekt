<!DOCTYPE html>
<html lang="de">
	<p>
		<?php
		session_start();
		?>
	</p>
	<p>
		<?php
		if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
			if ($_SERVER["REQUEST_METHOD"] == "POST") {
				$users = $_POST['usrname'];
				$passwort = $_POST['passw'];
			?>
				<form class="logoutbtn" action="index.php" id="logoutbtn">
					<button type="submit" class="logoutbtn">Log Out</button>
				</form>
			<?php
			} 
		} 
		?>
	</p>
  	<head>
		<meta charset="utf-8">
    	<title>Oma's Kochstube - Home</title>
		<link rel="stylesheet" href="formate.css">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximal scale=2.0 user-scalable=yes">
  	</head>

	<body>
		<img src="./Oma's Kochstube Logo.png" alt = "Logo"><h1>Oma's Kochstube</h1> <blockquote>Jeder kann Kochen</blockquote>
			<nav>
				<table>
					<tr>
						<th class="cell-highlight"><a href="index.php">Home</a></th>
						<th><a href="./Top3.html">TOP 3 Rezepte</a></th>
						<th><a href="./Kreatives.html">Kreatives für Zwischendurch</a></th>
						<th><a href="./Kontakt_impressum.html">Kontakt & Impressum</a></th>						
					</tr>
				</table>
			</nav>
		<hr>
		<article class="header">
			<hgroup>
				<h2>Kochrezepte wie bei Oma</h2>
				<q>Ideenreiche Rezepte für jeden Zweck!</q>
			</hgroup>
		</article>
		
		<form class="container" action="login.php" id="loginbtn1">
			<button type="submit" class="login">Log In</button>
		</form>

		<div id="article">
			<main class="content">
				<p><h4>Ihr wollt euren Liebsten ein schönes Essen bescheren, habt aber keine Ahnung, was ihr machen wollt?</h4></p>
				<br>Dann seid ihr hier genau richtig!</br>
				<br>Auf unserer Seite und auf unserem Youtube-Kanal findet ihr zahlreiche Rezepte und coole Snackideen für zwischendurch.</br> 
				<p>Ran an die Rühermaschinen und los get's!</p>
			</main>
		</div>

		<div id="article">
			<h2 class="header">Über uns</h2>
			<main class="content">
				<p>Wir bemühen uns stets unsere Kunden und Kochinterressierten mit vielen ideenreichen Rezepten zu inspirieren selbst kreativ zu werden.</p>
				<p>In unserer Kindheit haben wir sehr oft mit unserer Oma gekocht und gebacken.</br>
				Und aus dieser traumhaften Zeit stammen unsere Geschmacksexplosionen, die wir nun mit euch teilen möchten.</p>
				<h4>Kennt ihr schon unseren Lieblingskuchen?</h4>
				<!-- Video ohne Youtube, d.h. ohne Werbung-->
				<div class='embed-container'>
					<iframe src='https://yewtu.be/embed/HOSQtT2wPCk?' frameborder='0' allowfullscreen>
					</iframe>
				   </div>
			<p>Bei Fragen oder ideen für verschiedene Dinge findet ihr unsere digitale Anschrift im <a href="Kontakt_impressum.html">Impressum.</a></p>
				</main>
		</div>
	<!-- probieren wir mal die formatierung mit dem Article tag -->
	<article class="header">
		<h2>Saisonales</h2>
	</article>
			<main class="content">
				
				<text>In dieser Saison gibt es nichts besseres als mein super Rezept aus meinen <a href=".Top3.html">Top 3 Rezepten</a></text>
				<section>
					<h3>ZUTATEN</h3>
					<ul>
						<li>500 g Rhabarber</li>
						<li>1000 g Erdbeeren</li>
						<li>5 EL Zitronensaft</li>
						<li>1½ Päckchen Vanillinzucker</li>
						<li>750 g Gelierzucker</li>
					</ul>
					<h3>Zubereitung:</h3>
					<p>Wasche die Erdbeeren und entferne die Blüte. Halbiere oder viertele sie,
						ganz nach Belieben und stelle sie beiseite. Wasche den Rhabarber gut ab und schneide ihn in kleine Stücke. Dünne Stangen musst du nicht schälen, dickere schon. Du kannst aber, wenn es dir lieber ist, alles schälen. Fülle nun den Rhabarber zusammen mit dem Zitronensaft und dem Vanillezucker mit 1 EL Wasser in einen Topf und lasse ihn aufkochen. Gib nun die Erdbeeren, den Vanillezucke rund den Gelierzucker hinzu und rühre gut um. Lasse alles aufkochen und wenn der Zuckergeschmolzen ist, lasse alles weitere 3 Minuten auf mittlerer Hitze kochen. Teste, ob die Konfitüre gut ist indem du einen keinen Klecks Marmelade aus dem Topf auf einen kalten Teller gibst und kurz wartest, bis er erkaltet. Wenn es die gewünschte Konsistenz hat, ist die Marmelade fertig zum Abfüllen. Wenn sie noch zu flüssig bleibt, lasse die Konfitüre noch eine weitere Minute kochen. Jetzt geht es an Abfüllen: Sterilisiere, während die Marmelade kocht, die gewünschten Einmachgläser und fülle sie dann mit der heißen Marmelade randvoll. Es soll möglichst wenig Luft zwischen Deckel und Glas bleiben. Schraube die Deckel auf und stelle die Gläser kopfüber auf ein Handtuch und lasse sie so abkühlen. Beim Abkühlen entsteht ein Vakuum, dass deine Erdbeer-Rhabarber-Marmelade lange haltbar macht.</p>
				</section>
			</main>
	</article>
	<footer>
		(c)2024 Carl & Alexander
	</footer>

</body>
</html>