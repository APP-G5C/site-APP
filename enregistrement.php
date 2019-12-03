<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" href="EnregistrementCSS.css" media="screen" type="text/css"/>
</head>
<body>
	<?php include("headerAdmin.php"); ?>
   	<div class="bg">

		<div id="container">

			<form action="enregistrement.php" method="POST">
				<h1>Enregistrement</h1>

				<label><b>Adresse Mail</b></label>
				<input type="text" placeholder="Entrez votre adresse mail" name="email" required>

				<label><b>Username</b></label>
				<input type="text" placeholder="Entrez le nom d'utilisateur" name="username" required>

				<label><b>Mot de Passe</b></label>
				<input type="password" placeholder="Entrez le mot de passe" name="password" required>

				<label><b>Confirmation Mot de Passe</b></label>
				<input type="password" placeholder="Confirmez le mot de passe" name="password" required>

				<input type="submit" id='submit' value="S'enregistrer">

			</form>
		</div>
		</div>
		
		
		
		
	




</body>
</html>