<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" href="ConnexionCSS.css" media="screen" type="text/css"/>
</head>
<body background="Background.jpg">
<?php
	if (!isset($_POST['username']) OR !isset($_POST['password'])) { ?>
		<div id="container">

			<form action="connexion.php" method="POST">
				<h1>Connexion</h1>

				<label><b>Nom d'utilisateur ou adresse mail</b></label>
				<input type="text" placeholder="Entrer le nom d'utilisateur" name="username" required>

				<label><b>Mot de passe</b></label>
				<input type="password" placeholder="Entrer le mot de passe" name="password" required>

				<input type="submit" id='submit' value='Se connecter'>

			</form>
		</div>
		<?php
	} elseif ($_POST['username'] != 'SmartBeing' OR $_POST['password'] != 'isep') {
		?>
		<div id="container">

			<form action="connexion.php" method="POST">
				<h1>Connexion</h1>

				<label><b>Nom d'utilisateur ou adresse mail</b></label>
				<input type="text" placeholder="Entrer le nom d'utilisateur" name="username" required>

				<label><b>Mot de passe</b></label>
				<input type="password" placeholder="Entrer le mot de passe" name="password" required>

				<input type="submit" id='submit' value='Se connecter'>

			</form>
		</div>
		
		<p>Le mot de passe ou l'identifiant est incorrect</p>
		
		<?php
	} else {
		header('Location: Menu_utilisateur.php');
		
	}

?>




</body>
</html>
