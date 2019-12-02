<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="styleprofil.css">
	<title>profil</title>
</head>
<body>
<?php include("headerAdmin.php"); ?>



<div class="bg">
	<form action="#" method="POST">
		<h2>PROFIL</h2>
		<div class="line"></div>
		<br>
		<p><img class="photoprofil" src="profil.jpg" alt="photo de profil"></p>
		<div id="conteneurprofil">
			<div class="element"><p>Nom:</p></div>
			<div class="element"><p>Prénom:</p></div>
			<div class="element"><p>date de naissance:</p></div>
			<div class="element"><p>adresse email:</p></div>
		</div>

	</form>
</div>

<style>
	/* width */
	::-webkit-scrollbar {
		width: 10px;
	}

	/* Track */
	::-webkit-scrollbar-track {
		background: #f1f1f1;
		opacity: 0.5;
	}

	/* Handle */
	::-webkit-scrollbar-thumb {
		background: #888;
		opacity : .5;
	}

	/* Handle on hover */
	::-webkit-scrollbar-thumb:hover {
		background: #555;
		opacity: 0.5;

	}
</style>


</body>
</html>