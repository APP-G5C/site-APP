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
<form action="ajouterFAQ.php" method="post">

	
		<h2>FAQ</h2>
		<div class="line"></div>

		 
		<label for="question" style="font-size: 40px;">Question à ajouter : </label> : <input type="text"  style="
  			vertical-align: top;
  			margin-left: 17%;
  			height: 250px ;
  			font-size:35px;
  			width : 850px;
  			resize: vertical;
  			background-color: white;" name="question" id="question" />
		<label for="reponse"  style="font-size: 40px;">Réponse à ajouter : </label> : <input type="text"  style="
  			vertical-align: top;
  			margin-left: 17%;
  			height: 250px ;
  			width : 850px;
  			font-size:35px;
  			resize: vertical;
  			background-color: white;" name="reponse" id="reponse" />
  	<button class="button"  style="color:white; text-decoration:none" href="ajouterFAQ.php">
	Effectuer changement
	</button>
	
</form>	
  <?php $bdd->query(' ALTER TABLE `faq` AUTO_INCREMENT = 1');	?>

<form action="supprFAQ.php" method="post">
	<label for="idSuppr" style="font-size: 40px;">Numéro de la question à supprimer : </label> : <input type="text"  style="
  			vertical-align: top;
 			margin-top:10px;
 			height: 40px ;
  			width : 250px;
  			font-size:30px;
  			margin-left: 515px;
  			resize: vertical;
  			background-color: white;" name="idSuppr" id="idSuppr" />
  	<button class="button"  style="color:white; text-decoration:none" href="supprFAQ.php">
	Supprimer la question
	</button>
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