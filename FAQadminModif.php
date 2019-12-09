<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>SmartBeing</title>
	<link rel="stylesheet" href="FAQadminModif.css">
</head>
<body>
  <?php include("headerAdmin.php");

	try
	{
		$bdd = new PDO('mysql:host=localhost;dbname=test;charset=utf8', 'root', '');
	}
	catch(Exception $e)
	{
    	    die('Erreur : '.$e->getMessage());
	} 

	?>
<div class="bg">

	<form action="#" method="POST">
		<h2>FAQ</h2>
		<div class="line"></div>


		<label for="question">Question à ajouter : </label> : <input type="text"  style="
  			vertical-align: top;
 			margin-top:10px;
  			margin-left: 17%;
  			height: 250px ;
  			width : 850px;
  			resize: vertical;
  			background-color: white;" name="question" id="question" />
		<label for="reponse">Réponse à ajouter : </label> : <input type="text"  style="
  			vertical-align: top;
 			margin-top:10px;
  			margin-left: 17%;
  			height: 250px ;
  			width : 850px;
  			resize: vertical;
  			background-color: white;" name="reponse" id="reponse" />		
 <?php
  $req = $bdd->prepare('INSERT INTO faq (question, réponse) VALUES(?,?)');
   ?>

	<button class="button" style="color:white; text-decoration:none" href="<?php 
	 $req->execute(array($_POST['question'], $_POST['reponse']));
	 ?>">Sauvegarder les changements</button>

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