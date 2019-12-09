<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>SmartBeing</title>
	<link rel="stylesheet" href="FAQadmin.css">
</head>
<body>
  <?php include("headerAdmin.php"); ?>
<div class="bg">

	<form action="#" method="POST">
		<h2>FAQ</h2>
		<div class="line"></div>

		<h3>QUESTIONS COURANTES</h3>



		<?php
	try
	{
		$bdd = new PDO('mysql:host=localhost;dbname=test;charset=utf8', 'root', '');
	}
	catch(Exception $e)
	{
    	    die('Erreur : '.$e->getMessage());
	}

	$question = $bdd->query('SELECT question, réponse FROM faq');

	while ($donnees = $question->fetch())
	{
		?>

		<h4> <?php echo $donnees['question'] . '<br />'; ?> </h4>
		    <p>
		    	
		<?php echo $donnees['réponse'] . '<br />'; ?>
				
		    </p>


<?php
}

$question->closeCursor(); // Termine le traitement de la requête

?>
				<button class="button"><a style="color:white; text-decoration:none" href="FAQadminModif.php">Ajouter une question</a>

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