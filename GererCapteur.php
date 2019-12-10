<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>SmartBeing</title>
    <link rel="stylesheet" href="GererCapteur.css">
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
	$ListCapteur = $bdd->prepare('SELECT id_carte,type FROM capteurs WHERE id_carte=?');
	$ListCarte = $bdd->query('SELECT ID_carte FROM carte');

	?>
   	<div class="bg">

   

      <form action="#" method="POST">
      		<div class="clearfix">
      		<div class="box">
			<h3>Carte connecté :</h3>
			</div>
			  <div class="box">
			<h3>Catpeurs connecté :</h3> 
			</div>
			 </div>
			<?php
			 while ($donnees = $ListCarte->fetch())
		{
			?>	<h4><?php
		echo  $donnees['ID_carte'] . ' : ';
		$ID=$donnees['ID_carte']; ?>

		</h4>

		<?php
		$ListCapteur->execute(array($ID[0]));
		while($data = $ListCapteur->fetch()){

				
			?>
			<h5>
			<?php
		 echo  ' - ' . $data['type'] . '<br/>'; ?>
		</h5>
		<?php

		}
	}
	 ?>	
          
 <button class="button"><a style="color:white; text-decoration:none" href="FAQ.html">Modifer les cartes</a></button>
<?php



$ListCapteur->closeCursor(); // Termine le traitement de la requête
$ListCarte->closeCursor();

?>
    </form>
</div>
</body>
</html>